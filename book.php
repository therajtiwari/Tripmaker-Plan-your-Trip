<?php

include("includes/functions.php");
session_start();

    if(!isset($_SESSION['user_email']) || !isset($_COOKIE['package_name']) || !isset($_COOKIE['price']) || !isset($_COOKIE['check_in']) || !isset($_COOKIE['food_type']) || !isset($_COOKIE['price']) || !isset($_COOKIE['num_of_adults']) || !isset($_COOKIE['num_of_children'])  || !isset($_COOKIE['num_of_days'])){
        header("Location: index.php");
    }

    $user_data=get_user_details($_SESSION['user_email']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./css/nav.css" />
    <link rel="stylesheet" href="./css/book.css" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>
    <div class="navbar-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ms-auto">
                <a class="navbar-brand" href="./index.php"
                    style="color: var(--primary-y);font-weight:600;">TripMaker</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class=" nav-item">
                            <a class="nav-link" href="#welcome-info">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blog.php">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./all_tours.php">All Tours</a>
                        </li>


                        <li class="nav-item">
                            <?php
                                if(isset($_SESSION['user_email']))
                                {
                                     echo '
                                     <div class="dropdown">
                                     <a class="btn dropdown-toggle nav-link"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Hi, '.$_SESSION['username'].'
                                     </a>
                                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                       <li><a class="dropdown-item" href="./user_profile.php">My Profile</a></li>
                                       <li><a class="dropdown-item" href="#">My Trips</a></li>
                                       <li><a class="dropdown-item" href="./includes/logout.php">Logout</a></li>
                                     </ul>
                                   </div>
                                    ';
                                }
                                else
                                {
                                   
                                echo '<a class="nav-link" href="./login.php">Login</a>';
                                }
                               
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container form-card" style="width:80%">
        <div class="row justify-content-around">
            <div class="col-md-8">
                <h3 style="margin-bottom:1rem">Required User Info</h3>
                <hr>
                <form onsubmit='return false'>
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name"
                            value='<?php echo $user_data["fname"] . " " .  $user_data["lname"] ?>'>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label" value="">Phone</label>
                        <input type="text" class="form-control" id="phone" value='<?php echo $user_data["phone"] ?>'>
                    </div>
                    <div class="mb-3">
                        <label for="billing_address" class="form-label" value="name">Billing Address</label>
                        <input type="text" class="form-control" id="billing_address"
                            value='<?php echo $user_data["address"] . " ," .  $user_data["city"]. ", " .  $user_data["pincode"] . ", " .  $user_data["country"]?>'>
                    </div>

                </form>
            </div>
        </div>




    </div>

    <div class="container form-card" style="width:80%">
        <div class="row justify-content-around">

            <div class="col-md-8 col-sm-10">
                <h3>Booking Info</h3>
                <hr>

                <h6>
                    <strong> Package Name:</strong> <?php echo $_COOKIE['package_name'] ?>
                </h6>
                <h6><strong>Food type:</strong> <?php echo $_COOKIE['food_type'] ?></h6>
                <h6><strong>Date of trip:</strong> <?php echo $_COOKIE['check_in'] ?></h6>
                <h6><strong>Num of Days:</strong> <?php echo $_COOKIE['num_of_days'] ?></h6>
                <h6><strong>Adults:</strong> <?php echo $_COOKIE['num_of_adults'] ?></h6>
                <h6><strong>Children:</strong> <?php echo $_COOKIE['num_of_children'] ?></h6>
                <h6><strong>Total price:</strong> Rs <?php echo $_COOKIE['price'] ?></h6>

            </div>
        </div>

    </div>

    <div class="container my-4" style="width:80%">
        <div class="row justify-content-around">
            <button class="btn btn-warning">Pay Now</button>
        </div>

    </div>

    <!-- bootstrap 
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>


    <script type="text/javascript">
    $(document).ready(function() {
        $("#success-alert").hide();
        $("#danger-alert").hide();

        //form submission
        $(' #submitform').click(
            function() { // console.log("hereeeeeeeeeeeeeeeee"); var fname=$('#firstname').val();
                var lname = $('#lastname').val();
                var phone = $('#inputphone').val();
                var
                    address = $('#inputaddress').val();
                var pincode = $('#pincode').val();
                var
                    city = $('#city').val();
                var country = $('#country').val();
                var
                    email =
                    '<?php echo $_SESSION['user_email'] ?>'; // console.log(fname, lname, phone, address,
                pincode, city, country, email); $.ajax({
                url: './includes/update_profile.php',
                type: 'POST',
                data: {
                    update: 'profile',
                    fname: fname,
                    lname: lname,
                    phone: phone,
                    address: address,
                    pincode: pincode,
                    city: city,
                    country: country,
                    email: email
                },
                success: function(data) {
                    if (data == "200") {
                        console.log("success");
                        $("#success-alert").fadeTo(4000, 500).slideUp(500,
                            function() {
                                $("#success-alert").slideUp(500);
                            });
                    } else {
                        console.log("failed");
                        $("#danger-alert").fadeTo(4000, 500).slideUp(500, function() {
                            $("#danger-alert").slideUp(500);
                        });
                    }
                }
            });
        })
    });
    </script>

</body>

</html>