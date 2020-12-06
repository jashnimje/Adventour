// Navigation open and close
function openNav() {
  document.getElementById("navbar").style.width = "250px";
}
function closeNav() {
  document.getElementById("navbar").style.width = "0";
}

// Login hide and show ui
const loggedOutLinks = document.querySelectorAll(".logged-out");
const loggedInLinks = document.querySelectorAll(".logged-in");
const accountDetails = document.querySelector(".account-details");
const addbutton = document.querySelector(".add-button");
const deletebutton = document.querySelector(".delete-button");

const setupUI = (user) => {
  if (user) {
    // account info
    const html = `
      <div>Logged in as ${user.email}</div>
    `;
    accountDetails.innerHTML = html;
    // toggle user UI elements
    loggedInLinks.forEach((item) => (item.style.display = "block"));
    loggedOutLinks.forEach((item) => (item.style.display = "none"));
    addbutton.style.display = "block";
    deletebutton.style.display = "block";
  } else {
    // clear account info
    accountDetails.innerHTML = "";
    // toggle user elements
    loggedInLinks.forEach((item) => (item.style.display = "none"));
    loggedOutLinks.forEach((item) => (item.style.display = "block"));
    addbutton.style.display = "none";
    deletebutton.style.display = "none";
  }
};

// *Modal* When the user clicks anywhere outside of the modal, close it
var modalLogin = document.getElementById("modal-login");
var modalSignup = document.getElementById("modal-signup");
var modalAccount = document.getElementById("modal-account");

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
