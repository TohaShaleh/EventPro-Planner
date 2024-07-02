<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bridal Heaven : Booking</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<?php @include 'header2.php'; ?>
<p><br><br></p>
<p class="book_id"> Your booking is completed Successfully <br><br>

<?php
  $mysqli = new mysqli("localhost", "root", "", "wedding planner");

   /* check connection */
   if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
     exit();
   }

  if ($result = $mysqli->query("SELECT count(*) b_id FROM booking_table")) {

     /* fetch the first row as result */
     $row = $result->fetch_assoc();

    printf("Your booking id :  %d \n\n", $row['b_id']);

   /* close result set */
    $result->close();
 }

 /* close connection */
 $mysqli->close();
?>
<p><br><br></p>
<?php @include 'footer2.php'; ?></p>



</div>
    
</body>
</html>
