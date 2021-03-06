<?php

namespace App\Http\Controllers;

use App\Models\Article;
// use App\Article;
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
        //
        // $articles = Article::all();
        return view('article/index');
        // return view('article/index',['articles' => $articles]);
    }

    public function getArticle()
    {
        $articles = Article::all();
        return $articles;
    }

    public function addArticle(Request $request)
    {   
        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        $articles = Article::all();
        return $articles;
    }

    public function deleteArticle(Request $request)
    {   
        $article = Article::find($request->id);
        $article->delete();
        
        $articles = Article::all();
        return $articles;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return redirect('/article');
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
        $article->delete();
        return redirect('/article');
    }
}
