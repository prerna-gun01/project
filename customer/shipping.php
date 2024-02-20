<?php
include "../shared/authguard_customer.php";
include "menu.html";

$pid=$_GET['pid'];
$cartid=$_GET['cartid'];
$userid=$_SESSION['userid'];

echo "Received pid=$pid cartid=$cartid";
include "../shared/connection.php";
$status=mysqli_query($conn,"insert into shipping(userid, pid, cartid) values($userid, $pid,$cartid)");

if($status){
    echo "Order placed successfully";
     header("location:createorder.php");
}

else{
    echo "Failed to place order";
    echo mysqli_error($conn);
}

?>