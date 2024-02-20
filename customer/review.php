<?php
print_r($_POST);

$email=$_POST['email'];
$feedback=$_POST['feedback'];



include_once "../shared/connection.php";

$status=mysqli_query($conn,"insert into feedback(email,feedback) values('$email','$feedback')");

if($status){
    echo "Feedback Received!";
    header("location:thankyou.html");
}
else{
    echo "Feedback Not Received";
    echo mysqli_error($conn);
}
?>