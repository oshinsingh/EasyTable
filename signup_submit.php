<?php

if(isset($_POST['signup'])) {
    require "db.php";
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = strip_tags($_POST['username']);
         $name = strip_tags($_POST['name']);
         $address = strip_tags($_POST['address']);
         $phone = strip_tags($_POST['phone']);
          $instname = strip_tags($_POST['instname']);
        $password=sha1(strip_tags($_POST['password']));
        $repass=sha1(strip_tags($_POST['repassword']));
        $email = strip_tags($_POST['email']);
        if($username==''){
            header('location:./signup.php?error=user name empty');
            exit();
        }
        if(!strcmp($password,$repass)==0) {
            header('Location:./signup.php?error=password not match');
            exit();
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('location:signup.php?error=email not valid');
            exit();
        }
        $query = "SELECT * FROM users WHERE userid='$username'";
        if($result = mysqli_query($connection,$query))
        {
        if (mysqli_num_rows($result) >= 1) {
            //Username is taken
            header('location:signup.php?error=username already taken. please try another one');
            exit();
        }}
        /*This insert command for username, password and email. if you need any other field you can insert it here*/
        echo " ".$name." ".$address." ".$email." ".$password." ".$phone;
        $query="INSERT INTO users VALUES ('$name','$instname','$address','$email',$phone,'$username','$password')";
        $result=mysqli_query($connection,$query) ;
        if(!$result) die("problem insert");
        //Here you can write conformation or success message or use any redirect
        echo "Register success";
    }
}
    header('location:homepage.php?msg=welcome ');
    exit();

?>