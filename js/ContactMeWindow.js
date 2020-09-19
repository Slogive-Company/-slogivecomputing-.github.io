// Get the modal
var ContactContainer = document.getElementById("ContactContainer");
            
// Get the button that opens the modal
var ContactThrow = document.getElementById("ContactThrow");

// Get the <span> element that closes the modal
var ContactClose = document.getElementsByClassName("ContactClose")[0];

// When the user clicks the button, open the modal 
function blocktest() {
    ContactContainer.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
ContactClose.onclick = function() {
    ContactContainer.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == ContactContainer) {
    ContactContainer.style.display = "none";
  }
}