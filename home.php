<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bridal Heaven</title>

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

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/296312183_685412369618683_5551122325695084660_n.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <p>Make your wedding a celebration that brings you and your partner —and the family and friends who celebrate with you —closer together.</p>
              
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/296268296_685412406285346_8040243805354770872_n.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <p>A happy marriage is the union of two good forgivers.</p>
              
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/296166874_684061016420485_6892680420317403647_n.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <p>Marriage is like a tense, unfunny version of Everybody Loves Raymond, only it doesn’t last 22 minutes. It lasts forever.</p>
              
            </div>
         </div>
         

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>
<section>
   <h1>Let's begin from a quick video below…</h1><br>
<video controls autoplay muted width=100% height="500" >
  <source src="images/Bridal heaven video clip.mp4" type="video/mp4">
</video>
</section>




<section class="services">

   <h1 class="heading">our services</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/photography.jpg" alt="">
            <div class="content">
               <h3>photography</h3>
               <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p> -->
               <a href="pricing.php" class="btn">Book Now</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/registory.jpg" alt="">
            <div class="content">
               <h3>wedding registory</h3>
               <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p> -->
               <a href="pricing.php" class="btn">Book Now</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/guest.jpg" alt="">
            <div class="content">
               <h3>guest list</h3>
               <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p> -->
               <a href="pricing.php" class="btn">Book Now</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/makeup.jpg" alt="">
            <div class="content">
               <h3>Bride Makeup</h3>
               <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p> -->
               <a href="pricing.php" class="btn">Book Now</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/ceremony.jpg" alt="">
            <div class="content">
               <h3>wedding decoration</h3>
               <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p> -->
               <a href="pricing.php" class="btn">Book Now</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/dining.jpg" alt="">
            <div class="content">
               <h3>fine dining</h3>
               <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p> -->
               <a href="pricing.php" class="btn">Book Now</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>
<section class ="Back">
<div class="ok">
<img src="images/cb7d08f9596f2270c606305c60cfa0eb.jpg" alt="" style="width:100%;">
  <!-- <div class="centered">
   <p>You  will find, as you  look back upon your life, that  the moments when you  have truly lived  are the moments when you  have done  things in the spirit of  love. ________Henry Drummond</p></div>
</div> -->
</section>



<?php @include 'footer.php'; ?>

</div>



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>