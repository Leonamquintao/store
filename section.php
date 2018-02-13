<?php

  session_start();

  $login = "admin@admin.com";
  $password = "abc123";

  if($login == "admin@admin.com" && $password == "abc123") {
    $SESSION['login'] = true;
    echo "Success!";
  } else {
    echo "Error!";
  }

  //Sair da área restrita
  //unset($_SESSION['login']);

?>
