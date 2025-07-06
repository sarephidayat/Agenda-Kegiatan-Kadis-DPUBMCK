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
            MasterJabatanSeeder::class,
            MasterBidangSeeder::class,
            MasterInstruksiSeeder::class,
            MasterCakupanSeeder::class,
            AgendaKadisSeeder::class,
        ]);
    }
}
