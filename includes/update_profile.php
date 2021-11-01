<?php
// include("connect.php");
// include("/includes/connect.inc.php");
include("./connect.inc.php");

if(isset($_POST['update'])) {

    if(isset($_POST['update'])=="profile"){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $pincode=$_POST['pincode'];
        $country=$_POST['country'];

        $cn=new_conn();
        $sql = "UPDATE `user_info` SET `fname` = '$fname',`lname` = '$lname',
        `phone` = '$phone',`address` = '$address',`pincode` = '$pincode',`city` = '$city', `country` = '$country' WHERE email = '$email';";
        $result = mysqli_query($cn,$sql);
        // echo $result;
        if($result )
        {
            // echo "Record updated successfully";
            echo "200";
            // return "200";
            // return true;
        }
        else
        {
            // echo "Error updating record: " . mysqli_error($cn);
            // return "500";
            echo "500";
            // return false;
        }
            
    }
}


?>