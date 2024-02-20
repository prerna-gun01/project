<?php

include "../shared/authguard_vendor.php";
$userid=$_SESSION['userid'];
$id=$_GET['id'];

include_once "../shared/connection.php";

echo $_GET['id'];
$pname=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];
$code=$_POST['code'];
$category=$_POST['category'];
$active=$_POST['active'];

$impath="../shared/images/".$_FILES['pdt_img']['name'];
move_uploaded_file($_FILES['pdt_img']['tmp_name'],$impath);

// $status=mysqli_query($conn,"insert into product(name,price,details,code,category,imgpath,uploaded_by,active) values('$_POST[name]',$_POST[price],'$_POST[details]','$_POST[code]','$_POST[category]','$impath',$userid,'$_POST[active]')");

$status="UPDATE product set name='$pname',price='$price',details='$details',code='$code',category='$category',imgpath='$impath',active='$active',uploaded_by='$userid' where pid='$id'";

$data=mysqli_query($conn,$status);

if($data)
{
    echo "Product Updated Successfully";
    // header("location:home.php");
}
else
{
    echo "Error in Product Upload";
    echo mysqli_error($conn);
}


?>