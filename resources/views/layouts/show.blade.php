{{--このファイルはapp.blade.phpに出力されている。--}}
{{--具体的には、このファイルの@section等がapp.blade.phpの@yieldに埋め込まれている。--}}
{{--つまりスケルトン（雛形）がapp.blade.phpで、インスタンス（具体的なデータ群）がこのファイルにあたる。--}}
@extends('layouts.app')

@section('header')
    <h1>{{$article->title}}</h1>
@endsection

@section('content')
    <p>{{$article->content}}</p>
    <ul id="blog-menu">
        <li>
            <a href="{{route('index')}}" class="btn">戻る</a>
        </li>
    </ul>
@endsection
