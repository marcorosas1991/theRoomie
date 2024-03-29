<?php

include_once 'functions.php';

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = 'calculationForm';
}

if ($action == 'calculationForm') {
  $years = '5';
  include('calculationForm.php');
} elseif ($action == 'displayResults') {
  // get the data from the form
  $investment = filter_input(INPUT_POST, 'investment',
          FILTER_VALIDATE_FLOAT);
  $interest_rate = filter_input(INPUT_POST, 'interest_rate',
          FILTER_VALIDATE_FLOAT);
  $years = filter_input(INPUT_POST, 'years',
          FILTER_VALIDATE_INT);
  $monthly_interest = filter_input(INPUT_POST, 'monthlyCompound',
          FILTER_VALIDATE_INT);

  // validate investment
  if ($investment === FALSE ) {
      $error_message = 'Investment must be a valid number.';
  } else if ( $investment <= 0 ) {
      $error_message = 'Investment must be greater than zero.';
  // validate interest rate
  } else if ( $interest_rate === FALSE )  {
      $error_message = 'Interest rate must be a valid number.';
  } else if ( $interest_rate <= 0 ) {
      $error_message = 'Interest rate must be greater than zero.';
  // validate years
  } else if ( $years === FALSE ) {
      $error_message = 'Years must be a valid whole number.';
  } else if ( $years <= 0 ) {
      $error_message = 'Years must be greater than zero.';
  } else if ( $years > 30 ) {
      $error_message = 'Years must be less than 31.';
  // set error message to empty string if no invalid entries
  } else if ($monthly_interest === FALSE) {
      $monthly_interest = 0;
  } else {
      $error_message = '';
  }

  // if an error message exists, go to the index page
  if ($error_message != '') {
      include('calculationForm.php');
      exit();
  } else {
    // calculate the future value
    $monthlyStr = $monthly_interest == 1 ? "YES":"NO";

    $future_value = getFutureValue($investment, $interest_rate, $years, ($monthly_interest == 1 ? TRUE:FALSE));

    // apply currency and percent formatting
    $investment_f = formatCurrency($investment);
    $yearly_rate_f = formatPercentage($interest_rate);
    $future_value_f = formatCurrency($future_value);

    include('display_results.php');
  }
}
?>
