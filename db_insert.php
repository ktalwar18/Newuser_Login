<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ajax";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST["save"]))
{
	$first =$_POST["first"];
	$last  =$_POST["last"];
	$email =$_POST["email"];
	
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$first', '$last', 'email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();

?>
<form action="" method="post">
	Firstname<input type="text" name="first"><br>
	Lastname<input type="text" name="last"><br>
	Email<input type="email" name="email"><br>
	<input type="submit" name="save" value="Submit">
	</button>
</form>

