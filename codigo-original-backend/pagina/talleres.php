<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Talleres</title>
</head>
<body>
  <?php include "../header.php" ?>
  <div class="contTalleres">
    <h2>Talleres</h2>
    <br>
    <div class="contInfoTaller">
      <h3>Aero Dans</h3>
      <div class="hrTaller"></div>
      <p>El Aero Dans fusiona la agilidad del movimiento con la fuerza aeróbica en una rutina dinámica y revitalizante. Aquí elevamos la energía al ritmo de la música, logrando un acondicionamiento físico intenso que transforma nuestra resistencia y vitalidad en cada sesión.
      </p>
      <img src="http://localhost/Ballet/img/aerodance.webp" alt="Aero Dans">
      <img src="http://localhost/Ballet/img/aero2.png" alt="">
    </div>
    <div class="contInfoTaller">
      <h3>Dans Coreography</h3>
      <div class="hrTaller"></div>
      <p>En Dans Coreography nos especializamos en la creación y montaje de piezas únicas que transforman ideas en movimiento. Aquí exploramos la narrativa visual a través de pasos precisos, logrando coreografías que destacan la originalidad y el talento en cada presentación sobre el escenario.
      </p>
      <img src="http://localhost/Ballet/img/Dans Coreography.jpg" alt="Dans Coreographys">

    </div>

  </div>
  <div class="contTablaTaller">
    <h2>Precios</h2>
    <table>
      <tr>
        <th>Taller</th>
        <th>Duracion</th>
        <th>Precio</th>
      </tr>
      <tr>
        <td>Aero Dans</td>
        <td>9 Meses</td>
        <td>$3,500</td>
      </tr>
      <tr>
        <td>Dans Coreography</td>
        <td>6 Meses</td>
        <td>$2,750</td>
      </tr>
    </table>
  </div>
  <?php  include "../footer.php" ?>
</body>
</html>