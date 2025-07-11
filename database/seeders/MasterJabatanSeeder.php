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
                'id_bidang' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sekretaris',
                'id_bidang' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Sub Bagian Program',
                'id_bidang' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Sub Bagian Keuangan',
                'id_bidang' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Sub Bagian Umum dan Kepegawaian',
                'id_bidang' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Bidang Rancang Bangun dan Pengawasan',
                'id_bidang' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Seksi Rancang Bangun',
                'id_bidang' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Seksi Pengawasan Teknis',
                'id_bidang' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Seksi Pengelolaan Aset Kebinamargaan dan Keciptakaryaan',
                'id_bidang' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Bidang Pelaksana Jalan Wilayah Barat',
                'id_bidang' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Jalan dan Jembatan Ahli Muda Pelaksana Jalan Barat 1',
                'id_bidang' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Jalan dan Jembatan Ahli Muda Pelaksana Jalan Barat 2',
                'id_bidang' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Jalan dan Jembatan Ahli Muda Seksi Administrasi Teknis Barat',
                'id_bidang' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Bidang Pelaksana Jalan Wilayah Timur',
                'id_bidang' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Jalan dan Jembatan Ahli Muda Pelaksana Jalan Timur 1',
                'id_bidang' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Jalan dan Jembatan Ahli Muda Pelaksana Jalan Timur 2',
                'id_bidang' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Jalan dan Jembatan Ahli Muda Seksi Administrasi Teknis Timur',
                'id_bidang' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Kepala Bidang Sarana Prasarana Permukiman dan Bangunan Gedung',
                'id_bidang' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Penyehatan Lingkungan Ahli Muda Seksi Pengembangan Air Minum',
                'id_bidang' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Penyehatan Lingkungan Ahli Muda Seksi Pengembangan Penyehatan Lingkungan',
                'id_bidang' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jabatan' => 'Sub Koordinator Tata Bangunan dan Perumahan Ahli Muda Seksi Tata Bangunan dan Jasa Konstruksi',
                'id_bidang' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),  
            ]
        ]);
    }
}
