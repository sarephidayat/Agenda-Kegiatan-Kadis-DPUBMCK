<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_jabatan')->insert([
            [
                'nama_jabatan' => 'Kepala Dinas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sekretaris',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Bidang Rancang Bangun dan Pengawasan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Bidang Pelaksana Jalan Wilayah Barat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Bidang Pelaksana Jalan Wilayah Timur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Bidang Bidang Sarama Prasarana Permukiman dan Bangunan Gedung',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Sub Bagian Umum dan Kepegawaian',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Sub Bagian Keungan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Sub Bagian Program',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
