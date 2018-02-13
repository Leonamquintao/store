<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
  </head>

  <body>
    <?php

      //cookie de seção que dura uma hora.
      setcookie('nome', 'Jorge', time()+3600);

      $enterPharse = 'Hello '.$_COOKIE['nome'].' !!!<br /><br />';
      echo $enterPharse;

      for ($i=1; $i <= 20; $i++) {
        echo $i % 2 == 0 ? $i . ' Par <br />' : $i . ' Impar <br />';
      }

    ?>

  </body>
</html>
