<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgendaInternalKadisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('agenda_kadis_internal')->insert([
            [
                'tanggal_surat' => '2024-01-02',
                'no_surat' => '800.1.4.4/ 650',
                'acara' => 'Undangan Penyusunan Perjanjian Kinerja 2024',
                'id_bidang' => 2,
                'tanggal' => 'Selasa / 3 Januari 2024',
                'waktu' => '09.00',
                'tempat' => 'Ruang Rapat SKPD-TP',
                'kepada' => '-',
                'catatan' => '-',
                'softfile_surat' => '132-335-1-PB.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tanggal_surat' => '2024-01-22',
                'no_surat' => '005/320',
                'acara' => 'Undangan Rapat Evaluasi',
                'id_bidang' => 5,
                'tanggal' => 'Rabu / 24 Januari 2024',
                'waktu' => '10.00',
                'tempat' => 'Ruang Rapat SPPBG',
                'kepada' => 'SPPBG',
                'catatan' => '-',
                'softfile_surat' => '132-335-1-PB.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'tanggal_surat' => '2024-01-22',
                'no_surat' => '005/320',
                'acara' => 'Undangan Rapat Evaluasi',
                'id_bidang' => 5,
                'tanggal' => 'Rabu / 24 Januari 2024',
                'waktu' => '10.00',
                'tempat' => 'Ruang Rapat SPPBG',
                'kepada' => 'SPPBG',
                'catatan' => '-',
                'softfile_surat' => '132-335-1-PB.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
