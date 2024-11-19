<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $communication_method = isset($_POST['communication_method']) ? $_POST['communication_method'] : '';
    $message = htmlspecialchars($_POST['message']);


    echo "<div class='alert alert-success' role='alert'>Gracias por tu mensaje, $name. Nos pondremos en contacto contigo pronto.</div>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href='../assets/styles/styles.css'>
</head>
<body>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="contact-img d-flex justify-content-center align-items-center h-100 rounded-3">
                    <h1 class="text-white text-center font-weight-bold position-absolute">Contact us</h1>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h2 class="text-indigo-600 font-weight-bold mb-4">Send Us A Message</h2>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control form-control-lg" placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone" class="form-control form-control-lg" placeholder="Phone" required>
                        </div>
                        <div class="mb-3">
                            <h4 class="text-muted">Preferred method of communication</h4>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="communication_method" id="email" value="Email">
                                <label class="form-check-label" for="email">Email</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="communication_method" id="phone" value="Phone">
                                <label class="form-check-label" for="phone">Phone</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control form-control-lg" placeholder="Message" rows="4" required></textarea>
                        </div>



                        <button type="submit" class="btn sumit-btn btn-lg w-100">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8Fqg6G39eF0ffy9n5Vf5g5f6ka5VktzT0l4TppAvE+gmmR" crossorigin="anonymous"></script>
</body>
</html>
