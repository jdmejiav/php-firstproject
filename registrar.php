<?php

include("con_db.php");

if (isset($_POST['registro'])){
  if (strlen($_POST['user']) >= 1  && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1){
    $user = trim($_POST['user']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $consulta = "INSERT INTO datos_usuario(user, email, password) VALUES ('$user','$email','$password')";
    $resultado = mysqli_query($conex,$consulta);

    if ($resultado){
      ?>
      <h3>Registro exitoso</h3>
      <?php
    }else {
      ?>
      <h3>Por favor complete los campo</h3>
      <?php

    }
  }
}

?>
