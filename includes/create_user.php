<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
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
?>
</body>
</html>