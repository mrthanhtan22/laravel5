<?php

namespace App\Http\Controllers;

use App\Articles;

use Illuminate\Http\Request;

use App\Http\Requests\CheckArticlesRequest;

use Carbon\Carbon;



class ArticlesController extends Controller
{
    public function index(){
    	$articles = Articles::all();
    	return view('articles')->with('articles', $articles);
    }
    public function create(){
    	return view('create');
    }
    public function store(CheckArticlesRequest $request){

             $dulieu_tu_input = $request->all();

           Articles::create($dulieu_tu_input);

            return redirect('articles');
    }
    public function edit($id){
        $article = Articles::findOrFail($id);
        return view('edit', compact('article'));
    }
    public function update($id, Request $request){
        $articles = Articles::findOrFail($id);
        $articles->update($request->all());
        return redirect('articles'); 
    }
   
}
