<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Articlecategory;
use App\Models\User;
use App\Mail\SendMail;
use App\Mail\SendNewsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;


class ArticleController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:article-list|article-create|article-edit|article-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:article-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:article-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:article-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $articles = Article::with('category')->latest()->paginate(30);
        return view('admin.articles.index', compact('articles'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }

    public function create()
    {
        $articleCategoriesList = Articlecategory::pluck('name', 'id')->all();
        return view('admin.articles.create', compact('articleCategoriesList'));
    }

    public function store(Request $request)
    {
        // try {
            request()->validate([
                'subject' => ['required', 'string'],
                'title' => ['required', 'string'],
                'image_url' => ['required', 'image', 'max:2048'],
                'detail' => ['string'],
                'articlecategory_id' => ['required', 'int'],
            ]);
            $imageName = time() . '.' . request()->image_url->getClientOriginalExtension();
            request()->image_url->move(public_path('images/articles/upload'), $imageName);
            $arrData = $request->all();

            $arrData['image_url'] = 'images/articles/upload/' . $imageName;

            Article::create($arrData);

                $users = User::all()->where('newsletter', '=', 1); //1 = subscriber, 0 = none
                foreach ($users as $user) {
                    Mail::to($user->email)->queue(new SendNewsletter($arrData));
                }

            return redirect()->route('articles.index')
                ->with('success', 'article created successfully.');
        // } catch (\Exception $e) {
        //     return redirect()->route('adminstatus')
        //         ->with('status-fail', 'Article could not be created.');
        // }
    }

    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        $articleCategoriesList = Articlecategory::pluck('name', 'id')->all();
        return view('admin.articles.edit', compact('article', 'articleCategoriesList'));
    }

    public function update(Request $request, Article $article)
    {
        try {
            request()->validate([
                'subject' => ['required', 'string'],
                'title' => ['required', 'string'],
                'detail' => ['string'],
                'articlecategory_id' => ['required', 'int'],
            ]);
            if (request()->image_url) {
                $imageName = time() . '.' . request()->image_url->getClientOriginalExtension();
                request()->image_url->move(public_path('images/articles/upload'), $imageName);
                $arrData = $request->all();
                $arrData['image_url'] = 'images/articles/upload/' . $imageName;
                $article->update($arrData);

            } else {
                $arrData = $request->all();
                $article->update($arrData);
            }


            return redirect()->route('articles.index')
                ->with('success', 'article updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('adminstatus')
                ->with('status-fail', 'Article could not be updated.');
        }
    }

    public function destroy(Article $article)
    {
        try {
            $article->delete();
            File::delete('img_url');
            return redirect()->route('articles.index')
                ->with('success', 'article deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('adminstatus')
                ->with('status-fail', 'Article could not be deleted.');
        }
    }
}
