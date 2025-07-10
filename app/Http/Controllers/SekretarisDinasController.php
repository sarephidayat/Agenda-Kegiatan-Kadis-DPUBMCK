<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SekretarisDinasController extends Controller
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

    public function index()
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
            )->paginate(10);

        $jabatan = DB::table('master_jabatan')->get();
        $bidang = DB::table('master_bidang')->get();
        $instruksi = DB::table('master_instruksi')->get();


        $dataAgendaInternal = DB::table('agenda_kadis_internal')
            ->join('master_bidang', 'agenda_kadis_internal.id_bidang', '=', 'master_bidang.id_bidang') // Join dengan master_cakupan
            ->select(
                'agenda_kadis_internal.*',
                'master_bidang.nama_bidang'
            )
            ->paginate(10);

        return view('Sekretaris_Dinas/dashboard', compact('dataAgendaEksternal', 'dataAgendaInternal', 'jabatan', 'bidang', 'instruksi', ));
    }

    public function tambahAgendaInternal()
    {
        return view('Sekretaris_Dinas/tambahAgendaInternal', $this->getDropdownDataInternal());
    }

    public function tambahAgendaEksternal()
    {
        return view('Sekretaris_Dinas/tambahAgendaEksternal', $this->getDropdownDataEksternal());
    }

    public function storeEksternal(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'no_surat' => 'required',
            'tanggal_surat' => 'required|date',
            'pengundang' => 'required',
            'tempat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
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
            DB::table('agenda_kadis_eksternal')->insert([
                'no_surat' => $validatedData['no_surat'],
                'tanggal_surat' => $validatedData['tanggal_surat'],
                'pengundang' => $validatedData['pengundang'],
                'tempat' => $validatedData['tempat'],
                'provinsi' => $validatedData['provinsi'],
                'kabupaten' => $validatedData['kabupaten'],
                'tanggal' => $validatedData['tanggal_acara'],
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
    public function storeInternal(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'no_surat' => 'required',
            'tanggal_surat' => 'required|date',
            'id_bidang' => 'required|integer',
            'acara' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required|date',
            'tempat' => 'required',
            'kepada' => 'required',
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
            DB::table('agenda_kadis_internal')->insert([
                'no_surat' => $validatedData['no_surat'],
                'tanggal_surat' => $validatedData['tanggal_surat'],
                'id_bidang' => $validatedData['id_bidang'],
                'acara' => $validatedData['acara'],
                'waktu' => $validatedData['waktu'],
                'tanggal' => $validatedData['tanggal'],
                'tempat' => $validatedData['tempat'],
                'kepada' => $validatedData['kepada'],
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


        return view('Sekretaris_Dinas/editEksternal', compact('dataAgendaEksternal', 'jabatan', 'bidang', 'instruksi'));

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

        return view('Sekretaris_Dinas/editInternal', compact('dataAgendaInternal', 'bidang'));
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

        return redirect()->route('sekretaris-dinas.index')->with('success', 'Data berhasil diperbarui!');


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


        return redirect()->route('sekretaris-dinas.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function agendaEksternal()
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
            ->paginate(10);

        $jabatan = DB::table('master_jabatan')->get();
        $bidang = DB::table('master_bidang')->get();
        $instruksi = DB::table('master_instruksi')->get();

        return view('Sekretaris_Dinas/agendaEksternal', compact('dataAgendaEksternal', 'jabatan', 'bidang', 'instruksi'));

    }

    public function agendaInternal()
    {
        $dataAgendaInternal = DB::table('agenda_kadis_internal')
            ->join('master_bidang', 'agenda_kadis_internal.id_bidang', '=', 'master_bidang.id_bidang')
            ->select(
                'agenda_kadis_internal.*',
                'master_bidang.nama_bidang',
            )
            ->paginate(10);

        $bidang = DB::table('master_bidang')->get();

        return view('Sekretaris_Dinas/agendaInternal', compact('dataAgendaInternal', 'bidang'));

    }



}
