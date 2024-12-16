<?php
require_once('./Components/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $communication_method = isset($_POST['communication_method']) ? $_POST['communication_method'] : '';
    $message = htmlspecialchars($_POST['message']);

    echo "<div class='alert alert-success text-center' role='alert'>Gracias por tu mensaje, $name. Nos pondremos en contacto contigo pronto.</div>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/contact.css">
</head>

<body>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="contact-img d-flex justify-content-center align-items-center h-100 rounded-3">
                        <h1 class="text-white">Contacta con nosotros</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h2>Envíanos tu mensaje</h2>
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
                                <h4>Método preferido de comunicación</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="communication_method" value="Email" required>
                                    <label class="form-check-label">Correo electrónico</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="communication_method" value="Phone" required>
                                    <label class="form-check-label">Teléfono</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <textarea name="message" class="form-control form-control-lg" placeholder="Mensaje" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('./Components/footer.php'); ?>

</body>

</html>