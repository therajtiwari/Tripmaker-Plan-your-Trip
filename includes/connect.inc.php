<?php
  function new_conn() {
    $conn = new mysqli("localhost","root","","travels","3306");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

?>