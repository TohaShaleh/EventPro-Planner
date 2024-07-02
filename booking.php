<?php
session_start();

$conn = mysqli_connect('localhost','root','','wedding planner');

if(isset($_POST['send'])){

  
   $name		=	$_SESSION['username'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $plan = $_POST['plan'];
   $include = $_POST['include'];
   $exclude = $_POST['exclude'];
   $eventdate = $_POST['eventdate'];
   $address = $_POST['address'];
   // $datetime = date_create()->format('Y-m-d H:i:s');

   $insert = "INSERT INTO `booking_table`(`name`, `email`, `number`, `plan`, `include`, `exclude`, `eventdate`, `address`) VALUES ('$name','$email','$number','$plan','$include','$exclude','$eventdate','$address')";

   mysqli_query($conn, $insert);

   header('location:message.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bridal Heaven : Booking</title>

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

   <h1 class="heading">booking</h1>

   <form action="" method="post">

      <div class="flex">

        

         <div class="inputBox">
            <span>Your E-mail</span>
            <input type="email" placeholder="Enter your e-mail..." name="email" required>
         </div>

         <div class="inputBox">
            <span>Your Number</span>
            <input type="text" placeholder="Enter your number..." name="number" required>
         </div>

         <div class="inputBox">
            <span>Choose Plan</span>
            <select name="plan">
               <option value="basic">Basic plan</option>
               <option value="premium">Premium plan</option>
               <option value="ultimate">Ultimate plan</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Include Service</span>
            <select name="include">
               <option value="None">None</option>
               <option value="wedding ceromony">wedding decoration</option>
               <option value="guest invitations">guest invitations</option>
               <option value="wedding registory">wedding registory</option>
               <option value="meals & drinks">meals & drinks</option>
               <option value="bride makeup">bride makeup</option>
               <option value="photography">photography</option>
               
               
            </select>
         </div>
         <div class="inputBox">
            <span>Exclude Service</span>
            <select name="exclude">
               <option value="None">None</option>
               <option value="wedding ceromony">wedding decoration</option>
               <option value="guest invitations">guest invitations</option>
               <option value="wedding registory">wedding registory</option>
               <option value="meals & drinks">meals & drinks</option>
               <option value="bride makeup">bride makeup</option>
               <option value="photography">photography</option>  
               
            </select>
         </div>
         <div class="inputBox">
            <span>Date of Event</span>
            <input type="date" placeholder="Enter date of event..." name="eventdate" required>
         </div>

         <div class="inputBox">
            <span>Your Address</span>            
            <textarea name="address" placeholder="Enter your address..." required cols="30" rows="10"></textarea>
         </div>

         

      </div>

      <input type="submit" value="submit" name="send" class="btn" >

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