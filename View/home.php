<?php
session_start() ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css"  >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../login_style.css" > 
    
</head>
<body>
    <div class="main_content">
    <div class="contain"> 
    <div class="logo_container">
      <img src="../Images/logo_sample.png" height="70px" width="70px">
    </div>
  <div class="text_inside">
   <p class="text_head" id="about"> About </p>
   <p class="text_head" id="contact"> Contact </p>
  <div class="myprofile" id="profile"> 
    <i class="fa-solid fa-user fa-2x"></i>
     <i onclick="logout_()" class="fa-solid fa-right-from-bracket fa-1.6x"></i>
    </div>
    <button onclick="openPopup()"  class="text_head" id="login"> Login/SignUP  </button>

    <!-- php code  -->
    <?php 
   if(isset($_SESSION["user_email"])){
    $user_email=$_SESSION["user_email"] ;
   
   }
   else{
    $user_email="";
   }
   
   ?>
  
<!-- js code -->
<script> 
let user_Email=`<?php echo $user_email ;?>` ;
console.log(user_Email);
let lgn_btn=document.getElementById("login") ;
let profile=document.getElementById("profile") ;
profile.style.display="none";
lgn_btn.style.display = "block";
if(user_Email !==""){

   
     lgn_btn.style.display="none" ;
    profile.style.display="block" ;
   

} 




</script>

    </div> 

<div class="panel">
    
</div>

<!-- Create New accoiunt overlay -->
<div id="createNew_overlay" class="overlay">
        <div class="popup">
            <button class="close-btn" onclick="closeCRnewPopup()">X</button>
            <h2>Create New Account</h2>
        <form action="../Controller/create_new_check.php" method="POST">
        <input type="text"  name="user_id" placeholder="UserID">
            <input type="password" name="password" placeholder="Password">
            <input type="text" name="full_name" placeholder="Full Name">
            <input type="text" name="phone"placeholder="Phone Number">
            <input type="text" name="nid"placeholder="NID">
            <input type="text" name="email"placeholder="Email">

           
            <button  type="submit" name="Create_new" >Create</button>
        </form>
           
        </div>
    </div>

 <!-- Login Popup Overlay -->
 <div id="login_overlay" class="overlay" >
        <div class="popup">
            <button class="close-btn" onclick="closePopup()">X</button>
            <h2>Login</h2>
         <form action="../Controller/loginCheck_controller.php"  method="POST">
            <input type="text" name="email" placeholder="email" >
            <input type="password" name="password"placeholder="password">
            <button type="submit" name="Login">Login</button> 
        </form>
            <a href="#">forgot password?</a>
            <a href="#" onclick="openCRnewPopup()">new here? Create New</a>
        </div>
    </div>

<!-- kon vehicle -->


<div class="options">
    <form method="POST" action="../Controller/booktype_check_controller.php" class="chose_options">
        <input type="hidden" name="option" value="Bus">
        <button type="submit" class="chose_options" id="bus">
            <i class="fa-solid fa-bus fa-4x" alt="Bus"></i>
        </button>
    </form>

    <form method="POST" action="../Controller/booktype_check_controller.php" class="chose_options" >
        <input type="hidden" name="option" value="Train"   >
        <button type="submit" class="chose_options" id="train" >
            <i class="fa-solid fa-train fa-4x" ></i>
        </button>
    </form>

    <form method="POST" action="../Controller/booktype_check_controller.php"class="chose_options">
        <input type="hidden" name="option" value="Hotel">
        <button type="submit" class="chose_options" id="hotel">
            <i class="fa-solid fa-hotel fa-4x"></i>
        </button>
    </form>

    <form method="POST" action="../Controller/booktype_check_controller.php" class="chose_options">
        <input type="hidden" name="option" value="Flight">
        <button type="submit" class="chose_options" id="flight">
            <i class="fa-solid fa-plane fa-4x"></i>
        </button>
    </form>
</div>



<!-- main kaj ekhane -->


<div class="triptype">

