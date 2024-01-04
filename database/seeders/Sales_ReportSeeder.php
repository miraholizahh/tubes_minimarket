<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sales_Report;

class Sales_ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Sales_Report::insert([
            [
                'id' => '1',
                'tanggal_laporan' => '2023-12-02',
                'total_penjualan' => '230',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'tanggal_laporan' => '2023-12-03',
                'total_penjualan' => '376',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'tanggal_laporan' => '2023-12-04',
                'total_penjualan' => '350',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
