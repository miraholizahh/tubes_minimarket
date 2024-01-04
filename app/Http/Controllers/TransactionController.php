<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use PDF;

class TransactionController extends Controller
{
    public function index(){
        $data ['transactions'] = Transaction::with('product')->get();
        return view('transactions.index', $data);
    }

    public function print()
    {
        $transactions = Transaction::all();
        $pdf = PDF::loadview('Transactions.print', ['transactions' => $transactions]);
        return $pdf->download('transaction.pdf');
    }
}
