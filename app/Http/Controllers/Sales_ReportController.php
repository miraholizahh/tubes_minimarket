<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales_Report;

class Sales_ReportController extends Controller
{
    public function index(){
        $data ['sales_reports'] = Sales_Report::with('product')->get();
        return view('sales_reports.index', $data);
    }
}
