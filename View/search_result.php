<?php   
session_start();    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet"href="../style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <div class="navbar">
    <div class="logo_container">
      <img src="../Images/logo_sample.png" height="50px" width="50px">
    </div>
<div class="text_inside" >
   <p class="text_head" id="about"> About </p>
   <p class="text_head" id="contact"> Contact </p>
  <div class="myprofile" id="profile"> 
    <i class="fa-solid fa-user fa-2x"></i>
     <i onclick="logout_()" class="fa-solid fa-right-from-bracket fa-1.6x"></i>
    </div>
</div>
        
</div>
<!-- <?php 
if($_SESSION["user_email"]!="" ){

$user_email=$_SESSION["user_email"] ;}?>
<script> 
let user_Email=`<?php echo $user_email ;?>` ;
console.log(user_Email);

let profile=document.getElementById("profile") ;
profile.style.display="none";

if(user_Email !==""){

   
    profile.style.display="block" ;
   

} 


</script> -->


<div class="list_contain">
<div id="filter">
 Filter for searches baes on price such as low to high price
</div>
    <?php   
    if(isset($_SESSION["bus_data"])){
  $result=$_SESSION["bus_data"] ;
  
  if(is_array($result) && count($result)>0){
  
 foreach($result as $r){ ?>
 
  <div class="_list">      
  <p> <?php  echo $r["name"] ; ?> </p>
 <p> <?php   echo  $r["category"]  ; ?> </p>
     <p>   <?php  echo $r["depart"] ;  ?> </p>
     <i class="fa-solid fa-arrow-right fa-3x"></i>
     <p>  <?php   echo $r["destination"] ;  ?> </p>
     <p> <?php   echo $r["travel_date"] ;  ?> </p>
     <p> <?php    echo $r["time"] ; ?> </p>
     <p> <?php    echo $r["price"],"Tk";  ?> </p>     
    <button>BOOK</button> 
    </div>
 
 
 <?php } ?>

</div>
<?php
  }
  
  else{
    echo"No bus available";
  }
}
   
?>

<div class="footer">
<div class="contact_icon">
<i class="fa-brands fa-facebook fa-3x"></i><br>
<i class="fa-brands fa-twitter fa-3x"></i>
</div>


     <div id="footer_text"><i class="fa-solid fa-copyright fa-1.5x"></i> Made by Saqib-2024  <br> Bangladeshi Product</div>   
</div>

</body>
<script src="../script.js" defer></script>
</html>