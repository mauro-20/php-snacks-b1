<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

  $name = $_GET['name'];
  $email = $_GET['email'];
  $age = $_GET['age'];

  $show = false;
  $access = false;
  if ($name || $email || $age){
    $show = true;
  }
  if (strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) {
    $access = true;
  };

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snack 2</title>
</head>

<body>
  <div>
    <form action="">
      <label for="name">Name: </label>
      <input type="text" name="name" id="name">
      <br>
      <label for="email">email: </label>
      <input type="text" name="email" id="email">
      <br>
      <label for="age">age: </label>
      <input type="text" name="age" id="age">
      <br>
      <button type="submit">Access</button>
    </form>
  </div>
  <div>
    <?php 
      if ($show) {
        if ($access) {
          echo '<h3>Accesso riuscito</h3>';
        } else {
          echo '<h3>Accesso negato</h3';
        }
      }
    ?>  
  <h3></h3>
  </div>
</body>

</html>