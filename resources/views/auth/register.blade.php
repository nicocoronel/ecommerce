<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Mi Tienda</title>
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

        .register-form {
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
    <div class="register-form">
        <h2 class="form-title">Registrarse</h2>
        <form method="POST" action="http://127.0.0.1:8000/register" class="register-form">
            <input type="hidden" name="_token" value="aQIMK4GlnutAWuiU9Xp6wGovWVzgryUm3P8n1gej">
            
            <!-- Nombre -->
            <div class="form-group">
                <label for="name" class="form-label">Nombre</label>
                <input id="name" type="text" name="name" class="form-input" :value="old('name')" required autofocus>
            </div>

            <!-- Correo Electrónico -->
            <div class="form-group">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input id="email" type="email" name="email" class="form-input" :value="old('email')" required>
            </div>

            <!-- Contraseña -->
            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <input id="password" type="password" name="password" class="form-input" required autocomplete="new-password">
            </div>

            <!-- Confirmar Contraseña -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-input" required>
            </div>

            <!-- Botón de Registro -->
            <div class="form-group">
                <button type="submit" class="form-submit">Registrarse</button>
            </div>
        </form>

        <!-- Enlace al Formulario de Inicio de Sesión -->
        <div class="form-link">
            <a href="http://127.0.0.1:8000/login">¿Ya estás registrado?</a>
        </div>
    </div>
</body>
</html>
