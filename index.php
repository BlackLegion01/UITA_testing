<!DOCTYPE html>
<html lang="es">
<!-- Este archivo era el anterior index.html-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Una institucion te acompaña | CECyTEM Plantel Tecámac</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Formulario de Registro</h2>
        <form id="helpForm" action="formulario.php" method="POST">
            <div class="form-group">
                <label for="nickname">Nickname</label>
                <input type="text" id="nickname" name="nickname" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="age">Edad</label>
                <input type="number" id="age" name="age" min="14" max="18" value="14" required>
            </div>
            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="tel" id="phone" name="phone" required maxlength="22">
            </div>
            <div class="form-group">
                <label for="location">Localidad</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar" value="enviar datos">
            </div>
            <div class="message" id="message"></div>
        </form>
        <center> <a href="index2.html" class="btn-morado">Iniciar Sesion</a></center>
    </div>
   <!-- <script src="scripts.js"></script> -->
</body>

</html>