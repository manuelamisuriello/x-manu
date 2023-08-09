<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    
public function homepage(){
    $articles = Article::orderBy('created_at', 'desc')->take(4)->get();
    return view('welcome', compact('articles'));
}
public function setLanguage($lang)
{
    
    session()->put('locale', $lang);
    return redirect()->back();
    
}
public function locale($locale)
{
    app()->setLocale($locale);
    $article = Article::first();
    return view('article.show', compact('article'));
}
}