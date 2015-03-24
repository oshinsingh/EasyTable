<?php
include 'db.php';


$tbl_name="users"; // Table name 


// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);

$password = sha1( $password );
$count=0;
echo $password;
$sql="SELECT * FROM $tbl_name WHERE userid='$username' and password='$password'";
if($result=mysqli_query($connection,$sql))
{
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
}
// If result matched $username and $password, table row must be 1 row
if($count==1){

// Register $username, $password and redirect to file "login_success.php"

$_SESSION['username']=$username;

$_SESSION['password']=$password;
//echo $_SESSION['username'];die();
if(!isset($_SESSION['username'])){
header("location:homepage.php");
}
else 
header("location:lg_su.php");

}
else {
echo "Wrong Username or Password";
}
?>