<?php
function fibonacci($b) {
  $fib1 = -1;
  $fib2 = 1;
    for ($a = 1; $a <= $b; $a++) {
    $fib = $fib1 + $fib2;
    $fib1 = $fib2;
    $fib2 = $fib;
    echo "$fib<br />";
  }
 }

echo("De Fibonacci reeks is 0, 1, 1, 2, 3, 5, 8, 13, 21, 34<br>");
echo fibonacci(10);

?>
