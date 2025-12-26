<!--DOCTYPE html -->
<?php include("datos.php") ?>
<html>

<head>
    <title>Portfolio de proyectos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootswatch Flatly para Bootstrap 5 (incluye Bootstrap 5.2 CSS) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.2.0/dist/flatly/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<!-- https://radu.link/make-footer-stay-bottom-page-bootstrap/ -->

<body class="d-flex flex-column min-vh-100">

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Portfolio</span>
        </a>
        <!-- UD_3.2.a.b Modificar los enlaces para que lleven a inicio y contacto -->
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/index.php" class="nav-link 
                <?php if ($_SERVER['SCRIPT_NAME'] == '/index.php') {
                    echo "active";
                } ?>
            " aria-current="page">INICIO</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdownMenu1" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    CATEGORÍAS
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a class="dropdown-item" href="#">Categoría1</a></li>
                    <li><a class="dropdown-item" href="#">Categoría2</a></li>
                    <li><a class="dropdown-item" href="#">Categoría3</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="/contacto.php" class="nav-link
            <?php if ($_SERVER['SCRIPT_NAME'] == '/contacto.php') {
                echo "active";
            } ?>
            ">CONTACTO</a></li>
            <!-- // UD3.2.e. Crear variable llamada loggedIn para mostrar el boton administración -->
            <?php if ($loggedIn): ?>

                <li class="nav-item"><a href="#" class="nav-link
            <?php if ($_SERVER['SCRIPT_NAME'] == '') {
                echo "active";
            } ?>
            ">ADMINISTRACIÓN</a></li>
            <?php endif ?>

        </ul>
    </header>