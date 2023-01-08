<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ArticleController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $articles = Article::with("categories")->orderBy('updated_at', 'desc' ,'created_at', 'desc')->Paginate(10);
        $categories = Category::all();

        return view('layouts/index', ['articles' => $articles,
                                            'categories' => $categories]);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */

    public function show($id): View|Factory|Application
    {
        //show.blade.phpから渡されたidに該当するarticleを見つけ、詳細を表示する
        $article = Article::with("categories")->findOrFail($id);
        $categories = Category::all();

        return view('layouts/show')
            ->with(['article' => $article,
                'categories' => $categories]);
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function category($id): Application|Factory|View
    {
        //上記のidはcategoriesテーブルのもの。だから、Categoryモデルから値を引っ張る必要があるため『Catgegory::』とする。
        //また、それはarticlesに紐ついていることからwithする。
        $categories = Category::with("articles")->findOrFail($id);
        $categoryLists = Category::all();

        return view('layouts/category')
            ->with(['categories' => $categories,
                'categoryLists' => $categoryLists]);
    }
}
