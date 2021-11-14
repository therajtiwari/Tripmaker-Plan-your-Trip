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
else if(isset($_POST['create'])){

    if(isset($_POST['create'])=="user"){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $dob=$_POST['date'];
        $gender=$_POST['gender'];
        
        $cn=new_conn();
        $sql = "INSERT INTO `user_info` (`fname`, `lname`, `email`,`password`,`dob`,`gender`) VALUES ('$fname', '$lname', '$email',SHA2('$password',256),'$dob','$gender');";
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
            echo "Error updating record: " . mysqli_error($cn) .$sql;
            // return "500";
            // echo "500";
            
            // return false;
        }
            

        
    }

}


?>