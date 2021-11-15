<?php
session_start();
// echo "Welcome to the homepage";
// if(isset($_SESSION['user_email'])){
//   echo "Welcome ".$_SESSION['user_email'];
// }
// else {
//   echo "You are not logged in";
// }
// include("./includes/connect.php");
// include("./includes/functions.php");
// $cn=mysqli_connect("localhost","root","","travels","3306");
// $user=check_login($cn);


?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TripMaker</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet" />

    <!-- OWL-JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="/css//lightbox.min.css">
    <!-- <link
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css"
      rel="stylesheet"
    /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="./style2.css" />
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
                                       ';
                                       if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==1)
                                       {
                                           echo '<li><a class="dropdown-item" href="./admin.php">Admin Dashboard</a></li>';
                                       }
                                       echo '<li><a class="dropdown-item" href="./my_tours.php">My Trips</a></li>
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





        <!-- carousel -->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">


            <!-- Wrapper for slides -->

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="banner" style="
                background-image: url(https://images.pexels.com/photos/933054/pexels-photo-933054.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
              "></div>
                    <div class="carousel-caption">
                        <h2 class="animate__animated animate__fadeIn" style="animation-delay: 1s">
                            Bogda Peak
                        </h2>
                        <h3 class="animate__animated animate__fadeIn" style="animation-delay: 2s">
                            An Epitome Of Magnificence
                        </h3>
                        <p class="animate__animated animate__fadeIn" style="animation-delay: 3s">
                            <br />

                            <a type="button" class="contact-button btn btn-primary btn-lg" href="./all_tours.php"
                                style="background-color: var(--primary-y) !important;border-color: var(--primary-y) !important;border-radius:5px">
                                Book Now
                            </a>
                        </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="banner" style="
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-image: url(https://images.pexels.com/photos/2331569/pexels-photo-2331569.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
              "></div>
                    <div class="carousel-caption">
                        <h2 class="animate__animated animate__fadeIn" style="animation-delay: 1s">
                            Mauna Kea
                        </h2>
                        <h3 class="animate__animated animate__fadeIn" style="animation-delay: 1s">
                            The Gem Of Pacific Ocean
                        </h3>
                        <p class="animate__animated animate__fadeIn" style="animation-delay: 3s">
                            <br />
                            <a type="button" class="contact-button btn btn-primary btn-lg" href="./all_tours.php"
                                style="background-color: var(--primary-y) !important;border-color: var(--primary-y) !important;border-radius:5px">
                                Book Now
                            </a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner" style="
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-image: url(https://images.pexels.com/photos/4101555/pexels-photo-4101555.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
              "></div>
                    <div class="carousel-caption">
                        <h2 class="animate__animated animate__fadeIn" style="animation-delay: 1s">
                            Swiss Alps
                        </h2>
                        <h3 class="animate__animated animate__fadeIn" style="animation-delay: 1s">
                            The Magical Mountains Of Switzerland
                        </h3>
                        <p class="animate__animated animate__fadeIn" style="animation-delay: 2s">
                            <br />
                            <a type="button" class="contact-button btn btn-primary btn-lg" href="./all_tours.php"
                                style=" background-color: var(--primary-y) !important;border-color: var(--primary-y) !important;border-radius:5px">
                                Book Now
                            </a>
                        </p>
                    </div>
                </div>
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>




    <!-- <section id="booking" class="booking-form">
        <div class="container booking-form-wrapper justify-content-center">
            <div class="row p-5 ">
                <form action="#" class="reserve-form">
                    <div class="container-fluid">
                        <div class="form-row row">
                            <div class="form-group col-md-2">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input class="form-control  form-control-booking" type="date" value="2021-08-21"
                                            id="example-date-input">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-2 ">
                                <select id="person" class="form-control form-select form-control-booking custom-select">
                                    <option selected="">Adults</option>
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2 ">
                                <select id="children"
                                    class="form-control form-select form-control-booking custom-select">
                                    <option selected="">Children</option>
                                    <option value="1">1 Children</option>
                                    <option value="2">2 Children</option>
                                    <option value="3">3 Children</option>
                                    <option value="4">4 Children</option>
                                    <option value="5">5 Children</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2 ">
                                <select id="night" class="form-control form-select form-control-booking custom-select">
                                    <option selected="">Nights</option>
                                    <option value="1">1 Night</option>
                                    <option value="2">2 Nights</option>
                                    <option value="3">3 Nights</option>
                                    <option value="4">4 Nights</option>
                                    <option value="5">5 Nights</option>
                                    <option value="6">6 Nights</option>
                                    <option value="7">7 Nights</option>
                                    <option value="7+">7+ Nights</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <select id="room" class="form-control form-select form-control-booking custom-select">
                                    <option selected="">Rooms</option>
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                    <option value="4">4 Rooms</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2 col-sm-12">
                                <a href="#" class="btn btn-main btn-block">Check</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        </div>
    </section> -->

    <section id="welcome-info" style="padding: 2rem 0rem;padding-top:150px">
        <div class="container-fluid" style="margin: auto;">
            <div class="container welcome-text-wrapper">
                <div class="row justify-content-center" style="text-align: center;">
                    <h5 style="font-weight:600; color:var(--primary-y) ">WELCOME TO</h5>
                </div>
                <div class="row justify-content-center" style="text-align: center;">
                    <h1
                        style="font-family: 'Segoe UI', sans-serif;font-weight:600;letter-spacing:3px;font-size:3rem;padding-top:5px;">
                        TripMaker</h1>
                </div>
                <div class="row justify-content-center" style="text-align: center">
                    <h6 style="line-height:2rem;padding-top: 5px;">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Dolorum rem,
                        eum possimus porro
                        numquam alias nihil itaque exercitationem ex tempore sed officiis dicta voluptatum eius
                        reiciendis at ea
                        illo,
                        iste culpa commodi obcaecati. </h6>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-top: 3rem">
                <div class="col-md-8 col-12 card-scroll-wrapper" style="padding: 2rem 0rem">

                    <div class="info-cards">

                        <div class="info-card cleft">
                            <div class="feature-icon" style="width: 100%;">
                                <img src="/img/features/satisfaction.png" alt="">
                            </div>

                            <h4>1,00,000+ satisfied customers</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="info-card cleft">
                            <div class="feature-icon" style="width: 100%;">
                                <img src="/img/features/hide.png" alt="">
                            </div>

                            <h4>No hidden Charges</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="info-card cleft">
                            <div class="feature-icon" style="width: 100%;">
                                <img src="/img/features/price.png" alt="">
                            </div>

                            <h4>Lowest Prices</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="info-card cleft">
                            <div class="feature-icon" style="width: 100%;">
                                <img src="/img/features/24-hours.png" alt="">
                            </div>

                            <h4>24*7 Support</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="info-card cleft">
                            <div class="feature-icon" style="width: 100%;">
                                <img src="/img/features/delete.png" alt="">
                            </div>

                            <h4>Easy Cancellation</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>


                        <div class="info-card cleft">
                            <div class="feature-icon" style="width: 100%;">
                                <img src="/img/features/quality.png" alt="">
                            </div>

                            <h4>Top Quality Services</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="popular-tours" style="padding: 2rem 0rem">

        <div class="popular">

            <div class="popular-slides">

                <?php
                // include("includes/functions.php");
                $conn = new mysqli("localhost","root","","travels","3306");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM tour_package";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $package_name=$row["name"];
                        $images=get_package_images($package_name);
                        $i = 0;
                        echo '<div class="owl-carousel">
                        <div class="tour-card">
                            <div class="container">
                                <div class="row">
                                    <div>
                                        <div class="card">
                                            <img class="card-img"
                                                src="'.$images[$i].'"
                                                alt="Bologna" />
                                            <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                                                <h4 class="card-title">Bologna</h4>
                                                <h6 class="card-subtitle mb-2">
                                                '.$row["name"].'
                                                </h6>
                                                <p class="card-text" style="color:white">
                                                '.$row["description"].'
                                                </p>
                                                <div class="link d-flex">
                                                    <a href="#" class="card-link text-warning">Read More</a>
                                                    <a href="#" class="card-link text-warning">Book a Trip</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        $i++;
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                ?>

                <div class="owl-carousel">
                    <div class="tour-card">
                        <div class="container">
                            <div class="row">
                                <div>
                                    <div class="card">
                                        <img class="card-img"
                                            src="https://images.unsplash.com/photo-1488711500009-f9111944b1ab?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1052&q=80"
                                            alt="Bologna" />
                                        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                                            <h4 class="card-title">Bologna</h4>
                                            <h6 class="card-subtitle mb-2">
                                                Emilia-Romagna Region, India
                                            </h6>
                                            <p class="card-text" style="color:white">
                                                It is the seventh most populous city in Italy, at the
                                                heart of a metropolitan area of about one million
                                                people.
                                            </p>
                                            <div class="link d-flex">
                                                <a href="#" class="card-link text-warning">Read More</a>
                                                <a href="#" class="card-link text-warning">Book a Trip</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="container">
                            <div class="row">
                                <div>
                                    <div class="card">
                                        <img class="card-img"
                                            src="https://images.unsplash.com/photo-1548013146-72479768bada?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80"
                                            alt="Bologna" />
                                        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                                            <h4 class="card-title">Bologna</h4>
                                            <h6 class="card-subtitle mb-2">
                                                Emilia-Romagna Region, Italy
                                            </h6>
                                            <p class="card-text">
                                                It is the seventh most populous city in Italy, at the
                                                heart of a metropolitan area of about one million
                                                people.
                                            </p>
                                            <div class="link d-flex">
                                                <a href="#" class="card-link text-warning">Read More</a>
                                                <a href="#" class="card-link text-warning">Book a Trip</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="container">
                            <div class="row">
                                <div>
                                    <div class="card">
                                        <img class="card-img"
                                            src="https://images.unsplash.com/photo-1529963183134-61a90db47eaf?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                            alt="Bologna" />
                                        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                                            <h4 class="card-title">Bologna</h4>
                                            <h6 class="card-subtitle mb-2">
                                                Emilia-Romagna Region, Italy
                                            </h6>
                                            <p class="card-text">
                                                It is the seventh most populous city in Italy, at the
                                                heart of a metropolitan area of about one million
                                                people.
                                            </p>
                                            <div class="link d-flex">
                                                <a href="#" class="card-link text-warning">Read More</a>
                                                <a href="#" class="card-link text-warning">Book a Trip</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="container">
                            <div class="row">
                                <div>
                                    <div class="card">
                                        <img class="card-img"
                                            src="https://images.unsplash.com/photo-1461696114087-397271a7aedc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                            , alt="Bologna" />
                                        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                                            <h4 class="card-title">Bologna</h4>
                                            <h6 class="card-subtitle mb-2">
                                                Emilia-Romagna Region, Italy
                                            </h6>
                                            <p class="card-text">Lore</p>
                                            <div class="link d-flex">
                                                <a href="#" class="card-link text-warning">Read More</a>
                                                <a href="#" class="card-link text-warning">Book a Trip</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="container">
                            <div class="row">
                                <div>
                                    <div class="card">
                                        <img class="card-img"
                                            src="https://images.unsplash.com/photo-1511300636408-a63a89df3482?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                            alt="Bologna" />
                                        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                                            <h4 class="card-title">Bologna</h4>
                                            <h6 class="card-subtitle mb-2">
                                                Emilia-Romagna Region, Italy
                                            </h6>
                                            <p class="card-text">
                                                It is the seventh most populous city in Italy, at the
                                                heart of a metropolitan area of about one million
                                                people.
                                            </p>
                                            <div class="link d-flex">
                                                <a href="#" class="card-link text-warning">Read More</a>
                                                <a href="#" class="card-link text-warning">Book a Trip</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- popular destinations -->

    <section id="galpopular-destinations" style="padding-top: 2rem">

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center gallery-heading">
                        <h2 class=" text-black">Our Destinations</h2>
                        <p class="color-black-opacity-5">Choose Your Next Destination</p>
                    </div>
                </div>
                <div class="row mx-md-5">
                    <?php
                        // include("includes/functions.php");
                        function get_package_images($package_name){
                            
                            $cn = new mysqli("localhost","root","","travels","3306");
                            if ($cn->connect_error) {
                                die("Connection failed: " . $cn->connect_error);
                            }
                            $images;
                            
                            $query_id = "select link from location_images where location_id in (select id from location where tour_package_id=(SELECT id FROM `tour_package` WHERE `name` = '$package_name'));";
                            $result_id=mysqli_query($cn,$query_id);
                            if(mysqli_num_rows($result_id)>0){
                                
                                while($row = $result_id->fetch_assoc()) {
                                    $images[]=$row["link"];
                                }
                                return $images;
                            }
                            else{
                                // echo "Something went wrong";
                                return false;
                            }
                        }
                        $conn = new mysqli("localhost","root","","travels","3306");
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM tour_package";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $package_name=$row["name"];
                                $images=get_package_images($package_name);
                                $i = 0;
                                echo '<div class="col-md-6 col-lg-4 col-sm-12  mb-lg-6" style="margin-bottom: 3rem !important;">
                                <a href="./package_info.php?name='.$row["name"].'" class="unit-1 text-center">
                                    <img src="'.$images[$i].'" alt="Image"  width="400" height="400"/>
                                    <div class="unit-1-text">
                                        <strong class="mb-2 d-block" style="color: var(--primary-y);">&#x20B9;'.$row["price_adult"].'</strong>
                                        <h3 class="unit-1-heading">'.$row["name"].'</h3>
                                    </div>
                                </a>
                            </div>';
                            if($i%3==0){
                                echo '</br>';
                            }
                                $i++;
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }
                        ?>

                    <!-- <div class="col-md-6 col-lg-4 col-sm-12  mb-lg-6" style="margin-bottom: 3rem !important;">
                        <a href="#" class="unit-1 text-center">
                            <img src="./img/gallery/01-greece.jpg" alt="Image" class="img-fluid" />
                            <div class="unit-1-text">
                                <strong class="mb-2 d-block" style="color: var(--primary-y);">&#x20B9;39999</strong>
                                <h3 class="unit-1-heading">Santorini, Greece</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <a href="#" class="unit-1 text-center">
                            <img src="./img/gallery/02-rome.jpg" alt="Image" class="img-fluid" />
                            <div class="unit-1-text">
                                <strong class="mb-2 d-block" style="color: var(--primary-y);">&#x20B9;36999</strong>
                                <h3 class="unit-1-heading">Rome, Italy</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <a href="#" class="unit-1 text-center">
                            <img src="./img/gallery/03-japan.jpg" alt="Image" class="img-fluid" />
                            <div class="unit-1-text">
                                <strong class="mb-2 d-block" style="color: var(--primary-y);">&#x20B9;36999</strong>
                                <h3 class="unit-1-heading">Mount Fuji, Japan</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <a href="#" class="unit-1 text-center">
                            <img src="img/gallery/04-dubai.jpg" alt="Image" class="img-fluid" />
                            <div class="unit-1-text">
                                <strong class="mb-2 d-block" style="color: var(--primary-y);">&#x20B9;21999</strong>
                                <h3 class="unit-1-heading">Camels, Dubai</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <a href="#" class="unit-1 text-center">
                            <img src="./img/gallery/05-london.jpg" alt="Image" class="img-fluid" />
                            <div class="unit-1-text">
                                <strong class="mb-2 d-block" style="color: var(--primary-y);">&#x20B9;19999</strong>
                                <h3 class="unit-1-heading">London, England</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <a href="#" class="unit-1 text-center">
                            <img src="./img/gallery/06-australia.jpg" alt="Image" class="img-fluid" />
                            <div class="unit-1-text">
                                <strong class="mb-2 d-block" style="color: var(--primary-y);">&#x20B9;36999</strong>
                                <h3 class="unit-1-heading">Opera House, Australia</h3>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- gallery -->



        <!-- testimonials -->
        <section id="testimonials" style="margin: 80px 0px">
            <div class="container-fluid align-items-center" style="margin: auto; min-height:40vh">
                <div class="row justify-content-center ">
                    <h2 style="text-align: center;margin-bottom:60px">What our customers have to say about us!</h2>
                    <?php
                    include './includes/get_feedback.php';
                    $n = three_random_number();
                    // $a = get_random_number();
                    // $b = get_random_number();
                    // $c = get_random_number();
                    $a = $n[0];
                    $b = $n[1];
                    $c = $n[2];
                    $feedback=get_feedback_by_id($a);
                    echo '<div class="col-md-3 mb-4 mb-md-0">
                        <blockquote>'.$feedback['comment'].'
                        </blockquote>
                        <cite><img
                                src="'.$feedback['image'].'"
                                alt="Alberto Duncan">'.$feedback['name'].'</cite>
                    </div>';
                    $feedback=get_feedback_by_id($b);
                    echo '<div class="col-md-3 mb-4 mb-md-0">
                        <blockquote>'.$feedback['comment'].'
                        </blockquote>
                        <cite><img
                                src="'.$feedback['image'].'"
                                alt="Alberto Duncan">'.$feedback['name'].'</cite>
                    </div>';
                    $feedback=get_feedback_by_id($c);
                    echo '<div class="col-md-3 mb-4 mb-md-0">
                        <blockquote>'.$feedback['comment'].'
                        </blockquote>
                        <cite><img
                                src="'.$feedback['image'].'"
                                alt="Alberto Duncan">'.$feedback['name'].'</cite>
                    </div>';
                    ?>
                    <!-- <div class="col-md-3 mb-4 mb-md-0">
                        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium harum
                            deleniti
                            illo sunt
                            tempore molestias cum facere reiciendis ab ipsa voluptatem ullam, impedit, aut,
                            necessitatibus repellendus
                            velit laudantium dolorum et.
                        </blockquote>
                        <cite><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiuV5HnygcU_6oV1CN5LQpxoI6A1k1x_PgoQ&usqp=CAU"
                                alt="Alberto Duncan">Michael Johnson</cite>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-0">
                        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium harum
                            deleniti
                            illo sunt
                            tempore molestias cum facere reiciendis ab ipsa voluptatem ullam, impedit, aut,
                            necessitatibus repellendus
                            velit laudantium dolorum et.
                        </blockquote>
                        <cite><img
                                src="https://img.women.com/images/images/000/170/688/square/screens_shot_0004768.jpg?1549232705"
                                alt="Alberto Duncan">Jake Peralta</cite>
                    </div> -->

                </div>
            </div>
        </section>

        <!-- blogs  -->

        <section id="blogs" style="padding: 2rem 0rem">
            <div class="container-fluid" style="margin: auto;">
                <div class="container welcome-text-wrapper">
                    <div class="row justify-content-center" style="text-align: center;">
                        <h5 style="font-weight:600; color:var(--primary-y) ">BLOG NEWS</h5>
                    </div>
                    <div class="row justify-content-center" style="text-align: center;">
                        <h1
                            style="font-family: 'Segoe UI', sans-serif;font-weight:600;letter-spacing:1px;font-size:3rem;padding-top:8px;">
                            Latest Posts From Blogs</h1>
                    </div>
                    <div class="row justify-content-center" style="text-align: center">
                        <h6 style="line-height:2rem;padding-top: 10px;">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. Dolorum rem,
                            eum possimus porro
                            numquam alias nihil itaque exercitationem ex tempore sed officiis dicta voluptatum eius
                            reiciendis at ea
                            illo,
                            iste culpa commodi obcaecati. </h6>
                    </div>
                </div>

                <div class="row justify-content-center" style="margin: 80px 0px;">
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="card" style="width: 90%; margin:auto">
                            <img src="https://images.pexels.com/photos/2956955/pexels-photo-2956955.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                class="card-img-top" alt="...">
                            <div class="card-body" style="padding: 1.5rem;">

                                <p class="card-text"> <i class="far fa-calendar-alt" style="margin-right: 3px"></i>
                                    17
                                    May 2019
                                    by admin
                                </p>
                                <h5 class="card-title" style="margin-top:1.5rem"> <a
                                        style="text-decoration:none; color:black" href="blog.php">Why choose
                                        France as your destination to
                                        travel this
                                        summer</a> </h5>

                                <p class="card-text text-muted">
                                    <i class="far fa-clock" style="margin-right: 3px;margin-top:1rem"></i>
                                    2 mins read
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-0 ">
                        <div class="card" style="width: 90%; margin:auto">
                            <img src="https://images.pexels.com/photos/427679/pexels-photo-427679.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                class="card-img-top" alt="...">
                            <div class="card-body" style="padding: 1.5rem;">

                                <p class="card-text"> <i class="far fa-calendar-alt" style="margin-right: 3px"></i>
                                    17
                                    May 2019
                                    by admin
                                </p>
                                <h5 class="card-title" style="margin-top:1.5rem"><a href="blog.php"
                                        style="text-decoration:none; color:black">Why choose France as your
                                        destination
                                        to travel this
                                        summer</a> </h5>

                                <p class="card-text text-muted">
                                    <i class="far fa-clock" style="margin-right: 3px;margin-top:1rem"></i>
                                    5 mins read
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="card" style="width: 90%; margin:auto">
                            <img src="https://images.pexels.com/photos/5011967/pexels-photo-5011967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                class="card-img-top" alt="...">
                            <div class="card-body" style="padding: 1.5rem;">

                                <p class="card-text"> <i class="far fa-calendar-alt" style="margin-right: 3px"></i>
                                    17
                                    May 2019
                                    by admin
                                </p>
                                <h5 class="card-title" style="margin-top:1.5rem"><a href="blog.php"
                                        style="text-decoration:none; color:black">Why choose France as your
                                        destination
                                        to travel this
                                        summer</a> </h5>

                                <p class="card-text text-muted">
                                    <i class="far fa-clock" style="margin-right: 3px;margin-top:1rem"></i>
                                    3 mins read
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="explore-india" style="margin: 4rem 0rem;">
            <div class="site-blocks-cover overlay inner-page-cover" style="background-attachment: fixed;
    ">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-7 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            <a href="https://www.youtube.com/watch?v=EvTn6tPVQJ0">
                                <span style="font-size: 3em;color:white"> <i class="fa fa-play" size="4x"></i></span>
                            </a>

                            <h2 class="text-white font-weight-light mb-5 h1">
                                Explore India
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery" style="padding: 2rem 0rem">
            <div class="container-fluid">
                <div class="row img-row">
                    <div class="col-md-2 img-col">
                        <a href="./img/gallery/img1.jpg" data-lightbox="img-gallery">
                            <img src="./img/gallery/img1-small.jpg" class="gallery-thumbnail" alt=""></a>

                    </div>
                    <div class="col-md-2 img-col">
                        <a href="./img/gallery/img2.jpg" data-lightbox="img-gallery">
                            <img src="./img/gallery/img2-small.jpg" class="gallery-thumbnail" alt=""></a>
                    </div>
                    <div class="col-md-2 img-col">
                        <a href="./img/gallery/img3.jpg" data-lightbox="img-gallery">
                            <img src="./img/gallery/img3-small.jpg" class="gallery-thumbnail" alt=""></a>
                    </div>
                    <div class="col-md-2 img-col">
                        <a href="./img/gallery/img4.jpg" data-lightbox="img-gallery">
                            <img src="./img/gallery/img4-small.jpg" class="gallery-thumbnail" alt=""></a>
                    </div>
                    <div class="col-md-2 img-col">
                        <a href="./img/gallery/img5.jpg" data-lightbox="img-gallery">
                            <img src="./img/gallery/img5-small.jpg" class="gallery-thumbnail" alt=""></a>
                    </div>
                    <div class="col-md-2 img-col">
                        <a href="./img/gallery/img6.jpg" data-lightbox="img-gallery">
                            <img src="./img/gallery/img6-small.jpg" class="gallery-thumbnail" alt=""></a>
                    </div>
                </div>


            </div>
            <div class="gallery-text">
                <!-- <h1>Gallery</h1> -->
                <a href="./gallery.php"><button> 
                    <h2>Gallery</h2>
                </button></a>
            </div>
        </section>



        <section id="map-form" style="width: 90%; margin:auto;margin-bottom: 4rem;padding: 2rem 0rem">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-5 map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1656.7790296456299!2d72.89694178085868!3d19.073604176504944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c97f8ba90df9%3A0xf2c6ab38f39652fd!2sGate%203%2C%20K.J.%20Somaiya%20Institute%20of%20Management%20Studies%20and%20Research!5e0!3m2!1sen!2sin!4v1619540447611!5m2!1sen!2sin"
                            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-7 col-sm-11" style="padding: 1rem 1.5rem;">
                        <div class="row justify-content-center">
                            <h2 class="survey-form-heading">We are happy to hear from you</h2>
                            <form class="form-inline" method="POST" action="" onsubmit="return false;">
                                <div class=" mb-3 row justify-content-between" style="width: 100%;">
                                    <label for="name" class="col-sm-3 col-form-label">
                                        <h5>Name</h5>
                                    </label>
                                    <div class="col-sm-8 col-md-8">
                                        <input type="text" class="form-control" id="form_name"
                                            placeholder="Your name here">
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-between" style="width: 100%;">
                                    <label for="email" class="col-sm-3 col-form-label">
                                        <h5>Email</h5>
                                    </label>
                                    <div class="col-sm-8 col-md-8">
                                        <input type="text" class="form-control" id="form_email"
                                            placeholder="Your email here">
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-between" style="width: 100%;">
                                    <label for="referral" class="col-sm-3 col-form-label">
                                        <h5>How did you find us?</h5>
                                    </label>
                                    <div class="col-sm-8 col-md-8">
                                        <select class="form-select" id="form_referral"
                                            aria-label="Default select example">
                                            <option selected>Friends</option>
                                            <option value="1">Search Engine</option>
                                            <option value="2">Advertisement</option>
                                            <option value="3">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-between" style="width: 100%;">
                                    <label for="newsletter" class="col-sm-3 col-form-label">
                                        <h5>Newsletter</h5>
                                    </label>
                                    <div class="col-sm-8 col-md-8" style="display: flex; align-items:center">
                                        <input class="form-check-input " type="checkbox" value=""
                                            id="form_newslettercheckbox" checked>
                                        <label class="form-check-label" for="defaultCheck1"
                                            style="padding-left: 10px; padding-top:5px">
                                            Yes, please!
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-between" style="width: 100%;">
                                    <label for="email" class="col-sm-3 col-form-label">
                                        <h5>Drop us a line</h5>
                                    </label>
                                    <div class="col-sm-8 col-md-8">
                                        <textarea class="form-control" rows="5" id="form_comment"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-between" style="width: 100%;">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-8 col-md-8">
                                        <button id='btn-feedback' class="btn btn-primary submit-btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="alert alert-success" id="success-alert" style="margin-top:30px">
                        <strong>Success!</strong>
                        Your Feedback has been submitted.
                    </div>
                    <div class="alert alert-danger" id="danger-alert" style="margin-top:30px">
                        Something went wrong. Please try again.
                    </div>
                </div>
        </section>


        <!-- Footer section -->

        <footer>
            <div class="container-fluid">

                <div class="row justify-content-between">
                    <div class="col col-md-7 align-content-start">
                        <ul class="footer-nav">
                            <li>
                                <a href="#">
                                    <h6>About us</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h6>Blog</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h6>Book Now</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h6>iOS App</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h6>Android App</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h6>Contact Us</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-md-5">
                        <ul class="social-icons">
                            <span style="font-size: 2em; color: white; margin-right:10px">
                                <i class="fab fa-facebook"></i>
                            </span>
                            <span style="font-size: 2em; color: white;margin-right:10px">
                                <i class="fab fa-twitter"></i>
                            </span>
                            <span style="font-size: 2em; color: white;margin-right:10px">
                                <i class="fab fa-instagram"></i>
                            </span>
                            <span style="font-size: 2em; color: white;margin-right:10px">
                                <i class="fab fa-discord"></i>
                            </span>
                        </ul>
                    </div>
                </div>
                <div class="row">

                    <h6 style="color:white;text-align:center"> Made with <span
                            style="color: red;">&#10084;&#65039</span> By Raj
                        Tiwari & Shreyans Mulkutkar</h6>
                </div>
            </div>
        </footer>


        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <!-- jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous"></script>

        <!-- OWL JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>

        <script src="/js/main.js"></script>
        <script src="/js/lightbox-plus-jquery.min.js"></script>
        <script src="/js/app.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            console.log("ready!");
            $("#success-alert").hide();
            $("#danger-alert").hide();
            $('#btn-feedback').click(function() {
                console.log('clicked');
                // function to add item to local storage
                function addItem(key, value) {
                    localStorage.setItem(key, value);
                }

                function setCookie(cname, cvalue, exdays) {
                    const d = new Date();
                    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                    let expires = "expires=" + d.toUTCString();
                    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                }
                var name = $('#form_name').val();
                var email = $('#form_email').val();
                var referral = $('#form_referral').val();
                // var newsletter = $('#form_newslettercheckbox').val();
                var comment = $('#form_comment').val();
                console.log(name, email, referral, comment);
                // if (name && email && referral && comment) {
                //     addItem('name', name);
                //     addItem('email', email);
                //     addItem('referral', referral);
                //     // addItem('newsletter', newsletter);
                //     addItem('comment', comment);
                //     setCookie('feedback_name', name, 1);
                //     setCookie('feedback_email', email, 1);
                //     setCookie('feedback_referral', referral, 1);
                //     // setCookie('feedback_newsletter', newsletter, 1);
                //     setCookie('feedback_comment', comment, 1);
                //     window.location.href = "./feedback_submitted.php";
                $.ajax({
                    url: './includes/add_feedback.php',
                    type: 'POST',
                    data: {
                        submit: 'feedback',
                        name: name,
                        email: email,
                        referral: referral,
                        comment: comment,
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
                // }
            });
        });
        </script>
</body>

</html>