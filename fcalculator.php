<?php
error_reporting(1);
$num1 = $_POST['nummer1'];
$num2 = $_POST['nummer2'];
$operator = $_POST['operator'];
$submit = $_POST['submit'];

if($submit == False) {
}
else if($operator == plus) {
  $num3 = $num1 + $num2;
  Echo "Uw antwoord is:";
  echo "$num1 + $num2=";
  echo $num3;
}
else if($operator == min) {
  $num3 = $num1 - $num2;
  echo "Uw antwoord is:";
  echo "$num1 - $num2=";
  echo $num3;
}
else if($operator == keer) {
  $num3 = $num1 * $num2;
  echo "Uw antwoord is:";
  echo "$num1 x $num2=";
  echo $num3;
}
else if($operator == delen) {
  $num3 = $num1 / $num2;
  echo "Uw antwoord is:";
  echo "$num1 / $num2=";
  echo $num3;
}
?>
