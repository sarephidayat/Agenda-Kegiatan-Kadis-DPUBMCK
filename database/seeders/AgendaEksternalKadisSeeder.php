<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgendaEksternalKadisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agenda_kadis_eksternal')->insert([
            [
                'tanggal_surat' => '2024-01-01',
                'no_surat' => '500.0/1',
                'pengundang' => 'Setda Prov. Jateng',
                'acara' => 'Rapat Pengendalian Inflasi Daerah secara Daring yang Dipimpin Oleh Mentri Dalam Negeri RI',
                'tanggal' => '2024-01-03', // Diubah dari "Rabu / 03 Januari 2024"
                'waktu' => '07.30',
                'tempat' => 'Ruang Rapat Gedung A Lantai II',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 1,
                'id_jabatan' => 1,
                'id_instruksi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf',
            ],
            [
                'tanggal_surat' => '2024-01-04',
                'no_surat' => '400.9.14/2',
                'pengundang' => 'Bappeda Prov. Jateng',
                'acara' => 'Desk Evaluasi Rencana Aksi Tahunan ( RAT ) Penanggulangan Kemiskinan Prov. Jateng',
                'tanggal' => '2024-01-09', // Diubah dari "8-9 Januari 2024" → ambil tanggal terakhir
                'waktu' => '09.00',
                'tempat' => 'Ruang Rapat Lantai VI A Bappeda Prov Jateng',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 1,
                'id_jabatan' => 2,
                'id_instruksi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf',
            ],
            [
                'tanggal_surat' => '2023-12-03',
                'no_surat' => '-', // karena tidak ada
                'pengundang' => 'Direktorat PDLUK',
                'acara' => 'Rakor Pemeriksaan Formulir UKL-UPL Kegiatan Rencana Penyebaran Eksplorasi Sumur DRJ-001 oleh PT. Pertamina',
                'tanggal' => '2024-01-05', // Diubah dari "Jumat / 05 Januari 2024"
                'waktu' => '08.30',
                'tempat' => 'Zoom Meeting',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 1,
                'id_jabatan' => 1,
                'id_instruksi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf',
            ],
            [
                'tanggal_surat' => '2024-01-05',
                'no_surat' => '005/4',
                'pengundang' => 'RSUD dr. Rehatta Jepara',
                'acara' => 'Pendampingan Persiapan Pengadaan Konstruksi Gedung Terpadu',
                'tanggal' => '2024-01-09', // dari "8-9 Januari 2024"
                'waktu' => '10.00',
                'tempat' => 'Litbang Lantai I RSUD dr. Rehatta Jepara',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 1,
                'id_jabatan' => 2,
                'id_instruksi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf',
            ],
        ]);
    }
}
