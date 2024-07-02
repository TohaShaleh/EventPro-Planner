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

<?php @include 'header3.php'; ?>


<p style="text-allign:center;white-space:pre-wrap" class>
<?php


$conn = mysqli_connect('localhost','root','','wedding planner');



$sql = "SELECT * FROM booking_table order by b_id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // "<p style='color:red;'>"
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $_SESSION['varname'] = $row["b_id"];
      //echo $row["b_id"];

         echo ' <a class="btn" href="index1.php">Delete</a>';
         echo "<br>";


        echo '<span class="city">'."  Date and Time of Booking: " .'</span>'.  $row["datetime"]. "<br>" . 
        '<span class="city">'."  Booking ID : " .'</span>'. $row["b_id"]. "<br>" . 
        '<span class="city">'."  Name: " .'</span>'. $row["name"]. "<br>" . 
        '<span class="city">'."  E-mail: " .'</span>'. $row["email"]. "<br>" .
        '<span class="city">'."  Number: " .'</span>'. $row["number"]. "<br>" . 
        '<span class="city">'."  Plan: " .'</span>'. $row["plan"]. "<br>" . 
        '<span class="city">'."  Included Service: " .'</span>'. $row["include"]. "<br>" . 
        '<span class="city">'."  Excluded Service: ".'</span>' . $row["exclude"]. "<br>" . 
        '<span class="city">'."  Date of Event: " .'</span>'. $row["eventdate"]. "<br>" . 
        '<span class="city">'."  Address: " .'</span>'. $row["address"]. "<br>". "<br>" ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
//echo json_encode($data_array);
?>
</p>
</div>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>