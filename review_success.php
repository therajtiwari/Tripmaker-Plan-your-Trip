<!DOCTYPE html>
<html lang="en">
<?php
function submit_review(){$conn = mysqli_connect("localhost","root","","travels","3306");
    $title = strval($_COOKIE['review_title']);
    $description = $_COOKIE['review_description'];
    $rating = $_COOKIE['review_rating'];
    $tour_package_id = strval($_COOKIE['package_id']);
    $email = $_COOKIE['email'];
    $sql = "SELECT id,fname FROM `user_info` WHERE `email` = '$email'";
    $result=mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $user_id = $row["id"];
            $username = $row["fname"];
        }
      } else {
        echo "0 results";
      } 
    $query = "INSERT INTO `review`(`username`, `tour_package_id`, `user_id`, `rating`, `title`, `description`) VALUES ('$username',$tour_package_id,$user_id,$rating,'$title','$description');";
    if ($conn->query($query) === TRUE) {
        echo "<script>console.log(Review Submitted Successfully);</script>";
      } else {
        echo "Error: " . $query . "<br>" . $conn->error;
      }
}
submit_review();
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
                <h3>Your Review is Submitted Successful!</h3>
                <h4>Thank You for travelling with us. <a href="./all_tours.php">Try our other Packages</a> for more fun.
                </h4>
            </div>
        </div>
    </div>

</body>

</html>