<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
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
        session_start();
        header("location:hotels\index.html");
    }
    
}

?>