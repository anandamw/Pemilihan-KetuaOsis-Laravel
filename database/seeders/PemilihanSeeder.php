<?php

namespace Database\Seeders;

use App\Models\Pemilihan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemilihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataPemilihan = [
            [
                "users_id" => 1,
                "kandidats_id" => 1,
                "tanggal" => date('Y-m-d')
            ],
            [
                "users_id" => 2,
                "kandidats_id" => 2,
                "tanggal" => date('Y-m-d')
            ],
            [
                "users_id" => 3,
                "kandidats_id" => 3,
                "tanggal" => date('Y-m-d')
            ],
          

        ];
        foreach ($dataPemilihan as $data) {
            Pemilihan::create($data);
        }
    }
}
