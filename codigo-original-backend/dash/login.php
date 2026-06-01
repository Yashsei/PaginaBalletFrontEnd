<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
  <?php include "header.php"?>
  <?php include "menu.php"?>
  <div class="contGeneral">
    <div class="formu">
      <form action="../datos/validar.php" method="POST" name="login">
        <h2>Acceso al Panel Administrativo</h2>
        <input type="text" placeholder="Usuario" name="user">
        <input type="password" placeholder="Contraseña" name="contra">
        <button class="btn_login" type="submit">Login</button>
      </form>
    </div>
  </div>
</body>
</html>