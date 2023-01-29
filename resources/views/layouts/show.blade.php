
@extends('layouts.app')

@section('nav-menu')
    <div class="nav-menu">
        <nav class="nav-list">
                @foreach($categories as $category)
                    <p><a href="{{route('article.category', $category->id)}}">{{$category->label}}</a></p>
                @endforeach
        </nav>
    </div>
@endsection

@section('header-sp')
    <div class="header-sp">
        <div class="sp-title">
            <p>記事一覧</p>
        </div>
        <div class="sp-menu">
            <i class='fas fa-list fa-9x' style='color:#000000'></i>
        </div>
    </div>
@endsection

@section('title-sp')
    <h1>{{$article->title}}</h1>
@endsection


@section('content')
    <p>{{$article->content}}</p>
    @if(count($article->categories) > 0)
        <p>この記事のカテゴリー：{{$article->categories->implode('label')}}</p>
    @endif
@endsection

@section('comments')
    <div class="commentButton">
        <p>コメントを書く</p>
    </div>
    <div class="commentForm">
        <form action="{{route('article.show.commentStore',$article->id)}}" method="post">
            @csrf
            <table>
                <tr>
                    <th>
                        名前（必須）：
                    </th>
                    <th>
                        <input type="text" name="commented_user_name" id="comments" placeholder="名前書けよ" required autofocus>
                    </th>
                </tr>
                <tr>
                    <th>
                        連絡先：
                    </th>
                    <th>
                        <input type="text" name="email_address" id="comments" placeholder="メアド書けよ" required autofocus>
                    </th>
                </tr>
                <tr>
                    <th>
                        コメント（必須）：
                    </th>
                    <th>
                        <textarea name="body" placeholder="それって貴方の感想ですよね？" rows="5" required></textarea>
                    </th>
                </tr>
            </table>
            <div class="edit_button">
                <button type="submit" name="article_id" value="{{$article->id}}">投稿しる！！！</button>
            </div>
            <div id="blog-menu">
                <ul>
                    <li>
                        <a href="{{route('index')}}" class="btn">戻る</a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
@endsection
@section('postedComments')
         <div class="comments-wrap">
            <div class="comments-list">
                @foreach ($comments as $comment)
                <dl>
                    <dt>名前</dt>
                    <dd>{{$comment->commented_user_name}}</dd>
                </dl>
                <dl>
                    <dt>コメント</dt>
                    <dd>{{$comment->body}}</dd>
                </dl>
                    @endforeach
            </div>
        </div>
@endsection

@section('categoryMenu')
    <div class="categoriesSelect">
        <ul>
            <li>
                記事選択
            </li>
            <li>
                <a href="{{route('index')}}">全件表示</a>
            </li>
            @foreach($categories as $category)
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
