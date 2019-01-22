

<form action="login_page.php" method="post"> 
    User Name:<br> 
    <input type="text" name="username"><br><br> 
    Password:<br> 
    <input type="password" name="password"><br><br> 
    <input type="submit" name="submit" value="Login"> 
</form> 


<?php 
if(isset($_POST['submit'])){ 
    $dbHost = "localhost";        //Location Of Database usually its localhost 
    $dbUser = "root";            //Database User Name 
    $dbPass = "10b9cm9797###B000T";            //Database Password 
    $dbDatabase = "newuser";    //Database Name 
     
    $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 
    //Connect to the databasse 
    mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
    //Selects the database 
     
    /* 
    The Above code can be in a different file, then you can place include'filename.php'; instead. 
    */ 
     
    //Lets search the databse for the user name and password 
    //Choose some sort of password encryption, I choose sha256 
    //Password function (Not In all versions of MySQL). 
    $usr = mysql_real_escape_string($_POST['user_name']); 
    $pas = hash('sha256', mysql_real_escape_string($_POST['pass_word'])); 
    $sql = mysql_query("INSERT INTO details (user_name, pass_word) VALUES ('".$user_name."', '".$pass_word."')";

    
?> 
