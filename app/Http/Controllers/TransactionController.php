<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;

class TransactionController extends Controller
{
    public function index(){
        $data ['products'] = Transaction::with('product')->get();
        return view('transactions.index', $data);
    }

    public function create()
    {
        $data['products'] = Product::pluck('nama_produk', 'id');
        return view('transactions.create', $data);
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'id_produk' => 'required',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'bayar' => 'required|numeric',
            'kembalian' => 'required|numeric',
        ]);

        $product = Product::find($validated['id_produk']);
        $stok_sebelum = $product->stok;
    
        // 2. Kurangkan jumlah produk yang tersedia dengan jumlah yang diinputkan pada transaksi
        $stok_sesudah = $stok_sebelum - $validated['jumlah'];
    
        // 3. Simpan data transaksi ke database
        $transaction = Transaction::create($validated);
    
        // 4. Update stok produk dengan nilai yang telah dikurangkan
        $product->update(['stok' => $stok_sesudah]);

        $notification = array(
            'message' => 'Data transaksi telah ditambahkan',
            'alert-type' => 'success'
        );
        
        if($request->save == true) {
            return redirect()->route('transaction')->with($notification);
        } else {
            return redirect()->route('transaction.create')->with($notification);
        }
   
    
    }

}

