<?php
// include("connect.php");
// include("/includes/connect.inc.php");
include("./connect.inc.php");

if(isset($_POST['delete'])) {

    if(isset($_POST['delete'])=="user"){
        $email=$_POST['email'];
        

        $cn=new_conn();
        $sql = "delete from user_info where email='$email';";
       
        
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