<?php
include("../config.php");
include("./connect.inc.php");

$token=$_POST['stripeToken'];
$stripe_card_type=$_POST['stripeTokentype'];
$amount=$_POST['cost']*100;
$description=$_POST['description'] ." by " .$_POST['user_email'];


function add_booking(){
    $cn=new_conn();
    $cost=$_POST['cost'];
    $email=$_POST['user_email'];
    $adults=$_POST['adults'];
    $children=$_POST['children'];
    $date_from=$_POST['date_from'];
    $date_till=$_POST['date_from'];
    $food_type=$_POST['food_type'];
    $days=$_POST['days'];
    $tour_package_id=$_POST['tour_package_id'];
    $user_id;
    
    $sql = "SELECT id FROM `user_info` WHERE `email` = '$email'";
    $result=mysqli_query($cn,$sql);
      // fetching user id from db
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user_id = $row["id"];
    }
    } else {
    echo "0 results";
    }

    $sql="INSERT INTO `booking`(`user_id`, `tour_package_id`, `cost`, `adults`, `children`, `date_from`, `date_till`, `food_type` ) VALUES ($user_id,$tour_package_id,$cost,$adults,$children,'$date_from',DATE_ADD('$date_from',INTERVAL $days DAY),'$food_type')";
    if ($cn->query($sql) === TRUE) {
        return true;
    } else {
      echo "Error: " . $sql . "<br>" . $cn->error;
      return false;
    }

}




$charge = \Stripe\Charge::create([
    "amount" => $amount,
    "currency" => 'inr',
    "description"=>$description,
    "source"=> $token,
    
  ]);



  if($charge){ 
  $success=add_booking();
  if($success){
    header("Location: ../payment_success.php");}
  }


?>