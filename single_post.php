
<!-- <?php require 'header_post.php'; ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Bridal Heaven : Blog</title>
</head>
<body>
<div class="container">

<?php @include 'header.php'; ?>




	<?php

	 if (isset($_GET['id'])) {
	 	
	 	$id = $_GET['id'];
	 }

$post = new Post;

$fetch_singlePost = $post->readPostById($id);


	 ?>
	



<div class="card-body2">
<!-- <h3 class="x3"><a style="text-decoration: none; font-family: cursive;" href="single_post.php?id=<?php echo $value->id; ?>"><?php echo $value->title; ?></a></h3> -->

<h3 class="x3"><?php echo $fetch_singlePost->title; ?></h3><br>
<!-- <h3 class="x4"><?php echo $fetch_singlePost->date_of_event; ?></h3><br> -->
<img src="images/<?php echo $fetch_singlePost->image;  ?> " class="x5"/>
<p style=font-family:roboto;><?php echo $fetch_singlePost->content; ?></p>
<img  src="images/<?php echo $fetch_singlePost->image2;  ?> " class="x5"/>
<p style=font-family:roboto;><?php echo $fetch_singlePost->content2; ?></p>
<!-- <p style=font-family:roboto;><?php echo $fetch_singlePost->content; ?></p><br> -->
<p>Author: </p>
<p style=font-family:roboto;><?php echo $fetch_singlePost->author_name; ?></p>
<p>Blog created at:</p>
<p style=font-family:roboto;><?php echo $fetch_singlePost->date_of_event; ?></p>
</div>

<?php @include 'footer.php'; ?>
	</div>


</body>
</html>



