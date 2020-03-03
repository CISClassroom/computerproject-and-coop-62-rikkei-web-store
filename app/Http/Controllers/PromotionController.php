<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Promotion;
use App\Models\PromotionProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:promotion-list|promotion-create|promotion-edit|promotion-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:promotion-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:promotion-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:promotion-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $promotions = Promotion::latest()->paginate(30);
        return view('admin.promotions.index', compact('promotions'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }

    public function create()
    {
        $products = Product::orderBy('name', 'ASC')->paginate();
        return view('admin.promotions.create', compact('products'));
    }

    public function store(Request $request)
    {
        $promotion = request()->validate([
            'title' => 'required|string',
            'discount_percent' => 'required|numeric|min:0|max:100',
            'max_discount' => 'required',
            'min_purchase' => 'required',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'product_id.*' => 'required|numeric'
        ]);
        DB::beginTransaction();
        try {
            $promotionData = Promotion::create($promotion);
            response()->json(array('success' => true, 'last_insert_id' => $promotionData->id), 200);
            $promotion_id = $promotionData->id;

            if (!$promotion_id) {
                throw new \Exception('Not have promotion_id');
            }

            $arrData = [];
            $now = date('Y-m-d H:i:s');
            foreach ($request->input('product_id') as $product_id) {
                $arrData[] = [
                    'promotion_id' => $promotion_id,
                    'product_id' => $product_id,
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }

            DB::table('promotion_products')->insert($arrData);

            DB::commit();

            return redirect()->route('promotions.index')
                ->with('success', 'Promotion created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('status')
                ->with('status-fail', 'Promotion could not be created.');
        }
    }

    public function show(Promotion $promotion)
    {
        $products = Product::orderBy('id', 'ASC')->paginate();
        return view('admin.promotions.show', compact('promotion', 'products'))->with('i');
    }

    public function edit(Promotion $promotion)
    {
        // $promotionProduct = PromotionProduct::select('promotion_id','product_id')->where('promotion_id','=',$promotion->id);
        $products = Product::orderBy('name', 'ASC')->paginate();
        return view('admin.promotions.edit', compact('promotion', 'products'));
        // return view('admin.promotions.edit', compact('promotion', 'products', 'promotionProduct'));
    }

    public function update(Request $request, Promotion $promotion)
    {
        request()->validate([
            'title' => 'required|string',
            'discount_percent' => 'required|numeric|min:0|max:100',
            'max_discount' => 'required',
            'min_purchase' => 'required|min:0',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'product_id.*' => 'required|numeric'
        ]);
        DB::beginTransaction();
        try {
            $promotion_id = $promotion->id;

            if (!$promotion_id) {
                throw new \Exception('Not have promotion_id');
            }

            $ids = [];
            foreach ($request->input('product_id') as $product_id) {
                $ids[] = $product_id;
            }
            $arrData = $request->all();
            $promotion->update($arrData);
            $promotion->products()->sync($ids);
            DB::commit();

            return redirect()->route('promotions.index')
                ->with('success', 'Promotion updated successfully.');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('status')
                ->with('status-fail', 'Promotion could not be updated.');
        }
    }

    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->route('promotions.index')
            ->with('success', 'Promotion deleted successfully');
    }
}
