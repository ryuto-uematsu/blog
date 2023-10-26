{{--使用するレイアウトテンプレートのファイル名を指定--}}
@extends('layouts.app')
{{--@section(セクション名)～@endsectionに書かれた内容が@yieldに埋め込まれる--}}
@section('content')
{{--エラーメッセージを表示するコードを埋め込んでいる--}}
@include('commons.errors')
<form action="{{ route('articles.store') }}" method="post">
    {{--サブビューはページの内側に取り込むことができる--}}
    @include('articles.form')
    <button type="submit">投稿する</button>
    <a href="{{ route('articles.index') }}">キャンセル</a>
</form>
@endsection()