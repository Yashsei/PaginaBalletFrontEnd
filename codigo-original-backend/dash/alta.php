<?php
require "../datos/seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Panel Administrativo</title>
</head>
<body>
  <?php include "header.php" ?>
  <?php include "menu.php" ?>
  <div class="formu">
    <h3>Ingresa los Datos de un Usuario</h3>
    <form action="../datos/users.php" method="POST" name="usuarios">
      <input type="text" placeholder="Usuario" name="user">
      <input type="password" placeholder="Contraseña" name="contra">
      <select name="rango" id="rango">
        <option value="">Selecciona el rango del Usuario</option>
        <option value="Administrador">Administrador</option>
        <option value="Usuario">Usuario</option>
      </select>
      <button type="submit" class="btn_enviar">Guardar</button>
    </form>

  </div>
</body>
</html>