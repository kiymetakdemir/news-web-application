<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Comment;
use DB;

class ArticleController extends Controller
{
    //

    public function openArticle($id){
    	$title = DB::table('articles')->where('id', $id)->value('title');
    	$content = DB::table('articles')->where('id', $id)->value('content');
    	$date = DB::table('articles')->where('id', $id)->value('date');
    	$source = DB::table('articles')->where('id', $id)->value('source');
    	$comments = DB::table('comments')->where('articleid',$id)->orderBy('id','desc')->get();
    	return view('article', ['title'=>$title, 'content'=> $content, 'date'=>$date, 'source'=>$source, 'id'=>$id, 'comments'=>$comments]);
    }
    public function createComment(Request $request, $id){
    	$comment = new Comment;
    	$comment->name = $request->name;
    	$comment->content = $request->content;
    	$comment->articleid = $id;
    	$comment->save();
    	return redirect()->route('articleroute',['id'=>$id]);
    }
}
