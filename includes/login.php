<!-- <?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "<script>console.log('Debug Objects: " . $email . "' );</script>";
    login($email, $password);
    
}
else{
    echo "<script>console.log('Debug Objects: its here"  . "' );</script>";
    
}

function find_user($email,$password)
{
    $cn=mysqli_connect("localhost","root","","travels","3306");
    // echo "<script>console.log('Debug Objects: its here"  . " $cn' );</script>";

    $sql = "SELECT * FROM `user_info` WHERE `email` = '$email' AND `password` = SHA2('$password',256);";
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

    } else 
    {
        $_SESSION["Username"] = $username;
        $_SESSION['loginstatus']="yes";
        echo "<br>$username logged in";
        session_start();
        header("location:../index.html");
    }

}


?>