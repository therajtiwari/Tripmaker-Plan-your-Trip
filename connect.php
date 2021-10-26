<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","travels","3306");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	} else {
		echo "Successful";
	}
	return $cn;
}
function add_user($fname,$lname,$age,$gender,$email,$phone,$password)
{   
    $cn=mysqli_connect("localhost","root","","travels","3306");
	$sql = "INSERT INTO user_info (fname, lname, age, gender, email, phone, password)
    VALUES ($fname,$lname,$age,$gender,$email,$phone,$password)";
    // VALUES ('axon', 'blaze', 21,'male','axon@example.com','90','hello')";
    // $sql = "INSERT INTO `user_info`(`fname`, `lname`, `age`, `gender`, `email`, `password`) VALUES ($fname,$lname,$age,$gender,$email,$phone,$password)";
    if ($cn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $cn->error;
    }
}
// $cn=mysqli_connect("localhost","root","","travels","3306");
$cn = makeconnection();
add_user('axon', 'blaze', 21,'male','axon@example.com','909202932039','hello');
?>
</body>
</html>