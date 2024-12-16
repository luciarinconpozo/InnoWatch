<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Aquí puedes agregar la validación de usuario, por ejemplo, comprobar en una base de datos
    if ($email == "usuario@example.com" && $password == "contraseña123") {
        echo "<div class='alert alert-success text-center' role='alert'>Bienvenido, $email. Has iniciado sesión con éxito.</div>";
    } else {
        echo "<div class='alert alert-danger text-center' role='alert'>Correo electrónico o contraseña incorrectos.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/login.css">
</head>

<body>
    <section class="login-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h2>Accede a tu cuenta</h2>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Correo electrónico" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Iniciar sesión</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="contact-img d-flex justify-content-center align-items-center h-100 rounded-3">
                        <h1 class="text-white">Inicia sesión</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
