<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\In;
use App\Models\Product;

class InController extends Controller
{
    public function index(){
        $data ['products'] = In::with('product')->get();
        return view('incomings.index', $data);
    }

    public function create()
    {
        $data['products'] = Product::pluck('nama_produk', 'id');
        return view('incomings.create', $data);
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'id_produk' => 'required',
            'jumlah' => 'required|numeric',
            'biaya' => 'required|numeric',
        ]);

        $product = Product::find($validated['id_produk']);
        $stok_sebelum = $product->stok;
    
        // 2. Kurangkan jumlah produk yang tersedia dengan jumlah yang diinputkan pada transaksi
        $stok_sesudah = $stok_sebelum + $validated['jumlah'];
    
        // 3. Simpan data transaksi ke database
        $in = In::create($validated);
    
        // 4. Update stok produk dengan nilai yang telah dikurangkan
        $product->update(['stok' => $stok_sesudah]);

        $notification = array(
            'message' => 'Data produk masuk telah ditambahkan',
            'alert-type' => 'success'
        );
        
        if($request->save == true) {
            return redirect()->route('incoming')->with($notification);
        } else {
            return redirect()->route('incoming.create')->with($notification);
        }
   
    
    }
}
