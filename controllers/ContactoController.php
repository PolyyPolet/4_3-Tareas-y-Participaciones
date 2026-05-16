<?php
require_once "models/Contacto.php";
class ContactoController
{
    public function mostrarFormulario()
    {
        require_once "views/formulario.php";
    }
    public function procesarFormulario()
    {

        // Obtener datos del formulario
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $mensaje = $_POST["mensaje"];

        // Validar que el mensaje tenga mínimo 10 caracteres
        if (strlen($mensaje) < 10) {

            echo "El mensaje debe tener mínimo 10 caracteres";
            return;
        }

        // Enviar datos al modelo
        $resultado = Contacto::guardar($nombre, $telefono, $correo, $mensaje);

        // Mostrar resultado
        require_once "views/resultado.php";
    }
}
?>