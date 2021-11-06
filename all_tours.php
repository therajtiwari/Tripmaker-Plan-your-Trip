<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tours</title>
    <link rel="stylesheet" href="./css/nav.css" />
    <link rel="stylesheet" href="./css/all_tours.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
</head>

<body>

    <header>
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
                                <a class="nav-link" href="./gallery.php">Gallery</a>
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


        <div class="cover-image-container">
            <div class="page-title-text">
                <h1>Tours</h1>
            </div>
        </div>
        <div class="info-text-wrapper">
            <h4 style="font-size:1.2rem;color:var(--primary-y);font-weight:bold">Our Tours and Packages</h4>
            <h2 style="font-size:2rem;font-weight:bold;margin-top:0.5rem,">Choose your next Destination
            </h2>
            <h5 style="font-size:0.9rem;margin-top:0.2rem;width:50%">Far far away, behind the word mountains, far from
                the
                countries Vokalia and
                Consonantia, there live the
                blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</h5>
        </div>

        <div class="tour-cards-wrapper">
            <div class="card-wrapper">

                <div class="tour-image-wrapper col-md-6">
                    <img class="tour-image" src="./images/img2.jpg" alt="">
                </div>
                <div class="tour-info col-md-6">
                    <h2>Trip to Bali</h2>
                    <h4 style="margin-bottom:2rem">Rs 70,0000</h4>
                    <h6 style="font-size:0.9rem;margin-bottom:3rem">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Ab natus
                        voluptate ullam commodi quae sint fugiat. A cumque repudiandae ratione amet beatae voluptas
                        nostrum. Architecto consequuntur odit natus error assumenda.</h6>
                    <div class="info-buttons">
                        <div class="form-group ">
                            <a href="./package_info.php?name=india_tour"
                                class="btn btn-main btn-block btn-view-details">View
                                Details</a>
                        </div>
                        <div class="form-group ">
                            <a href="#" class="btn btn-main btn-block">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-wrapper">

                <div class="tour-image-wrapper col-md-6">
                    <img class="tour-image" src="./images/img3.jpg" alt="">
                </div>
                <div class="tour-info col-md-6">
                    <h2>Trip to Bali</h2>
                    <h4 style="margin-bottom:2rem">Rs 70,0000</h4>
                    <h6 style="font-size:0.9rem;margin-bottom:3rem">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Ab natus
                        voluptate ullam commodi quae sint fugiat. A cumque repudiandae ratione amet beatae voluptas
                        nostrum. Architecto consequuntur odit natus error assumenda.</h6>
                    <div class="info-buttons">
                        <div class="form-group ">
                            <a href="#" class="btn btn-main btn-block btn-view-details">View Details</a>
                        </div>
                        <div class="form-group ">
                            <a href="#" class="btn btn-main btn-block">Book Now</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-wrapper">

                <div class="tour-image-wrapper col-md-6">
                    <img class="tour-image" src="./images/img4.jpg" alt="">
                </div>
                <div class="tour-info col-md-6">
                    <h2>Trip to Bali</h2>
                    <h4 style="margin-bottom:2rem">Rs 70,0000</h4>
                    <h6 style="font-size:0.9rem;margin-bottom:3rem">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Ab natus
                        voluptate ullam commodi quae sint fugiat. A cumque repudiandae ratione amet beatae
                        voluptas
                        nostrum. Architecto consequuntur odit natus error assumenda.</h6>
                    <div class="info-buttons">
                        <div class="form-group ">
                            <a href="#" class="btn btn-main btn-block btn-view-details">View Details</a>
                        </div>
                        <div class="form-group ">
                            <a href="#" class="btn btn-main btn-block">Book Now</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-wrapper">

                <div class="tour-image-wrapper col-md-6">
                    <img class="tour-image" src="./images/img5.jpg" alt="">
                </div>
                <div class="tour-info col-md-6">
                    <h2>Trip to Bali</h2>
                    <h4 style="margin-bottom:2rem">Rs 70,0000</h4>
                    <h6 style="font-size:0.9rem;margin-bottom:3rem">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Ab natus
                        voluptate ullam commodi quae sint fugiat. A cumque repudiandae ratione amet beatae
                        voluptas
                        nostrum. Architecto consequuntur odit natus error assumenda.</h6>
                    <div class="info-buttons">
                        <div class="form-group ">
                            <a href="#" class="btn btn-main btn-block btn-view-details">View Details</a>
                        </div>
                        <div class="form-group ">
                            <a href="#" class="btn btn-main btn-block">Book Now</a>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </header>



    </div>





    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <!-- bootstrap -->
</body>

</html>