<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>MEDICARE PRO</title>

    <base href="<?= BASE_URL ?>">

    <link
        rel="stylesheet"
        href="public/assets/css/style.css?v=<?= time() ?>">
</head>

<body>

    <div style="width:400px; margin:100px auto; background:white; padding:30px; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,.1);">

        <h1 style="text-align:center; margin-bottom:20px;">
            MEDICARE PRO
        </h1>

        <form action="" method="POST">

            <input
                type="email"
                name="correo"
                placeholder="Correo"
                required
                style="width:100%; padding:12px; margin-bottom:15px;">

            <input
                type="password"
                name="password"
                placeholder="Contraseña"
                required
                style="width:100%; padding:12px; margin-bottom:15px;">

            <button
                type="submit"
                style="width:100%; padding:12px; border:none; background:#1e293b; color:white; cursor:pointer;">
                Iniciar sesión
            </button>

        </form>

    </div>

</body>
</html>