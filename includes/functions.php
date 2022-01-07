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

function find_user($email,$password)
{
    $cn=mysqli_connect("localhost","root","","travels","3306");
    $sql = "SELECT * FROM `user_info` WHERE `email` = '$email' AND `password` = SHA2('$password',256);";
    if ($cn->query($sql) === TRUE) {
    echo "User exists";
    } else {
    echo "Error: " . $sql . "<br>" . $cn->error;
    }

    $result = $cn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br>Users: " . $row["fname"] . " " . $row["lname"];
            $username = $row["fname"] . " " . $row["lname"];
        }
    } else {
        echo "0 results";
    }
    // $username = $row["fname"] . " " . $row["lname"];
    return $username;
}


function login($email,$password){
    echo "connect.php";
    echo "ok";
    $cn=new_conn();
    $query = "SELECT * FROM `user_info` WHERE `email` = '$email' AND `password` = SHA2('$password',256);";
    $result = mysqli_query($cn,$query);
    if(mysqli_num_rows($result)>0){
        $_SESSION['user_email'] = $email;
        $name;
        $is_admin;
        while($row = $result->fetch_assoc()) {
            $name=$row["fname"] ;
            $is_admin=$row["is_admin"] ;
          }
        $_SESSION['username'] = $name;
        $_SESSION['is_admin'] = $is_admin;
        if($is_admin == 1){
            header("Location: admin.php"); 
        } else {
            header("Location: index.php");
        }
        // header("Location: index.php");
        die;
    }
    else{
        echo "Invalid email or password";
    }
    
}
function admin_login($email,$password,$is_admin){
    echo "connect.php";
    echo "ok";
    $cn=new_conn();
    $query = "SELECT * FROM `user_info` WHERE `email` = '$email' AND `password` = SHA2('$password',256) AND `is_admin` = '$is_admin';";
    $result = mysqli_query($cn,$query);
    if(mysqli_num_rows($result)>0){
        $_SESSION['user_email'] = $email;
        $name;
        while($row = $result->fetch_assoc()) {
            $name=$row["fname"] ;
          }
        $_SESSION['username'] = $name;
        header("Location: admin.php");
        die;
    }
    else{
        echo "Invalid email or password";
    }
    
}

function check_login($cn){
    if(isset($_SESSION['user_email'])){
        // echo "logged in";
        $user_email=$_SESSION['user_email'];
        $query = "SELECT * FROM `user_info` WHERE `email` = '$user_email'";
        $result=mysqli_query($cn,$query);
        if(mysqli_num_rows($result)>0){
            $user_data=mysqli_fetch_assoc($result);
            // $_SESSION['user_id']=$row['id'];
            return $user_data;
        }
        else{
            echo "not logged in";
        }

    }
    //redirect to login
    echo "<br/>";
    echo "not logged in";
    // header('location:login.php');
    die;
}

function get_user_details($user_email){
    
    $cn=new_conn();
    $query = "SELECT fname,lname,dob,phone,address,pincode,city,country FROM `user_info` WHERE `email` = '$user_email'";
    echo $query;
    $result=mysqli_query($cn,$query);
    if(mysqli_num_rows($result)>0){
        $user_data=mysqli_fetch_assoc($result);
        // $_SESSION['user_id']=$row['id'];
        return $user_data;
    }
    else{
        echo "Something went wrong";
    }

}

function get_package_info($package_name){
    $cn=new_conn();
    $query = "SELECT id,name,description,price_adult,price_child,discount,available_days,total_days,itinerary,rating FROM `tour_package` WHERE `name` = '$package_name'";
    // echo $query;
    // echo $query;
    $result=mysqli_query($cn,$query);
    if(mysqli_num_rows($result)>0){
        $package_data=mysqli_fetch_assoc($result);
        // $_SESSION['user_id']=$row['id'];
        return $package_data;
    }
    else{
        // echo "Something went wrong";
        return false;
    }
}

