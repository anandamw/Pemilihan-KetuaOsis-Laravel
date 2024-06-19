<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kandidat;
use App\Models\Pemilihan;
use Illuminate\Database\Seeder;
use Database\Seeders\KandidatSeeder;
use Illuminate\Foundation\Auth\User;
use Database\Seeders\PemilihanSeeder;
use Database\Seeders\DummyUsersSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            DummyUsersSeeder::class,
            KandidatSeeder::class,
            PemilihanSeeder::class,
        ]);
    }
}
