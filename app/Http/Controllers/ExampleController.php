<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExampleController extends Controller
{
    //

    public function openArticle($id){
    	$title = DB::table('articless')->where('id', $id)->value('title');
    	$content = DB::table('articless')->where('id', $id)->value('content');
    	$date = DB::table('articless')->where('id', $id)->value('date');
    	$source = DB::table('articless')->where('id', $id)->value('source');
    	return view('article', ['title'=>$title, 'content'=> $content, 'date'=>$date, 'source'=>$source]);
    }
}
