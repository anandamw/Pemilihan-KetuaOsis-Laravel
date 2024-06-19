<?php

namespace Database\Seeders;

use App\Models\Kandidat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createData = [
            [
                'nama_kandidat' => 'John Doe',
                'kelas' => '10A',
                'visi' => 'To create a better school environment',
                'misi' => '1. Improve school facilities. 2. Increase student engagement.',
                'gambar' => 'john_doe.jpg',
                'nis' => '123456',
            ],
            [
                'nama_kandidat' => 'Jane Smith',
                'kelas' => '11B',
                'visi' => 'To foster a culture of inclusivity',
                'misi' => '1. Promote diversity. 2. Support student initiatives.',
                'gambar' => 'jane_smith.jpg',
                'nis' => '789012',
            ],
            [
                'nama_kandidat' => 'Alice Johnson',
                'kelas' => '12C',
                'visi' => 'To enhance academic excellence',
                'misi' => '1. Provide more academic resources. 2. Organize study groups.',
                'gambar' => 'alice_johnson.jpg',
                'nis' => '345678',
            ],
        ];
        foreach ($createData as $data) {
            Kandidat::create($data);
        }
    }
}
