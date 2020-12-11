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

// Explore
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

    // Explore Buttons
    if (deletebutton && user.uid == "XuPWvb2qbvb1jNwypzMmKkb2UG03") {
      deletebutton.style.display = "block";
    }
    if (addbutton && user.uid == "XuPWvb2qbvb1jNwypzMmKkb2UG03") {
      addbutton.style.display = "block";
    }
  } else {
    // clear account info
    accountDetails.innerHTML = "";
    // toggle user elements
    loggedInLinks.forEach((item) => (item.style.display = "none"));
    loggedOutLinks.forEach((item) => (item.style.display = "block"));

    // Explore Buttons
    if (deletebutton && user.uid == "XuPWvb2qbvb1jNwypzMmKkb2UG03") {
      deletebutton.style.display = "none";
    }
    if (addbutton && user.uid == "XuPWvb2qbvb1jNwypzMmKkb2UG03") {
      addbutton.style.display = "none";
    }
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
