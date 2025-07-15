<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{

    public function index(Request $request)
    {
        $user = $request->session()->get('username');
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login dulu.');
        } else {
            // Ambil id_bidang dari query string (?id_bidang=...)
            $idBidang = session('id_bidang');

            // Agenda Eksternal (difilter berdasarkan id_bidang)
            $dataAgendaEksternal = DB::table('agenda_kadis_eksternal')
                ->join('master_jabatan', 'agenda_kadis_eksternal.id_jabatan', '=', 'master_jabatan.id_jabatan')
                ->join('master_bidang', 'agenda_kadis_eksternal.id_bidang', '=', 'master_bidang.id_bidang')
                ->join('master_instruksi', 'agenda_kadis_eksternal.id_instruksi', '=', 'master_instruksi.id_instruksi')
                ->select(
                    'agenda_kadis_eksternal.*',
                    'master_jabatan.nama_jabatan',
                    'master_bidang.nama_bidang',
                    'master_instruksi.isi_instruksi'
                )
                ->when($idBidang, function ($query) use ($idBidang) {
                    return $query->where('agenda_kadis_eksternal.id_bidang', $idBidang);
                })
                ->paginate(10);

            // Agenda Internal (tanpa penyaringan)
            $dataAgendaInternal = DB::table('agenda_kadis_internal')
                ->join('master_bidang', 'agenda_kadis_internal.id_bidang', '=', 'master_bidang.id_bidang')
                ->select(
                    'agenda_kadis_internal.*',
                    'master_bidang.nama_bidang'
                )
                ->when($idBidang, function ($query) use ($idBidang) {
                    return $query->where('agenda_kadis_internal.id_bidang', $idBidang);
                })
                ->paginate(10);

            // ----------------- Count Data -----------------
            $TotalAgendaEksternal = DB::table('agenda_kadis_eksternal')
                ->where('id_bidang', $idBidang)
                ->count();

            $TotalAgendaInternal = DB::table('agenda_kadis_internal')
                ->where('id_bidang', $idBidang)
                ->count();

            $TotalAgenda = $TotalAgendaEksternal + $TotalAgendaInternal;

            // Count agenda eksternal hari ini (dengan id_bidang)
            $TotalAgendaEksternalHariIni = DB::table('agenda_kadis_eksternal')
                ->where('id_bidang', $idBidang)
                ->whereDate('tanggal', now())
                ->count();

            // Count agenda internal hari ini (dengan id_bidang)
            $TotalAgendaInternalHariIni = DB::table('agenda_kadis_internal')
                ->where('id_bidang', $idBidang)
                ->whereDate('tanggal', now())
                ->count();

            $TotalAgendaHariIni = $TotalAgendaEksternalHariIni + $TotalAgendaInternalHariIni;


            // Data Referensi
            $jabatan = DB::table('master_jabatan')->get();
            $bidang = DB::table('master_bidang')->get();
            $instruksi = DB::table('master_instruksi')->get();

            return view('Staff/dashboard', compact(
                'dataAgendaEksternal',
                'dataAgendaInternal',
                'TotalAgendaEksternal',
                'TotalAgendaInternal',
                'TotalAgenda',
                'TotalAgendaHariIni',
                'jabatan',
                'bidang',
                'instruksi'
            ));
        }
    }

    public function agendaEksternal(Request $request)
    {
        // Ambil id_bidang dari query string (?id_bidang=...)
        $idBidang = $request->query('id_bidang');

        // Agenda Eksternal (difilter berdasarkan id_bidang)
        $dataAgendaEksternal = DB::table('agenda_kadis_eksternal')
            ->join('master_jabatan', 'agenda_kadis_eksternal.id_jabatan', '=', 'master_jabatan.id_jabatan')
            ->join('master_bidang', 'agenda_kadis_eksternal.id_bidang', '=', 'master_bidang.id_bidang')
            ->join('master_instruksi', 'agenda_kadis_eksternal.id_instruksi', '=', 'master_instruksi.id_instruksi')
            ->select(
                'agenda_kadis_eksternal.*',
                'master_jabatan.nama_jabatan',
                'master_bidang.nama_bidang',
                'master_instruksi.isi_instruksi'
            )
            ->when($idBidang, function ($query) use ($idBidang) {
                return $query->where('agenda_kadis_eksternal.id_bidang', $idBidang);
            })
            ->paginate(10);

        // Data Referensi
        $jabatan = DB::table('master_jabatan')->get();
        $bidang = DB::table('master_bidang')->get();
        $instruksi = DB::table('master_instruksi')->get();

        return view('Staff/agendaEksternal', compact('dataAgendaEksternal', 'jabatan', 'bidang', 'instruksi'));

    }

    public function agendaInternal(Request $request)
    {
        // Ambil id_bidang dari query string (?id_bidang=...)
        $idBidang = $request->query('id_bidang');

        $dataAgendaInternal = DB::table('agenda_kadis_internal')
            ->join('master_bidang', 'agenda_kadis_internal.id_bidang', '=', 'master_bidang.id_bidang')
            ->select(
                'agenda_kadis_internal.*',
                'master_bidang.nama_bidang',
            )
            ->when($idBidang, function ($query) use ($idBidang) {
                return $query->where('agenda_kadis_internal.id_bidang', $idBidang);
            })
            ->paginate(10);

        $bidang = DB::table('master_bidang')->get();

        return view('Staff/agendaInternal', compact('dataAgendaInternal', 'bidang'));

    }



}
