<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function index(){
        $data ['stocks'] = Stock::with('product')->get();
        return view('stocks.index', $data);
    }
}
