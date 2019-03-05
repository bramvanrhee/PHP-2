<?php
  error_reporting(0);
  $check = $_POST['check'];

  $alfa = alfabetisch();
  function alfabetisch() {
    if(ctype_alnum($_POST['check'])) {
      echo "Er zitten alleen letters in<br>";
    }
    else {
      echo "Er zitten ook cijfers of/en tekens in<br>";
    }
  }

  $num = nummer();
  function nummer() {
    if(is_numeric($_POST['check'])) {
      echo "Er zitten alleen cijfers in<br>";
    }
    else {
      echo "Er zitten ook letters of/en tekens in<br>";
    }
  }

  $code = postcode();
  function postcode() {
    if(preg_match("/[1-9][0-9]{3}[\s]?[A-Za-z]{2}/",$check)) {
      echo "Het is een postcode<br>";
    }
    else {
      echo " Het is geen postcode<br>";
    }
  }

  $mv = manvrouw();
  function manvrouw() {
    switch($check) {
      case "vrouw":
      case "Vrouw":
      echo "Het is een vrouw<br>";
      break;
      case "man":
      case "Man":
      echo "Het is een man<br>";
      break;
      default:
      echo "Uw bent geen man of vrouw<br>";
    }
  }

  $email = emailadres();
  function emailadres() {
     if (preg_match("/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)/",$check)) {
       echo "Het is een E-mailadres<br>";
     }
     else {
       echo "Het is geen E-mailadres<br>";
     }
  }

  $telefoon = telefoonnummer();
  function telefoonnummer() {
    if(preg_match("/^(((0)[1-9]{2}[0-9][-]?[1-9][0-9]{5})|((\\+31|0|0031)[1-9][0-9][-]?[1-9][0-9]{6}))$/",$check)) {
      echo " Het is een telefoonnummer<br>";
    }
    else {
      echo "Het is geen telefoonnummer<br>";
    }
  }

  $adres = adres();
  function adres() {
    if (preg_match("/([1-9][e][\s])*([a-zA-Z]+(([\.][\s])|([\s]))?)+[1-9][0-9]*(([-][1-9][0-9]*)|([\s]?[a-zA-Z]+))?$/",$check)) {
      echo "Het is een adres<br>";
    }
    else {
      echo "Het is geen adres<br>";
    }
  }
?>
