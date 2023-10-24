<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <div class="site-title"><span>ミニブログ</span></div>
    </header>
    <main class="container">
        {{--記事作成へのリンク--}}
         <p><a href="{{ route('articles.create') }}">記事を書く</a></p>
        {{--変数は変える↓--}}
        @foreach ($articles as $article)
        <article class="article-item">
            {{--モデルからタイトルを取得--}}
            <div class="article-title">{{ $article->title }}</div>
            {{--モデルから本文を取得--}}
            <div class="article-body">{{ $article->body }}</div>
        </article>
        @endforeach
    </main>
    <footer>
        ミニブログ
    </footer>
</body>
</html>