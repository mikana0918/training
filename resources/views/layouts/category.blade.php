@extends('layouts.app')

@section('headerCategory')
    <h1>カテゴリー：{{$categories->label}}</h1>
@endsection

@section('content')
    <?php $titles = [$categories->articles->implode( 'title' )] ?>
    <?php $contents = [$categories->articles->implode( 'content' )] ?>
    @foreach(array_map(NULL, $titles, $contents) as [$title, $content])
        <article class="article">
                <h3>{{$title}}</h3>
                <p>{{$content}}</p>
        </article>
    @endforeach
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
        @foreach($categoryLists as $categoryList)
            <li><a href="{{route('article.category', $categoryList->id)}}">{{$categoryList->label}}</a></li>
        @endforeach
        <li>
            未分類
        </li>
    </ul>
</div>
@endsection
