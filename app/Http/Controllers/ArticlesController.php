<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Airline;

class ArticlesController extends Controller
{
    public function index()
    {
        if (\Auth::check()) { 
            $user = \Auth::user();
            $articles = Article::orderBy('id', 'desc')->paginate(8);

            $airlines = Airline::all();
            
        return view('welcome', [
            'user' => $user,
            'articles' => $articles,
            'airlines' => $airlines,
        ]);
    }
        
        $articles = Article::orderBy('id', 'desc')->paginate(8);
        
        $airlines = Airline::all();
        
        return view('welcome', [
            'articles' => $articles,
            'airlines' => $airlines,
        ]);
    }
    
    public function create()
    {
        $article = new Article;
        
        return view('welcome', [
            'article' => $article,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:255',
        ]);
         $article = new Article;
         $article->create([
            'content' => $request->content,
        ]);
        
        redirect('/');
    }
        
    
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        
        return redirect('/');
   }
}