<p id="bgcd5cccc" style="font-weight: bold;">Book <?php if(isset($_SESSION["option"])){ echo $_SESSION["option"];}else{echo "Bus";}
?> At Best Rates !!</p>
</div>
<div class="search_destination" >

<form id="bgcd5cccc" action="../Controller/booktype_check_controller.php" method="post" class="search_form" >
<div id="bgcd5cccc">
<input type="radio" id="oneWay" name="triptype" value="oneway" id="radiobutton" checked> One Way
<input type="radio" id="roundTrip" name="triptype" value="round" id="radiobutton"> Round Trip
</div>

<label id="bgcd5cccc">Destination</label> 
<input  type="text" name="from_des" placeholder="From" class="textbox">
<input  type="text" name="to_des" placeholder="To"class="textbox">
<label id="bgcd5cccc">No of Travellers</label> 
<input  type="text" name="traveler_num" placeholder="No of Travellers" class="textbox">
<label id="bgcd5cccc">Travel date</label> 
<input  type="date" name="travel_date" class="textbox">

<div class="bgcd5cccc"  id="returnDateDiv" style="display:none;">
    <label id="bgcd5cccc">Return date</label>
    <input type="date" name="return_date"id="returnDate" class="textbox">
  </div>
  
  <div class="box_fill_error">

<?php

if(isset($_SESSION["error"])){
    echo $_SESSION["error"] ;
    unset($_SESSION["error"]);
  
}

if(isset($_SESSION["login_error"])){
    echo $_SESSION["login_error"] ;
    unset($_SESSION["login_error"]);
  
}

if(isset($_SESSION["login_input_error"])){
    echo $_SESSION["login_input_error"] ;
    unset($_SESSION["login_input_error"]);
  
}

if(isset($_SESSION["newaccnt_input_error"])){
    echo $_SESSION["newaccnt_input_error"] ;
    unset($_SESSION["newaccnt_input_error"]);
  
}

if(isset($_SESSION["newaccnt_similar_emnail_id_error"])){
    echo $_SESSION["newaccnt_similar_emnail_id_error"] ;
    unset($_SESSION["newaccnt_similar_emnail_id_error"]);
  
}

if(isset($_SESSION["newaccnt_creation_succesful"])){
    echo $_SESSION["newaccnt_creation_succesful"] ;
    unset($_SESSION["newaccnt_creation_succesful"]);
  
}

?>
</div>
 
 <!-- this is the search button -->
<input type="submit" name="search_box" value="Search" class="textbox" id="search_box">          

</form>

</div>







</div>



<div class="offers">

<p id="offer_tag"><b>Offers</b></p>


  
<div class="first2offers">
    <div id="discounted_hotels">
    <img src="../Images/istockphoto-104731717-612x612.jpg" alt="Discounted Hotel" width="300"  >
            <p>Enjoy exclusive discounts on top hotels.</p>
            <a href="" class="book-now">Book Now</a>


    </div>

    <div id="discounted_flights">
    <img src="../Images/flight.jpg" alt="Discounted Flights" width="300" >
            <p>Enjoy exclusive discounts on international flights.</p>
            <a href="" class="book-now">Book Now</a>
    </div> </div>
    <div class="second2offers">
    <div id="discounted_buses">
    <img src="../Images/bus.jpg" alt="Discounted Buses" width="300" >
            <p>Enjoy exclusive discounts on inter-city busses.</p>
            <a href="" class="book-now">Book Now</a>
    </div>

    <div id="discounted_trains">
    <img src="../Images/train.jpg" alt="Discounted Trains" width="300" >
            <p>Enjoy exclusive discounts on Train tickets.</p>
            <a href="" class="book-now">Book Now</a>
            
    </div>
    </div>


</div></div>


<div class="footer">
            <div class="contact_icon">
                <i class="fa-brands fa-facebook fa-3x"></i>
                <i class="fa-brands fa-twitter fa-3x"></i>
            </div>
            <div id="footer_text">
                <i class="fa-solid fa-copyright fa-1.5x"></i> Made by Saqib-2024<br>Bangladeshi Product
            </div>
</div>
<script src="../script.js" defer></script>

</body>




</html>

