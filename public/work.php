<?php
require_once('../Components/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $cv = $_FILES['cv']['name'];
    $experience = htmlspecialchars($_POST['experience']);
    $motivation = htmlspecialchars($_POST['motivation']);
    $availability = htmlspecialchars($_POST['availability']);

    echo "<div class='alert alert-success'>Gracias por aplicar, $name. Nos pondremos en contacto contigo pronto.</div>";
}
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="job-img d-flex justify-content-center align-items-center h-100 rounded-3">
                        <h1 class="text-white">Únete a nuestro equipo</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="job-form">
                        <h2>Formulario de Trabajo</h2>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Nombre completo" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" name="phone" class="form-control" placeholder="Teléfono" required>
                            </div>
                            <div class="mb-3">
                                <input type="file" name="cv" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <textarea name="experience" class="form-control" rows="3" placeholder="Experiencia laboral" required></textarea>
                            </div>
                            <div class="mb-3">
                                <textarea name="motivation" class="form-control" rows="3" placeholder="Motivación para aplicar" required></textarea>
                            </div>
                            <div class="mb-3">
                                <select name="availability" class="form-control" required>
                                    <option value="">Disponibilidad</option>
                                    <option value="Remoto">Trabajo Remoto</option>
                                    <option value="Presencial">Trabajo Presencial</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('../Components/footer.php'); ?>

</body>

</html>