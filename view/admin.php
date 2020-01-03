<?php

$_SESSION['logged_in'] = true;
if ($_SESSION['logged_in'] === true) {
  echo "You are now logged in. Congrats. Eat a cookie";

} else {
  echo "you no log in.";
}
