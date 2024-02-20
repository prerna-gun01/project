<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    body{
        font-family: sans-serif;
    }
    table, tr, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
    th, td{
        width: 150px;
        border: 1px;
    }
    th, td :hover{
        color: black;
    }
    td, th :hover{
        color: black;
    }
        
   </style>
   
</head>
<body>
    <!-- <h3>Vendor</h3> -->
    
</body>
</html>


<?php
include "../shared/authguard_vendor.php";
include "menu.html";
?>

<?php

    include_once "../shared/connection.php";

    $sql_obj=mysqli_query($conn,"select * from orders");
    echo "<table >
    <tr >
    <th>Orderid</th>
    <th>Product</th>
    
            <th >Price</th>
            <th >FirstName</th>
            <th >LastName</th>
            <th >Country</th>
            <th >State</th>
            <th style='width: 150px'>Address</th>
            <th >Phone</th>
            <th >Email</th>
            </tr></table>";
    
    while($row=mysqli_fetch_assoc($sql_obj)){        
       
        echo "
        
        <table><tr>
        <td>$row[orderid]</td>
        <td>$row[product]</td>
        <td >$row[price]</td>
        <td>$row[fname]</td>
        <td >$row[lname]</td>
        <td >$row[country]</td>
        <td>$row[state]</td>
        <td style='width: 150px'>$row[address]</td>
        <td >$row[phone]</td>
        <td >$row[email]</td>
        </tr></table>";
        
    }
    

?>
 <!-- <table><tr>
        <td>$row[product]</td>
        <td>$row[price]</td>
        <td>$row[fname]</td>
        <td>$row[lname]</td>
        <td>$row[country]</td>
        <td>$row[state]</td>
        <td>$row[address]</td>
        <td>$row[phone]</td>
        <td>$row[email]</td> -->