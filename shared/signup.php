<?php

//print_r($_POST);
$name=$_POST['name'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$user_type=$_POST['user_type'];

if($pass1!=$pass2){
    echo "Password Mismatch";
    die;
}
// echo "Password match";


include_once "connection.php";

$cipher_text=md5($pass1);

$status=mysqli_query($conn,"insert into customer(username,password,usertype) values('$name','$cipher_text','$user_type')");
if($status){
    echo "Signup Success!";
    header("location:login.html");
}
else{
    echo "Signup Failed";
    echo mysqli_error($conn);
}


?>