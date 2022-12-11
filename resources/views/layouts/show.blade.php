@extends('layouts.app')

@section('header')
    <h1>{{$article->title}}</h1>
@endsection

@section('content')
    <ul id="blog-menu">
        <li><a href="{{route('dashboard.edit', ['dashboard' => $article->id])}}" class="btn">編集</a></li>
        <li>
            <form action="{{route('dashboard.destroy', ['dashboard' => $article->id])}}" method="post" onsubmit="return confirm('本当に削除しますか？')">
                @csrf
                @method('delete')
                <button type="submit" class="btn">削除</button>
            </form>
        </li>
        <li><a href="{{route('dashboard.index')}}" class="btn">戻る</a></li>
    </ul>

    <div id="show">
        {!! Str::markdown($article->content) !!}
    </div>
@endsection
