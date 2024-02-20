<?php

include_once "../shared/connection.php";

echo $_GET['id'];

$id=$_GET['id'];
$sql_obj=mysqli_query($conn,"select * from product where pid='$id'");
$row=mysqli_fetch_assoc($sql_obj);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>
<body>

    <div class="d-flex justify-content-center align-items-center">

    <form action="#" method="post" enctype="multipart/form-data" class="w-50 bg-warning p-5">
         <h3 class="text-center">Update Product</h3>
        
        <input class="form-control mt-2" value="<?php echo $row['name']; ?>" type="text" placeholder="Product Name" name="name">
        <input class="form-control mt-2" value="<?php echo $row['price']; ?>" type="text" placeholder="Product Price" name="price">

        <textarea class="form-control mt-2"  id="" cols="20" rows="5" placeholder="Product Details" name="details"><?php echo $row['details']; ?></textarea>

        <input class="form-control mt-2" type="text" value="<?php echo $row['code']; ?>" placeholder="Product Code" name="code">
        <label class="text-success ms-2 mt-2" >Category</label>

        <select class="form-control " id="category" name="category">
            <option 
            <?php  
                if($row['category']=='Electronics'){
                    echo "Selected";
                }
             ?>>Electronics</option>
            <option
            <?php  
                if($row['category']=='Home Applicances'){
                    echo "Selected";
                }
             ?>>Home Applicances</option>
            <option
            <?php  
                if($row['category']=='Fashion'){
                    echo "Selected";
                }
             ?>>Fashion</option>
            <option
            <?php  
                if($row['category']=='Sports'){
                    echo "Selected";
                }
             ?>>Sports</option>
        </select>
        <label class="text-success  ms-2 mt-2" value="">Active</label>
        <select class="form-control mt-2"  id="active" name="active">
            <option 
            <?php  
                if($row['active']=='Yes'){
                    echo "Selected";
                }
             ?>>
             Yes</option>
            <option
            <?php  
                if($row['active']=='No'){
                    echo "Selected";
                }
             ?>>No</option>
        </select>
        <input type="file" value="<?php echo $row['imgpath']; ?>" class="form-control mt-2" accept=".jpg,.png" name="pdt_img">

        <div class="text-center mt-3">
            <button class="btn btn-success">Update</button>
            
                <!-- <a href="update.php?id=$row[pid]" class="btn btn-primary">Update</button> -->
                </a>
        </div>
    

    </form>
    
    
    </div>
    <div class="mt-3 text-center">
        <a href="home.php" class="btn btn-primary">Return to Home</a>
    </div>
    
</body>
</html>


<?php


// $userid=$_SESSION['userid'];
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

$status="UPDATE product set name='$pname',price='$price',details='$details',code='$code',category='$category',imgpath='$impath',active='$active' where pid='$id'";

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
