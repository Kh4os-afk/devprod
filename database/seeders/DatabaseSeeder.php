<?php

namespace Database\Seeders;

use App\Models\Licenca;
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
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        Licenca::create([
            'empresa' => 'Rodrigues',
            'cnpj' => 123456789,
            'contato' => 92999999999,
            'dtinicio' => '2024-11-19',
            'dtfinal' => '2024-12-19',
            'qtfilial' => 1,
            'vlmensal' => 300,
        ]);
    }
}
