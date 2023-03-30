<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Denunciations;
use App\Models\Complement;
use App\Models\Proofs;
use App\Models\Rapport;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Denunciations::factory()->count(10)->create();
        // Complement::factory()->count(10)->create();
        // Rapport::factory()->count(10)->create();
        Proofs::factory()->count(10)->create();
    }
}
