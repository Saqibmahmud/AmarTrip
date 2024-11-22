<?php
require_once('../Model/alldb.php') ;
session_start() ;
if(isset($_POST["Login"])){
    $email=$_POST["email"];
    $pass=$_POST["password"];
    if(empty($email)||empty($pass)){
        $_SESSION["login_input_error"]="Provide Both Email and Pass " ;
        header("location:../View/home.php") ;
        exit();
}
else{
   $result= login_check($email,$pass) ;
 if(mysqli_num_rows($result)==1){
   $_SESSION["user_email"]=$email;
   
    header("location:../View/home.php");
    exit();
 }
 else{
    $_SESSION["login_error"]="Provide Correct Email and Pass " ;
    header("location:../View/home.php") ;
    exit();
 }
}







}



?>