<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Articlecategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $articleCategoriesList = Articlecategory::all();
        $articles = Article::with('category')->latest()->paginate(15);
        return view('client.articles.index', compact('articles', 'articleCategoriesList'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $articleCategoriesList = Articlecategory::get();
        $article = Article::with('category')->find($id);
        return view('client.articles.show', compact('article', 'articleCategoriesList'));
    }


    public function findNews(Request $request)
    {
        $articleCategoriesList = Articlecategory::get();

        $category_id = $request->get('category');

        $articles = Article::with('category')
            ->orWhere('articlecategory_id', '=', $category_id)
            ->latest()
            ->paginate(15);
            return view('client.articles.news', compact('articles', 'articleCategoriesList'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }
}
