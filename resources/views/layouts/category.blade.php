@extends('layouts.app')

@section('nav-menu')
    <div class="nav-menu">
        <nav class="nav-list">
{{--            @foreach($categories as $category)--}}
{{--                <p><a href="{{route('article.category', $category->id)}}">{{$category->label}}</a></p>--}}
{{--            @endforeach--}}
        </nav>
    </div>
@endsection

@section('header-sp')
    <div class="header-sp">
        <div class="sp-title">
            @foreach ($articles->getCollection() as $article)
            <p>{{$article->categories->implode('label')}}</p>
            @endforeach
        </div>
        <div class="sp-menu">
            <i class='fas fa-list fa-9x' style='color:#000000'></i>
        </div>
    </div>
@endsection

@section('content')
    @foreach ($articles->getCollection() as $article)
        <article class="article">
            <a href="{{route('article.show', $article->id)}}">
                <p>
                    @if ($article->created_at === $article->updated_at)
                        <time datetime="{{Str::limit($article->created_at, 20)}}">登録日時：{{Str::limit($article->created_at, 20, "")}}</time>
                    @else
                        <time datetime="{{Str::limit($article->created_at, 20)}}">登録日時：{{Str::limit($article->created_at, 20, "")}}</time>　
                        <br><time datetime="{{Str::limit($article->updated_at, 20)}}">更新日時：{{Str::limit($article->updated_at, 20, "")}}</time>
                    @endif
                </p>
                <h3>{{$article->title}}</h3>
                <p>{{$article->content}}</p>
                @if(count($article->categories) > 0)
                    <p>この記事のカテゴリー：{{$article->categories->implode('label')}}</p>
                @endif
            </a>
        </article>
    @endforeach
    {{$articles->links()}}
@endsection

@section('categoryMenuCategory')
<div class="categoriesSelect">
    <ul>
        <li>
            記事選択
        </li>
        <li>
            <a href="{{route('index')}}">全件表示</a>
        </li>
        @foreach($categoryList as $category)
            <li>
                <a href="{{route('article.category', $category->id)}}">{{$category->label}}</a>
            </li>
        @endforeach
        <li>
            <a href="{{route('article.category.uncategorized')}}">未分類</a>
        </li>
    </ul>
</div>
@endsection
