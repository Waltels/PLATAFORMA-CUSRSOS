<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('articles.index');
    }

    public function show(Article $article){

        /*$this->authorize('published', $article);

        $similares = Article::where('caticle_id',$article->carticle_id)
        ->where('id','!=',$article->id)
        ->where('status',3) 
        ->latest('id')
        ->take(5)  
        ->get();/*/

        return view('articles.show', compact('article'));
    }
}
