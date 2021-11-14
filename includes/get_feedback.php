<?php
function get_feedback_random() {
    $cn = new mysqli("localhost","root","","travels","3306");
    $query = "SELECT * FROM `feedback`";
    $result=mysqli_query($cn,$query);
    $i = 0;
    if(mysqli_num_rows($result)>0){
        while($row = $result->fetch_assoc()) {
            $name[]=$row['name'];
            $comment[]=$row['comment'];
            $i++;
        }
        $n = rand(0,$i);
        $feedback['name'] = $name[$n];
        $feedback['comment'] = $comment[$n];
        return $feedback;
        }
    else{
        // echo "Something went wrong";
        return false;
    }
}

function get_random_number(){
    $cn = new mysqli("localhost","root","","travels","3306");
    $query = "SELECT * FROM `feedback`";
    $result=mysqli_query($cn,$query);
    $i = 0;
    if(mysqli_num_rows($result)>0){
        while($row = $result->fetch_assoc()) {
            $i++;
        }
        $n = rand(0,$i);
        return $n;
        }
    else{
        // echo "Something went wrong";
        return false;
    }
}

function get_feedback_by_id($id) {
$cn = new mysqli("localhost","root","","travels","3306");
$query = "SELECT * FROM `feedback`";
$result=mysqli_query($cn,$query);
$i = 0;
if(mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()) {
        $name[]=$row['name'];
        $comment[]=$row['comment'];
        $i++;
    }
    $n = $id;
    $feedback['name'] = $name[$n];
    $feedback['comment'] = $comment[$n];
    return $feedback;
    }
else{
    // echo "Something went wrong";
    return false;
}
}
?>