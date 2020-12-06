<html lang="en">

<head>
    <title>Adventour | Contact us</title>
    <?php include './components/header.php'; ?>
</head>

<body id="contact">
    <?php include './components/nav.php'; ?>
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>If you have any questions, please feel free to get in touch with the right people at Adventour. </p>
    </div>

    <div class="grid middle-container">
        <div></div>
        <div class="form-container">
            <form class="contact-form" action="mailto:jashnimje@gmail.com" method="post" enctype="text/plain">
                <h3 class="feedback-title">FEEDBACK FORM</h3>
                <input type="text" name="Name" value="" placeholder="Name" required />
                <input type="email" name="Email" value="" placeholder="E-mail" required />
                <input name="Message" rows="10" cols="30" placeholder="Message" />
                <button class="button send-button">Send Message</button>
            </form>
        </div>
    </div>

    <?php include './components/footer.php'; ?>
</body>

</html>