function get_package_images($package_name){
    $cn=new_conn();
    $images;
    
    $query_id = "select link from location_images where location_id in (select id from location where tour_package_id=(SELECT id FROM `tour_package` WHERE `name` = '$package_name'));";
    $result_id=mysqli_query($cn,$query_id);
    if(mysqli_num_rows($result_id)>0){
        
        while($row = $result_id->fetch_assoc()) {
            $images[]=$row["link"];
        }
        return $images;
    }
    else{
        // echo "Something went wrong";
        return false;
    }
}



function get_package_name_by_id($package_id){
    $cn=new_conn();
    $name;
    
    $query_id = "select name from tour_package where id = $package_id;";
    $result_id=mysqli_query($cn,$query_id);
    if(mysqli_num_rows($result_id)>0){
        
        while($row = $result_id->fetch_assoc()) {
            $name[]=$row["name"];
        }
        return $name;
    }
    else{
        // echo "Something went wrong";
        return false;
    }
}


function get_package_reviews($package_name){
    $cn=new_conn();
    
    $query_id = "select * from review where tour_package_id = (SELECT id FROM `tour_package` WHERE `name` = '$package_name');";
    $result=mysqli_query($cn,$query_id);
    $reviews_array=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $reviews_array;
    
}

function add_booking_order($tour_package_id,$user_id,$no_of_adults,$no_of_children,$total_price,$payment_method,$payment_status){
    $cn=new_conn();
    $query = "INSERT INTO `booking_order`(`tour_package_id`, `user_id`, `no_of_adults`, `no_of_children`, `no_of_infants`, `total_price`, `payment_method`, `payment_status`, `payment_date`, `payment_time`) VALUES ('$tour_package_id','$user_id','$no_of_adults','$no_of_children','$no_of_infants','$total_price','$payment_method','$payment_status','$payment_date','$payment_time');";
    
}
    

function get_package_information($package_name){
    $conn = new mysqli("localhost","root","","travels","3306");
    $sql = "SELECT * FROM tour_package WHERE name='$package_name'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $package_info[0]=$row["name"];
            $package_info[1]=$row["description"];
        };
    };
    return $package_info;
};

function get_packages(){
    $conn = new mysqli("localhost","root","","travels","3306");
    $sql = "SELECT * FROM tour_package";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $packages[]=$row["name"];
        };
    };
    return $packages;
};

function get_package_images_by_id($package_id){
    $cn=new_conn();
    $images;
    
    $query_id = "select link from location_images where location_id in (select id from location where tour_package_id=(SELECT id FROM `tour_package` WHERE `id` = '$package_id'));";
    $result_id=mysqli_query($cn,$query_id);
    if(mysqli_num_rows($result_id)>0){
        
        while($row = $result_id->fetch_assoc()) {
            $images[]=$row["link"];
        }
        return $images;
    }
    else{
        // echo "Something went wrong";
        return false;
    }
}

function get_package_ap_by_id($package_id){
    $cn=new_conn();
    $price_adult;
    
    $query_id = "select price_adult from tour_package where id = $package_id;";
    $result_id=mysqli_query($cn,$query_id);
    if(mysqli_num_rows($result_id)>0){
        
        while($row = $result_id->fetch_assoc()) {
            $price_adult[]=$row["price_adult"];
        }
        return $price_adult;
    }
    else{
        // echo "Something went wrong";
        return false;
    }
}

function get_package_cp_by_id($package_id){
    $cn=new_conn();
    $price_child;
    
    $query_id = "select price_child from tour_package where id = $package_id;";
    $result_id=mysqli_query($cn,$query_id);
    if(mysqli_num_rows($result_id)>0){
        
        while($row = $result_id->fetch_assoc()) {
            $price_child[]=$row["price_child"];
        }
        return $price_child;
    }
    else{
        // echo "Something went wrong";
        return false;
    }
}
?>