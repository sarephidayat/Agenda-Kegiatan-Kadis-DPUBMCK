<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SekretarisDinasController extends Controller
{
    // Method untuk mendapatkan data dropdown
    protected function getDropdownData()
    {
        return [
            'jabatan' => DB::table('master_jabatan')->get(),
            'bidang' => DB::table('master_bidang')->get(),
            'instruksi' => DB::table('master_instruksi')->get()
        ];
    }
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
        return view('sekretaris/sekretarisDinas', compact('data', 'jabatan', 'bidang', 'instruksi'));

    }

    public function create()
    {
        return view('sekretaris/tambahData', $this->getDropdownData());
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
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
            'softfile_surat' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        try {
            // Inisialisasi variabel fileName
            $fileName = null;

            // Handle file upload jika ada
            if ($request->hasFile('softfile_surat')) {
                $file = $request->file('softfile_surat');

                // Sanitize nama file dan pastikan unik
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileName = 'surat' . '_' . $originalName . '.' . $extension;

                // Simpan file ke folder yang sudah ada
                $file->move(public_path('storage/dokumen'), $fileName);
            }

            // Simpan ke database
            DB::table('agenda_kadis')->insert([
                'no_surat' => $validatedData['no_surat'],
                'tanggal_surat' => $validatedData['tanggal_surat'],
                'pengundang' => $validatedData['pengundang'],
                'tempat' => $validatedData['tempat'],
                'hari_tanggal' => $validatedData['tanggal_acara'],
                'acara' => $validatedData['acara'],
                'id_jabatan' => $validatedData['id_jabatan'],
                'id_bidang' => $validatedData['id_bidang'],
                'nama_pendamping' => $validatedData['nama_pendamping'],
                'id_instruksi' => $validatedData['id_instruksi'],
                'waktu' => $validatedData['waktu'],
                'catatan' => $validatedData['catatan'],
                'softfile_surat' => $fileName,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('sekretaris-dinas.index')->with('success', 'Data berhasil disimpan!');

        } catch (\Exception $e) {
            // Hapus file yang sudah terupload jika terjadi error
            if (isset($fileName) && file_exists(public_path('storage/dokumen/' . $fileName))) {
                unlink(public_path('storage/dokumen/' . $fileName));
            }

            return back()
                ->withInput()
                ->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
        }
    }



}
