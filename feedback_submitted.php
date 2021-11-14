<!DOCTYPE html>
<html lang="en">
<?php
function submit_feedback(){
    $conn = mysqli_connect("localhost","root","","travels","3306");
    // access local storage
    $name = $_COOKIE['feedback_name'];
    $email = $_COOKIE['feedback_email'];
    $referral = $_COOKIE['feedback_referral'];
    $comment = $_COOKIE['feedback_comment'];
    $sql = "INSERT INTO `feedback`(`name`, `email`, `referral`, `comment`) VALUES ('$name','$email','$referral','$comment')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>console.log(Review Submitted Successfully);</script>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
submit_feedback();
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
                <h3>Your Feedback is Submitted Successful!</h3>
                <h4>Thank You for travelling with us. <a href="./all_tours.php">Try Our Other Packages</a> For more fun.</h4>
            </div>
        </div>
    </div>

</body>

</html>