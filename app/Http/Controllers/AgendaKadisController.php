<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaKadisController extends Controller
{
    public function index()
    {
        $data = DB::table('agenda_kadis')
            ->join('master_jabatan', 'agenda_kadis.id_jabatan', '=', 'master_jabatan.id_jabatan')
            ->join('master_bidang', 'agenda_kadis.id_bidang', '=', 'master_bidang.id_bidang')
            ->join('master_instruksi', 'agenda_kadis.id_instruksi', '=', 'master_instruksi.id_instruksi')
            ->select(
                'agenda_kadis.*',
                'master_jabatan.nama_jabatan',
                'master_bidang.nama_bidang',
                'master_instruksi.isi_instruksi'
            )
            ->get();

        $jabatan = DB::table('master_jabatan')->get();
        $bidang = DB::table('master_bidang')->get();
        $instruksi = DB::table('master_instruksi')->get();
        return view('CobaDatabase', compact('data', 'jabatan', 'bidang', 'instruksi'));
    }

    public function store(Request $request)
    {
        // Validasi input (opsional tapi disarankan)
        $request->validate([
            'no_surat' => 'required',
            'tanggal_surat' => 'required|date',
            'pengundang' => 'required',
            'tempat' => 'required',
            'tanggal_acara' => 'required|date',
            'acara' => 'required',
            'id_jabatan' => 'required|integer',
            'id_bidang' => 'required|integer',
            'nama_pendamping' => 'required',
            'id_instruksi' => 'required|integer',
            'waktu' => 'required',
            'catatan' => 'nullable',
        ]);

        // Simpan ke database
        DB::table('agenda_kadis')->insert([
            'no_surat' => $request->no_surat,
            'tanggal_surat' => $request->tanggal_surat,
            'pengundang' => $request->pengundang,
            'tempat' => $request->tempat,
            'hari_tanggal' => $request->tanggal_acara,
            'acara' => $request->acara,
            'id_jabatan' => $request->id_jabatan,
            'id_bidang' => $request->id_bidang,
            'nama_pendamping' => $request->nama_pendamping,
            'id_instruksi' => $request->id_instruksi,
            'waktu' => $request->waktu,
            'catatan' => $request->catatan,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/agenda')->with('success', 'Agenda berhasil disimpan!');
    }



}
