<?php 

include("includes/admin_functions.php");

session_start();
if(!isset($_SESSION['is_admin']) || ($_SESSION['is_admin']!=1)){
    header('Location: index.php');
  }

$total_orders = get_total_orders();

$total_users=get_total_users();
$total_profit=get_total_profit();
$average_rating=get_average_rating();
$recent_bookings=get_recent_bookings(); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Admin</title>
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
                    <img class="img-fluid" src="./img/logo.png" /><span><a href="./index.php">TripMaker</a></span>

                </h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="./admin.php" class="dashboard"><i
                            class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
                <li class="">
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
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <span class="material-icons">sentiment_satisfied_alt</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>User Experience</strong></p>
                                <h3 class="card-title">
                                    <?php echo $average_rating?>/10
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons ">quiz</i>
                                    <a href="#pablo">User satisfaction</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-rose">
                                    <span class="material-icons">shopping_cart</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Total Bookings</strong></p>
                                <h3 class="card-title">
                                    <?php echo $total_orders?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">quiz</i> Total Bookings in the last 7 days
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons"> account_balance </span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Total profits</strong></p>
                                <h3 class="card-title">Rs <?php echo $total_profit?></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">quiz</i> Weekly Profits
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-info">
                                    <span class="material-icons"> people_outline </span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Total Users</strong></p>
                                <h3 class="card-title">
                                    <?php echo $total_users ?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">quiz</i> Total count of Users
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-md-12">
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


                                        <?php 

                                        for($i=0;$i<count($recent_bookings);$i++)
                                        {
                                            $package_name = $recent_bookings[$i]['package_name'];
                                            $user_name = $recent_bookings[$i]['username'];
                                            $cost = $recent_bookings[$i]['total_cost'];
                                            $date = $recent_bookings[$i]['tour_date'];
                                            $sr_no = $i+1;
                                            echo "<tr>";
                                            echo "<td>".$sr_no."</td>";
                                            echo "<td>".$package_name."</td>";
                                            echo "<td>".$user_name."</td>";
                                            echo "<td>".$cost."</td>";
                                            echo "<td>".$date."</td>";
                                            echo "</tr>";
                                        }
                                        ?>
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