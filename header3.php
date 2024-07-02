<section class="header">

   <nav class="navbar"> 

      <!-- <a href="blog3.php">BLOG</a> -->


      <a href="add_post.php">Write Blog</a>
      <a href="blog3.php">View Blog</a>
      <a href="contact3.php">Contact Information</a>
      <a href="booking3.php">Booking Information</a>
      <a href="payment3.php">Payment Information</a>
      <a  href="profile_admin.php">
              <?php 
                  session_start();
                  echo $_SESSION['username'] ;
              ?>
              </a>
    
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
