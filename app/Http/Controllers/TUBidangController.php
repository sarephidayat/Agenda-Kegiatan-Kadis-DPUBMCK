<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TUBidangController extends Controller
{
    // Method untuk mendapatkan data dropdown
    protected function getDropdownDataInternal()
    {
        return [
            'bidang' => DB::table('master_bidang')->get(),
        ];
    }

    protected function getDropdownDataEksternal()
    {
        return [
            'jabatan' => DB::table('master_jabatan')->get(),
            'bidang' => DB::table('master_bidang')->get(),
            'instruksi' => DB::table('master_instruksi')->get(),
        ];
    }

    public function index(Request $request)
    {
        $user = $request->session()->get('username');
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login dulu.');
        } else {
            // Ambil id_bidang dari query string (?id_bidang=...)
            $idBidang = $request->query('id_bidang');

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

            $jabatan = DB::table('master_jabatan')->get();
            $bidang = DB::table('master_bidang')->get();
            $instruksi = DB::table('master_instruksi')->get();


            $dataAgendaInternal = DB::table('agenda_kadis_internal')
                ->join('master_bidang', 'agenda_kadis_internal.id_bidang', '=', 'master_bidang.id_bidang') // Join dengan master_cakupan
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

            return view('TU-Bidang/dashboard', compact(
                'dataAgendaEksternal',
                'dataAgendaInternal',
                'TotalAgendaEksternal',
                'TotalAgendaInternal',
                'TotalAgenda',
                'TotalAgendaHariIni',
                'jabatan',
                'bidang',
                'instruksi',
            ));
        }
    }

    public function editEksternal($id)
    {
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
            ->where('agenda_kadis_eksternal.id', $id)
            ->first(); // Ambil hanya satu baris


        $jabatan = DB::table('master_jabatan')->get();
        $bidang = DB::table('master_bidang')->get();
        $instruksi = DB::table('master_instruksi')->get();        // query untuk mendapatkan data berdasarkan ID


        return view('TU-Bidang/editEksternal', compact('dataAgendaEksternal', 'jabatan', 'bidang', 'instruksi'));

    }

    public function editInternal($id)
    {
        $dataAgendaInternal = DB::table('agenda_kadis_internal')
            ->join('master_bidang', 'agenda_kadis_internal.id_bidang', '=', 'master_bidang.id_bidang') // Join dengan master_cakupan
            ->select(
                'agenda_kadis_internal.*',
                'master_bidang.nama_bidang',
            )
            ->where('agenda_kadis_internal.id', $id)
            ->first(); // Ambil hanya satu baris

        $bidang = DB::table('master_bidang')->get();

        return view('TU-Bidang/editInternal', compact('dataAgendaInternal', 'bidang'));
    }

    public function updateEksternal(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'no_surat' => 'required|string',
            'tanggal_surat' => 'required|date',
            'pengundang' => 'required|string',
            'tempat' => 'required|string',
            'tanggal' => 'required|date',
            'acara' => 'required|string',
            'id_jabatan' => 'required|integer',
            'id_bidang' => 'required|integer',
            'nama_pendamping' => 'required|string',
            'id_instruksi' => 'required|integer',
            'waktu' => 'required|string',
            'catatan' => 'nullable|string',
            'softfile_surat' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // dd($request->all());
        // dd(collect($validatedData)->toArray());

        if ($request->hasFile('softfile_surat')) {
            $file = $request->file('softfile_surat');

            // Buat nama file unik dan aman
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileName = 'surat_' . time() . '_' . preg_replace('/[^A-Za-z0-9_\-]/', '_', $originalName) . '.' . $extension;

            // Pindahkan ke folder dokumen
            $file->move(public_path('storage/dokumen'), $fileName);

            // Ambil nama file lama
            $oldFile = DB::table('agenda_kadis_eksternal')->where('id', $id)->value('softfile_surat');

            // Hapus file lama jika ada
            if ($oldFile && file_exists(public_path('storage/dokumen/' . $oldFile))) {
                unlink(public_path('storage/dokumen/' . $oldFile));
            }
        } else {
            // Tidak ada file baru, pakai file lama
            $fileName = DB::table('agenda_kadis_eksternal')->where('id', $id)->value('softfile_surat');
        }

        // Update data di database
        DB::table('agenda_kadis_eksternal')
            ->where('id', $id)
            ->update([
                'no_surat' => $validatedData['no_surat'],
                'tanggal_surat' => $validatedData['tanggal_surat'],
                'pengundang' => $validatedData['pengundang'],
                'tempat' => $validatedData['tempat'],
                'tanggal' => $validatedData['tanggal'], // Field di DB = tanggal
                'acara' => $validatedData['acara'],
                'id_jabatan' => $validatedData['id_jabatan'],
                'id_bidang' => $validatedData['id_bidang'],
                'nama_pendamping' => $validatedData['nama_pendamping'],
                'id_instruksi' => $validatedData['id_instruksi'],
                'waktu' => $validatedData['waktu'],
                'catatan' => $validatedData['catatan'],
                'softfile_surat' => $fileName,
                'updated_at' => now()
            ]);

        return redirect()->route('tu-bidang.index')->with('success', 'Data berhasil diperbarui!');


    }


    public function updateInternal(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no_surat' => 'required|string',
            'tanggal_surat' => 'required|date',
            'id_bidang' => 'required|integer',
            'acara' => 'required|string',
            'waktu' => 'required|string',
            'tanggal' => 'required|date', // tanggal acara
            'tempat' => 'required|string',
            'kepada' => 'required|string',
            'catatan' => 'nullable|string',
            'softfile_surat' => 'nullable|file|mimes:pdf|max:2048', // Max 2MB
        ]);

        // Jika ada file baru diupload
        if ($request->hasFile('softfile_surat')) {
            $file = $request->file('softfile_surat');

            // Buat nama file unik dan aman
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileName = 'surat_' . time() . '_' . preg_replace('/[^A-Za-z0-9_\-]/', '_', $originalName) . '.' . $extension;

            // Pindahkan ke folder dokumen
            $file->move(public_path('storage/dokumen'), $fileName);

            // Ambil nama file lama
            $oldFile = DB::table('agenda_kadis_internal')->where('id', $id)->value('softfile_surat');

            // Hapus file lama jika ada
            if ($oldFile && file_exists(public_path('storage/dokumen/' . $oldFile))) {
                unlink(public_path('storage/dokumen/' . $oldFile));
            }
        } else {
            // Tidak ada file baru, pakai file lama
            $fileName = DB::table('agenda_kadis_internal')->where('id', $id)->value('softfile_surat');
        }

        // Update data di database
        DB::table('agenda_kadis_internal')
            ->where('id', $id)
            ->update([
                'no_surat' => $validatedData['no_surat'],
                'tanggal_surat' => $validatedData['tanggal_surat'],
                'id_bidang' => $validatedData['id_bidang'],
                'acara' => $validatedData['acara'],
                'waktu' => $validatedData['waktu'],
                'tanggal' => $validatedData['tanggal'], // Ini adalah tanggal acara
                'tempat' => $validatedData['tempat'],
                'kepada' => $validatedData['kepada'],
                'catatan' => $validatedData['catatan'],
                'softfile_surat' => $fileName,
                'updated_at' => now(),
            ]);


        return redirect()->route('tu-bidang.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function agendaEksternal(Request $request)
    {
        // Ambil id_bidang dari query string (?id_bidang=...)
        $idBidang = $request->query('id_bidang');

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

        $jabatan = DB::table('master_jabatan')->get();
        $bidang = DB::table('master_bidang')->get();
        $instruksi = DB::table('master_instruksi')->get();

        return view('TU-Bidang/agendaEksternal', compact('dataAgendaEksternal', 'jabatan', 'bidang', 'instruksi'));

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
            ->when(request()->query('id_bidang'), function ($query) {
                return $query->where('agenda_kadis_internal.id_bidang', request()->query('id_bidang'));
            })
            ->paginate(10);

        $bidang = DB::table('master_bidang')->get();

        return view('TU-Bidang/agendaInternal', compact('dataAgendaInternal', 'bidang'));

    }



}
