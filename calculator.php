<!DOCTYPE html>
<html>
<head>
  <title>Rekenmachine 2000</title>
</head>
<body>
  <form name="calculator" action="calculator.php" method="post">
    <input type="number" name="nummer1" placeholder="Nummer 1"><br>
    <select name="operator">
      <option value="kies">Kies</option>
      <option value="plus">+</option>
      <option value="min">-</option>
      <option value="keer">x</option>
      <option value="delen">/</option>
    </select><br>
    <input type="number" name="nummer2" placeholder="Nummer 2"><br>
    <input type="submit" name="submit" value="Reken uit"><br>
    <?php
    include 'fcalculator.php'
    ?>
</body>
</html>
