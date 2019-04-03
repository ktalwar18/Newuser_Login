<?php
$servername = "localhost";
$username = "root";
$password = "10b9cm9797###B000T";
$dbname = "webpage";


$conn =  mysql_connect($servername, $username, $password);
$db = mysql_select_db("webpage",$conn);



?>
<body>
	<form action="" method="post">
		Name<input type="text" name="Name" required><br><br>
		Email<input type="email" name="Email" required><br><br>
		Password<input type="password" name="Password" required><br><br>
		<input type="submit" name="sbmt" value="Register">

	</form>
</body>