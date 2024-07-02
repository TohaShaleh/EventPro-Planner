

<!-- logged in user information -->

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Bridal Heaven : Profile User</title>
  </head>
  <body>

  <div class="container">

<?php @include 'header2.php'; ?>


<?php  if (isset($_SESSION['username'] )) : ?>
    <p class="prof" >Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    
    <p> <a class="btn" style="float: right; " href="home.php?logout='1'" style="color: red;">Logout</a> </p><br><br><br><br>
<?php endif ?>

<?php @include 'footer.php'; ?>

</div>
    
  </body>
  </html>