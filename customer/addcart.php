<?php
include "../shared/authguard_customer.php";
include "menu.html";

$pid=$_GET['pid'];
$userid=$_SESSION['userid'];

echo "Received pid=$pid";
include "../shared/connection.php";
$status=mysqli_query($conn,"insert into cart(userid, pid) values($userid, $pid)");

if($status){
    echo "Added to cart successfully";
    header("location:viewcart.php");
}

else{
    echo "Failed to add cart";
    echo mysqli_error($conn);
}

?>
