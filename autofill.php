<?php
include "db.php";
echo "hello";


$username = strip_tags($_POST['username']);
$password=sha1(strip_tags($_POST['password']));

$query = "SELECT * FROM users WHERE userid = '$username' and password='$password'";

if($r=mysqli_query($connection,$query))
	{
	$row=mysqli_num_rows($r);
	if($row==1)
		{
			echo $t[3];/*
			$t=mysqli_fetch_row($r);
//build the JSON array for return
$json = array(array('field' => 'name', 
                    'value' => $t[0]), 
              array('field' => 'instname', 
                    'value' => $t[1]),
              array('field' => 'address', 
                    'value' => $t[2]),
              array('field' => 'email', 
                    'value' => $t[3]),
              array('field' => 'phone', 
                    'value' => $t[4])
              );*/
echo json_encode($json );

		}
	else $msg="wrong info";
}



?>