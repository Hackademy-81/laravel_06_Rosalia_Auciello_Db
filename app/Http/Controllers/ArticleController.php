<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }

    public function showForm(){
        return view('articles/articles-form'); 
    }

    public function addArticle(ArticleRequest $request){
        Article::create(
            [
                // 'author'=> $request->input('author'),
                'author'=>Auth::user()->name,
                'title'=>$request->input('title'),
                'description'=>$request->input('description'), 
                'img'=>$request->has('img')? $request->file('img')->store('public') : '/img/defaultImg.jpg', 
            ]
            ); 

        return redirect(route('homePage'))->with('alertMessage', 'Articolo inserito con successo!'); 
    }

    public function user(){
        $articles= Article::where('author', Auth::user()->name)->get();
        return view('articles/user', ['articles'=>$articles]); 
    }

    public function showDetail($idArticle){
        $articles= Article::all(); 
        foreach($articles as $article){
            if($idArticle==$article['id']){
                return view('articles/detail-article', ['article'=>$article]); 
            }
        }
    }

    public function update(Article $article){
        return view('articles/update', ["article"=>$article]); 
    }
    

    public function edit (Request $request, Article $article){
        $article->author= $request->author;
        $article->title= $request->title;
        $article->description= $request->description; 
        $article->img= $request->has('img')? $request->file('img')->store('public') : $article->img;
        
        // metodo alternativo per immagini
        // if($request->file('img')){
        //     $article->img= $request->file('img')->store('public'); 
        // }
        $article->save(); 
        return redirect(route('pageDetail', ['idArticle'=>$article['id']])); 
    }
    
    public function delete(Article $article){
        $article->delete(); 
        return redirect(route('homePage'))->with('alertMessage', 'Articolo eliminato'); 
    }
}
