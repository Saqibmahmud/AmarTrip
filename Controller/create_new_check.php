<?php
require_once('../Model/alldb.php') ;
session_start() ;
if(isset($_POST["Create_new"])){
    $user_id=$_POST["user_id"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $full_name=$_POST["full_name"];
    $phone=$_POST["phone"];
    $nid=$_POST["nid"];
   
    if (empty($user_id)||empty($email)||empty($pass)||empty($full_name)||empty($phone)||empty($nid) ){
        $_SESSION["newaccnt_input_error"]="Provide All Informations " ;
        header("location:../View/home.php") ;
        exit();
 
    }
    else{
        $check=new_accnt_check($email,$user_id);
        if(mysqli_num_rows($check)==1){
            $_SESSION["newaccnt_similar_emnail_id_error"]="Email or UserID already Exist " ;
            header("location:../View/home.php") ;
            exit();
        }
        else{
            $new_create=new_accnt_insertion($email,$user_id, $pass,$full_name, $phone, $nid) ;
            if($new_create){
                $_SESSION["newaccnt_creation_succesful"]="Succesfully Created Acoount " ;
                header("location:../View/home.php") ;
                exit();

            }

            


        }
   
   
   
   
   
   
   
   
    }
    



}






?>