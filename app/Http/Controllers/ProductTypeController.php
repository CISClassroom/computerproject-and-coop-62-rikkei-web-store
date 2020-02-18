<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:producttype-list|producttype-create|producttype-edit|producttype-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:producttype-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:producttype-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:producttype-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $producttypes = ProductType::latest()->paginate(30);
        return view('admin.producttypes.index', compact('producttypes'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }
    public function create()
    {
        return view('admin.producttypes.create');

    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string'],
        ]);
        $arrData = $request->all();
        ProductType::create($arrData);
        return redirect()->route('producttypes.index')
            ->with('success', 'Product type created successfully.');
    }

    public function show(ProductType $producttype)
    {
        return view('admin.producttypes.show', compact('producttype'));
    }

    public function edit(ProductType $producttype)
    {
        return view('admin.producttypes.edit', compact('producttype'));
    }

    public function update(Request $request, ProductType $producttype)
    {
        request()->validate([
            'name' => ['required', 'string'],
        ]);

        $arrData = $request->all();
        $producttype->update($arrData);

        return redirect()->route('producttypes.index')
            ->with('success', 'Product type updated successfully');
    }

    public function destroy(ProductType $producttype)
    {
        $producttype->delete();
        return redirect()->route('producttypes.index')
            ->with('success', 'Product type deleted successfully');
    }
}
