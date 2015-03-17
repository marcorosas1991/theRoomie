<?php
//Check to see if the form has been submitted, if so use php to validate the inputs
//This check sees if the btnSubmitMessage key exists in the POST object, if "true" the form has been submitted
// Create an empty error array to store any found errors hi
$errors = array();
$successmessage;

if(isset($_POST['submit'])) {

    //Check the name field using using the empty function
    if(empty($_POST['txtfName'])) {
        $errors['fname'] = 'The first name field is empty, please enter your name';
    }

    //Check the name field using using the empty function
    if(empty($_POST['txtlName'])) {
        $errors['lname'] = 'The last name field is empty, please enter your name';
    }

    //Check the name field using the empty function
    if(empty($_POST['rSubject'])) {
        $errors['subject'] = 'The subject is not selected, please select a subject.';
    }

    //Check the message field using the empty function
    if(empty($_POST['taMessage'])) {
        $errors['message'] = 'The message field is empty, please enter your message';
    }

    //Check the email field
    if(empty($_POST['txtEmail'])) {
        $errors['email'] = 'The email field is empty, please enter a email address';
    }

    //Check the length of the email address -- x@x.xx
    $tempEmail = trim($_POST['txtEmail']);
    if(strlen($tempEmail) < 6) {
        $errors['emaillength'] = 'The email provided is too short, please enter a valid email address';
    }

    //Check the form of the email address using a regular expression
    $checkEmail = '/^[^@]+@[^\s\r\n\'";,@%]+$/';
    if(!preg_match($checkEmail,$tempEmail)) {
        $errors['invalidform'] = "Please provide a valid email address";
    }




//If there are no errors stored in the error array proceed to form and then send the email message
if(!$errors) {
    $to = 'marco.rosas@outlook.com';
    $txtfName = $_POST['txtfName']."\n";
    $txtlName = $_POST['txtlName']."\n";
    $rSubject = $_REQUEST['rSubject'];
    $taMessage = $_POST['taMessage'];
    $txtEmail = $_POST['txtEmail']."\n";
    //$from = 'From:'.$_POST['from'];
    $degree = $_POST['degree'];
    $likeit =$_POST['likeit'];
    $how =$_POST['how'];

    $message = "Hello!

Your contact form has been submitted by:

First Name: $txtfName
Last Name: $txtlName
E-mail: $txtEmail

Like this website? $likeit
How did he/she find it? $how

What is your major? $degree

Comments: $taMessage

End of message
            ";

    mail($to, $rSubject, $message);

//	mail($to,$subject,$message);
    // After the message is sent create a confirmation message to display
    $successmessage = "Your message has been sent. Thank you.";
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The Roomie is the site where you will find your new Room and Roommates!">
    <meta name="keywords" content="theRoomie,roomie,roommate,rooms for rent, advertise rooms">

    <title>Contact!</title>
    <link rel="stylesheet" href="../css/indv-styles.css">

  </head>

  <body>

    <?php include_once "header.php"; ?>

    <?php
    // This displays the errors array if it is not empty,
            // if it is empty this does nothing
            if ($errors) {
                echo '<div>';
                echo '<ul class="warning">';
                foreach ($errors as $alert) {
                    echo "<li>$alert</li>";
                }
                echo '</ul>';
                echo '</div>';
            } elseif(isset($successmessage)) {
                echo "<p class=\"warning\">".$successmessage."</p>";
            }
            ?>


    <div class="wrapper">
      <section class="searchBar" id="searchBar">


      </section>

      <section class="main" id="main">
        <form id="frmContact" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <fieldset>
                <legend>Please Complete All Fields</legend>
                <ul>
                    <li><label for="txtfName">First Name:</label>
                        <input type="text" name="txtfName" id="txtfName" size="30" /></li>
                    <li><label for="txtlName">Last Name:</label>
                        <input type="text" name="txtlName" id="txtlName" size="30" /></li>
                    <li><label for="txtEmail">Email: </label>
                        <input type="text" name="txtEmail" id="txtEmail" size="40" /></li>
                    <li><label for="rSubject">Subject of the Message:</label>
                        <input type="text" name="rSubject" id="rSubject" size="50" /></li>
                    <li>Do you like this website?

                      <label for="yes">Yes</label>
                      <input type="radio" name="likeit" id="yes" value="yes" />

                        <label for="no">No</label>
                        <input type="radio" name="likeit" id="no" value="No" />
                       	<label for="notsure">Not Sure</label>
                        <input type="radio" name="likeit" id="notsure" value="Not sure" />
                    </li>
                    <li>Select your major:<br>
						            <label for="CIT">Computer Information Technology</label>
                        <input type="Checkbox" name="degree" id="cit"  value="Computer Information Technology">

                        <br>
                        <label for="acct">Accounting</label>
                        <input type="checkbox" name="degree" id="acct" value="Accounting" />
                        <br>
                        <label for="bm">Business Management</label>
                        <input type="checkbox" name="degree" id="bm" value="Business Management" />
                        <br>
                        <label for="com">Communication</label>
                        <input type="checkbox" name="degree" id="com"  value="Communication" />
                        <br>
                        <label for="econ">Economics</label>
                        <input type="checkbox" name="degree" id="econ" value="Economics" />
                    </li>
                    <li><label for="how">How did you find us?</label>
                      <select id="how" name="how">
    					          <option value="">--Please Select--</option>
                        <option>Yahoo</option>
                        <option>Link from a website</option>
                        <option>Word of mouth</option>
                        <option>Other</option>
                      </select>
                    </li>
                    <li><label for="taMessage">Message</label>
                      <textarea name="taMessage" id="taMessage" cols="40" rows="10" onfocus="this.value=''; this.onfocus=null">
                        Type your message here
                      </textarea></li>
                    <li><label for="submit"></label>
                    <input type="submit" name="submit" value="Send">
                    </li>
                </ul>
            </fieldset>
        </form>
      </section>

      <aside>

      </aside>
    </div><!-- end of wrapper -->



    <!-- <footer class="mainColorTheme">
      <p class="footerText">©Copyright theRoomie.com</p>
    </footer> -->

  </body>

</html>
