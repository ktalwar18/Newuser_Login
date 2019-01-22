<?php
session_Start();
if(!empty($_POST["em"])and !empty($_POST["ps"]))
{
	$i=0;
	$email=$_POST["em"];
	$password=$_POST["ps"];
	$con=mysql_connect("localhost","root","10b9cm9797###B000T","webpage");

	$q="select * from employee where emailid='$email' and password='$password'";
	$z=mysqli_query($con,$q);
	while($rows=mysqli_fetch_array($z))
	{
		$_SESSION["pankaj"]=$email;
		$i++;
		header("refresh:0;url=welcome.php");
		echo "<script>alert('right UserNAme And Password');</script>";
		
	}

	
	
	if($i==0)
	{
		$con=mysqli_connect("localhost","root","","ecommerce");

	$q="select * from admin where username='$email' and password='$password'";
	$z=mysqli_query($con,$q);
	while($rows=mysqli_fetch_array($z))
	{
		$_SESSION["admin"]=$email;
		$i++;
		header("refresh:0;url=admin.php");
		echo "<script>alert('right UserNAme And Password');</script>";
		
	}
	if($i==0)
	{
		//echo "<script>alert('Wrong UserNAme And Password');</script>";
		
	}
	}
}

?>
<form action="login.php" method="post">
emailid <input type="text" name ="a"><br><br>
Password<input type="text" name ="b">
<input type="submit" value="login">
</form>
<a href="newuser.php" >newuser</a>

<a href="forgot.php" >forgotten password</a>