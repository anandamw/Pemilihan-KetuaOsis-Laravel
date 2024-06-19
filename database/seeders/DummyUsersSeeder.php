<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createDummy = [
            [
                'name' => 'John Doe',
                'username' => 'John Doe',
                'kelas' => '10A',
                "role" => 'kandidat',
                'nis' => '123456',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Jane Smith',
                'username' => 'Jane Smith',
                'kelas' => '11B',
                "role" => 'admin',
                'nis' => '789012',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Alice Johnson',
                'username' => 'Alice Johnson',
                'kelas' => '12C',
                "role" => 'admin',
                'nis' => '345678',
                'password' => bcrypt('123'),
            ],
        ];
        foreach ($createDummy as $data) {
            User::create($data);
        }
    }
}
