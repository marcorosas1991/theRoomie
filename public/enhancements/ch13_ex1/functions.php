<?php

//calculates future value
function getFutureValue($investment, $interest_rate, $years, $compound = FALSE) {
  // calculate the future value
  if ($compound == TRUE) {
    $future_value = $investment * pow( 1 + $interest_rate / (12 * 100) , 12 * $years);
  } else {
    $future_value = $investment;
    for ($i = 1; $i <= $years; $i++) {
        $future_value = ($future_value + ($future_value * $interest_rate *.01));
    }
  }

  return $future_value;
}

// format functions
function formatCurrency($amount) {
  return '$'.number_format($amount, 2);
}

function formatPercentage($amount) {
  return $amount.'%';
}

?>
