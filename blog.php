<!-- <?php require 'header_post.php'; ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bridal Heaven : Blog</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>


<div class="container">

<?php @include 'header.php'; ?>


<div class="card-body">

<?php 

$post = new Post;

$fetch_post = $post->readAllPost();


foreach ($fetch_post as $value):
	
 ?>
 


	<h3 class="x3"><a style="text-decoration: none; font-family: cursive;" href="single_post.php?id=<?php echo $value->id; ?>"><?php echo $value->title; ?></a></h3>

	<img src="images/<?php echo $value->image;  ?> " class="x2"/>

   <!-- <p>author : </p><h3><a style="text-decoration: none; font-family: cursive;" href="single_post.php?id=<?php echo $value->id; ?>"><?php echo $value->author_name; ?></a></h3> -->
	<p style=font-family:roboto;font-size:20px; class="mt-3"><?php echo substr($value->content, 0,300); ?>&nbsp;<a style="text-decoration: none;" href="single_post.php?id=<?php echo $value->id; ?>">read more...</a></p>
   <br><br>

<?php endforeach; ?>

</div>
<?php @include 'footer.php'; ?>
</div>
</body>
</html>

