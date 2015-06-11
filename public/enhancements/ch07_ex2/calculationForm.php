<?php include('views/header.php') ?>

<main>
<h1>Future Value Calculator</h1>
<?php if (!empty($error_message)) { ?>
    <p class="error"><?php echo $error_message; ?></p>
<?php } // end if ?>
<form action="." method="post">

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
        <input type="text" name="years" value="<?php echo $years; ?>"/><br>

        <label>&nbsp;</label>
        <input type="checkbox" name="monthlyCompound" value="1">Compound Interest Monthly<br>
    </div>

    <div>
      <input type="hidden" name="action" value="displayResults"/>
    </div>

    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Calculate"/><br>
    </div>
</form>
</main>
<?php include('views/footer.php') ?>
