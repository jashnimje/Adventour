// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyAD_q5khw-p0L29EZL3gye9R2Lf8tPn-_M",
    authDomain: "adventour-e4702.firebaseapp.com",
    databaseURL: "https://adventour-e4702.firebaseio.com",
    projectId: "adventour-e4702",
    storageBucket: "adventour-e4702.appspot.com",
    messagingSenderId: "881724190496",
    appId: "1:881724190496:web:efd78bd6c049292d45f145",
    measurementId: "G-TDE3Q21ZB5",
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

// make auth and firestore references
const auth = firebase.auth();
const db = firebase.firestore();

// update firestore settings
db.settings({timestampsInSnapshots: true});

// listen for auth status changes
auth.onAuthStateChanged((user) => {
    if (user) {
        setupUI(user);
    } else {
        setupUI();
    }
});

// signup
const signupForm = document.querySelector("#signup-form");
signupForm.addEventListener("submit", (e) => {
    e.preventDefault();

    // get user info
    const email = signupForm["signup-email"].value;
    const password = signupForm["signup-password"].value;

    // sign up the user
    auth
        .createUserWithEmailAndPassword(email, password)
        .then((cred) => {
            console.log(cred);
            // close the signup modal & reset form
            const modal = document.querySelector("#modal-signup");
            modal.style.display = "none";
            signupForm.reset();
            window.alert("Signup Successful");
        })
        .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            console.log(errorCode, errorMessage);
            window.alert(errorMessage);
        });
});

// logout
const logout = document.querySelector("#logout");
logout.addEventListener("click", (e) => {
    e.preventDefault();
    auth
        .signOut()
        .then(function () {
            window.alert("Log Out Successful");
        })
        .catch(function (error) {
            console.log(error);
            window.alert(error);
        });
});

// login
const loginForm = document.querySelector("#login-form");
loginForm.addEventListener("submit", (e) => {
    e.preventDefault();

    // get user info
    const email = loginForm["login-email"].value;
    const password = loginForm["login-password"].value;

    // log the user in
    auth
        .signInWithEmailAndPassword(email, password)
        .then((cred) => {
            // close the signup modal & reset form
            const modal = document.querySelector("#modal-login");
            modal.style.display = "none";
            loginForm.reset();
            window.alert("Signin Successful");
        })
        .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            console.log(errorCode, errorMessage);
            window.alert(errorMessage);
        });
});
