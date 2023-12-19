<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gala Crack Indigenas FC</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="logo.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>

</head>

<body>
  <form id="formulario" method="post">
    <h1>Nominaciones Indigenas FC</h1>

    <div class="seccion" id="seccion-nombre">
      <input  type="text" name="name" placeholder="Ingrese Su Nombre, Indigena" required>
      <button type="button"  onclick="mostrarSiguiente('seccion-nombre', 'seccion-portero')">Siguiente</button>
      
    </div>

    <div class="seccion" id="seccion-portero">
      <select name="portero" required>
        <option disabled selected value>Mejor Portero del Año</option>
        <option value="Diego Ayala">Diego Ayala</option>
        <option value="Hugo Mundaca">Hugo Mundaca</option>
        <option value="Martin Arenas">Martin Arenas</option>
      </select>
      <button type="button" onclick="mostrarAnterior('seccion-portero', 'seccion-nombre')">Anterior</button>
      <button type="button" onclick="mostrarSiguiente('seccion-portero', 'seccion-defensa')">Siguiente</button>

    </div>

    <div class="seccion" id="seccion-defensa">
      <select name="defensa" required>
        <option disabled selected value>Mejor Defensa del Año</option>
        <option value="Francisco">Francisco Fonseca</option>
        <option value="Benjamin Cari">Benjamin Cari</option>
        <option value="Benjamin Pineda">Benjamin Pineda</option>
      </select>
      <button type="button" onclick="mostrarAnterior('seccion-defensa', 'seccion-portero')">Anterior</button>
      <button type="button" onclick="mostrarSiguiente('seccion-defensa', 'seccion-motor')">Siguiente</button>

    </div>

    <div class="seccion" id="seccion-motor">
      <select name="motor" required>
        <option disabled selected value>Motor del Equipo del Año</option>
        <option value="Maximiliano Alvares">Maximiliano Alvares</option>
        <option value="Damian Castro">Damian Castro</option>
        <option value="Alejandro Chala">Alejandro Chala</option>
      </select>      
      <button type="button" onclick="mostrarAnterior('seccion-motor', 'seccion-defensa')">Anterior</button>
      <button type="button" onclick="mostrarSiguiente('seccion-motor', 'seccion-atacante')">Siguiente</button>

    </div>

    <div class="seccion" id="seccion-atacante">
      <select name="atacante" required>
        <option disabled selected value>Atacante del Año</option>
        <option value="Martin Arenas">Martin Arenas</option>
        <option value="Nicolas Arenas">Nicolas Arenas</option>
        <option value="Jose Santander">Jose Santander</option>
      </select>
      <button type="button" onclick="mostrarAnterior('seccion-atacante', 'seccion-motor')">Anterior</button>
      <button type="button" onclick="mostrarSiguiente('seccion-atacante', 'seccion-asistidores')">Siguiente</button>

    </div>

    <div class="seccion" id="seccion-asistidores">
      <select name="asistidores" required>
        <option disabled selected value>Asistidor del Año</option>
        <option value="Maximiliano Alvares">Maximiliano Alvares</option>
        <option value="Damian Castro">Damian Castro</option>
        <option value="Francisco Fonseca">Francisco Fonseca</option>
      </select>
      <button type="button" onclick="mostrarAnterior('seccion-asistidores', 'seccion-atacante')">Anterior</button>
      <button type="button" onclick="mostrarSiguiente('seccion-asistidores', 'seccion-goleadores')">Siguiente</button>

    </div>

    <div class="seccion" id="seccion-goleadores">
      <select name="goleadores" required>
        <option disabled selected value>Goleador del Año</option>
        <option value="Martin Arenas">Martin Arenas</option>
        <option value="Nicolas Arenas">Nicolas Arenas</option>
        <option value="Maximiliano Alvares">Maximiliano Alvares</option>
      </select>
      <button type="button" onclick="mostrarAnterior('seccion-goleadores', 'seccion-asistidores')">Anterior</button>
      <button type="button" onclick="mostrarSiguiente('seccion-goleadores', 'seccion-mejor')">Siguiente</button>

    </div>

    <div class="seccion" id="seccion-mejor">
      <select name="mejor" required>
        <option disabled selected value>Mejor del Año</option>
        <option value="Francisco Fonseca">Francisco Fonseca</option>
        <option value="Martin Arenas">Martin Arenas</option>
        <option value="Maximiliano Alvares">Maximiliano Alvares</option>
        <option value="Damian Castro">Damian Castro</option>
      </select>
      <button type="button" onclick="mostrarAnterior('seccion-mejor', 'seccion-goleadores')">Anterior</button>
      <button type="submit" name="register">Registrar mi Voto</button>
    </div>
  </form>

  <?php
  include("registrar.php");
  ?>
  <script src="script.js"></script>
</body>

</html>