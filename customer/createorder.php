<?php
include "../shared/authguard_customer.php";
include "menu.html";
include "../shared/connection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../assets/style.css" rel="stylesheet">
</head>

<body>
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Checkout</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php

$sql_obj = mysqli_query($conn, "select *from shipping join product on shipping.pid=product.pid where userid=$_SESSION[userid]");

$total = 0;

$row = mysqli_fetch_assoc($sql_obj);
    //print_r($row);
    echo "
    <br>
    <br>
<div class='container'>
    <div class='col-md-6'>
        <div class='row mb-5'>
            <div class='col-md-12'>
                <h2 class='h3 mb-3 text-black'>Your Order</h2>
        <form class='form-group m-2' method='post' action='order.php?name=$row[name] && price=$row[price]'>
       
        <div class=''>
            <div class='py-2'>
            <table class='table site-block-order-table m-0'>
									<tbody>
										<tr>
                                        <td class='text-black font-weight-bold'><strong>$row[name]</strong></td>
                                        <td class='text-black'>Rs.$row[price]</td>
										</tr>
									</tbody>
								</table>

                


                <div class='form-group row'>
                    <div class='col-md-6'>
                        <label class='text-black'>First Name <span
                                class='text-danger'>*</span></label>
                        <input type='text' class='form-control' name='fname' required>
                    </div>
                    <div class='col-md-6'>
                        <label class='text-black'>Last Name <span
                                class='text-danger'>*</span></label>
                        <input type='text' class='form-control' name='lname' required>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='text-black'>Country <span class='text-danger'>*</span></label>
                    <input type='text' class='form-control' name='country' required>
                </div>
                <div class='form-group row'>
                    <div class='col-md-6'>
                        <label class='text-black'>State <span
                                class='text-danger'>*</span></label>
                        <input type='text' class='form-control' name='state' required>
                    </div>
                    <div class='col-md-6'>
                        <label class='text-black'>Postal/ Zip <span
                                class='text-danger'>*</span></label>
                        <input type='text' class='form-control' name='postal_zip' required>
                    </div>
                </div>

                <div class='form-group row  mb-3'>
                    <div class='col-md-12'>
                        <label class='text-black'>Address <span
                                class='text-danger'>*</span></label>
                        <input type='text' class='form-control' name='address' placeholder='Street address' required>
                    </div>
                </div>

                

                <div class='form-group row mb-5'>
                    <div class='col-md-6'>
                        <label class='text-black'>Email Address <span
                                class='text-danger'>*</span></label>
                        <input type='text' class='form-control' name='email' required>
                    </div>
                    <div class='col-md-6'>
                        <label class='text-black'>Phone <span class='text-danger'>*</span></label>
                        <input type='text' class='form-control' name='phone' placeholder='Phone Number' required>
                    </div>
                    
                </div>


            </div>
            <button class='btn btn-black btn-lg py-3'>Place Order</button>
        </div>
    </form>
	
</div>
</div>
</div></div></div></div></div>";
    $total += $row['price'];

?>

<?php
echo "<div class='untree_co-section pb-0 m-0'>
<div class='container'>
    <div class='col-md-6'>
        <div class='row mb-5'>
            <div class='col-md-12'>
                
<div class='p-3 p-lg-5 border bg-white p-0'>
<table class='table mb-5' class='padding-left:100px'>
<tbody><tr>
<td class='text-black font-weight-bold'><strong>Cart Subtotal</strong></td>
<td class='text-black'>Rs.$total</td>
</tr>
<tr>
<td class='text-black font-weight-bold'><strong>Order Total</strong></td>
<td class='text-black font-weight-bold'><strong>Rs.$total</strong></td>
</tr>
</tbody>
</table>
</div>

</div></div></div></div></div>
<br>";
?>

<html>
    <body>
    <footer class="footer-section pb-0" class="">
        <div class="container relative">
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
                    <p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus
                        malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
                        Pellentesque habitant</p>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Knowledge base</a></li>
                                <li><a href="#">Live chat</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Our team</a></li>
                                <li><a href="#">Leadership</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Nordic Chair</a></li>
                                <li><a href="#">Kruzo Aero</a></li>
                                <li><a href="#">Ergonomic Chair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. 
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    </body>
</html>