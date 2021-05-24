<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article; 

class ArticlesController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { 
            $user = \Auth::user();
            $articles = Article::orderBy('id', 'desc')->paginate(8);

            $data = [
                'user' => $user,
                'articles' => $articles,
            ];
            
            return view('welcome', $data);
        }
        
        
        else 
        $articles = Article::orderBy('id', 'desc')->paginate(8);
        
        return view('welcome', [
            'articles' => $articles,
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
