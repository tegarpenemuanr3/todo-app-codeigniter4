<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Membuat contoh seeder',
                'desc' => 'Ini adalah contoh seeder dengan CLI',
                'status' => 'selesai',
            ],
            [
                'title' => 'Menggunakan seeder codeigniter 4',
                'desc' => 'Seeder sangat membantu dalam pengisian data awal',
                'status' => 'belum',
            ]
        ];

        $this->db->table('todos')->insertBatch($data);
    }
}

// Di buat dengan:
// php spark db:seed TodoSeeder            

// Jalankan dengan:
// php spark db:seed TodosSeeder