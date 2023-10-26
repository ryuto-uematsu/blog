{{--もし配列データにエラーがあれば--}}
@if ($errors->any())
    <ul class="alert">
        {{--エラーメッセージの配列データを全件取り出す--}}
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif