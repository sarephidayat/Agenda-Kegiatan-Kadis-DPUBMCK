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
                'username' => 'Sekertaris',
                'password' => bcrypt('password123'),
                'id_bidang' => 1,
                'id_jabatan' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'BRBP',
                'password' => bcrypt('password123'),
                'id_bidang' => 2,
                'id_jabatan' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'PBW',
                'password' => bcrypt('password123'),
                'id_bidang' => 3,
                'id_jabatan' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'PWT',
                'password' => bcrypt('password123'),
                'id_bidang' => 4,
                'id_jabatan' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'PSPBG',
                'password' => bcrypt('password123'),
                'id_bidang' => 5,
                'id_jabatan' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'KJFP',
                'password' => bcrypt('password123'),
                'id_bidang' => 6,
                'id_jabatan' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
