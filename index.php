<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Registro</h1>
    <form method="post">
        <input type="user" name="user" value="user">
        <input type="email" name="email" value="email">
        <input type="password" name="password" value="password">
        <input type="submit" name="registro" value="Registrarse">
    </form>
    <?php
      include("registrar.php");
     ?>
  </body>
</html>
