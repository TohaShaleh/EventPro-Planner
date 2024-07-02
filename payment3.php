

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bridal Heaven : Payment</title>

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

// $sqlselect= "SELECT * from booking_table  ORDER BY id DESC";
// $records= mysqli_query($conn ,$sqlselect);


$sql = "SELECT * FROM transaction_table order by t_id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // "<p style='color:red;'>"
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $_SESSION['varname'] = $row["t_id"];
      //echo $row["b_id"];

      //On page 2
      

//On page 2

      
      echo ' <a class="btn" href="index3.php">Delete</a>';
      echo "<br>";

        echo '<span class="city">'."  Date and Time of Payment: " .'</span>'.  $row["datetime"]. "<br>" . 
        '<span class="city">'."  Name: " .'</span>'. $row["name"]. "<br>" . 
        '<span class="city">'."  Booking ID: " .'</span>'. $row["booking_id"]. "<br>" .
        '<span class="city">'."  Payment Method : " .'</span>'. $row["payment_system"]. "<br>" . 
        '<span class="city">'."  Transaction ID : " .'</span>'. $row["transaction_id"]. "<br>". "<br>" ."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
//echo json_encode($data_array);





?> </p>

</div>



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>