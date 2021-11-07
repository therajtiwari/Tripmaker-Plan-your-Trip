<?php 

include("includes/admin_functions.php");
$packages=get_packages();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Admin Packages</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!----css3---->
    <link rel="stylesheet" href="./css/admin.css" />
    <link rel="stylesheet" href="./css/admin_custom.css" />
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>
                    <img src="img/logo.png" class="img-fluid" /><span>Travels</span>
                </h3>
            </div>
            <ul class="list-unstyled components">
                <li class>
                    <a href="./admin.php" class="dashboard"><i
                            class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
                <li class="active">
                    <a href="./admin_packages.php"><i
                            class="material-icons">featured_play_list</i><span>Packages</span></a>
                </li>
                <li class="">
                    <a href="./admin_users.php"><i class="material-icons">person_search</i><span>Users</span></a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <a class="navbar-brand" href="#"> Dashboard </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>
                    </div>
                </nav>
            </div>

            <div class="main-content">


                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Listed packages</h4>
                                <p class="category">All the currently listed tour packages on the website </p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>Sr no</th>
                                            <th>Package Name</th>
                                            <th>Price (adult)</th>
                                            <th>Price (child)</th>
                                            <th>Discount (%)</th>
                                            <th>Total Days</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                            for($i=0;$i<count($packages);$i++)
                                            {
                                            $name=$packages[$i]['name'];
                                            $price_adult=$packages[$i]['price_adult'];
                                            $price_child=$packages[$i]['price_child'];
                                            $discount=$packages[$i]['discount'];
                                            $total_days=$packages[$i]['total_days'];
                                            $id=$packages[$i]['id'];
                                            echo "<tr>";
                                            echo "<td>".($i+1)."</td>";
                                            echo "<td><a href='./package_info.php?name=$name'>$name</a></td>";
                                            echo "<td>$price_adult</td>";
                                            echo "<td>$price_child</td>";
                                            echo "<td>$discount</td>";
                                            echo "<td>$total_days</td>";
                                            echo "</tr>";

                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Add new package</h4>
                            </div>
                            <div class="card-content table-responsive">

                                <form class="col-md-7" onsubmit="return false">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Package name</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="description">
                                    </div>

                                    <div class="mb-3">
                                        <label for="price_adult" class="form-label">Price (adult)</label>
                                        <input type="number" class="form-control" id="price_adult">
                                    </div>
                                    <div class="mb-3">
                                        <label for="price_child" class="form-label">Price (child)</label>
                                        <input type="number" class="form-control" id="price_child">
                                    </div>
                                    <div class="mb-3">
                                        <label for="discount" class="form-label">Discount (%)</label>
                                        <input type="number" class="form-control" id="discount">
                                    </div>
                                    <div class="mb-3">
                                        <label for="total_days" class="form-label">Total Days</label>
                                        <input type="number" class="form-control" id="total_days">
                                    </div>
                                    <div class="mb-3">
                                        <label for="itinerary" class="form-label">Itinerary</label>
                                        <input type="text" class="form-control" id="itinerary">
                                    </div>

                                    <div class="mb-3">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" class="form-control" id="location">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image_url" class="form-label">Image url</label>
                                        <input type="text" class="form-control" id="image_url">
                                    </div>
                                    <button id="add_package_submit" class="btn btn-primary">Submit</button>
                                </form>
                                <div class="alert alert-success" id="success-alert" style="margin-top:30px">
                                    <strong>Success!</strong>
                                    Package added successfully.
                                </div>
                                <div class="alert alert-danger" id="danger-alert" style="margin-top:30px">
                                    Something went wrong. Please try again.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#success-alert").hide();
        $("#danger-alert").hide();
        $("#sidebarCollapse").on("click", function() {
            $("#sidebar").toggleClass("active");
            $("#content").toggleClass("active");
        });

        $(".more-button,.body-overlay").on("click", function() {
            $("#sidebar,.body-overlay").toggleClass("show-nav");
        });
    });

    $('#add_package_submit').click(function() {
        var name = $("#name").val();
        var description = $("#description").val();
        var price_adult = $("#price_adult").val();
        var price_child = $("#price_child").val();
        var discount = $("#discount").val();
        var total_days = $("#total_days").val();
        var itinerary = $("#itinerary").val();
        var location = $("#location").val();
        var image_url = $("#image_url").val();

        console.log(name, description, price_adult, price_child, discount, total_days, itinerary, location,
            image_url);

        $.ajax({
            url: './includes/admin_add_package.php',
            type: 'POST',
            data: {
                add: 'package',
                name: name,
                description: description,
                price_adult: price_adult,
                price_child: price_child,
                discount: discount,
                total_days: total_days,
                itinerary: itinerary,
                location: location,
                image_url: image_url

                // email: email
            },
            success: function(data) {
                if (data == "200") {
                    console.log("success");

                    $("#success-alert").fadeTo(4000, 500).slideUp(500,
                        function() {
                            $("#success-alert").slideUp(500);
                        });
                } else {
                    // console.log("failed");
                    console.log(data)
                    $("#danger-alert").fadeTo(4000, 500).slideUp(500,
                        function() {
                            $("#danger-alert").slideUp(500);
                        });
                }
            }
        });





    });
    </script>
</body>

</html>