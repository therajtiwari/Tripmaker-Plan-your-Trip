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
        $n = rand(0,$i-1);
        return $n;
        }
    else{
        // echo "Something went wrong";
        return false;
    }
}

function three_non_equal_random_number(){

}

//function to get 3 random non equal numbers
function three_random_number(){
    $cn = new mysqli("localhost","root","","travels","3306");
    $query = "SELECT * FROM `feedback`";
    $result=mysqli_query($cn,$query);
    $i = 0;
    if(mysqli_num_rows($result)>0){
        while($row = $result->fetch_assoc()) {
            $i++;
        }
        $n1 = rand(0,$i-1);
        $n2 = rand(0,$i-1);
        $n3 = rand(0,$i-1);
        while($n1==$n2 || $n1==$n3 || $n2==$n3){
            $n1 = rand(0,$i-1);
            $n2 = rand(0,$i-1);
            $n3 = rand(0,$i-1);
        }
        $numbers = array($n1,$n2,$n3);
        return $numbers;
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
            $image[]=$row['image'];
            $i++;
        }
        $n = $id;
        $feedback['name'] = $name[$n];
        $feedback['comment'] = $comment[$n];
        $feedback['image'] = $image[$n];
        return $feedback;
        }
    else{
        // echo "Something went wrong";
        return false;
    }
}
?>