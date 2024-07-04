<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="registrarsecss.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <div class="register-container">
        <form action="register.php" method="post">
                <h2>Registrarse</h2>
                <label for="usuar">Usuario:</label>
                <input type="text" id="usuar" name="usuar" required>
                <label for="passs">Contraseña:</label>
                <input type="password" id="passs" name="passs" required>
                <label for="ermail">Email:</label>
                <input type="email" id="ermail" name="ermail" required>
                <br>
                <br>
            <button type="submit" class="btn">Registrarse</button>
        </form>
    </div>
</body>
</html>
