<?php

function add_user($fname,$lname,$age,$gender,$email,$password)
{   
    $cn=mysqli_connect("localhost","root","","travels","3306");
	$sql = "INSERT INTO user_info (fname, lname, age, gender, email, password)
    VALUES ('$fname','$lname','$age','$gender','$email',SHA2('$password',256));";
    // VALUES ('axon', 'blaze', 21,'male','axon@example.com','90','hello')";
    // $sql = "INSERT INTO `user_info`(`fname`, `lname`, `age`, `gender`, `email`, `password`) VALUES ('axon', 'blaze', 21,'male','axon@example.com','hello')";
    // $sql = "INSERT INTO `user_info`(`fname`, `lname`, `age`, `gender`, `email`, `password`) VALUES ('" . $fname ."','" . $lname ."','" . $age ."','" . $gender ."','" . $email ."','" . $password "')";
    if ($cn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $cn->error;
    }
}

function update_user($fname,$lname,$age,$gender,$email,$phone,$address,$pincode,$city,$country)
{   
    $cn=mysqli_connect("localhost","root","","travels","3306");
    $sql = "UPDATE `user_info` SET `fname` = '$fname',`lname` = '$lname',`age` = '$age',`gender` = '$gender',
    `phone` = '$phone',`address` = '$address',`pincode` = '$pincode',`city` = '$city', `country` = '$country' WHERE email = '$email';";

    if ($cn->query($sql) === TRUE) {
    echo "User record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $cn->error;
    }
}

// function find_user($email,$password)
// {
//     $cn=mysqli_connect("localhost","root","","travels","3306");
//     $sql = "SELECT * FROM `user_info` WHERE `email` = '$email' AND `password` = SHA2('$password',256);";
// //     if ($cn->query($sql) === TRUE) {
// //     echo "User exists";
// //     } else {
// //     echo "Error: " . $sql . "<br>" . $cn->error;
// //     }
// // }
//     $result = $cn->query($sql);
//     if ($result->num_rows > 0) {
//         // output data of each row
//         while($row = $result->fetch_assoc()) {
//             echo "<br>Users: " . $row["fname"] . " " . $row["lname"];
//             $username = $row["fname"] . " " . $row["lname"];
//         }
//     } else {
//         echo "0 results";
//     }
//     // $username = $row["fname"] . " " . $row["lname"];
//     return $username;
// }


function login($email,$password){

    echo "login";
    $cn=mysqli_connect("localhost","root","","travels","3306");
    $query = "SELECT * FROM `user_info` WHERE `email` = '$email' AND `password` = SHA2('$password',256);";
    $result = mysqli_query($cn,$query);
    
    if(mysqli_num_rows($result)>0){
        // echo $result;
        echo "login success";
       //set session variables
        //  $_SESSION['user_email'] = $email;
         $_SESSION['user_email'] = $email;
        // echo $_SESSION['user_email'];
        if(isset($_SESSION['user_email'])){
            echo "session set";
        }
        else{
            echo "session not set";
        }
        header("Location: index.php");
        // die;
    }
    else{
        echo "Invalid email or password";
    }
    
}

function logout(){
    // session_abort();
    $_SESSION["username"]="";
    $_SESSION["loginstatus"]="";
}
// add_user("shreyans", "mulkutkar", 21,"male","shreyans@gmail.com","hello");
// update_user("axon22", "blaze22", 22,"male","axon2@example.com","920839394","myhome","4030303","mumbai","india");
// find_user('shreyans@gmail.com','hello');
// login('shreyans@gmail.com','hello');


function check_login($cn){
    if(isset($_SESSION['user_email'])){
        echo "logged in";
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
?>