<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>

    <h1>
        Bienvenido
        <?= htmlspecialchars($_SESSION['usuario']['nombre']) ?>
    </h1>

    <a href="<?= BASE_URL ?>logout">
        Cerrar sesión
    </a>

</body>
</html>