<?php
include("./connect.inc.php");

if(isset($_POST['submit'])) {

    if(isset($_POST['submit'])=="feedback"){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $referral=$_POST['referral'];
        $comment=$_POST['comment'];
        $cn=new_conn();
        $sql = "INSERT INTO `feedback`(`name`, `email`, `referral`, `comment`) VALUES ('$name','$email','$referral','$comment')";
        $result = mysqli_query($cn,$sql);
        // echo $result;
        if($result)
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