
<body>
<?php
session_start();
$wow=$_SESSION['username'];
if(!isset($wow)){
header("location:homepage.php");
}
if(isset($_GET['confid']))	{
include "db.php";
$query="SELECT name,instname,address,email,phone from users where userid='$wow'";
if($result=mysqli_query($connection,$query))
	{
$row=mysqli_fetch_row($result);
$json = array(array('field' => 'name', 
                    'value' => $row[0]), 
              array('field' => 'instname', 
                    'value' => $row[1]),
              array('field' => 'address', 
                    'value' => $row[2])	,
              array('field' => 'email', 
                    'value' => $row[3]),
              array('field' => 'phone', 
                    'value' => $row[4])
              );
echo json_encode($json );
//header("location:fillform.php");


}}
?>




