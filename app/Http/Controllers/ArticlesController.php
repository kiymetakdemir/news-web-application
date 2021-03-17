<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArticlesController extends Controller
{
	public function showArticles(){
		$articles = DB::table('articles')->get();
		return view('articles',['articles'=>$articles]);
	}
    //
}
