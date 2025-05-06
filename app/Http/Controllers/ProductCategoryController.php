<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::all();

        return view('dashboard.categories.index',[
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $categories = new Categories;
        $categories->name = $request->input('name');
        $categories->slug = $request->input('slug');
        $categories->description = $request->input('description');

        $categories->save();

        return redirect()->back()
            ->with('successMessage','Data berhasil disimpan');
    }
}
