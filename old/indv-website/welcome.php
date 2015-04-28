<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The Roomie is the site where you will find your new Room and Roommates!">
    <meta name="keywords" content="theRoomie,roomie,roommate,rooms for rent, advertise rooms">

    <title>Welcome to your Account!</title>
    <link rel="stylesheet" href="../css/indv-styles.css">

    <script type="text/javascript">

      function hi() {
        alert("hi!");
        return true;
      }

      function validateForm() {

      var confirmation = false;
      var highlightColor = "#FFD3AD";

      //required
      var emailOk = false;
      var passwordOk = false;
      var nameOk = false;

      var mensaje = "You need to complete this fields: \n";

      // email
      if(document.signupform.email.value != "") {
        emailOk = true;
        document.signupform.email.style.background="white";
      } else {
        document.signupform.email.style.background=highlightColor;
        mensaje = mensaje + "\nEmail";
      }

      // password
      if(document.signupform.password.value != "") {
        passwordOk = true;
        document.signupform.password.style.background="white";
      } else {
        document.signupform.password.style.background=highlightColor;
        mensaje = mensaje + "\nPassword";
      }

      // name
      if(document.signupform.namef.value != "") {
        nameOk = true;
        document.signupform.namef.style.background="white";
      } else {
        document.signupform.namef.style.background=highlightColor;
        mensaje = mensaje + "\nName";
      }

      // If everything is fine.
      if(emailOk && passwordOk && nameOk) {
        confirmation = true;
      } else {
        window.alert(mensaje);
      }

      return confirmation;
    }

  </script>

  </head>

  <body>


    <header class="mainColorTheme">
      <a href="../index.html">
        <div class="logoframe mainLogoFont">theRoomie</div>
      </a>

      <nav class="main">
        <a href="../index.html">Home</a>
        |
        <a href="../indv-website/support.html">Support</a>
        |
        <a href="../cit230-links.html">CIT230-links</a>
      </nav>
    </header>

    <section class="searchBar hiddenOnMobile" id="searchBar">

    </section>

    <section class="mainSignUp" id="main">
      <h1 class="mainWelcome">Welcome to the Roomie!</h1>
      <h3 class="centerText">We are are happy for you <?php echo $_POST["namef"];?>!</h3>
      <p class="centerText">We have send an email to: <?php echo $_POST["email"];?></p>

      <form class="centerText" action="home.php">
        <input type="submit" class="signUpButton" value="Continue">
      </form>

    </section>

    <aside>

      <div class="helpingTopicAd">
        <a href="#"><h3>What can I do with a Premium Account?</h3></a>
      </div>

      <div class="helpingTopicAd">
        <a href="#"><h3>How can I publish Rooms?</h3></a>
      </div>

      <div class="helpingTopicAd">
        <a href="#"><h3>How do I get in touch with the landlord?</h3></a>
      </div>

    </aside>

  </body>

</html>
