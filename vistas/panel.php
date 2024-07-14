<?php
require '../app/config/auth.php';
authFilter();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Panel de administración</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/logo.jpg" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="../assets/fonts/font-awsome-pro/css/pro.min.css">
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/customizer.css">

</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Mobile header ] start -->
    <div class="pc-mob-header pc-header">
        <div class="pcm-logo">
            <img src="../assets/images/logomobile.jpg" alt="" class="logo logo-lg">
        </div>
        <div class="pcm-toolbar">
            <a href="#!" class="pc-head-link" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <!--   <a href="#!" class="pc-head-link" id="headerdrp-collapse">
                <i data-feather="align-right"></i>
            </a> -->
            <a href="#!" class="pc-head-link" id="header-collapse">
                <i data-feather="log-out"></i>
            </a>
        </div>
    </div>
    <!-- [ Mobile header ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pc-sidebar ">
        <div class="navbar-wrapper">
            <div class="m-header justify-content-center">
                <a href="#" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img width="180" height="60" src="../assets/images/logo2.jpg" alt="" class="logo logo-lg">
                    <img src="../assets/images/logo-sm.svg" alt="" class="logo logo-sm">
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <?php if ($_SESSION['rol'] == 1) : ?>
                        <li class="pc-item pc-caption">
                            <label>Panel</label>
                        </li>
                        <li class="pc-item">
                            <a href="panel.php" class="pc-link "><span class="pc-micon"><i data-feather="home"></i></span><span class="pc-mtext">Resumen</span></a>
                        </li>
                    <?php endif ?>
                    <li class="pc-item pc-caption">
                        <label>Usuarios</label>
                        <!-- <span>UI Components</span> -->
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="users"></i></span><span class="pc-mtext">Clientes</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="clientes.php">Alta</a></li>
                            <li class="pc-item"><a class="pc-link" href="asistencia.php">Asistencia</a></li>
                        </ul>
                    </li>
                    <?php if ($_SESSION['rol'] == 1) : ?>
                        <li class="pc-item">
                            <a href="empleados.php" class="pc-link "><span class="pc-micon"><i data-feather="user"></i></span><span class="pc-mtext">Empleados</span></a>
                        </li>
                    <?php endif ?>

                    <li class="pc-item pc-caption">
                        <label>Ventas</label>
                        <!-- <span>UI Components</span> -->
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="shopping-cart"></i></span><span class="pc-mtext">Venta</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="venta.php">Hacer venta</a></li>
                            <li class="pc-item"><a class="pc-link" href="reporte.php">Reporte</a></li>
                        </ul>
                    </li>
                    <?php if ($_SESSION['rol'] == 1) : ?>
                        <li class="pc-item pc-caption">
                            <label>Almacén</label>
                            <!-- <span>UI Components</span> -->
                        </li>
                        <li class="pc-item">
                            <a href="productos.php" class="pc-link "><span class="pc-micon"><i data-feather="shopping-cart"></i></span><span class="pc-mtext">Productos</span></a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="pc-header ">
        <div class="header-wrapper">
            <div class="ml-auto">
                <ul class="list-unstyled">

                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                            <?php if ($_SESSION['usuario'] == 'ARMANDO') : ?>
                                <img src="../assets/images/user/armando.jpg" alt="user-image" class="user-avtar">
                            <?php endif ?>
                            <?php if ($_SESSION['usuario'] == 'CHAVA') : ?>
                                <img src="../assets/images/user/chava.jpg" alt="user-image" class="user-avtar">
                            <?php endif ?>
                            <?php if ($_SESSION['usuario'] == 'OSWALDO') : ?>
                                <img src="../assets/images/user/oswaldo.png" alt="user-image" class="user-avtar">
                            <?php endif ?>
                            <?php if ($_SESSION['usuario'] == 'GRECIA') : ?>
                                <img src="../assets/images/user/grecia.png" alt="user-image" class="user-avtar">
                            <?php endif ?>
                            <?php if ($_SESSION['usuario'] == 'DUNIA') : ?>
                                <img src="../assets/images/user/dunia.png" alt="user-image" class="user-avtar">
                            <?php endif ?>

                            <span>
                                <span class="user-name"><?php echo $_SESSION['usuario'] ?></span>
                                <span class="user-desc"><?php echo $_SESSION['rol'] == 1 ? "<label class='badge badge-primary'>Administrador</label>" : "<label class='badge badge-primary'>Empleado</label>" ?></span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                            <div class=" dropdown-header">
                                <h6 class="text-overflow m-0">Hola!! &#128512;</h6>
                            </div>
                            <a href="../app/login/cerrar_sesion.php" class="dropdown-item">
                                <i data-feather="power"></i>
                                <span>Cerrar sesión</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pcoded-content">
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card prod-p-card background-pattern">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-0">
                                        <div class="col">
                                            <h6 class="m-b-5">Clientes</h6>
                                            <h3 class="m-b-0" id="numeroClientes"></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card prod-p-card background-pattern">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-0">
                                        <div class="col">
                                            <h6 class="m-b-5">Empleados</h6>
                                            <h3 class="m-b-0" id="numeroEmpleados"></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card prod-p-card background-pattern">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-0">
                                        <div class="col">
                                            <h6 class="m-b-5">Venta</h6>
                                            <h3 class="m-b-0" id="totalVentasXdia"></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-bill-alt text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- customer-section end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    </div>

    <!-- Required Js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../assets/js/vendor-all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="../assets/js/plugins/clipboard.min.js"></script>
    <script src="../assets/js/uikit.min.js"></script>

    <script>
        $.ajax({
            url: "../app/clientes/numero_clientes.php",
            type: "GET",
            success: function(response) {
                $("#numeroClientes").text(response)
            },
        });
        $.ajax({
            url: "../app/empleados/numero_empleados.php",
            type: "GET",
            success: function(response) {
                $("#numeroEmpleados").text(response)
            },
        });
        $.ajax({
            url: "../app/productos/venta_x_dia.php",
            type: "GET",
            success: function(response) {
                let ventaProductos = JSON.parse(response).productos[0].total;
                let ventaServicios = JSON.parse(response).servicios[0].total;
                $("#totalVentasXdia").text(parseInt(ventaProductos) + parseInt(ventaServicios));

                if (ventaProductos == null) {
                    ventaProductos = 0;
                }
                if (ventaServicios == null) {
                    ventaServicios = 0;

                }

                $("#totalVentasXdia").text(parseInt(ventaProductos) + parseInt(ventaServicios));



            },
        });
    </script>

</body>

</html>