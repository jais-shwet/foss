<?php
extract($_POST);
if(isset($register))
{
	$flag=true;
	if (empty($name)) {
	 $name_err="Name is Required";
	 $flag=false;
	}
	if (empty($email)) {
	 $email_err="Email is Required";
	 $flag=false;
	}
	if (empty($mobile)) {
	 $mob_err="Mobile Number is Required";
	 $flag=false;
	}
	if (empty($password)) {
	 $pass_err="Password is Required";
	 $flag=false;
	}
	if($password!=$cpassword)
	{
	 $cpass_err="Password does not matches";
	 $flag=false;
	}
	if($flag)
	{
		$sql_qry="insert into user(name,email,mobile,password) values('$name','$email','$mobile','$password')";
		$result=mysqli_query($con,$sql_qry);
		  if($result)
		  {
			echo "Registration Successful";
			header("location:login.php");
		  }
		  else
			echo "Registration failed";
	}
require_once "dbconnect.php";
if ($con)
 {
      $sql_qry="insert into user(name,email,mobile,password) values('$name','$email','$mobile','$password')";
      $result=mysqli_query($con,$sql_qry);
      if($result)
      {
      	echo "Registration Successful";
      	header("location:newlogin.php");
      }
      else
      	echo "Registration failed";
 }
}
?>
<form method="post" action="">
	Name :<input type="text" name="name"/><span style="color:red"> <?php if(isset($name_err)){ echo $name_err;}?></span><br/><br/>
	Email :<input type="text" name="email"/><span style="color:red"><?php if(isset($email_err)){ echo $email_err;}?></span><br/><br/>
	Mobile Number :<input type="text" name="mobile"/><span style="color:red"><?php if(isset($mob_err)){ echo $mob_err;}?></span><br/><br/>
	New Password :<input type="password" name="password"/><span style="color:red"><?php if(isset($pass_err)){ echo $pass_err;}?></span><br/><br/>
    Confirm Password :<input type="password" name="cpassword"/><span style="color:red"><?php if(isset($cpass_err)){ echo $cpass_err;}?></span><br/><br/>
   <input type="submit" name="register" value="SIGN UP"/>
</form >


<br><br><br>

<a href="newlogin.php">Login</a>