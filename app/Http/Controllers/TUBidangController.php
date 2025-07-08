<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TUBidangController extends Controller
{
    // Method untuk mendapatkan data dropdown
    protected function getDropdownData()
    {
        return [
            'jabatan' => DB::table('master_jabatan')->get(),
            'bidang' => DB::table('master_bidang')->get(),
            'instruksi' => DB::table('master_instruksi')->get(),
            'cakupan' => DB::table('master_cakupan')->get(), // Ambil data cakupan
        ];
    }
    public function index()
    {
        $data = DB::table('agenda_kadis')
            ->join('master_jabatan', 'agenda_kadis.id_jabatan', '=', 'master_jabatan.id_jabatan')
            ->join('master_bidang', 'agenda_kadis.id_bidang', '=', 'master_bidang.id_bidang')
            ->join('master_instruksi', 'agenda_kadis.id_instruksi', '=', 'master_instruksi.id_instruksi')
            ->join('master_cakupan', 'agenda_kadis.id_cakupan', '=', 'master_cakupan.id_cakupan') // Join dengan master_cakupan
            ->select(
                'agenda_kadis.*',
                'master_jabatan.nama_jabatan',
                'master_bidang.nama_bidang',
                'master_instruksi.isi_instruksi',
                'master_cakupan.cakupan'
            )
            ->get();

        $jabatan = DB::table('master_jabatan')->get();
        $bidang = DB::table('master_bidang')->get();
        $instruksi = DB::table('master_instruksi')->get();
        $cakupan = DB::table('master_cakupan')->get();

        return view('TU-Bidang/dashboard', compact('data', 'jabatan', 'bidang', 'instruksi', 'cakupan'));

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
            'id_cakupan' => 'required|integer',
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
                'id_cakupan' => $validatedData['id_cakupan'],
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

    public function edit($id)
    {
        $data = DB::table('agenda_kadis')
            ->join('master_jabatan', 'agenda_kadis.id_jabatan', '=', 'master_jabatan.id_jabatan')
            ->join('master_bidang', 'agenda_kadis.id_bidang', '=', 'master_bidang.id_bidang')
            ->join('master_instruksi', 'agenda_kadis.id_instruksi', '=', 'master_instruksi.id_instruksi')
            ->join('master_cakupan', 'agenda_kadis.id_cakupan', '=', 'master_cakupan.id_cakupan') // Join dengan master_cakupan
            ->select(
                'agenda_kadis.*',
                'master_jabatan.nama_jabatan',
                'master_bidang.nama_bidang',
                'master_instruksi.isi_instruksi',
                'master_cakupan.cakupan'
            )
            ->where('agenda_kadis.id', $id)
            ->first(); // Ambil hanya satu baris


        $jabatan = DB::table('master_jabatan')->get();
        $bidang = DB::table('master_bidang')->get();
        $instruksi = DB::table('master_instruksi')->get();
        $cakupan = DB::table('master_cakupan')->get(); // Ambil data cakupan

        // query untuk mendapatkan data berdasarkan ID


        return view('TU-Bidang/edit', compact('data', 'jabatan', 'bidang', 'instruksi', 'cakupan'));

    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no_surat' => 'required|string',
            'tanggal_surat' => 'required|date',
            'pengundang' => 'required|string',
            'tempat' => 'required|string',
            'tanggal_acara' => 'required|date',
            'acara' => 'required|string',
            'id_cakupan' => 'required|integer', // Validasi untuk id_cakupan
            'id_jabatan' => 'required|integer',
            'id_bidang' => 'required|integer',
            'nama_pendamping' => 'required|string',
            'id_instruksi' => 'required|integer',
            'waktu' => 'required|string',
            'catatan' => 'nullable|string',
            'softfile_surat' => 'nullable|file|mimes:pdf|max:2048', // Max 2MB
        ]);

        // Jika ada file baru diupload
        if ($request->hasFile('softfile_surat')) {
            $file = $request->file('softfile_surat');
            $fileName = 'surat' . '_' . $file->getClientOriginalName();
            $file->move('storage/dokumen/', $fileName);

            // Hapus file lama jika ada
            $oldFile = DB::table('agenda_kadis')->where('id', $id)->value('softfile_surat');
            if ($oldFile && Storage::exists('storage/dokumen/' . $oldFile)) {
                Storage::delete('storage/dokumen/' . $oldFile);
            }
        } else {
            // Jika tidak ada file baru, gunakan file lama
            $fileName = DB::table('agenda_kadis')->where('id', $id)->value('softfile_surat');
        }

        // Update data di database
        DB::table('agenda_kadis')
            ->where('id', $id)
            ->update([
                'no_surat' => $validatedData['no_surat'],
                'tanggal_surat' => $validatedData['tanggal_surat'],
                'pengundang' => $validatedData['pengundang'],
                'tempat' => $validatedData['tempat'],
                'hari_tanggal' => $validatedData['tanggal_acara'],
                'acara' => $validatedData['acara'],
                'id_cakupan' => $validatedData['id_cakupan'], // Update id_cakupan
                'id_jabatan' => $validatedData['id_jabatan'],
                'id_bidang' => $validatedData['id_bidang'],
                'nama_pendamping' => $validatedData['nama_pendamping'],
                'id_instruksi' => $validatedData['id_instruksi'],
                'waktu' => $validatedData['waktu'],
                'catatan' => $validatedData['catatan'],
                'softfile_surat' => $fileName,
                'updated_at' => now(),
            ]);

        return redirect()->route('tu-bidang.index')->with('success', 'Data berhasil diperbarui!');
    }



}
