<?php
session_start();

$conn = mysqli_connect('localhost','root','','wedding planner');

if(isset($_POST['send'])){

   // $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $address = $_POST['address'];
   $message = $_POST['message'];
   $name		=	$_SESSION['username'];
   // date_default_timezone_set('Asia/Dhaka');
   // echo datetime("d-M-y h:i") ;


   // $datetime = new DateTime('now', new DateTimezone('Asia/Dhaka'));
   // echo $datetime->format('F j, Y, g:i a');
   // $datetime = date_create()->format('Y-m-d H:i:s');
   $insert = "INSERT INTO `contact_form`(`name`, `email`, `number`,`address`, `message`) VALUES ('$name','$email','$number','$address','$message')";

   mysqli_query($conn, $insert);

   header('location:message3.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bridal Heaven : Contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header2.php'; ?>

<section class="contact">

   <h6 class="heading">Contact Us</h6>

   <form action="" method="post">

      <div class="flex">

        

         <div class="inputBox">
            <span>Your E-mail</span>
            <input type="email" placeholder="Enter Your E-mail..." name="email" required>
         </div>

         <div class="inputBox">
            <span>Your Number</span>
            <input type="text" placeholder="Enter Your Number..." name="number" required>
         </div>

         <div class="inputBox">
            <span>Your Address</span>            
            <textarea name="address" placeholder="Enter Your Address..." required ></textarea>
         </div>

         <div class="inputBox">
            <span>Your Message</span>            
            <textarea name="message" placeholder="Enter Your Message..." required ></textarea>
         </div>

         

      </div>

      <input type="submit" value="send" name="send" class="btn">
      <!-- <p>You must log in first. <a href="login.php">Login</a></p> -->

   </form>

</section>

<?php @include 'footer2.php'; ?>
</div>
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>