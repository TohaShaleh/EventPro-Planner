<?php

// include '../components/connect.php';

session_start();
$conn = mysqli_connect('localhost','root','','wedding planner');
if(isset($_POST['publish'])){

   $author_name = $_POST['author_name'];
   $author_name = filter_var($author_name, FILTER_SANITIZE_STRING);
   
   $title = $_POST['title'];
   $title = filter_var($title, FILTER_SANITIZE_STRING);
   $content = $_POST['content'];
   $content = filter_var($content, FILTER_SANITIZE_STRING);
   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../images/'.$image;

   $content2 = $_POST['content2'];
   $content2 = filter_var($content2, FILTER_SANITIZE_STRING);
   $image2 = $_FILES['image2']['name'];
   $image2 = filter_var($image2, FILTER_SANITIZE_STRING);
   $image2_size = $_FILES['image2']['size'];
   $image2_tmp_name = $_FILES['image2']['tmp_name'];
   $image2_folder = '../images/'.$image2;

   
      $insert = "INSERT INTO `posts`(`author_name`,`title`,`content`,`image`,`content2`,`image2`) VALUES ('$author_name','$title','$content','$image','$content2','$image2')";
    
    mysqli_query($conn, $insert);
 
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Post Blog</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>


<section class="post-editor">

   <h1 class="heading">add new blog</h1>

   <form action="" method="post" enctype="multipart/form-data">
     
      <p>Author<span>*</span></p>
      <input type="text" name="author_name" maxlength="400" required placeholder="Enter Your Name..." class="box">
     
      <p>Post Title <span>*</span></p>
      <input type="text" name="title" maxlength="100" required placeholder="Add Post Title..." class="box" cols="100" rows="5">

      <p>Post content1 <span>*</span></p>
      <textarea name="content" class="box" required maxlength="20000" placeholder="write your content..." cols="30" rows="10"></textarea>
      
      <p>Post image1</p>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png, image/webp">
   

      <p>Post content2 <span>*</span></p>
      <textarea name="content2" class="box" required maxlength="10000" placeholder="write your content..." cols="30" rows="10"></textarea>
      
      <p>Post image2</p>
      <input type="file" name="image2" class="box" accept="image2/jpg, image2/jpeg, image2/png, image2/webp">
      <div class="flex-btn">
         <input type="submit" value="publish post" name="publish" class="btn">
      </div>
   </form>

</section>



<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>