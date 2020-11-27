<html lang="en">
  <head>
    <title>Adventour | Contact us</title>
    <?php include './Components/header.php';?>
  </head>

  <body id="contact">
    <?php include './Components/nav.php';?>

    <!--Contact page-->
    <div class="grid middle-container">
      <div class="contact-title">
        <h1><span>Contact us</span></h1>
      </div>

      <div class="form-container">
        <form
          class="contact-form"
          action="mailto:jashnimje@gmail.com"
          method="post"
          enctype="text/plain"
        >
          <h3 class="feedback-title">FEEDBACK FORM</h3>
          <input
            class="contact-input"
            type="text"
            name="Name"
            value=""
            placeholder="Name"
            required
          />
          <input
            class="contact-input"
            type="email"
            name="Email"
            value=""
            placeholder="E-mail"
            required
          />
          <input
            class="contact-input"
            name="Message"
            rows="10"
            cols="30"
            placeholder="Message"
          />
          <button class="send-button">Send Message</button>
        </form>
      </div>
    </div>

    <?php include './Components/footer.php';?>
  </body>
</html>
