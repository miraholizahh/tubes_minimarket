<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Product::insert([
            [
                'id' => '1',
                'nama_produk' => 'Pasta Gigi',
                'harga' => '8000',
                'stok' => '10',
                'kategori_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'nama_produk' => 'Kopi',
                'harga' => '12000',
                'stok' => '34',
                'kategori_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'nama_produk' => 'Roti',
                'harga' => '5000',
                'stok' => '15',
                'kategori_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
