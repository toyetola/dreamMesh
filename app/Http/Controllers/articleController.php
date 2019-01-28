<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class articleController extends Controller
{
    Public function index(){
        return Article::all();
    }

    Public function show($id){
        Article::where('id', $id)->first();
    }

    Public function create(Request $request){
        $article = Article::create($request->all());
        return response()->json(['article'=>$article], 200);
    }

    Public function update(Request $request, Article $article){
        $article->update($request->all());
        return response()->json(['article'=>$article]);
    }

    Public function delete(Article $article){
        $article->delete();
    }


}
