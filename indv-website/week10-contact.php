
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title>contact-ponder-prove.html</title>
        <link rel="stylesheet" type="text/css" href="/css/screen.css" media="screen">
    </head>
    <body>

        <h1>Contact Me</h1>

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

        

    </body>
</html>
