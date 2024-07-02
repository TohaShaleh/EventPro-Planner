<?php 


try {

	$pdo = new PDO ('mysql:host=localhost;dbname=wedding planner','root','');
	
} catch (PDOException $e) {

	echo "<strong style=color:red;> Connection Error! </strong>".'<mark>'.$e->getMessage().'</mark>';
	
}


