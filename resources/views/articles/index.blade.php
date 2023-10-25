{{--使用するレイアウトテンプレートのファイル名を指定--}}
@extends('layouts.app')
{{--@section(セクション名)～@endsectionに書かれた内容が@yieldに埋め込まれる--}}
@section('content')
<p><a href="{{ route('articles.create') }}">記事を書く</a></p>
@foreach ($articles as $article)
<article class="article-item">
    <div class="article-title">{{ $article->title }}</div>
    <div class="article-body">{{ $article->body }}</div>
</article>
@endforeach
@endsection()