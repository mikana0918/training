@extends('layouts.admin')

@section('article_list')
    <h1>新規投稿</h1>
@endsection

@section('article_post')
    <div class="edit_form">
        <form action="{{route('article.store')}}" method="post">
            @csrf
            <ul>
                <li>
                    <input type="text" name="title" id="title" placeholder="記事タイトル" required autofocus>
                </li>
                <li>
                    <textarea name="content" placeholder="ここに内容を入力してください。" rows="5" required></textarea>
                </li>
                <li>
                    <div>
                        <div class="edit_button">
                            <button type="submit">投稿</button><br>
                            <button type="button" onclick="location.href='{{route('dashboard')}}'">戻る</button>
                        </div>
                    </div>
                </li>
            </ul>
        </form>
    </div>
@endsection
