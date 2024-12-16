<?php
include('../Components/header.php');
?>
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
    <?php
include('../Components/footer.php');
?>
