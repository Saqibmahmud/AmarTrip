
<?php
require_once('../Model/alldb.php') ;
session_start() ;

if (isset($_POST["option"])){
  $_SESSION["option"]=$_POST["option"];
   header("location:../View/home.php");
   exit();


}



if(isset($_POST["search_box"])){
    

    $from=$_POST["from_des"] ;
    $to=$_POST["to_des"] ;
    $qty=$_POST["traveler_num"];
    $travel_date=$_POST["travel_date"];
    $return_date=$_POST["return_date"];

if($_POST["triptype"]=="oneway"){

    if(empty($from)||empty($to)||empty($qty)||empty($travel_date)){
    $_SESSION["error"]="Fillup all the Boxes First " ;
    header("location:../View/home.php") ;
    exit();
}
    else{ $option=$_SESSION["option"];
              
        if($option=="Bus"){   
         //bus er search er code
         $bus_data=[];
         $result=available_bus($from,$to, $travel_date);
       if($result)  {
        while($r=$result->fetch_assoc()){
            $bus_data[]=$r ; 
         }
         $_SESSION["bus_data"]= $bus_data ;
         header("location:../View/search_result.php");
         exit();
            

            }
            else{
                
            }
        }
        else if($option=="train"){
            //traion er code
        }
        
    
    
    
    
    }}





elseif($_POST["triptype"]=="round")
if(empty($from)||empty($to)||empty($qty)||empty($travel_date)||empty($return_date)){
$_SESSION["error"]="Fillup all the Boxes First " ;
header("location:../View/home.php") ;
}
else{$option=$_SESSION["option"];
    
    
     //  ekhane search er code boshbe
}


}








?>