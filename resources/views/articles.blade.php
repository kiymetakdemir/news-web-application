<!DOCTYPE html>
<html lang="en">
<head>
  <title>Haber Sayfası</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>


 <body>
<h1>Haberler</h1>
<?php		foreach ($articles as $article) {
			$url = route('articleroute', ['id' => ($article->id)]);
			echo "<hr><a href=$url >".($article->title)."</a>";
			echo "<br/><p><small>".($article->date)."</small></p>";
			echo "<p><small>Kaynak: <a href={{}}> ".($article->source)."</small></a></p><br>";
}
?>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 </body>