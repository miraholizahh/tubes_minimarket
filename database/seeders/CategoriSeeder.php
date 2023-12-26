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
                'nama' => 'Makanan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'nama' => 'Minuman',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'nama' => 'Sembako',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
