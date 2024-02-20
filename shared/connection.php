<?php
$conn=new mysqli("localhost","root","","prerna");
if($conn->connect_error){
    echo "Connection Failed";
    die;
}
?>