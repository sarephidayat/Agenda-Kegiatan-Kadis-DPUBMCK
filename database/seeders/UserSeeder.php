<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'sekretaris123',
                'name' => 'Sekretaris',
                'password' => bcrypt('password123'),
                'id_bidang' => 2,
                'id_jabatan' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'kabid_rancang_bangun',
                'name' => 'Kepala Bidang Rancang Bangun dan Pengawasan',
                'password' => bcrypt('password123'),
                'id_bidang' => 3,
                'id_jabatan' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'kabid_pjwb',
                'name' => 'Kepala Pelaksana Jalan Wilayah Barat',
                'password' => bcrypt('password123'),
                'id_bidang' => 4,
                'id_jabatan' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'sub_koordinator_jalan_barat_1',
                'name' => 'Sub Koordinator Jalan dan Jembatan Ahli Muda Pelaksana Jalan Barat 1',
                'password' => bcrypt('password123'),
                'id_bidang' => 4,
                'id_jabatan' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'staff_sarana_prasarana',
                'name' => 'Staff Sarana Prasarana Pemukiman dan Bangunan Gedung',
                'password' => bcrypt('password123'),
                'id_bidang' => 6,
                'id_jabatan' => 26,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
