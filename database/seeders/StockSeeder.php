<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Stock::insert([
            [
                'id' => '1',
                'produk_id' => '1',
                'jumlah_stok' => '100',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'produk_id' => '2',
                'jumlah_stok' => '50',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'produk_id' => '3',
                'jumlah_stok' => '80',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
