<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <div class="site-title">ミニブログ</div>
    </header>
    <main class="container">
        {{--作成した記事の内容を送信する--}}
        <form action="{{ route('articles.store') }}" method="post">
            {{--csrfディレクティブはform要素内に記述しておくとCSRF攻撃を防ぐことができる--}}
            @csrf 
            <dl class="form-list">
                <dt>タイトル</dt>
                <dd><input type="text" name="title"></dd>
                <dt>本文</dt>
                <dd><textarea name="body" rows="5"></textarea></dd>
            </dl>
            <button type="submit">投稿する</button>
            {{--記事一覧に戻るリンク。ルート名で指定している。--}}
            <a href="{{ route('articles.index') }}">キャンセル</a>
        </form>
    </main>
    <footer>
        &copy; Laravel8 入門から開発実践まで
    </footer>
</body>
</html>