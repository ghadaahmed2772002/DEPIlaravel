<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    $products = Product::with('company')->get();
    return view('products.index', compact('products'));
}

public function create()
{
    $companies = Company::all();
    return view('products.create', compact('companies'));
}

public function store(Request $request)
{
    $validate = $request->validate([
        'name' => 'required',
        'expire_at' => 'required|date',
        'details' => 'required',
        'company_id' => 'required',
    ]);

    Product::create($validate);

    return redirect()->route('products.index');
}

public function show(Product $product)
{
    return view('products.show', compact('product'));
}

public function edit(Product $product)
{
    $companies = Company::all();
    return view('products.edit', compact('product', 'companies'));
}

public function update(Request $request, Product $product)
{
    $validated = $request->validate([
        'name' => 'required',
        'expire_at' => 'required|date',
        'details' => 'required',
        'company_id' => 'required',
    ]);

    $product->update($validated);

    return redirect()->route('products.index');
}

public function destroy(Product $product)
{
    $product->delete();
    return redirect()->route('products.index');
}

}
