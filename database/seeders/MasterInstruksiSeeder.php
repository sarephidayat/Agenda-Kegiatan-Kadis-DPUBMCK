<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterInstruksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_instruksi')->insert([
            [
                'isi_instruksi' => 'Untuk diselesaikan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'isi_instruksi' => 'untuk menjadian periksa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'isi_instruksi' => 'untuk seperlunya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'isi_instruksi' => 'untuk dijawab',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'isi_instruksi' => 'untuk diikuti',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'isi_instruksi' => 'untuk diperbanyak',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'isi_instruksi' => 'untuk arsip',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'isi_instruksi' => 'untuk diinformasikan/dibicarakan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'isi_instruksi' => 'dengan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'isi_instruksi' => 'lain-lain',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
