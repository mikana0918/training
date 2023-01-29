<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $hoge = Article::all();
        return response()->json(
            [
                "hoge" => $hoge,
            ],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
}
