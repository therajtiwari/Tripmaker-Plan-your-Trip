<?php

include("includes/functions.php");
session_start();
$status = "";

    if(!isset($_SESSION['user_email'])){
        header("Location: index.php");
    }
    


    $user_data=get_user_details($_SESSION['user_email']);
    
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $pincode=$_POST['pincode'];
        $country=$_POST['country'];
        
        $update_status=update_user_details($_SESSION['user_email'],$fname,$lname,$phone,$address,$city,$pincode,$country);
        if($update_status){
            echo "<script>alert('Details Updated Successfully')</script>";
            $user_data=get_user_details($_SESSION['user_email']);
            $status=1;
        }
        else{
            echo "<script>alert('Error Occured')</script>";
            $status=0;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>

    <link href="./css/user_profile.css" rel="stylesheet" /> <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./style2.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style2.css" />

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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Quick Book
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#booking">USA</a></li>
                                <li>
                                    <a class="dropdown-item" href="#booking">India</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#booking"> France</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#booking"> Australia</a>
                                </li>

                            </ul>
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
                                // echo '<a class="nav-link" href="./includes/logout.php">Logout</a>';
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
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto">

                <div class="my-4">

                    <form onsubmit="return false">
                        <div class="row mt-5 align-items-center justify-content-center">
                            <div class="col-md-3 text-center mb-5">
                                <div class="avatar avatar-xl">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..."
                                        class="avatar-img rounded-circle" />
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h2 style="text-align:center;margin-bottom:30px">Hello,
                                <?php  echo $_SESSION["username"]; ?></h2>
                        </div>
                        <hr />
                        <div class=" form-row">
                            <div class="form-group col-md-5" style="margin-right:25px">
                                <label for="firstname">Firstname</label>
                                <input type="text" id="firstname" name="fname" class="form-control"
                                    value="<?php echo $user_data["fname"];?>" />
                            </div>
                            <div class="form-group col-md-5">
                                <label for="lastname">Lastname</label>
                                <input type="text" id="lastname" name="lname" class="form-control"
                                    value="<?php echo $user_data["lname"];?>" />
                            </div>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="inputphone">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="inputphone"
                                value="<?php echo $user_data["phone"];?>" />
                        </div>
                        <div class="form-group col-md-10">
                            <label for="inputAddress5">Address</label>
                            <input type="text" class="form-control" name="address" id="inputaddress"
                                value="<?php echo $user_data["address"];?>" />
                        </div>

                        <div class="form-group col-md-5">
                            <label for="pincode">Pincode</label>
                            <input type="text" class="form-control" name="pincode" id="pincode"
                                value="<?php echo $user_data["pincode"];?>" />
                        </div>
                        <div class="form-group col-md-5">
                            <label for="pincode">City</label>
                            <input type="text" class="form-control" id="city" name="city"
                                value="<?php echo $user_data["city"];?>" />
                        </div>

                        <div class="form-group col-md-5">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" name="country"
                                value="<?php echo $user_data["country"];?>" />
                        </div>

                        <br>

                        <button type="submit" style="background-color:#b0914f !important" class="btn btn-warning"
                            name="submit" id="submitform">Save
                            Change</button>
                        <div class="alert alert-success" id="success-alert" style="margin-top:30px">
                            <strong>Success!</strong>
                            Your profile has been updated
                        </div>
                        <div class="alert alert-danger" id="danger-alert" style="margin-top:30px">
                            Something went wrong. Please try again.
                        </div>

                    </form>

                </div>
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
            $('#submitform').click(function() {
                // console.log("hereeeeeeeeeeeeeeeee");

                var fname = $('#firstname').val();
                var lname = $('#lastname').val();
                var phone = $('#inputphone').val();
                var address = $('#inputaddress').val();
                var pincode = $('#pincode').val();
                var city = $('#city').val();
                var country = $('#country').val();
                var email = '<?php echo $_SESSION['user_email'] ?>';
                // console.log(fname, lname, phone, address, pincode, city, country, email);
                $.ajax({
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
                            $("#danger-alert").fadeTo(4000, 500).slideUp(500,
                                function() {
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