<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome() {
        $articles= Article::all()->sortDesc(); 
        return view('welcome', ['articles'=>$articles]);
    }
}
