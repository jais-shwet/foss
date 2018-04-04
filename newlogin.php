 <?php
session_start();
require_once "dbconnect.php";

if(isset($_SESSION['user_id'])){
	//header('Location:tutorials.php');
	$user_id =  $_SESSION['user_id'];
	$query =  "select * from user where user_id = '$user_id'";
	$result=mysqli_fetch_assoc(mysqli_query($con,$query));

	if($result['has_paid']==1){
		header('Location:payment_complete.php');
	}
	else{
		header('Location:tutorials.php');
	}
	
}

extract($_POST);
if(isset($login))
{
	
	$sql_qry="select * from user where email='$email' and password='$password'";
	
	$resultset=mysqli_query($con,$sql_qry);
	$count=mysqli_num_rows($resultset);
	if($count==1)
	{
		$row=mysqli_fetch_assoc($resultset);
		
		$_SESSION['user_id']=$row['user_id'];
		$uid=$row['user_id'];
		header('Location:newlogin.php');
	}
	else{
		echo "Login Failed";
	}

}	
?>

<?php
	if(isset($_SESSION['user_id'])===false){
	
?>

<form method="post" action="">
	Email : <input type="text" name="email"/><br/><br/>
	Password : <input type="password" name="password"/><br/><br/> 
	 <input type="submit" name="login" value="LOGIN"/>
</form >

<br><br><br>

<a href="index.php">Sign In.</a>

<?php
	}
?>