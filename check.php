<?php
include "db.php";


$username = trim($_POST['username']);
$username = mysql_escape_string($username);

$query = "SELECT userid FROM users WHERE userid = '$username'";

if($result=mysqli_query($connection,$query))
	{
	$row=mysqli_num_rows($result);
	echo $row;
	
}

?>
