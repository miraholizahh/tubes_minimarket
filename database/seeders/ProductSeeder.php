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
                'code' => 'P01',
                'nama_produk' => 'Pasta Gigi',
                'harga_beli' => '5000',
                'harga_jual' => '8000',
                'stok' => '10',
                'kategori_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'code' => 'K01',
                'nama_produk' => 'Kopi',
                'harga_beli' => '13000',
                'harga_jual' => '15000',
                'stok' => '34',
                'kategori_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'code' => 'R01',
                'nama_produk' => 'Roti',
                'harga_beli' => '1000',
                'harga_jual' => '2000',
                'stok' => '15',
                'kategori_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
