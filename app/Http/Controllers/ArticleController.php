<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showForm(){
        return view('articles/articles-form'); 
    }

    public function addArticle(ArticleRequest $request){
        Article::create(
            [
                'author'=> $request->input('author'),
                'title'=>$request->input('title'),
                'description'=>$request->input('description'), 
                'img'=>$request->has('img')? $request->file('img')->store('public') : '/img/defaultImg.jpg', 
            ]
            ); 

        return redirect(route('homePage'))->with('alertMessage', 'Articolo inserito con successo!'); 
    }
}
