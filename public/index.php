<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The Roomie is the site where you will find your new Room and Roommates!">
    <meta name="keywords" content="theRoomie,roomie,roommate,rooms for rent, advertise rooms">

    <title>theRoomie!</title>
    <link rel="stylesheet" href="/css/style.css">

  </head>

  <body>

    <header class="mainColorTheme">
      <a href="index.php">
        <div class="logoframe mainLogoFont">theRoomie</div>
      </a>

      <nav class="main">
        <a href="/index.php">Home</a>
        |
        <a href="/indv-website/support.html">Support</a>
      </nav>
    </header>

    <div class="wrapper">
      <section class="searchBar" id="searchBar">

        <h2 class="centerText">Search</h2>
        <form action="indv-website/results.html" method="post">

          <label class="hiddenOnMobile">What are you searching for?</label>

          <div class="searchForm">

            <input type="radio" name="searchType" value="0" checked><span class="shrinkLetters">A room and a roomate</span>
            <br>
            <input type="radio" name="searchType" value="2"><span class="shrinkLetters">Just a room for me</span>
            <br>
            <input type="radio" name="searchType" value="1"><span class="shrinkLetters">A room for me and my roomate</span>
          </div>
          <div class="searchForm">
            <label>Location:</label>
            <input type="text" name="location">
          </div>
          <div class="searchForm">
            <label>Price:</label>
            <input type="text" name="price">
          </div>
          <div class="searchForm" >
              <input type="submit" value="search" class="searchButton">
          </div>
        </form>

      </section>

      <section class="main" id="main">
        <h1 class="mainWelcome"><span class="logoFont">theRoomie</span>!</h1>
        <p class="centerText">Here you will find your perfect room and roommate!</p>

        <form class="centerText" action="indv-website/signup.html">
          <input type="submit" class="signUpButton" value="Sign Up!">
        </form>

        <p class="centerText shrinkP">or</p>

        <form class="centerText" action="indv-website/home.php">
          <input type="submit" class="signUpButton signInButton" value="Sign In">
        </form>
      </section>

      <aside>
        <p>Apartments you might like:</p>

      </aside>
    </div><!-- end of wrapper -->



    <footer class="mainColorTheme centerText">
      <a href="exercises/index.php">336 Exercises</a>
      |
      <a href="teaching/variables/variablePresentation.php">Variable Presentation</a>

    </footer>

  </body>

</html>
