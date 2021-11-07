<?php

include("includes/functions.php");
session_start();
$status = "";
// print to console

$package_name=$_GET['name'];
echo "<script>console.log('Debug Objects: " . $package_name . "' );</script>";


$package_info=get_package_info($package_name);
$images=get_package_images($package_name);

if(!$package_info){
    echo "<script>console.log('Debug Objects: " . "package not found" . "' );</script>";
    $status = "package not found";
    header("Location: 404.html");
}
else{
    echo "<script>console.log('Debug Objects: " . "package found" . "' );</script>";
    $status = "packageq found";
    // echo "<script>console.log('Debug Objects: " . $package_info . "' );</script>";
    foreach ($package_info as $key => $value) {
        # code...
        echo "<script>console.log('Debug Objects: " .$key ." ". $value . "' );</script>";
    }

if($images){
    echo "<script>console.log('Debug Objects: " . "images found" . "' );</script>";
    foreach ($images as $key => $value) {
        # code...
        echo "<script>console.log('Debug Objects: " .$key ." ". $value . "' );</script>";
    }
    echo "<script>console.log('Debug Objects: " .count($images) . "' );</script>";

}
}

    

    


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Info</title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/nav.css" />
    <link rel="stylesheet" href="./css/package_info.css" />



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
    <div class="container-wrapper">
        <div class="container-fluid content">
            <div class="row">
                <div class="package-info col-md-8">
                    <div class="left-container  ">
                        <div class="tour-images ">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">

                                    <?php
                                    for($i=0;$i<count($images);$i++){
                                        
                                        if($i==0){
                                            echo '<div class="carousel-item active">
                               
                                            <img src="'.$images[$i].'" class="d-block w-100" alt="..."> 
                                            </div>';
                                    }
                                    else{
                                        echo '<div class="carousel-item">
                                            <img src="'.$images[$i].'" class="d-block w-100" alt="..."> 
                                            </div>';
                                    }
                                    }
                                         ?>


                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="tour-title">
                            <h3> <?php echo $package_info['name']." Tour" ; ?> </h3>
                            <h5>Rs<?php echo $package_info['price_adult']; ?></h5>
                            <?php if($package_info["rating"]){
                                echo '<h6>Ratings'. $package_info["rating"]. '/5 </h6>';
                            }
                            else{
                                echo '<h6 style="color:gray">No ratings </h6>';
                            } ?>
                        </div>
                        <div class=" tour-desciption" style="margin-top:30px">
                            <h6><?php echo $package_info['description']; ?></h6>
                        </div>
                        <div class="itinerary-info">
                            <h4>Itinerary</h4>
                            <ul>
                                <?php 
                                    $itinerary = explode(';',$package_info['itinerary']);
                                    // foreach($itinerary as $itinerary_item)
                                    // {
                                    //     echo '<li>'.$itinerary_item.'</li>';
                                    // }
                                    for($i=0;$i<count($itinerary)-1;$i++){
                                        echo '<li>'.$itinerary[$i].'</li>';
                                    }
                                ?>


                            </ul>
                        </div>
                    </div>

                    <div class="reviews">
                        <h3>Reviews</h3>
                        <div class="review-card">
                            <div class="review-container">
                                <div class="title ">
                                    <h4>Great Place and great Service</h4>
                                </div>
                                <div class="ratings">
                                    <h5>4.5/5 stars</h5>

                                </div>
                            </div>

                            <div class="review-description">
                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est impedit
                                    optio soluta
                                    deleniti doloribus quae atque sequi quisquam a deserunt commodi quod
                                    quas voluptates
                                    voluptatem accusantium, voluptatibus ex? Cum consectetur aut ratione
                                    nesciunt,
                                    reprehenderit culpa earum error alias numquam suscipit fugit architecto!
                                    Sit
                                    repudiandae
                                    veritatis expedita, beatae pariatur odio soluta perferendis nobis labore
                                    cum ad
                                    dicta
                                    autem, aperiam iure officia?</h6>
                            </div>
                            <div class="reviewer">
                                <h6>- John Doe (09 May 2019)</h6>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="review-container">
                                <div class="title ">
                                    <h4>Great Place and great Service</h4>
                                </div>
                                <div class="ratings">
                                    <h5>4.5/5 stars</h5>

                                </div>
                            </div>

                            <div class="review-description">
                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est impedit
                                    optio soluta
                                    deleniti doloribus quae atque sequi quisquam a deserunt commodi quod
                                    quas voluptates
                                    voluptatem accusantium, voluptatibus ex? Cum consectetur aut ratione
                                    nesciunt,
                                    reprehenderit culpa earum error alias numquam suscipit fugit architecto!
                                    Sit
                                    repudiandae
                                    veritatis expedita, beatae pariatur odio soluta perferendis nobis labore
                                    cum ad
                                    dicta
                                    autem, aperiam iure officia?</h6>
                            </div>
                            <div class="reviewer">
                                <h6>- John Doe (09 May 2019)</h6>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="booking-box col-md-4">
                    <div class="form-box">
                        <h3 style="text-align:center">Book Now</h3>
                        <hr>
                        <div class=" form-wrapper">
                            <form>
                                <div class="form-group">
                                    <label for="checkin">Check In</label>
                                    <input type="date" class="form-control" id="checkin" placeholder="Arrival">
                                </div>
                                <div class="form-group">
                                    <label for="cuisine">Choice of Cuisine</label>
                                    <select
                                    class="form-group form-select last"
                                    aria-label="Cuisine"
                                    id="cuisine"
                                    name="cuisine"
                                    >
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option value="V">Veg</option>
                                    <option value="N">Non-Veg</option>
                                    <option value="J">Jain</option>
                                    </select>    
                                    <label for="adults">Adults</label>
                                    <select class="form-control" id="adults">

                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="children">Children</label>
                                    <select class="form-control" id="children">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="total-price">
                                    <h5>Total Price: Rs 200</h5>
                                </div>
                                <button type="submit" class="btn btn-warning book-btn">Book</button>
                            </form>
                        </div>
                    </div>
                </div>
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
    var changeTotal = function() {
        console.log('change');

        var adults = $('#adults').val();
        var children = $('#children').val();
        var total = adults * parseInt(<?php echo $package_info['price_adult'] ?>) + children * (parseInt(
            <?php echo $package_info['price_child'] ?>));

        var discount = 0;

        if (parseInt(<?php echo $package_info['discount'] ?>) > 0) {
            discount = parseInt(<?php echo $package_info['discount'] ?>);
            console.log(discount);
        }

        if ((adults > 0 || children > 0) && discount) {
            total_initial = total
            total = total_initial - (total_initial * (discount / 100));
            $('.total-price').html('Total: ' +
                total_initial + ' + <strong style="color:red">' +
                discount + '% discount </strong>  = Rs ' + total);

        } else {
            $('.total-price').html('Total: Rs ' + total);

        }
        console.log(total);
    };

    $("#adults").change(changeTotal);
    $("#children").change(changeTotal);

    $(document).ready(changeTotal);
    </script>

</body>

</html>