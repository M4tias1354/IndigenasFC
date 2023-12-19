<?php
include("con_db.php");

if (isset($_POST["register"])) {
    if (
        strlen($_POST["name"]) >= 1 &&
        strlen($_POST["portero"]) >= 1 &&
        strlen($_POST["defensa"]) >= 1 &&
        strlen($_POST["motor"]) >= 1 &&
        strlen($_POST["atacante"]) >= 1 &&
        strlen($_POST["asistidores"]) >= 1 &&
        strlen($_POST["goleadores"]) >= 1 &&
        strlen($_POST["mejor"]) >= 1
    ) {
        $name = trim($_POST["name"]);

        // Verifica si el nombre ya existe en la base de datos
        $consulta_verificar = "SELECT * FROM votaciones WHERE nombre = '$name'";
        $resultado_verificar = mysqli_query($conex, $consulta_verificar);

        if (mysqli_num_rows($resultado_verificar) > 0) {
            // El nombre ya existe, muestra un mensaje de error
            ?>
            <script>
                Swal.fire({
                    title: "Este nombre ya voto",
                    text: "Solo se puede emitir 1 voto",
                    icon: "error",
                    confirmButtonText: "Okey, mala mia"
                });
            </script>
            <?php
        } else {
            // El nombre no existe, procede con la inserción en la base de datos
            $portero = trim($_POST["portero"]);
            $defensa = trim($_POST["defensa"]);
            $motor = trim($_POST["motor"]);
            $atacante = trim($_POST["atacante"]);
            $asistidores = trim($_POST["asistidores"]);
            $goleadores = trim($_POST["goleadores"]);
            $mejor = trim($_POST["mejor"]);
            $fechareg = date("d/m/y");

            $consulta = "INSERT INTO votaciones(nombre, portero, defensa, motor, atacante, asistidores, goleadores, mejor, fecha_reg) VALUES ('$name','$portero','$defensa','$motor','$atacante', '$asistidores','$goleadores','$mejor','$fechareg')";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                ?>
                <script>
                    Swal.fire({
                        title: "Muchas Gracias por votar",
                        text: "Proximamente se daran los resultados",
                        icon: "success",
                        confirmButtonText: "Gracias"
                    });
                </script>
                <?php
            } else {
                ?>
                <script>
                    Swal.fire({
                        title: "Ups, ha ocurrido un Error",
                        text: "Intenta de Nuevo",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                </script>
                <?php
            }
        }
    } else {
        ?>
        <script>
            Swal.fire({
                title: "Completa todos los campos cabro weon",
                text: "Intenta de Nuevo",
                icon: "error",
                confirmButtonText: "OK"
            });
        </script>
        <?php
    }
}
?>




<!-- // if (!$conex) {
    //     die("Error de conexión: " . mysqli_connect_error());
    // } else {
    //     echo "Conexión exitosa";
    // } -->