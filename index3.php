<?php
session_start();
$conn = mysqli_connect('localhost','root','','wedding planner');

$var_value = $_SESSION['varname'];
// Create connection

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM transaction_table WHERE t_id=$var_value";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($conn);
header('location:payment3.php');
?>