<?php
// include("connect.php");
include("includes/connect.inc.php");

// function add_new_user($fname,$lname,$age,$gender,$email,$password)
// {   
//     $cn=new_conn();
// 	$sql = "INSERT INTO user_info (fname, lname, age, gender, email, password)
//     VALUES ('$fname','$lname','$age','$gender','$email',SHA2('$password',256));";
//     // VALUES ('axon', 'blaze', 21,'male','axon@example.com','90','hello')";
//     // $sql = "INSERT INTO `user_info`(`fname`, `lname`, `age`, `gender`, `email`, `password`) VALUES ('axon', 'blaze', 21,'male','axon@example.com','hello')";
//     $sql = "INSERT INTO `user_info`(`fname`, `lname`, `age`, `gender`, `email`, `password`) VALUES ('" . $fname ."','" . $lname ."','" . $age ."','" . $gender ."','" . $email ."','" . $password "')";
//     if ($cn->query($sql) === TRUE) {
//     echo "New record created successfully";
//     } else {
//     echo "Error: " . $sql . "<br>" . $cn->error;
//     }
// }

function update_user_details($email,$fname,$lname,$phone,$address,$city,$pincode,$country)
{
    $cn=new_conn();
    $sql = "UPDATE `user_info` SET `fname` = '$fname',`lname` = '$lname',
    `phone` = '$phone',`address` = '$address',`pincode` = '$pincode',`city` = '$city', `country` = '$country' WHERE email = '$email';";
    $result = mysqli_query($cn,$sql);
    echo $result;
    if($result )
    {
        echo "Record updated successfully";
        return true;
    }
    else
    {
        echo "Error updating record: " . mysqli_error($cn);
        return false;
    }
}

function get_total_orders(){
    
    $cn=new_conn();
    $sql = "SELECT * FROM `booking`";
    $result = mysqli_query($cn,$sql);
    $total_orders = mysqli_num_rows($result);
    return $total_orders;
}

function get_total_users(){
    
    $cn=new_conn();
    $sql = "SELECT * FROM `user_info`";
    $result = mysqli_query($cn,$sql);
    $total_orders = mysqli_num_rows($result);
    return $total_orders;
}

function get_total_profit(){
    
    $cn=new_conn();
    $sql = "SELECT sum(cost) FROM `booking`";
    $result = mysqli_query($cn,$sql);
    $total_profits_array = mysqli_fetch_array($result);
    // echo $total_profits_array[0];
    $total_profits = $total_profits_array[0];
    $total_profits= $total_profits*0.2;
    return $total_profits;
   
}

function get_average_rating(){
    
    $cn=new_conn();
    $sql = "SELECT avg(rating) FROM `review`";
    $result = mysqli_query($cn,$sql);
    $average_rating_array = mysqli_fetch_array($result);
    // echo $total_profits_array[0];
    $average_rating = $average_rating_array[0];
    return $average_rating*2;
   
   
}

function get_recent_bookings(){
    $cn=new_conn();
    $sql = "SELECT tour_package.name as package_name,concat(user_info.fname,' ', user_info.lname) as username, booking.cost as total_cost ,booking.date_from as tour_date FROM `booking`  join user_info on booking.user_id=user_info.id join tour_package on tour_package_id=tour_package.id ORDER BY `booking`.`booking_time` DESC LIMIT 10;";
    $result = mysqli_query($cn,$sql);
    $recent_bookings_array = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $recent_bookings_array;
   
    
}

function get_users(){
    $cn=new_conn();
    $sql = "SELECT concat(fname,' ',lname) as name,lower(email) as email,country,dob as user_since FROM `user_info`";
    $result = mysqli_query($cn,$sql);
    $users_array = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $users_array;

}

?>