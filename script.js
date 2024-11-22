
document.addEventListener('DOMContentLoaded', function () {
    
    const oneWayRadio = document.getElementById('oneWay');
    const roundTripRadio = document.getElementById('roundTrip');
    const returnDateDiv = document.getElementById('returnDateDiv');

    // Function to toggle return date visibility
    function toggleReturnDate() {
        if (roundTripRadio.checked) {
            returnDateDiv.style.display = 'block'; 
        } else {
            returnDateDiv.style.display = 'none';  
        }
    }

    // Initial check to see if round-trip is selected when the page loads
    toggleReturnDate();

   
    oneWayRadio.addEventListener('change', toggleReturnDate);
    roundTripRadio.addEventListener('change', toggleReturnDate);
});

//login popup page 
function openPopup() {
  
    document.getElementById("login_overlay").style.display = "block";
}

function closePopup() {
    document.getElementById("login_overlay").style.display = "none";
}

function openCRnewPopup() {
     closePopup();
    document.getElementById("createNew_overlay").style.display = "block";
}

function closeCRnewPopup() {
    document.getElementById("createNew_overlay").style.display = "none";
    ssssss
}


function logout_(){
    window.location.href="../Controller/logout_controller.php" ; 
   
   
    }