<?php
// print_r($_POST);



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "post";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST["age"]))
{
 
  
  
$sql = "INSERT INTO test (age, name)
VALUES ('".$_POST["age"]."', '".$_POST["name"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();

?>
