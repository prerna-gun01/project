<?php
include "../shared/authguard_customer.php";
include "menu.html";
include "../shared/connection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <link href="../assets/style.css" rel="stylesheet">
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Cart</h1>
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

$sql_obj = mysqli_query($conn, "select *from cart join product on cart.pid=product.pid where userid=$_SESSION[userid]");

$total = 0;

while ($row = mysqli_fetch_assoc($sql_obj)) {
    //print_r($row);
    echo "<div class='untree_co-section pb-0'>
    <div class='container'>
        <div class='row mb-5'>
            <form class='col-md-12' method='post'>
                <div class='site-blocks-table'>
                    <table class='table'>
                        
                        <tbody>
                            <tr>
                                <td class='product-thumbnail'>
                                    <img src='$row[imgpath]' class='img-fluid'>
                                </td>
                                <td class='product-name'>
                                    <h2 class='h5 text-black'>$row[name]</h2>
                                </td>
                                <td>Rs.$row[price]</td>
                                <td><a href='deletecart.php?cartid=$row[cartid]' class='' text-decoration: none>X</a></td>
                                <td><a href='shipping.php?cartid=$row[cartid] && pid=$row[pid]' class='btn btn-primary'>
                                Proceed To Checkout</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>";
    $total += $row['price'];
}


echo "
<div class='row'>
<div class='col-md-6'>
    <div class='row mb-5'>
        <div class='col-md-6'>
        <a href='home.php'>
            <button class='btn btn-outline-black btn-sm btn-block'>Continue Shopping</button></a>
        </div>
    </div>
</div>
<div class='col-md-6 pl-5'>
    <div class='row justify-content-end'>
        <div class='col-md-7'>
            <div class='row'>
                <div class='col-md-12 text-right border-bottom mb-5'>
                    <h3 class='text-black h4 text-uppercase'>Cart Totals</h3>
                </div>
            </div>
            <div class='row mb-3'>
                <div class='col-md-6'>
                    <span class='text-black'>Subtotal</span>
                </div>
                <div class='col-md-6 text-right'>
                    <strong class='text-black'>Rs.$total</strong>
                </div>
            </div>
            <div class='row mb-5'>
                <div class='col-md-6'>
                    <span class='text-black'>Total</span>
                </div>
                <div class='col-md-6 text-right'>
                    <strong class='text-black'>Rs.$total</strong>
                </div>
            </div>

            <div class='row'>
                <div class='col-md-12'>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='col-md-6 pl-5'><p></p></div>";

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

