<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>

<body>
    <?php
session_start();
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

function find_user($email,$password)
{
    $cn=mysqli_connect("localhost","root","","travels","3306");
    $sql = "SELECT * FROM `user_info` WHERE `email` = '$email' AND `password` = SHA2('$password',256);";
//     if ($cn->query($sql) === TRUE) {
//     echo "User exists";
//     } else {
//     echo "Error: " . $sql . "<br>" . $cn->error;
//     }
// }
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
    // session_start();
    $cn=mysqli_connect("localhost","root","","travels","3306");
    $username = find_user($email,$password);
    if (empty($username))
    {   
        echo "<br><script>alert('Invalid Email or Password');</script>";
        
    } else {
        $_SESSION["Username"] = $username;
        $_SESSION['loginstatus']="yes";
        echo "<br>$username logged in";
        // header("location:hotels\index.php");
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
login('shreyans@gmail.com','hello');
?>

</body>

</html>