<section class="header">

<a href="home2.php" class="logo">Bridal Heaven<br><img src="images/logo.png" alt=""  width=180px height=50px> </a><br>

   <nav class="navbar">
     
      <a href="home2.php">HOME</a>
      <a href="about2.php">ABOUT</a>
      <a href="pricing2.php">PACKAGES</a>
      <a href="review2.php">REVIEWS</a>
      <a href="gallery2.php">GALLERY</a>

       

      <a href="blog2.php">BLOG</a>



      <a href="contact2.php">CONTACT</a>
      <a  href="profile.php">
              <?php 
                  session_start();
                  echo $_SESSION['username'] ;
              ?>
              </a>
      <!-- <a href="profile.php"><img src="images/Screenshot 2022-07-26 234602.png" alt=""></a> -->
      
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


