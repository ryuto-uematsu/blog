<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //レコードを全件取得し、変数$articlesに代入する
        $articles = Article::all();
        //記事一覧を連想配列にし変数$dataに代入
        $data = ['articles' => $articles];
        /*ビューに渡すデータ。
        第一引数はテンプレートファイル
        第二引数はビューに渡すデータ*/
        return view('articles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Articleインスタンスを作成し、$articleに代入
        $article = new Article();
        //連想配列で$dataに$articleを代入
        $data = ['article' => $article];
        //$dataのviweを返す
        return view('articles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //バリデーション
        $this->validate($request, [
            //タイトルは225文字以内で必須
            'title' => 'required|max:255',
            //本文は必須
            'body' => 'required'
        ]);
        ///Articleインスタンスを作成し、$articleに代入
        $article = new Article();
        //入力したタイトルをtitleプロパティにセット
        $article->title = $request->title;
        //本文をbodyプロパティにセット
        $article->body = $request->body;
        //モデルインスタンスにsave()メソッドを実行
        $article->save();

        //記事一覧にリダイレクト
        return redirect(route('articles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
