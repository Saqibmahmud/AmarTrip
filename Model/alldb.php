<?php 
require_once('DB.php') ;
function login_check($email,$pass) {

    $connection= connection();
    $querry="select * from user where email='$email' and password='$pass'  " ;
    $res=mysqli_query( $connection,$querry) ;
    return $res ;

}


function new_accnt_check($email,$user_id) {

    $connection= connection();
    $querry="select * from user where email='$email' and user_id='$user_id'  " ;
    $res=mysqli_query( $connection,$querry) ;
    return $res ;

}

function new_accnt_insertion($email,$user_id, $pass,$full_name, $phone, $nid) {

    $connection= connection();
    $querry="insert into user (user_id,password,fullname,phone,nid,email) VALUES ('$user_id','$pass','$full_name','$phone','$nid','$email')" ;
    $res=mysqli_query( $connection,$querry) ;
    return $res ;

}

function available_bus($from,$to,$travel_date){
    $connection= connection();
    $querry="select * from bus where depart='$from'and destination='$to' and travel_date='$travel_date' " ;
    $res=mysqli_query( $connection,$querry) ;
    return $res ;

}



