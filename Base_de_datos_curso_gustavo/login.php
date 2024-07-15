<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>INGRESE SU CUENTA</h2>
        <p>Inicia sesión</p>
        <div class="input-wrapper">
            <input type="text" name="username" placeholder="Usuario" required> 
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña" required> 
        </div>
        <input type="submit" name="ingresar" value="Ingresar">
    </form>
</body>
</html>
