<?php
    //set default value of variables for initial page load
    if (!isset($investment)) { $investment = '10000'; }
    if (!isset($interest_rate)) { $interest_rate = '5'; }
    if (!isset($years)) { $years = '5'; }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <select name="investment">
              <?php
                for ($i = 1; $i <=5; $i++) {
                  $amount = 10000 * $i;
                  echo "
                  <option value='$amount'>
                    $amount
                  </option>";
                }
              ?>
            </select><br>

            <label>Yearly Interest Rate:</label>
            <select name="interest_rate">
              <?php
                for ($i = 4; $i <=12; $i++) {
                  for ($j = 0; $j <=1; $j++) {
                    $interest = $i + $j * 0.5;
                    echo "
                    <option value='$interest'>
                      $interest
                    </option>";
                  } // $j
                } // $i
              ?>
            </select><br>

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br>
        </div>

    </form>
    </main>
</body>
</html>
