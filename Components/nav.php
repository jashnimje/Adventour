<!--Navigation Bar-->
<nav>
    <div class="burger">
        <i class="fas fa-bars" onclick="openNav()"></i>
    </div>

    <h1 class="logo">Adventour</h1>

    <div id="navbar" class="navbar">
        <i class="fas fa-times closebtn" href="javascript:void(0)" onclick="closeNav()"></i>
        <ul>
            <li><a class="home" href="./index.php">Home</a></li>
            <li><a class="explore" href="./explore.php">Explore</a></li>
            <li><a class="blog" href="./blog.php">Blog</a></li>
            <li><a class="contact" href="./contact.php">Contact</a></li>
            <li><a class="about" href="./about.php">About</a></li>
            <li class="logged-in">
                <a href="#" class="modal-trigger"
                    onclick="document.getElementById('modal-account').style.display='block'">Account</a>
            </li>
            <li class="logged-in">
                <a href="#" id="logout">Logout</a>
            </li>
            <li class="logged-out">
                <a href="#" class="modal-trigger"
                    onclick="document.getElementById('modal-login').style.display='block'">Login</a>
            </li>
            <li class="logged-out">
                <a href="#" class="modal-trigger"
                    onclick="document.getElementById('modal-signup').style.display='block'">Sign up</a>
            </li>
        </ul>
    </div>
</nav>

<!-- SIGN UP MODAL -->
<div id="modal-signup" class="modal">
    <div class="modal-content animate">
        <h1>Sign up</h1>
        <br />
        <form id="signup-form">
            <div class="input-field">
                <input type="email" id="signup-email" placeholder="Email" required />
            </div>
            <div class="input-field">
                <input type="password" id="signup-password" placeholder="Choose password" required />
            </div>
            <button class="nav-button">Sign up</button>
        </form>
    </div>
</div>

<!-- LOGIN MODAL -->
<div id="modal-login" class="modal">
    <div class="modal-content animate">
        <h1>Login</h1>
        <br />
        <form id="login-form">
            <div class="input-field">
                <input type="email" id="login-email" placeholder="Email" required />
            </div>
            <div class="input-field">
                <input type="password" id="login-password" placeholder="Password" required />
            </div>
            <button class="nav-button">Login</button>
        </form>
    </div>
</div>

<!-- ACCOUNT MODAL -->
<div id="modal-account" class="modal">
    <div class="modal-content animate">
        <h1>Account details</h1>
        <br />
        <div class="account-details"></div>
        <div class="account-extras"></div>
    </div>
</div>