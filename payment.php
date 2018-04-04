<table>
	<tr><th>User ID.</th><th>Name</th><th>Email</th><th>Final Amount</th></tr>
<?php
require_once "dbconnect.php";
$sql_query="select user.*,payment.* from user inner join payment on user.user_id=payment.user_id";
	$result=mysqli_query($con,$sql_query);
  while($row=mysqli_fetch_assoc($result))
  {
  ?>
  <tr>
		<td><?php echo $row['user_id']?></td><td><?php echo $row['name']?></td><td><?php echo $row['email']?></td>
		<td><?php echo $row['amount']?></td></tr>
	</tr>
<?php
}
?>

</table>