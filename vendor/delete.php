<?php

include_once "../shared/connection.php";

echo $_GET['id'];

$id=$_GET['id'];
$sql_obj=mysqli_query($conn,"delete from product where pid='$id'");
// $row=mysqli_fetch_assoc($sql_obj);
echo "Product Deleted";
?>
<html>
    <head></head>
    <body>
    <div class="mt-3 text-center">
        <a href="home.php" class="btn btn-primary">Return to Home</a>
    </div>
    </body>
</html>