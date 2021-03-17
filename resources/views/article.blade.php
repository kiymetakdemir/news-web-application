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
<main class="container">
  <div class="row">
    <div class="col-md-8">
      <article class="blog-post">
      	<a href='/'> Anasayfa </a>
        <h1 class="blog-post-title">{{$title}}</h1>
        <p class="blog-post-meta">{{$date}}</p>
        <?php echo nl2br($content); ?>
        </article><!-- /.blog-post -->
</div>
</div>


 	<hr>

      <h4>Yorum yap:</h4>
      <div class="row">
      <div class="col-sm-1">
      <form method="post" action="{{route('commentroute',['id'=>$id])}}">
      	@csrf
          <p>İsim: <input type="text" name="name"/> </p>
          Yorum: <textarea name="content" rows="5" cols="40"></textarea>
        </div>
    </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
      </form>
      <br><br>
      
      <p> Yorumlar:</p>
<?php
	foreach($comments as $comment){
	echo '<div class="row">
	        <div class="col-sm-10">
	          <h4>'.$comment->name.' <small>'.$comment->created_at.'</small></h4>
	          <p>'.$comment->content.' <br/> </p>
	          <br>
	        </div>
	    </div>';
}
?>

    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="{{route('articleroute',['id'=>((int)$id-1)])}}}">Önceki</a></li>
    <li class="page-item"><a class="page-link" href="{{route('articleroute',['id'=>((int)$id+1)])}}}">Sonraki</a></li>
  </ul>
</nav>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 </body>