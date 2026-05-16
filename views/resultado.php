<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>

    <style>
        body {

            font-family: Arial;
            background: #f0f2f5;
            padding: 40px;
        }

        form {

            width: 350px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h2 {

            text-align: center;
        }

        input,
        textarea {

            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        button {

            width: 100%;
            padding: 12px;
            background: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {

            background: darkblue;
        }
    </style>
</head>

<body>

    <div class="contenedor">

        <h2>
            <?php echo $resultado["estado"]; ?>
        </h2>

        <p>
            <strong>Nombre:</strong>
            <?php echo $resultado["nombre"]; ?>
        </p>

        <p>
            <strong>Correo:</strong>
            <?php echo $resultado["correo"]; ?>
        </p>

        <p>
            <strong>Mensaje:</strong>
            <?php echo $resultado["mensaje"]; ?>
        </p>

        <p><strong>Telefono:</strong>
            <?php echo $resultado["telefono"]; ?>
        </p>

        <p><strong>Fecha y hora:</strong>
            <?php echo $resultado["fecha"]; ?>
        </p>

        <a href="index.php">Volver</a>

    </div>

</body>

</html>