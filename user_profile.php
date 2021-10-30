<?php
//   include("/includes/functions.php");
  session_start();
//     if(!isset($_SESSION['user_id'])){
//         header("Location: index.php");
//     }
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
                <a class="navbar-brand" href="index2.html"
                    style="color: var(--primary-y);font-weight:600;">TripMaker</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                        </li>
                        <li class=" nav-item">
                            <a class="nav-link" href="#welcome-info">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blog.html">Blogs</a>
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
                                echo '<a class="nav-link" href="./includes/logout.php">Logout</a>';
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

                    <form>
                        <div class="row mt-5 align-items-center justify-content-center">
                            <div class="col-md-3 text-center mb-5">
                                <div class="avatar avatar-xl">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..."
                                        class="avatar-img rounded-circle" />
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h2 style="text-align:center;margin-bottom:30px">Hello, Raj Tiwari</h2>
                        </div>
                        <hr />
                        <div class=" form-row">
                            <div class="form-group col-md-5 mx-2">
                                <label for="firstname">Firstname</label>
                                <input type="text" id="firstname" class="form-control" placeholder="Brown" />
                            </div>
                            <div class="form-group col-md-5 mx-2">
                                <label for="lastname">Lastname</label>
                                <input type="text" id="lastname" class="form-control" placeholder="Asher" />
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="brown@asher.me" />
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputphone">Phone Number</label>
                            <input type="text" class="form-control" id="inputphone" placeholder="" />
                        </div>
                        <div class="form-group col-md-10">
                            <label for="inputAddress5">Address</label>
                            <input type="text" class="form-control" id="inputAddress5"
                                placeholder="P.O. Box 464, 5975 Eget Avenue" />
                        </div>

                        <div class="form-group col-md-5">
                            <label for="pincode">Pincode</label>
                            <input type="text" class="form-control" id="pincode" placeholder="4342343" />
                        </div>
                        <div class="form-group col-md-5">
                            <label for="pincode">City</label>
                            <input type="text" class="form-control" id="pincode" placeholder="Mumbai" />
                        </div>

                        <div class="form-group col-md-5">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" placeholder="Mumbai" />
                        </div>

                        <br>

                        <button type="submit" style="background-color:#b0914f !important" class="btn btn-warning">Save
                            Change</button>
                    </form>
                </div>
            </div>
        </div>

    </div>





    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>