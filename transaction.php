<?php
session_start();

$conn = mysqli_connect('localhost','root','','wedding planner');

if(isset($_POST['send'])){
   $booking_id = $_POST['booking_id'];
   $name		=	$_SESSION['username'];
   $payment_system = $_POST['payment_system'];
   $transaction_id = $_POST['transaction_id'];
  
   // $datetime = date_create()->format('Y-m-d H:i:s');

   $insert = "INSERT INTO `transaction_table` (`booking_id`,`name`,`payment_system`, `transaction_id`) VALUES ('$booking_id','$name','$payment_system','$transaction_id')";

   mysqli_query($conn, $insert);

   header('location:message2.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bridal Heaven :PAYMENT</title>

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

<section class="transaction">

   <h6 class="heading">Complete your payment</h6>

   <form action="" method="post">

      <div class="flex">
      <div class="inputBox">
            <span>Booking ID</span>
            <input type="text" placeholder="Enter booking id..." name="booking_id" required>
         </div>

      <div class="inputBox">
            <span>Choose Payment System</span>
            <select name="payment_system">
               <option value="Bkash">Bkash</option>
               <option value="Nagad">Nagad</option>
               <option value="Rocket">Rocket</option>
            </select>
         </div>

         <div class="inputBox">
            <span>Transaction ID</span>
            <input type="text" placeholder="Enter transaction id..." name="transaction_id" required>
         </div>  

      </div>

      <input type="submit" value="submit" name="send" class="btn">

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