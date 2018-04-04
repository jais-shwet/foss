<?php
	session_start();
	require_once "dbconnect.php";
	if(isset($_SESSION['user_id'])===false){
		header('Location:newlogin.php');
	}
	$user_id = $_SESSION['user_id'];
	$sql_qry="select * from user where user_id = ".$user_id;
	$result = mysqli_fetch_assoc(mysqli_query($con,$sql_qry));
	
	if($result['has_paid']==0){
		header('Location:tutorials.php');
	}

?>

<h2>Hello, <?php  echo $result['name']; ?></h2>
		
Your payment is successful.

<br><br><br>

<a href="logout.php" type="button">
	Logout.
</a>