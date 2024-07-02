<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bridal Heaven : PAYMENT</title>

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

<section class="payment">

   <h1 class="heading">Payment</h1>

   <div class="box-container">

      <div class="box">
      <img src="images/bkash.png" alt="" width =200px height=180px>
         <h3>Payment with Bkash</h3>
         <div class="list">
        
            <p> <i class="fas fa-check"></i> Bkash Merchant Number : 01759537552</p>
            
         </div>
         <!-- <a href="transaction.php" class="btn">click here</a> -->
      </div>

      <div class="box">
      <img src="images/nagad.png" alt="" width =200px height=180px>
         <h3>Payment with Nagad</h3>
         <div class="list">
        
        <p> <i class="fas fa-check"></i> Nagad Merchant Number : 01759537552</p>
        
     </div>
         <!-- <a href="transaction.php" class="btn">click here</a> -->
      </div>

      <div class="box">
      <img src="images/rocket.png" alt="" width =200px height=180px>
         <h3>Payment with Rocket</h3>
         <div class="list">
        
            <p> <i class="fas fa-check"></i> Rocket Merchant Number : 01759537552</p>
            
         </div>
         <br><h3><b>Complete Your Payment Process</b></h3>
         <a href="transaction.php" class="btn">click here</a><br><br>
      </div>

   </div>


<?php @include 'footer2.php'; ?>

</div>




<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>