
<body>
<?php
//session_start();
echo $_SESSION['username'];die();
if(!isset($_SESSION['username'])){
header("location:homepage.php");
}
else 
header("location:lg_su.php");

?>




