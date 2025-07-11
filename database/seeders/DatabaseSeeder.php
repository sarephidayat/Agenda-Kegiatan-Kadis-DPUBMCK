<?php

namespace Database\Seeders;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Pemanggilan seeder untuk mengisi data awal
        $this->call([
            MasterBidangSeeder::class,
            MasterJabatanSeeder::class,
            MasterInstruksiSeeder::class,
            AgendaInternalKadisSeeder::class,
            AgendaEksternalKadisSeeder::class,
            UserSeeder::class,
        ]);
    }
}
