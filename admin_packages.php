<?php 

include("includes/admin_functions.php");


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
                                <h4 class="card-title">Recent Bookings</h4>
                                <p class="category">Bookings placed recently </p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>Sr no</th>
                                            <th>Package Name</th>
                                            <th>User</th>
                                            <th>Cost</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
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
        $("#sidebarCollapse").on("click", function() {
            $("#sidebar").toggleClass("active");
            $("#content").toggleClass("active");
        });

        $(".more-button,.body-overlay").on("click", function() {
            $("#sidebar,.body-overlay").toggleClass("show-nav");
        });
    });
    </script>
</body>

</html>