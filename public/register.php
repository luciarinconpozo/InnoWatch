<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    if ($password !== $confirm_password) {
        echo "<div class='alert alert-danger text-center' role='alert'>Las contraseñas no coinciden.</div>";
    } else {
        echo "<div class='alert alert-success text-center' role='alert'>Gracias por registrarte, $name. Nos pondremos en contacto contigo pronto.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/register.css">
</head>

<body>
    <section class="registration-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="contact-img d-flex justify-content-center align-items-center h-100 rounded-3">
                        <h1 class="text-white">Regístrate con nosotros</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h2>Crea tu cuenta</h2>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="Nombre" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Correo electrónico" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="phone" class="form-control form-control-lg" placeholder="Teléfono" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Contraseña" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="confirm_password" class="form-control form-control-lg" placeholder="Confirmar contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Registrarse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
