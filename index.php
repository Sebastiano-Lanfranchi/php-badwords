<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." ;

    $_GET["badWord"];

    $paragraph = str_replace($_GET, '****', $paragraph);
    echo($paragraph);

    ?>
    <br>
    <span>Lunghezza stringa:</span>
      <?php echo strlen($paragraph)  ?>
    <br>
    <a href="http://localhost/php-badwords/index.php?badWord=adipisicing"><input type="button" name="" value="active"></input></a>
    <?php


     ?>


  </body>
</html>
