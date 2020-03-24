<?php

namespace App\Http\Controllers;

use App\Models\Articlecategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:articlecategory-list|articlecategory-create|articlecategory-edit|articlecategory-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:articlecategory-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:articlecategory-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:articlecategory-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $articlecategories = Articlecategory::paginate(30);
        return view('admin.articlecategories.index', compact('articlecategories'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }
    public function create()
    {
        $articleTypesList = Articlecategory::pluck('name', 'id')->all();
        return view('admin.articlecategories.create', compact('articleTypesList'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string'],
        ]);
        $arrData = $request->all();
        Articlecategory::create($arrData);
        return redirect()->route('articlecategories.index')
            ->with('success', 'article category created successfully.');
    }

    public function show(Articlecategory $articlecategory)
    {
        return view('admin.articlecategories.show', compact('articlecategory'));
    }

    public function edit(Articlecategory $articlecategory)
    {
        return view('admin.articlecategories.edit', compact('articlecategory'));
    }

    public function update(Request $request, Articlecategory $articlecategory)
    {
        request()->validate([
            'name' => ['required', 'string'],
        ]);

        $arrData = $request->all();
        $articlecategory->update($arrData);

        return redirect()->route('articlecategories.index')
            ->with('success', 'article category updated successfully');
    }

    public function destroy(Articlecategory $articlecategory)
    {
        $articlecategory->delete();
        return redirect()->route('articlecategories.index')
            ->with('success', 'article category deleted successfully');
    }
}
