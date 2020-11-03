// Navigation
function openNav() {
  document.getElementById("navbar").style.width = "250px";
}

function closeNav() {
  document.getElementById("navbar").style.width = "0";
}

// Get the modal
var modalLogin = document.getElementById("modal-login");
var modalSignup = document.getElementById("modal-signup");
var modalAccount = document.getElementById("modal-account");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modalLogin) {
    modalLogin.style.display = "none";
  }
  if (event.target == modalSignup) {
    modalSignup.style.display = "none";
  }
  if (event.target == modalAccount) {
    modalAccount.style.display = "none";
  }
};
