<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Category::insert([
            [
                'id' => '1',
                'code'=>'M001',
                'nama' => 'Makanan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'code' => 'M002',
                'nama' => 'Minuman',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'nama' => 'Sembako',
                'code' => 'S001',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
