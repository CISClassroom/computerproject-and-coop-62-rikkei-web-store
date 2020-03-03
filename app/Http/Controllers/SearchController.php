<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\Promotion;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index(Request $request)
    {
        $productTypesList = ProductType::get();
        $productCategoriesList = ProductCategory::get();
        $promotions = Promotion::all();

        $query = $request->get('query');
        $type = ProductType::where('name', 'LIKE', "%$query%")->get('id');
        $type_id = null;
        foreach ($type as $typeItem)
        {
            if (!$type_id)
            {
                $type_id = $typeItem->id;
            }
        }

        $category = ProductCategory::where('name', 'LIKE', "%$query%")->get('id');
        $category_id = null;
        foreach ($category as $categoryItem)
        {
            if (!$category_id)
            {
                $category_id = $categoryItem->id;
            }
        }

        $products = Product::where('name', 'LIKE', "%$query%")
            ->orWhere('code', 'LIKE', "%$query%")
            ->orWhere('detail', 'LIKE', "%$query%")
            ->orWhere('producttype_id', 'LIKE', "%$query%")
            ->orWhere('producttype_id', 'LIKE', $type_id)
            ->orWhere('productcategory_id', 'LIKE', "%$query%")
            ->orWhere('productcategory_id', 'LIKE', $category_id)
            ->paginate(60);

        // return view('client.shop.search', compact('products', 'productTypes', 'productCategories'))
            return view('client.shop.search', compact('products', 'promotions', 'productTypesList', 'productCategoriesList'))
            ->with('i', (request()->input('page', 1) - 1) * 60);
    }
    public function filter(Request $request)
    {
        $productTypesList = ProductType::get();
        $productCategoriesList = ProductCategory::get();
        $promotions = Promotion::all();

        $type_id = $request->get('type');
        $type_all = 0;
        if($type_id == 1 || $type_id == 2){
            $type_all = 3;
        }
        elseif ($type_id == 4 || $type_id == 5){
            $type_all = 6;
        }

        $category_id = $request->get('category');

        // dd($type_id);

        $products = Product::where('producttype_id', '=', $type_id)
            ->orWhere('producttype_id', '=', $type_all)
            ->orWhere('productcategory_id', '=', $category_id)
            ->paginate(60);
            // dd($products);
            return view('client.shop.search', compact('products', 'promotions', 'productTypesList', 'productCategoriesList'))
            ->with('i', (request()->input('page', 1) - 1) * 60);
    }
}
