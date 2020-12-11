// Slideshow
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

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
