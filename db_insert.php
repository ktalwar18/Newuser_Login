<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "emp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST["save"]))
{
	$email =$_POST["email"];
	$password  =$_POST["password"];
	
	
$sql = "INSERT INTO user (username, password)
VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();

?>
<form action="" method="post">
	Username<input type="text" name="email"><br>
	Password<input type="text" name="password"><br>
	<input type="submit" name="save" value="Submit">
	</button>
</form>

