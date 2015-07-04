<?php

// start session with a persistent cookie of 2 weeks
$lifetime = 60 * 60 * 24 * 14;
session_set_cookie_params($lifetime, '/');

if (!isset($_SESSION)) {
	session_start();
}

include_once 'functions.php';

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = 'calculationForm';
}

if ($action == 'calculationForm') {
  $investment = isset($_SESSION['investment']) ? $_SESSION['investment'] : '10000';
  $interest_rate = isset($_SESSION['interest_rate']) ? $_SESSION['interest_rate'] : '4';
  $years = isset($_SESSION['years']) ? $_SESSION['years'] : '5';
  $monthly_interest = isset($_SESSION['monthly_interest']) ? $_SESSION['monthly_interest'] : '0';

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

  $_SESSION['investment'] = $investment;
  $_SESSION['interest_rate'] = $interest_rate;
  $_SESSION['years'] = $years;
  $_SESSION['monthly_interest'] = $monthly_interest;

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

    $investment = isset($_SESSION['investment']) ? $_SESSION['investment'] : '10000';
    $interest_rate = isset($_SESSION['interest_rate']) ? $_SESSION['interest_rate'] : '4';
    $years = isset($_SESSION['years']) ? $_SESSION['years'] : '5';
    $monthly_interest = isset($_SESSION['monthly_interest']) ? $_SESSION['monthly_interest'] : '0';

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
