<?php
include 'db.php';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$name = $instname = $email = $address = $phone = "";
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
//include 'library/config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $instname = test_input($_POST["instname"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $phone = test_input($_POST["phone"]);
  $confid= $_GET['confid'];
  $catid = test_input($_POST["catid"]);
  $subcatid = test_input($_POST["subcatid"]);
  $c=mysqli_query($connection,"SELECT * FROM users WHERE name='$name'");
  $matches=mysqli_num_rows($c);$matches++;
 $title=$_POST["title"];
  $userid=$name.$matches;
  $aabsract=$_POST['aabstract'];
  $keywordsi=$_POST['keywordsi'];
  mysqli_query($connection,"INSERT INTO users VALUES ('$name','$instname','$address','$email',$phone,'$userid','lkolko')");

//$catid=mysqli_query($connection,"SELECT catid FROM category WHERE category_name='$_POST["category"]'");
//$subcatid=mysqli_query($connection,"SELECT subcatid FROM subcategory WHERE subcategory_name='$_POST["subcategory"]'");

$res=mysqli_query($connection,"INSERT INTO submit_paper VALUES (null,'$userid','$confid','$title', '$aabsract' ,$subcatid,'$keywordsi','$fileName', $fileSize, '$fileType', '$content')");

if(!$res) die('Error, query failed'); 

//include 'library/closedb.php';
include 'Send_Mail.php';
$to=$email;
$subject="EasyTable account details";
$body='Hi, <br/> <br/> We thank you for choosing us to submit your paper. Your userid:'.$userid.'password=lkolko.Enjoy our free services!<br/>Happy paper submission to you';
Send_Mail($to,$subject,$body);

//kahan daalna hai?
echo "<br>File $fileName uploaded<br>Enjoy a free account on EasyTable:<br>Your Account details have already been mailed to you<br>";
} 

}


?>







