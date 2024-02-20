<?php

print_r($_POST);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$country=$_POST['country'];
$state=$_POST['state'];
$post=$_POST['postal_zip'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$product=$_POST['product'];
$price=$_POST['price'];
$pname=$_GET['name'];
$price=$_GET['price'];


include_once "../shared/connection.php";

$status=mysqli_query($conn,"insert into orders(fname,lname,country,state,post,address,email,phone,product,price) values('$fname','$lname','$country','$state',$post,'$address','$email',$phone,'$pname',$price)");

if($status){
    echo "Order Success!";
    header("location:order.html");
}
else{
    echo "Order Failed";
    echo mysqli_error($conn);
}

?>


