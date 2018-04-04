<?php
	session_start();
	require_once "dbconnect.php";
	if(isset($_SESSION['user_id'])===false){
		header('Location:newlogin.php');
	}
	
	if(isset($_GET['number'])===true){
		$user_id = $_SESSION['user_id'];
		$sql_qry="select * from user where user_id = ".$user_id;
		$result = mysqli_fetch_assoc(mysqli_query($con,$sql_qry));
		$name = $result['name'];
		
		$number = $_GET['number'];
		$ammount = (1000*$number);
		?>
		
		<?php
			if(isset($_POST['make_payment'])===true){ 
				$query1 = "INSERT INTO `payment`(`user_id`, `name`, `subjects_selected`, `ammount`) VALUES ('$user_id','$name',$number,'$ammount')";
				$query2 = "UPDATE `user` SET `has_paid`='1' WHERE `user_id` = '$user_id'";
				
				mysqli_query($con,$query1);
				mysqli_query($con,$query2);
				
				header('Location:payment_complete.php');
				
				
			}
		?>
		
		
		<h2>Hello, <?php  echo $result['name']; ?></h2>
		
		<h3>Thanks for selecting <?php echo $number; ?> tutorials from <b>FOSS</b> and you have to pay <?php echo $ammount; ?> rupees.</h3>
		
		<form action="" method="post">
			<input type="submit" name="make_payment" value="Confirm Payment">
		</form>
		
		<?php
	}
	else{
		header('Location:logout.php');
	}
?>