<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $data ['categories'] = Category::all();
        return view('categories.index', $data);
    }

    public function create()
    {
        $data['categories'] = Category::all();
        return view('categories.create', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'code' => 'required|max:4',
        'nama' => 'required|max:255',
        ]);

        Category::create($validated);
        $notification = array(
            'message' => 'Data kategori telah ditambahkan',
            'alert-type' => 'success'
        );
        if($request->save == true) {
            return redirect()->route('category')->with($notification);
        } else {
            return redirect()->route('category.create')->with($notification);
        }
    }
}