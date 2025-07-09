<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgendaKadisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agenda_kadis')->insert([
            [
                'tanggal_surat' => '2024-01-01',
                'no_surat' => '500.0/1',
                'pengundang' => 'Setda Prov. Jateng',
                'acara' => 'Rapat Pengendalian Inflasi Daerah secara Daring yang Dipimpin Oleh Mentri Dalam Negeri RI',
                'id_cakupan' => 1,
                'hari_tanggal' => 'Rabu / 03 Januari 2024',
                'waktu' => '07.30',
                'tempat' => 'Ruang Rapat Gedung A Lantai II',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 1,
                'id_jabatan' => 1, // Ganti sesuai ID "Kepala Bidang Rancang Bangun dan Pengawasan"
                'id_instruksi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf', // Optional field for storing file path
            ],
            [
                'tanggal_surat' => '2024-01-04',
                'no_surat' => '400.9.14/2',
                'pengundang' => 'Bappeda Prov. Jateng',
                'acara' => 'Desk Evaluasi Rencana Aksi Tahunan ( RAT ) Penanggulangan Kemiskinan Prov. Jateng',
                'id_cakupan' => 2,
                'hari_tanggal' => 'Senin-Selasa / 8-9 Januari 2024',
                'waktu' => '09.00',
                'tempat' => 'Ruang Rapat Lantai VI A Bappeda Prov Jateng',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 1,
                'id_jabatan' => 2, // Ganti sesuai ID "Kepala Bidang SPPBG"
                'id_instruksi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf', // Optional field for storing file path
            ],
            [
                'tanggal_surat' => '2023-12-03',
                'no_surat' => '-',
                'pengundang' => 'Direktorat PDLUK',
                'acara' => 'Rakor Pemeriksaan Formulir UKL-UPL Kegiatan Rencana Penyebaran Eksplorasi Sumur  DRJ-001 oleh PT. Pertamina',
                'id_cakupan' => 1,
                'hari_tanggal' => 'Jumat / 05 Januari 2024',
                'waktu' => '08.30',
                'tempat' => 'Zoom Meeting',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 1,
                'id_jabatan' => 1, // "Kepala Bidang Rancang Bangun dan Pengawasan"
                'id_instruksi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf' // Optional field for storing file path
            ],
            [
                'tanggal_surat' => '2024-01-05',
                'no_surat' => '005/4',
                'pengundang' => 'RSUD dr. Rehatta Jepara',
                'acara' => 'Pendampingan Persiapan Pengadaan Konstruksi Gedung Terpadu',
                'id_cakupan' => 1,
                'hari_tanggal' => 'Senin-Selasa / 8-9 Januari 2024',
                'waktu' => '10.00',
                'tempat' => 'Litbang Lantai I RSUD dr. Rehatta Jepara',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 1,
                'id_jabatan' => 2, // "Kepala Bidang SPPBG"
                'id_instruksi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf'
            ],
            [
                'tanggal_surat' => '2024-01-02',
                'no_surat' => '800.1.4.4/ 650',
                'pengundang' => 'SKPD TP',
                'acara' => 'Undangan Penyusunan Perjanjian Kinerja 2024',
                'id_cakupan' => 2,
                'hari_tanggal' => 'Selasa / 3 Januari 2024',
                'waktu' => '09.00',
                'tempat' => 'Ruang Rapat SKPD-TP',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 2,
                'id_jabatan' => 19, // "SKPD TP"
                'id_instruksi' => 1 ,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf'
            ],
            [
                'tanggal_surat' => '2024-01-22',
                'no_surat' => '005/320',
                'pengundang' => 'SPPBG',
                'acara' => 'Undangan Rapat Evaluasi',
                'id_cakupan' => 2,
                'hari_tanggal' => 'Rabu / 24 Januari 2024',
                'waktu' => '10.00',
                'tempat' => 'Ruang Rapat SPPBG',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 5,
                'id_jabatan' => 3, // "SPPBG"
                'id_instruksi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf'
            ],
            [
                'tanggal_surat' => '2024-01-24',
                'no_surat' => '005/343',
                'pengundang' => 'Ranbawas',
                'acara' => 'Undangan Sosialisasi Pengadaan Tanah ',
                'id_cakupan' => 2,
                'hari_tanggal' => 'Kamis / 25 Januari 2024',
                'waktu' => '13.00',
                'tempat' => 'Balai Desa Karangbondo Kec Adipolo Kab Cilacap ',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 2,
                'id_jabatan' => 3, // "Ranbawas"
                'id_instruksi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf'
            ],
            [
                'tanggal_surat' => '2024-01-24',
                'no_surat' => '005/344',
                'pengundang' => 'Ranbawas',
                'acara' => 'Undangan Sosialisasi Pengadaan Tanah ',
                'id_cakupan' => 2,
                'hari_tanggal' => 'Kamis / 25 Januari 2024',
                'waktu' => '13.00',
                'tempat' => 'Balai Desa Karangbondo Kec Adipolo Kab Cilacap ',
                'nama_pendamping' => '-',
                'catatan' => '-',
                'id_bidang' => 2,
                'id_jabatan' => 3, // "Ranbawas"
                'id_instruksi' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'softfile_surat' => '132-335-1-PB.pdf'
            ],

        ]);
    }
}
