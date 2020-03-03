<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $products = Product::latest()->paginate(30);
        return view('admin.products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }

    public function create()
    {
        // product_categories dropdown
        // $product_categories = ProductCategory::all(['id','name'])->pluck('name', 'name')->all();
        $productCategoriesList = ProductCategory::pluck('name', 'id')->all();
        $productTypesList = ProductType::pluck('name', 'id')->all();
        return view('admin.products.create', compact('productCategoriesList', 'productTypesList'));
    }

    public function store(Request $request)
    {
        // dd($request->product_category_id);
        request()->validate([
            'name' => ['required', 'string'],
            'code' => ['required', 'string'],
            'price' => ['required'],
            'detail' => ['string'],
            'image_url' => ['required', 'image', 'max:2048'],
            'productcategory_id' => ['required', 'int'],
            'producttype_id' => ['required', 'int'],
            // 'mimes: jpeg, png, jpg, gif, svg',
        ]);
        $imageName = time() . '.' . request()->image_url->getClientOriginalExtension();
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
        $productCategoriesList = ProductCategory::pluck('name', 'id')->all();
        $productTypesList = ProductType::pluck('name', 'id')->all();
        return view('admin.products.edit', compact('product', 'productCategoriesList', 'productTypesList'));
    }

    public function update(Request $request, Product $product)
    {
        request()->validate([
            'name' => ['required', 'string'],
            'code' => ['required', 'string'],
            'price' => ['required'],
            'detail' => ['string'],
            'image_url' => ['image', 'max:2048'],
            'productcategory_id' => ['required', 'int'],
            'producttype_id' => ['required', 'int'],
        ]);
        if (request()->image_url) {
            $imageName = time() . '.' . request()->image_url->getClientOriginalExtension();
            request()->image_url->move(public_path('images/products/upload'), $imageName);
            $arrData = $request->all();
            $arrData['image_url'] = 'images/products/upload/' . $imageName;
            $product->update($arrData);
        }
        else {
            $arrData = $request->all();
            $product->update($arrData);
        }


        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        File::delete('img_url');
        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
