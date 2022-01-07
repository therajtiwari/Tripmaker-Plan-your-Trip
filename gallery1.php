<!DOCTYPE html>
<html lang="en">
<?php
include './includes/connect.inc.php';
include './includes/functions.php';
$conn = new mysqli("localhost","root","","travels","3306");
$sql = "SELECT * FROM tour_package";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $i = 0;
        $package_name=$row["name"];
        $package_info[i]=get_package_info($package_name);
        $images[i]=get_package_images($package_name); 
        $i++;
    }
}
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/gallery.css" />
    <link rel="stylesheet" href="./style2.css" />
    <script src="./css/gal.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />


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
                                       <li><a class="dropdown-item" href="./my_tours.php">My Trips</a></li>
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
            <h1>Gallery</h1>
        </div>
    </div>




    <div id="container" style="margin-top:100px">

        <div class="slide anim-in">
            <div class="image" style="background-image: url(./images/img1.jpg)"></div>
            <div class="overlay"></div>
            <div class="content">
                <h1 class="title" data-title="Venice">Venice</h1>

                <div class="tour-info">
                    <h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Assumenda accusamus architecto unde dicta aperiam, excepturi vero
                        molestiae illo earum consequuntur mollitia porro vitae possimus
                        aspernatur eaque voluptas ducimus. Quidem nostrum sequi iure
                        corporis placeat deserunt veritatis ducimus illum ullam minima
                        corrupti quia neque, dolorem omnis aliquid asperiores odit veniam
                        reprehenderit?
                    </h3>
                </div>
                <ul class="city-info">
                    <li class="country">Country: Italy</li>
                    <li class="founded">Founded: 697</li>
                    <li class="population">Population: 260,060</li>
                </ul>
            </div>
            <div class="btn-info-close"></div>
        </div>
        <div class="slide anim-in">
            <div class="image" style="
            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/paris.jpg);
          "></div>
            <div class="overlay"></div>
            <div class="content">
                <h1 class="title" data-title="Paris">Paris</h1>
                <div class="emblem" style="
              background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/french-emblem.svg);
            "></div>
                <ul class="city-info">
                    <li class="country">Country: France</li>
                    <li class="founded">Founded: ~250BC</li>
                    <li class="population">Population: 2.2 Million</li>
                </ul>
            </div>
            <div class="btn-info-close"></div>
        </div>
        <div class="slide anim-in">
            <div class="image" style="
            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/salzburg.jpg);
          "></div>
            <div class="overlay"></div>
            <div class="content">
                <h1 class="title" data-title="Salzburg">Salzburg</h1>
                <div class="emblem" style="
              background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/austrian-emblem.svg);
            "></div>
                <ul class="city-info">
                    <li class="country">Country: Austria</li>
                    <li class="founded">Founded: 1622</li>
                    <li class="population">Population: 145,871</li>
                </ul>
            </div>
            <div class="btn-info-close"></div>
        </div>
        <div class="slide anim-in">
            <div class="image" style="
            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/prague.jpg);
          "></div>
            <div class="overlay"></div>
            <div class="content">
                <h1 class="title" data-title="Prague">Prague</h1>
                <div class="emblem" style="
              background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/czech-emblem.svg);
            "></div>
                <ul class="city-info">
                    <li class="country">Country: Czech Republic</li>
                    <li class="founded">Founded: 870</li>
                    <li class="population">Population: 1.2 Million</li>
                </ul>
            </div>
            <div class="btn-info-close"></div>
        </div>
    </div>
    <div id="container">
    <?php 
    // include './includes/connect.inc.php';
    include("includes/functions.php");
    $conn = new mysqli("localhost","root","","travels","3306");
    $sql = "SELECT * FROM tour_package";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $package_name=$row["name"];
            $images=get_package_images($package_name);
            $i = 0;
            echo '
                <div class="slide anim-in">
                    <div class="image" style="background-image: '.$images[$i].'"></div>
                    <div class="overlay"></div>
                    <div class="content">
                        <h1 class="title" data-title="'.$row["name"].'">'.$row["name"].'</h1>

                        <div class="tour-info">
                            <h3>'.$row["description"].'</h3>
                        </div>
                        <ul class="city-info">
                            <li class="country">Country: '.$row["name"].'</li>
                            <li class="founded">Founded: 697</li>
                            <li class="population">Population: 260,060</li>
                        </ul>
                    </div>
                    <div class="btn-info-close"></div>
                </div>';
            $i++;
        }
        echo "</table>";
        } else {
        echo "0 results";
    }
            
    ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>

    <script>
    (function(window, document, $, undefined) {
        var $slides, $btnArr;

        function onClick(e) {
            var $target = $(e.target);
            if (
                $target.hasClass("slide") &&
                !$target.hasClass("active") &&
                !$target.siblings().hasClass("active")
            ) {
                $target.removeClass("anim-in last-viewed").addClass("active");
                $target
                    .siblings()
                    .removeClass("anim-in last-viewed")
                    .addClass("anim-out");
            }
        }

        function closeSlide(e) {
            var $slide = $(e.target).parent();
            $slide.removeClass("active anim-in").addClass("last-viewed");
            $slide.siblings().removeClass("anim-out").addClass("anim-in");
        }

        $(function() {
            $slides = $(".slide");
            $btnArr = $slides.find(".btn-info-close");
            $slides.on("click", onClick);
            $btnArr.on("click", closeSlide);
        });
    })(this, document, jQuery);
    </script>
</body>

</html>