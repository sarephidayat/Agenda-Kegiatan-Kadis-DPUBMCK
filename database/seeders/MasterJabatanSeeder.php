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
            [
                'nama_jabatan' => 'Kepala Seksi Rancang Bangun dan Pengawasan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Seksi Pengawasan Teknis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Seksi Pengelolaan Aset Kebinamargaan  dan Keciptakaryaan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Jalan dan Jembatan Ahli Muda Pelaksana Jalan Timur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub koordinator Teknik Jalan dan Jembatan Ahli Muda Pelaksana Jalan Timur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'PLT Sub Koordinator Jalan dan Jembatan Ahli Muda Seksi Administrasi Teknis Timur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'PLT Sub Koordinator Jalan dan Jembatan Ahli Muda Pelaksana Jalan Barat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub koordinator Jalan dan Jembatan Ahli Muda Pelaksana Jalan Barat II',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'PLT Sub Koordinator Jalan dan Jembatan Ahli Muda Seksi Administrasi Teknis Barat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Penyehatan Lingkungan Ahli Muda Seksi Pengembangan Air Minum',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Penyehatan Lingkungan Ahli Muda Seksi Pengembangan Penyehatan Lingkungan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Tata Bangunan dan Perumahan Ahli Muda Seksi Tata Bangunan dan Jasa Konstruksi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Staff',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
