<?php 
	session_start();
	require_once "dbconnect.php";
	if(isset($_SESSION['user_id'])===false){
	header('Location:newlogin.php');
	
	
	if(isset($_POST['submit'])){
		$subjects = $_POST['subject'];
		foreach($subjects as $subject){
			echo $subject."<br>";
		}
	}
}
 ?>
 
<form action="" method="post">
<h2>LIST OF TUTORIALS</h2>

<ul>
	<li>
		Tutorial1<input type="checkbox" name="subject[]" id="subject" value="Tutorial1">
	</li>
	<li>
		Tutorial2<input type="checkbox" name="subject[]" id="subject" value="Tutorial2">
	</li>
	<li>
		Tutorial3<input type="checkbox" name="subject[]" id="subject" value="Tutorial3">
	</li>
	<li>
		Tutorial4<input type="checkbox" name="subject[]" id="subject" value="Tutorial4">
	</li>
	<li>
		Tutorial5<input type="checkbox" name="subject[]" id="subject" value="Tutorial5">
	</li>
	<li>
		Tutorial6<input type="checkbox" name="subject[]" id="subject" value="Tutorial6">
	</li>
	<li>
		Tutorial7<input type="checkbox" name="subject[]" id="subject" value="Tutorial7">
	</li>
	<li>
		Tutorial8<input type="checkbox" name="subject[]" id="subject" value="Tutorial8">
	</li>
	<li>
		Tutorial9<input type="checkbox" name="subject[]" id="subject" value="Tutorial9">
	</li>
	<li>
		Tutorial10<input type="checkbox" name="subject[]" id="subject" value="Tutorial10">
	</li>
	<?php 
		if(isset($_POST['submit'])==false){
			?>
				<li>
					<input type="submit" value="submit" name="submit">
				</li>
			<?php
		}

	 ?>
	
</ul>
    
</form>


 <?php 
 global $ammount;
 global $rupee;
	if(isset($_POST['submit'])){
		$count = 0;
		$name = $_POST['subject'];
		foreach($name as $subject){
			++$count;
			echo $subject."<br>";
		}
		{
	
}                     													
		$rupee = $count*1000;
		$ammount = $rupee;
		echo "<br>You have selected ". $count . " subjects and you have to pay ". $rupee ." rupees<br>";
	

		?>
			<a href="make_payment.php?number=<?php echo $count; ?>"> Complete order.</a>
			
   
		<?php
	}
 ?>

