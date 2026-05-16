<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Contacto</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            font-family: 'DM Sans', sans-serif;
        }

        form {
            background: rgba(255, 255, 255, 0.05);
            border: 0.5px solid rgba(255, 255, 255, 0.12);
            border-radius: 20px;
            padding: 2.5rem 2rem;
            width: 340px;
            backdrop-filter: blur(10px);
        }

        h2 {
            font-family: 'DM Serif Display', serif;
            font-size: 26px;
            font-weight: 400;
            color: #ffffff;
            margin: 0 0 1.8rem;
        }

        label {
            display: block;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.4);
            margin-bottom: 6px;
        }

        input,
        textarea {
            width: 100%;
            background: rgba(255, 255, 255, 0.06);
            border: 0.5px solid rgba(255, 255, 255, 0.15);
            border-radius: 10px;
            padding: 10px 14px;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            color: #ffffff;
            box-sizing: border-box;
            outline: none;
            margin-bottom: 14px;
            transition: border-color 0.2s, background 0.2s;
        }

        input::placeholder,
        textarea::placeholder {
            color: rgba(255, 255, 255, 0.2);
        }

        input:focus,
        textarea:focus {
            border-color: rgba(83, 74, 183, 0.7);
            background: rgba(255, 255, 255, 0.09);
            box-shadow: 0 0 0 3px rgba(83, 74, 183, 0.2);
        }

        textarea {
            min-height: 90px;
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #534AB7, #1D9E75);
            border: none;
            border-radius: 10px;
            color: #ffffff;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: opacity 0.2s, transform 0.15s;
        }

        button:hover {
            opacity: 0.9;
        }

        button:active {
            transform: scale(0.98);
        }
    </style>
</head>

<body>
    <!-- Formulario de contacto -->
    <form method="POST">
        <h2>Contacto</h2>

        <!-- Campo para nombre -->
        <input type="text" name="nombre" placeholder="Nombre" required>

        <!-- Campo para teléfono -->
        <input type="text" name="telefono" placeholder="Teléfono" required>

        <!-- Campo para correo -->
        <input type="email" name="correo" placeholder="Correo" required>

        <!-- Campo para mensaje -->
        <textarea name="mensaje" placeholder="Mensaje" required></textarea>

        <!-- Botón para enviar -->
        <button type="submit">Enviar</button>

    </form>
</body>

</html>
