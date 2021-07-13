<?php

// Calculate interest rate and produce loan amortisation schedule.
// This will accept any 3 of the 4 components of the calculation,
// calculate the missing component, then produce a repayment schedule
// showing the split between interest and principle for each payment.

$principal = $_POST['amort_principal'];
$rate      = $_POST['amort_rate'];
$payment   = $_POST['amort_payment'];

function print_schedule($balance, $rate, $payment) {
    // check that required values have been supplied
    if (empty($balance)) {
      echo "<span class='error'>a value for PRINCIPAL is required</span>";
      exit;
    }
    if (empty($rate)) {
      echo "<span class='error'>a value for INTEREST RATE is required</span>";
      exit;
    }
    if (empty($payment)) {
      echo "<span class='error'>a value for PAYMENT is required</span>";
      exit;
    }

    echo '<div class="table-body">';
      echo '<div class="table-body-header grid-4 _12-gap">';
        echo '<div>';
          echo '<div class="text-14 text-color-2">Payment #</div>';
        echo '</div>';
        echo '<div>';
          echo '<div class="text-14 text-color-2">Principal</div>';
        echo '</div>';
        echo '<div>';
          echo '<div class="text-14 text-color-2">Interest</div>';
        echo '</div>';
        echo '<div>';
          echo '<div class="text-14 text-color-2">Balance</div>';
        echo '</div>';
      echo '</div>';

      $count = 0;

      do {
        
        $count++;

        // calculate interest on outstanding balance
        $interest = $balance * $rate;

        // what portion of payment applies to principal?
        $principal = $payment - $interest;

        // watch out for balance < payment
        if ($balance < $payment) {
            $principal = $balance;
            $payment   = $interest + $principal;
        }

        // reduce balance by principal paid
        $balance = $balance - $principal;

        // watch for rounding error that leaves a tiny balance
        if ($balance < 0) {
            $principal = $principal + $balance;
            $interest  = $interest - $balance;
            $balance   = 0;
        }

        // NOTE! not in use here is the payment: number_format($payment,   2, ".", ",")
        echo '<div class="table-body-row grid-4 _12-gap">';
          echo '<div class="text-align-center">';
            echo '<div class="text-14">' . $count . '</div>';
          echo '</div>';
          echo '<div>';
            echo '<div class="text-14">$' . number_format($principal, 2, ".", ",") . '</div>';
          echo '</div>';
          echo '<div>';
            echo '<div class="text-14">$' . number_format($interest,  2, ".", ",") . '</div>';
          echo '</div>';
          echo '<div>';
            echo '<div class="text-14">$' . number_format($balance,   2, ".", ",") . '</div>';
          echo '</div>';
        echo '</div>';

        @$totPayment   = $totPayment + $payment;
        @$totInterest  = $totInterest + $interest;
        @$totPrincipal = $totPrincipal + $principal;

        if ($payment < $interest) {
            echo '</div>';
            echo '<span class="error">Payment < Interest amount - rate is too high, or payment is too low</span>';
            exit;
        }

      } while ($balance > 0);

      // TOTALS
      /*echo "<tr>";
        echo "<td>&nbsp;</td>";
        echo "<td><b>" .number_format($totPayment,   2, ".", ",") ."</b></td>";
        echo "<td><b>" .number_format($totInterest,  2, ".", ",") ."</b></td>";
        echo "<td><b>" .number_format($totPrincipal, 2, ".", ",") ."</b></td>";
        echo "<td>&nbsp;</td>";
      echo "</tr>";*/

    echo "</div>";

}

print_schedule($principal, $rate, $payment); ?>