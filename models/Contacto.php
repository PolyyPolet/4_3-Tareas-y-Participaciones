<?php

// Clase del modelo
class Contacto {

    // Función para guardar datos
    public static function guardar($nombre, $telefono, $correo, $mensaje) {

        // Obtener fecha y hora actual
        $fecha = date("d/m/Y H:i:s");

        // Crear texto para guardar
        $texto = "Nombre: $nombre\n";
        $texto .= "Telefono: $telefono\n";
        $texto .= "Correo: $correo\n";
        $texto .= "Mensaje: $mensaje\n";
        $texto .= "Fecha: $fecha\n";
        $texto .= "----------------------\n";

        // Guardar en archivo txt
        file_put_contents("mensajes.txt", $texto, FILE_APPEND);

        // Retornar resultados
        return [

            "nombre" => $nombre,
            "telefono" => $telefono,
            "correo" => $correo,
            "mensaje" => $mensaje,
            "fecha" => $fecha,
            "estado" => "Mensaje enviado correctamente"

        ];
    }
}

?>