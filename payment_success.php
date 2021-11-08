<!DOCTYPE html>
<html lang="en">
<?php
function add_booking_order(){$conn = mysqli_connect("localhost","root","","travels","3306");
$tour_package_id = strval($_COOKIE['package_id']);
$email = $_COOKIE['email'];
$sql = "SELECT id FROM `user_info` WHERE `email` = '$email'";
$result=mysqli_query($conn,$sql);
// if(mysqli_num_rows($result)>0){
//     $user_id=mysqli_arra($result);
// }else{
//     echo "Something went wrong";
// }
// fetching user id from db
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user_id = $row["id"];
    }
  } else {
    echo "0 results";
  }
$cost = strval($_COOKIE['price']);
$adults = strval($_COOKIE['num_of_adults']);
$children = strval($_COOKIE['num_of_children']);
$date_from = strval($_COOKIE['check_in']);
$days = strval($_COOKIE['num_of_days']);
$date_till = date('Y-m-d', strtotime($date_from. ' + '.$days.' days'));
$food_type = strval($_COOKIE['food_type']);
$query = "INSERT INTO `booking`(`tour_package_id`, `user_id`, `cost`, `adults`, `children`, `date_from`, `date_till`, `food_type`) VALUES ($tour_package_id,$user_id,$cost,$adults,$children,$date_from,$date_till,'$food_type');";
if ($conn->query($query) === TRUE) {
    echo "<script>console.log(Payment Successful);</script>";
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
}
add_booking_order();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>

<body>
    <div class="container" style="margin-top: 80px !important;margin: auto;background-color: #f8f9fa !important;
  box-shadow: #8e9194 0px 0px 10px;
  box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px,
    rgb(60 64 67 / 15%) 0px 2px 6px 2px;
  padding: 20px; width:80%">
        <div class="row">
            <div class="col-md-8">
                <h3>Your payment is successful!</h3>
                <h4>Go to <a href="./user_bookings.php">My orders</a> to see your booking details</h4>
            </div>
        </div>
    </div>

</body>

</html>