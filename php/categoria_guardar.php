<?php
require_once "main.php";

/*== Almacenando datos ==*/
$nombre = limpiar_cadena($_POST['categoria_nombre']);
$ubicacion = limpiar_cadena($_POST['categoria_ubicacion']);

/*== Verificando campos obligatorios ==*/
if ($nombre == "") {
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrió un error inesperado!</strong><br>
            No has llenado todos los campos que son obligatorios
        </div>
    ';
    exit();
}

/*== Verificando integridad de los datos ==*/
if (verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}", $nombre)) {
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrió un error inesperado!</strong><br>
            El NOMBRE no coincide con el formato solicitado
        </div>
    ';
    exit();
}

if ($ubicacion != "") {
    if (verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}", $ubicacion)) {
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrió un error inesperado!</strong><br>
                La UBICACION no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
}

/*== Verificando nombre ==*/
$conexion = conexion();
$check_nombre = $conexion->prepare("SELECT categoria_nombre FROM categoria WHERE categoria_nombre = :nombre");
$check_nombre->bindParam(":nombre", $nombre);
$check_nombre->execute();

if ($check_nombre->rowCount() > 0) {
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrió un error inesperado!</strong><br>
            El NOMBRE ingresado ya se encuentra registrado, por favor elija otro
        </div>
    ';
    exit();
}

/*== Guardando datos ==*/
$guardar_categoria = $conexion->prepare("INSERT INTO categoria (categoria_nombre, categoria_ubicacion) VALUES (:nombre, :ubicacion)");
$guardar_categoria->bindParam(":nombre", $nombre);
$guardar_categoria->bindParam(":ubicacion", $ubicacion);
$resultado = $guardar_categoria->execute();

if ($resultado) {
    echo '
        <div class="notification is-info is-light">
            <strong>¡CATEGORIA REGISTRADA!</strong><br>
            La categoría se registró con éxito
        </div>
    ';
} else {
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrió un error inesperado!</strong><br>
            No se pudo registrar la categoría, por favor intente nuevamente
        </div>
    ';
}
?>
