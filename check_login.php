<?php
$host = "localhost";
$username = "root";
$pass = "";
$db_name = "tech_support";
$db_table = "login";

mysql_connect($host, $username, $pass) or die ("Can't Connect");

mysql_select_db($db_name) or die ("Can't Select Database");

$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];

//Sql Injection

$myusername = stripslashes($myusername);
$mypassword = stripcslashes($mypassword);

$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql = "Select * FROM $db_table where user='$myusername' and password='$mypassword'";

$result = mysql_query($sql);

$count = mysql_num_rows($result);


if ($count==1){
    
   session_register('myusername');
  session_register('mypassword');
  header("location:login_success.php");
}

else {
    
    header("location:index.php");
    
}


?>
