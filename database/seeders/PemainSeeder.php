<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemain;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Pemain::table([
                'nama_pemain'=> fake() -> name(),
                'nomor_punggung'=> fake() -> numberBetween(1, 10),
                'posisi' => fake() -> numberBetween(1, 10),
            ]);
        }
    }
}
