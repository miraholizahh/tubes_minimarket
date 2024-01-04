<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Transaction::insert([
            [
                'id' => '1',
                'tanggal_transaksi' => '2023-11-23',
                'produk_id' => '1',
                'jumlah' => '1',
                'total_harga' => '8000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'tanggal_transaksi' => '2023-11-23',
                'produk_id' => '2',
                'jumlah' => '4',
                'total_harga' => '48000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'tanggal_transaksi' => '2023-11-23',
                'produk_id' => '3',
                'jumlah' => '2',
                'total_harga' => '10000',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
