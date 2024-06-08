<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restablecer contraseña - Mi Tienda</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 6px;
            display: block;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-submit {
            width: 100%;
            padding: 12px;
            background-color: #4b5563;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-submit:hover {
            background-color: #374151;
        }

        .form-link {
            margin-top: 10px;
            text-align: right;
        }

        .form-link a {
            color: #4b5563;
            text-decoration: underline;
        }

        .form-link a:hover {
            color: #1f2937;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2 class="form-title">Restablecer contraseña</h2>
        <form method="POST" action="http://127.0.0.1:8000/forgot-password" class="login-form">
            <input type="hidden" name="_token" value="fCrRSI8IOzU3gPKxrJG8IFwHkpaSX4l3AwzT2Bys">
            <div class="form-group">
                <label for="email" class="form-label">Correo electrónico</label>
                <input id="email" type="email" name="email" class="form-input" required autofocus>
            </div>

            <div class="form-group">
                <button type="submit" class="form-submit">Enviar enlace de restablecimiento</button>
            </div>
        </form>

        <div class="form-link">
            <a href="http://127.0.0.1:8000/login">Volver al inicio de sesión</a>
        </div>
    </div>
</body>
</html>
