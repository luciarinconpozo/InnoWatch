<?php $url = str_replace($_SERVER['DOCUMENT_ROOT'], "", __DIR__)?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $url . "/../assets/styles/styles.css"?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-marian-blue">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo $url . "/../assets/img/Logo Innovawatch.png"?>" alt="Bootstrap" width="70" height="50">
                </a>
            <a class="navbar-brand text-light" href="#">Innovawatch</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="./public/">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="./public/contact.php">Contacto</a>
                </li>
                
                <li class="nav-item">
                    <a href="./public/login.php" class="btn btn-outline-vivid-sky-blue">Login</a>
                </li>
                <br>
                <li class="nav-item">
                    <a href="./public/register.php" class="btn btn-outline-vivid-sky-blue">Register</a>
                </li>

                </ul>
                
                <form class="d-flex me-5" role="search">
                <input class="form-control me-2" type="search" placeholder="Encuentra tu producto" aria-label="Search">
                <button class="btn btn-outline-success d-inline-flex align-items-center" type="submit">Search <img src="<?php echo $url . "/../assets/img/search_24dp_FFFF_FILL0_wght400_GRAD0_opsz24.svg"?>"></button>
                </form>
            </div>
            </div>
    </nav>
