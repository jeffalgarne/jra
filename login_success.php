<?
session_start();
if(isset($_SESSION['myusername'])){
   print "Welcome ". $_SESSION['myusername'];
    
}
echo "<br />";
    echo "<a href='logout.php'>logout";
    echo "</a>";



?>