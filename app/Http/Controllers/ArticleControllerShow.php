<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleControllerShow extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->Paginate(10);

        return view('layouts/dashboardshow', ['articles' => $articles]);
    }
}
