<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\In;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{

public function laporanStock()
{
    // Ambil data produk, total terjual, dan total masuk dalam sehari
    $produkData = Product::select('id', 'nama_produk')
    ->withCount([
        'transactions as totalTerjual' => function ($query) {
            $query->whereDate('tanggal_transaksi', Carbon::today());
        },
        'incoming_products as totalMasuk' => function ($query) {
            $query->whereDate('created_at', Carbon::today());
        }
    ])
    ->get();

// Ambil total terjual dan total masuk untuk semua produk
$totalTerjual = DB::table('transactions')
    ->whereDate('tanggal_transaksi', Carbon::today())
    ->sum('jumlah');

$totalMasuk = DB::table('incoming_products')
    ->whereDate('created_at', Carbon::today())
    ->sum('jumlah');

return view('laporan_stock', compact('produkData', 'totalTerjual', 'totalMasuk'));
}

public function laporanTransaksi(){
    $transaksiData = Product::select('id', 'nama_produk')
    ->withCount([
        'transactions as totalPendapatan' => function ($query) {
            $query->whereDate('tanggal_transaksi', Carbon::today());
        },
        'incoming_products as totalPengeluaran' => function ($query) {
            $query->whereDate('created_at', Carbon::today());
        }
    ])
    ->get();

    $totalPendapatan = DB::table('transactions')
    ->whereDate('tanggal_transaksi', Carbon::today())
    ->sum('total_harga');

$totalPengeluaran = DB::table('incoming_products')
    ->whereDate('created_at', Carbon::today())
    ->sum('biaya');

    return view('laporan_transaksi', compact('transaksiData', 'totalPendapatan', 'totalPengeluaran'));
}

}
