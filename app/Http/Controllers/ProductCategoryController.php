<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:productcategory-list|productcategory-create|productcategory-edit|productcategory-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:productcategory-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:productcategory-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:productcategory-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $productcategories = ProductCategory::latest()->paginate(30);
        return view('admin.productcategories.index', compact('productcategories'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }
    public function create()
    {
        $productTypesList = ProductType::pluck('name', 'id')->all();
        return view('admin.productcategories.create', compact('productTypesList'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string'],
        ]);
        $arrData = $request->all();
        ProductCategory::create($arrData);
        return redirect()->route('productcategories.index')
            ->with('success', 'Product category created successfully.');
    }

    public function show(ProductCategory $productcategory)
    {
        return view('admin.productcategories.show', compact('productcategory'));
    }

    public function edit(ProductCategory $productcategory)
    {
        $productTypesList = ProductType::pluck('name', 'id')->all();
        return view('admin.productcategories.edit', compact('productcategory','productTypesList'));
    }

    public function update(Request $request, ProductCategory $productcategory)
    {
        request()->validate([
            'name' => ['required', 'string'],
        ]);

        $arrData = $request->all();
        $productcategory->update($arrData);

        return redirect()->route('productcategories.index')
            ->with('success', 'Product category updated successfully');
    }

    public function destroy(ProductCategory $productcategory)
    {
        $productcategory->delete();
        return redirect()->route('productcategories.index')
            ->with('success', 'Product category deleted successfully');
    }
}
