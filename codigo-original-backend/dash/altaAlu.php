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
    <h3>Ingresa los Datos de un Alumno</h3>
    <form action="../datos/data.php" method="POST" name="alumnos" enctype="multipart/form-data">
      <input type="text" placeholder="Nombre del Alumno" name="nombre" maxlength="50">
      <input type="tel" placeholder="Telefono" name="telefono" maxlength="10">
      <input type="number" placeholder="Edad" class="elemento3" name="edad" maxlength="5">
      <select name="paquete" id="paquete">
        <option value="">Selecciona la Disciplina del Alumno</option>
        <option value="Ballet">Ballet</option>
        <option value="Show Dans">Show Dans</option>
        <option value="Competitive">Competitive</option>
        <option value="Baby Dans">Baby Dans</option>
      </select>
      <p>Matutino</p>
        <input type="radio" value="matutino" name="horario"class="elemento3">
      <p>Vespertino</p>
      <input type="radio" value="vespertino" name="horario" class="elemento3">
      <p>No seleccionado</p>
      <input type="radio" value="No seleccionado" name="horario" class="elemento3">
      <select name="taller" id="taller">
        <option value="">Seleccione el Taller del Alumno</option>
        <option value="Aero Dans">Aero Dans</option>
        <option value="Dans Coreography">Dans Coreography</option>
        <option value="Aero Dans y Dans Coreography">Aero Dans y Dans Coreography</option>
        <option value="Ninguno">Ninguno</option>
      </select>
      <h3>Foto del Alumno Formato PNG o JPG *</h3>
      <input type="file" name="foto">
      <button type="button" class="btn_enviar" onclick="enviar()">Guardar</button>
    </form>

  </div>
</body>
<script>
  function enviar(){
      var form = document.alumnos;
      if (form.nombre.value.trim().length === 0) {
          alert("Escribe el NOMBRE COMPLETO");
          form.nombre.focus();
          return;
      }
      if (form.telefono.value.trim().length === 0) {
          alert("Escribe el TELEFONO");
          form.telefono.focus();
          return;
      }
      if (form.paquete.value.trim().length === 0) {
          alert("SELECCIONA el PAQUETE");
          form.paquete.focus();
          return;
      }
      if (form.edad.value.trim().length === 0) {
          alert("Ingresa la Edad del Alumno");
          form.edad.focus();
          return;
      }
      if (form.horario.value.trim().length === 0) {
          alert("Ingresa el Horario del Alumno");
          form.horario.focus();
          return;
      }
      if (form.taller.value.trim().length === 0) {
          alert("Ingresa el Taller del Alumno");
          form.taller.focus();
          return;
      }
      if (form.foto.value.trim().length === 0) {
          alert("Ingresa la FOTO del Alumno");
          form.foto.focus();
          return;
      }
      var patronTel = /^\d{10}$/;
      if (!patronTel.test(form.telefono.value)) {
          alert("El telefono debe tener exactamente 10 números");
          form.telefono.focus();
          return;
      }
      form.submit();
    }
</script>
</html>