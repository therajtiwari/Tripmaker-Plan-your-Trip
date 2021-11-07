<?php
// include("connect.php");
// include("/includes/connect.inc.php");
include("./connect.inc.php");

if(isset($_POST['add'])) {

    if(isset($_POST['add'])=="package"){
        $name=$_POST['name'];
        $price_adult=$_POST['price_adult'];
        $price_child=$_POST['price_child'];
        $description=$_POST['description'];
        $total_days=$_POST['total_days'];
        $discount=$_POST['discount'];
        $itinerary=$_POST['itinerary'];
        $location=$_POST['location'];
        $image_url=$_POST['image_url'];
        $conn=new_conn();
        $sql="INSERT INTO tour_package(name,price_adult,price_child,description,total_days,discount,itinerary) VALUES('$name','$price_adult','$price_child','$description','$total_days','$discount','$itinerary')";
        $result1=mysqli_query($conn,$sql);

        $sql="SELECT id FROM tour_package ORDER BY id DESC LIMIT 1";
        $result_temp=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result_temp);
        $id=$row['id'];

        $sql="INSERT INTO location(name,tour_package_id,description) VALUES('$location','$id','location description')";
        $result2=mysqli_query($conn,$sql);
        $sql="SELECT id FROM location ORDER BY id DESC LIMIT 1";
        $result_temp=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result_temp);
        $location_id=$row['id'];

        $sql="INSERT INTO location_images(link,location_id) VALUES('$image_url','$location_id')";
        $result3=mysqli_query($conn,$sql);


        if($result1 && $result2  && $result3){
            echo "200";
        }
        else{
            echo "500";
        }
        

    }
}


?>