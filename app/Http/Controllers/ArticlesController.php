<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArticlesController extends Controller
{
	public function showArticles(){
		$articles = DB::table('articless')->get();
		foreach ($articles as $article) {
			echo "Title: ".($article->title);
			echo "<br/> Date: ".($article->date);
			echo "<br/> Content: ".($article->content);
			echo "<br/> Source: ".($article->source);
			echo "<br/>";
			$url = route('articleroute', ['id' => ($article->id)]);
			echo "<a href=$url > Haberi görüntülemek için tıklayınız. </a> <br/>";
			echo " <br/>";

	}
	}
    //
}
