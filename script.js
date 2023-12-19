function mostrarSiguiente(seccionActual, siguienteSeccion) {
  // Obtener el input de nombre
  const inputNombre = document.querySelector("#seccion-nombre input");

  // Validar que no esté vacío
  if (!inputNombre.value) {
    return;
  }

  // Obtener el select de portero
  if (seccionActual === "seccion-portero") {
    const selectPortero = document.querySelector("#seccion-portero select");

    if (!selectPortero.value) {
      return;
    }
  }

  // Obtener el select de defensa
  if (seccionActual === "seccion-defensa") {
    const selectDefensa = document.querySelector("#seccion-defensa select");

    if (!selectDefensa.value) {
      return;
    }
  }

  if (seccionActual === "seccion-motor") {
    const selectMotor = document.querySelector("#seccion-motor select");

    if (!selectMotor.value) {
      return;
    }
  }

  if (seccionActual === "seccion-atacante") {
    const selectAtacante = document.querySelector("#seccion-atacante select");

    if (!selectAtacante.value) {
      return;
    }
  }

  if (seccionActual === "seccion-asistidores") {
    const selectAsistidor = document.querySelector(
      "#seccion-asistidores select"
    );

    if (!selectAsistidor.value) {
      return;
    }
  }

  if (seccionActual === "seccion-goleadores") {
    const selectGoleador = document.querySelector("#seccion-goleadores select");

    if (!selectGoleador.value) {
      return;
    }
  }

  document.getElementById(seccionActual).style.opacity = "0";
  setTimeout(() => {
    document.getElementById(seccionActual).style.display = "none";
    document.getElementById(siguienteSeccion).style.display = "block";
    setTimeout(() => {
      document.getElementById(siguienteSeccion).style.opacity = "1";
    }, 10);
  }, 500);
}

function mostrarAnterior(seccionActual, anteriorSeccion) {
  document.getElementById(seccionActual).style.opacity = "0";
  setTimeout(() => {
    document.getElementById(seccionActual).style.display = "none";
    document.getElementById(anteriorSeccion).style.display = "block";
    setTimeout(() => {
      document.getElementById(anteriorSeccion).style.opacity = "1";
    }, 10);
  }, 500);
}
