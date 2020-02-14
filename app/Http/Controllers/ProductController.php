<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

     public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('admin.products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string'],
            'code' => ['required', 'string'],
            'price' => ['required'],
            'detail' => ['string'],
            'image_url' => ['required', 'image', 'mimes: jpeg, png, jpg, gif, svg', 'max:2048'],
            'product_category_id' => ['required', 'int'],
            'product_type_id' => ['required', 'int'],

        ]);

        $imageName = time().'.'.request()->image_url->getClientOriginalExtension();
        request()->image_url->move(public_path('images/products/upload'), $imageName);
        $arrData = $request->all();
        $arrData['image_url'] = 'images/products/upload/' . $imageName;

        Product::create($arrData);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        request()->validate([
            'name' => ['required', 'string'],
            'code' => ['required', 'string'],
            'price' => ['required'],
            'detail' => ['string'],
            'image_url' => ['required', 'image', 'max:2048'],
            'product_category_id' => ['required', 'int'],
            'product_type_id' => ['required', 'int'],
        ]);

        $imageName = time().'.'.request()->image_url->getClientOriginalExtension();
        request()->image_url->move(public_path('images/products/upload'), $imageName);
        $arrData = $request->all();
        $arrData['image_url'] = 'images/products/upload/' . $imageName;
        $product->update($arrData);


        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully')
            ->with('image',$imageName);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
