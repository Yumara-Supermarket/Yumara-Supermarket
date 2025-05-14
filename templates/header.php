<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis y Diseño de un Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para submenús */
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -5px;
            display: none;
        }

        .dropdown-submenu:hover .dropdown-menu {
            display: block;
        }

        /* Estilo personalizado */
        .navbar-custom {
            background-color: #2f2f2f; /* gris plomo oscuro */
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link,
        .navbar-custom .dropdown-menu a {
            color: #ffffff !important;
        }

        .navbar-custom .nav-link:hover,
        .navbar-custom .dropdown-item:hover {
            background-color: #8B0000 !important; /* rojo oscuro */
            color: #ffffff !important;
        }

        .dropdown-menu {
            background-color: #2f2f2f; /* gris oscuro también para el submenú */
            border: none;
        }

        .dropdown-item {
            font-size: 18px;
        }

        /* Estilo para los submenús */
        .dropdown-menu .dropdown-item {
            color: #ffffff !important;
        }
    </style>
</head>
<body style="background-color: #f5f5dc;">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?page=inicio">
                <img src="img/logo.jpg" alt="Logo Yumara" style="width: 100px; height: 80px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?page=inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=marco_teorico">Marco Teórico</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.php?page=modelo_Estructurado" id="analisisDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Análisis Estructurado</a>
                        <ul class="dropdown-menu" aria-labelledby="analisisDropdown">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Modelo Esencial</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.php?page=analisis/modelo-ambiental">Modelo Ambiental</a></li>
                                    <li><a class="dropdown-item" href="index.php?page=analisis/modelo-comportamiento">Modelo de Comportamiento</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
