<?php
include "../shared/authguard_customer.php";
include "menu.html";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/css/easyzoom.css" />
    <script src="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/src/easyzoom.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .pdt-card {
            width: 300px;
            display: inline-block;
            margin: 10px;
            border: none;
            padding: 10px;
            margin-left: 100px;
            margin-top: 50px;

        }

        .pdt-img {
            width: 100%;
            height: 250px;
        }

        .price {
            font-size: 24px;
        }

        .price::before {
            content: "Rs."
        }

        .name {
            font-size: 22px;
            font-weight: bold;
        }
        .checked {
            color: orange;
        }
        
    </style>
</head>

<body>
    
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Shop</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            var $easyzoom = $('.easyzoom').easyZoom();
        });
    </script>
</body>

</html>

<?php

include_once "../shared/connection.php";

$sql_obj = mysqli_query($conn, "select * from product");

while ($row = mysqli_fetch_assoc($sql_obj)) {
    //print_r($row);
    echo "<div class='pdt-card'>
        <div class='name text-center'>$row[name]</div>
        
        <img class='pdt-img' src='$row[imgpath]'>
        <div class='price text-center'>$row[price]</div>                                     
        <div class='details text-center'>$row[details]</div><hr>
        <div class='text-center'>
        <span class='fa fa-star checked'></span>
    <span class='fa fa-star checked'></span>
    <span class='fa fa-star checked'></span>
    <span class='fa fa-star checked'></span>
    <span class='fa fa-star'></span><br>
        <a href='addcart.php?pid=$row[pid]'>
        <button class='btn btn-warning'>Add to Cart</button>
        </a></div>
    </div> ";

}
echo "<br><hr><br>";


?>

<html>

<body>
    <div class="container">
        <p> <button class="btn btn-sm btn-outline-black"
                onclick="document.getElementById('id01').style.display='block'">Share your Feedback</button></p>


        <div id="id01" class="modal">

            <form class="modal-content animate" action="review.php" method="post" style="background-color: pink">
                <div class="m-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="abc@example.com" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            name="feedback"></textarea>
                    </div>
                    <div>
                        <button class="btn-success">Submit</button>
                    </div>
                    <br>
                    <div class="container">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'"
                            class="cancelbtn btn-danger">Cancel</button>

                    </div>
                </div>


            </form>
        </div>
    </div>
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