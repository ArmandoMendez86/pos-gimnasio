<?php
require '../app/config/auth.php';
authFilter();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Corte de ventas</title>
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


    <!-- Agreados para funcionalidad -->

    <link rel="stylesheet" href="src/datatables.min.css">
    <link rel="stylesheet" href="src/select2.min.css">
    <link rel="stylesheet" href="src/sweetalert2.min.css">
    <link rel="stylesheet" href="src/datatables.datetime.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

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
        <!-- [ Main Content ] start -->
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart badge-light-primary feed-icon">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <a href="#!">
                            <h6 class="m-b-0">Detalle de Ventas</h6>
                        </a>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-uppercase active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Servicios</a>
                </li>
                <?php if ($_SESSION['rol'] == 1) : ?>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Cancelar venta</a>
                    </li>
                <?php endif ?>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="table-responsive">
                        <table id="reporteVentasProductos" class="table table-hover m-b-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center">Producto</th>
                                    <th>Unidad</th>
                                    <th>Cantidad</th>
                                    <th>Vendió</th>
                                    <th>Fecha</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th style="font-size:1.3rem !important;"></th>
                                    <th style="color: #fff;border:2px solid #fff;background-color:#34495E;"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <h5 class="text-center mt-4">REGALÍAS</h5>
                    <div class="table-responsive mt-2">
                        <table id="regalias" class="table table-hover m-b-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center">Producto</th>
                                    <th>Unidad</th>
                                    <th>Cantidad</th>
                                    <th>Atendió</th>
                                    <th>Fecha</th>
                                    <th>Persona</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <div class="table-responsive">
                        <table id="reporteVentasServicios" class="table table-hover m-b-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>ventaServicioId</th>
                                    <th>idP_S</th>
                                    <th>Servicio</th>
                                    <th>Id</th>
                                    <th>Cliente</th>
                                    <th>Apellido</th>
                                    <th>Inicia</th>
                                    <th>Termina</th>
                                    <th>Días</th>
                                    <th>Venta</th>
                                    <th>Empleado</th>
                                    <th>Subtotal</th>
                                    <th>Couch</th>
                                    <th>Inicia personalizado</th>
                                    <th>Finaliza personalizado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th style="font-size:1rem !important;"></th>
                                    <th style="color: #fff;border:2px solid #fff;background-color:#34495E;"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                    <div class="table-responsive">
                        <table id="cancelacionVentaProducto" class="table table-hover m-b-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th class="text-center">Producto</th>
                                    <th>Unidad</th>
                                    <th>Cantidad</th>
                                    <th>Vendió</th>
                                    <th>Fecha</th>
                                    <th>Subtotal</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Modales -->

    <!-- Modal resumen -->
    <div class="modal fade" id="resumen" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="resumenLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resumenLabel">Resumen de ventas</h5>
                    <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size:2.5rem;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table border="0" cellspacing="5" cellpadding="5" style="width: 100%;">
                        <tbody class="d-flex justify-content-center align-items-center">
                            <tr class="mr-2">
                                <td>Fecha inicio:</td>
                                <td><input type="text" id="minResumen" name="minResumen" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td>Fecha fin:</td>
                                <td><input type="text" id="maxResumen" name="maxResumen" class="form-control form-control-sm"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="table-responsive">
                        <table id="resumenVentasXdia" class="table" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center">Producto</th>
                                    <th>Unidad</th>
                                    <th>Compra</th>
                                    <th>Precio</th>
                                    <th>Vendidos</th>
                                    <th>Monto</th>
                                    <th>Ganancia</th>
                                    <th>Almacén</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th style="font-size:1rem !important;"></th>
                                    <th style="color: #fff;border:2px solid #fff;background-color:#34495E;"></th>
                                    <th style="color: #fff;border:2px solid #fff;background-color:#17A589;"></th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Membresìa -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Renovar membresía</h5>
                </div>
                <div class="modal-body">
                    <div class="d-flex">
                        <div class="input-group justify-content-center">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon"><i class="icon feather icon-check-circle f-24 text-success "></i></div>
                            </div>
                            <button class="btn btn-info renovar">Renovar</button>
                        </div>
                        <div class="input-group justify-content-center">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon"><i class="icon feather icon-refresh-cw f-24 "></i></div>
                            </div>
                            <button class="btn btn-info resetear">Resetear</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha de inicio</label>
                        <input type="datetime-local" class="form-control" id="fecha">
                    </div>
                    <div class="form-group">
                        <label for="fechaVenta">Fecha de venta</label>
                        <input type="datetime-local" class="form-control" id="fechaVenta" step="1" <?php echo $_SESSION['rol'] != 1 ? 'readonly' : '' ?>>
                    </div>
                    <div class="form-group">
                        <label for="tipoServicio">Servicio</label>
                        <select class="form-control" id="tipoServicio">
                            <option selected value="">Tipo de servicio</option>
                            <option value="24">MENSUALIDAD</option>
                            <option value="25">VISITA</option>
                            <option value="26">SEMANA</option>
                            <option value="27">QUINCENA</option>
                            <option value="69">VISITA ESTUDIANTE</option>
                            <option value="70">MENSUALIDAD ESTUDIANTE</option>
                            <option value="71">MENSUALIDAD Y CAMINADORA</option>
                            <option value="75">MENSUALIDAD ESTUDIANTE Y CAMINADORA</option>
                            <option value="80">MENSUALIDAD ESPECIAL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cliente">Instructor asignado</label>
                        <select class="form-control" id="couchSelect">
                            <option selected value="">Ninguno</option>
                            <option value="ARMANDO">Armando</option>
                            <option value="GRECIA">Grecia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fPerso">Fecha de personalizado</label>
                        <input type="datetime-local" class="form-control" id="fPerso" step="1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="actualizarFecha">Actualizar</button>
                </div>
            </div>
        </div>
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

    <!-- Agreados para funcionalidad -->

    <script src="src/moments.js"></script>
    <script src="src/datatables.min.js"></script>
    <script src="src/datatable-moments.js"></script>
    <script src="src/datatables.datatime.js"></script>
    <script src="src/sweetalert2.min.js"></script>
    <script src="src/select2.min.js"></script>
    <script src="src/qrcode.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>


    <!-- <i class="icon feather icon-search f-24  text-info btn_nuevo" data-toggle="modal" data-toggle="modal" data-target="#resumen"></i> -->
    <?php if ($_SESSION['rol'] == 1) : ?>
        <script>
            $("body").append('<div class="fixed-button active btn btn-md btn-info" style="background-color:#7267ef;border-radius:50%;"><i class="fa fa-search btn_nuevo" aria-hidden="true" data-toggle="modal" data-target="#resumen"></i></div>');
        </script>
    <?php endif ?>

    <script>
        $(document).ready(function() {
            tablaResumen = $("#resumenVentasXdia").DataTable({
                /*   dom: 'Bfrtip',
                  buttons: [{
                      extend: 'pdfHtml5',
                      text: '<i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>',
                      className: 'genpdf',
                      title: 'Resumen de ventas',
                      messageTop: 'Developer Web Ing. Armando',                    
                      download: 'open'
                  }], */
                /* paging: false, */
                language: {
                    decimal: ',',
                    emptyTable: 'No hay ventas',
                    info: 'Mostrando _START_ a _END_ de _TOTAL_ registros',
                    infoEmpty: 'Mostrando 0 a 0 de 0 registros',
                    infoFiltered: '(filtrado de un total de _MAX_ registros)',
                    lengthMenu: 'Mostrar _MENU_ registros',
                    loadingRecords: 'Cargando...',
                    paginate: {
                        first: 'Primero',
                        last: 'Último',
                        next: '>',
                        previous: '<'
                    },
                    processing: 'Procesando...',
                    search: 'Buscar:'
                },
                lengthMenu: [
                    [5, 10, 15, -1],
                    [5, 10, 15, 'Todos']
                ],
                ajax: {
                    url: "../app/productos/obtener_resumen_ventas.php",
                    method: "GET",
                    dataSrc: "",
                },
                columns: [{
                        data: "pro_serv"
                    },
                    {
                        data: "unidad"
                    },
                    {
                        data: "compra"
                    },
                    {
                        data: "precio"
                    },
                    {
                        data: "total_cantidad",
                    },
                    {
                        data: "total_subtotal"
                    },
                    {
                        data: "ganancia"
                    },
                    {
                        data: "cantidad",
                    },
                    {
                        data: "fecha",
                    },

                ],
                columnDefs: [{
                        targets: [1, 2, 3, 4, 5, 6, 7, 8],
                        className: 'text-center'
                    },
                    /*  {
                         searchable: false,
                         targets: [1, 2, 3, 6]
                     }, */
                    {

                        targets: [8],
                        render: DataTable.render.date('DD/MM/YYYY HH:mm:ss')

                    }
                ],
                "order": [
                    [8, "desc"]
                ],

                rowCallback: function(row, data) {
                    $($(row).find("td")[4]).css("color", "#D65F42");
                    $($(row).find("td")[4]).css("font-weight", "500");
                    $($(row).find("td")[7]).css("color", "#2980b9");
                    $($(row).find("td")[7]).css("font-weight", "500");

                },

                footerCallback: function(row, data, start, end, display) {
                    let api = this.api();
                    let total = api.column(5, {
                        page: 'current'
                    }).data().reduce(function(a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);
                    let api2 = this.api();
                    let total2 = api2.column(6, {
                        page: 'current'
                    }).data().reduce(function(a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);

                    $(api.column(4).footer()).html('TOTALES');
                    $(api.column(5).footer()).html("<p style='width:7rem;margin:0 auto;font-size:1rem'><i class='fas fa-dollar-sign text-white mr-2' aria-hidden='true'></i>" + total.toFixed(2) + "</p>");
                    $(api2.column(6).footer()).html("<p style='width:7rem;margin:0 auto;font-size:1rem'><i class='fas fa-dollar-sign text-white mr-2' aria-hidden='true'></i>" + total2.toFixed(2) + "</p>");
                }



            });


            let minResumen, maxResumen;

            $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {

                if (settings.nTable.id !== 'resumenVentasXdia') {
                    return true;
                }
                let min = minResumen.val();
                let max = maxResumen.val();
                let date = moment(data[8], 'DD/MM/YYYY'); // Utiliza moment para parsear la fecha

                if (
                    (min === null && max === null) ||
                    (min === null && date.isSameOrBefore(max)) ||
                    (min && date.isSameOrAfter(min) && max === null) ||
                    (min && date.isBetween(min, max))
                ) {
                    return true;
                }
            });

            minResumen = new DateTime('#minResumen', {
                format: 'DD/MM/YYYY',
                i18n: {
                    previous: '<',
                    next: '>',
                    months: [
                        'Enero',
                        'Febrero',
                        'Marzo',
                        'Abril',
                        'Mayo',
                        'Junio',
                        'Julio',
                        'Agosto',
                        'Septiembre',
                        'Octubre',
                        'Noviembre',
                        'Diciembre'
                    ],
                    weekdays: ['Dom', 'Lun', 'Mar', 'Mir', 'Jue', 'Vie', 'Sab']
                }
            });
            maxResumen = new DateTime('#maxResumen', {
                format: 'DD/MM/YYYY',
                i18n: {
                    previous: '<',
                    next: '>',
                    months: [
                        'Enero',
                        'Febrero',
                        'Marzo',
                        'Abril',
                        'Mayo',
                        'Junio',
                        'Julio',
                        'Agosto',
                        'Septiembre',
                        'Octubre',
                        'Noviembre',
                        'Diciembre'
                    ],
                    weekdays: ['Dom', 'Lun', 'Mar', 'Mir', 'Jue', 'Vie', 'Sab']
                }

            });

            document.querySelectorAll('#minResumen, #maxResumen').forEach((el) => {
                el.addEventListener('change', () => tablaResumen.draw());
            });


            tablaProductos = $("#reporteVentasProductos").DataTable({
                /* paging: false, */
                language: {
                    decimal: ',',
                    emptyTable: 'No hay datos',
                    info: 'Mostrando _START_ a _END_ de _TOTAL_ registros',
                    infoEmpty: 'Mostrando 0 a 0 de 0 registros',
                    infoFiltered: '(filtrado de un total de _MAX_ registros)',
                    lengthMenu: 'Mostrar _MENU_ registros',
                    loadingRecords: 'Cargando...',
                    paginate: {
                        first: 'Primero',
                        last: 'Último',
                        next: '>',
                        previous: '<'
                    },
                    processing: 'Procesando...',
                    search: 'Buscar:'
                },
                lengthMenu: [
                    [5, 10, 15, -1],
                    [5, 10, 15, 'Todos']
                ],
                ajax: {
                    url: "../app/productos/obtener_ventas_productos.php",
                    method: "GET",
                    data: {
                        idempleado: <?php echo $_SESSION['id'] ?>,
                        idrol: <?php echo $_SESSION['rol'] ?>
                    },
                    dataSrc: "",

                },


                columns: [{
                        data: "pro_serv"
                    },
                    {
                        data: "unidad"
                    },
                    {
                        data: "total_cantidad",
                    },
                    {
                        data: "nombre_empleado"
                    },
                    {
                        data: "fecha",
                    },
                    {
                        data: "total_subtotal"
                    },
                ],
                columnDefs: [{
                        targets: [1, 2, 3, 4, 5],
                        className: 'text-center'
                    },
                    /*  {
                         searchable: false,
                         targets: [1, 2, 3, 6]
                     }, */
                    {
                        targets: [4],
                        render: DataTable.render.date('DD/MM/YYYY HH:mm:ss')

                    },
                ],
                "order": [
                    [4, "desc"]
                ],

                footerCallback: function(row, data, start, end, display) {
                    let api = this.api();
                    let total = api.column(5, {
                        page: 'current'
                    }).data().reduce(function(a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);

                    $(api.column(4).footer()).html('TOTAL');
                    $(api.column(5).footer()).html("<p style='width:7rem;margin:0 auto;font-size:1rem'><i class='fas fa-dollar-sign text-white mr-2'></i>" + total.toFixed(2) + "</p>");
                },


                rowCallback: function(row, data) {

                    $($(row).find("td")[5]).css("color", "#050d8d");
                    $($(row).find("td")[5]).css("font-weight", "500");
                },
            });

            tabRegalias = $("#regalias").DataTable({
                language: {
                    decimal: ',',
                    emptyTable: 'No hay regalías aún',
                    info: 'Mostrando _START_ a _END_ de _TOTAL_ registros',
                    infoEmpty: 'Mostrando 0 a 0 de 0 registros',
                    infoFiltered: '(filtrado de un total de _MAX_ registros)',
                    lengthMenu: 'Mostrar _MENU_ registros',
                    loadingRecords: 'Cargando...',
                    paginate: {
                        first: 'Primero',
                        last: 'Último',
                        next: '>',
                        previous: '<'
                    },
                    processing: 'Procesando...',
                    search: 'Buscar:'
                },
                lengthMenu: [
                    [5, 10, 15, -1],
                    [5, 10, 15, 'Todos']
                ],
                ajax: {
                    url: "../app/productos/obtener_regalias.php",
                    method: "GET",
                    dataSrc: "",
                },


                columns: [{
                        data: "pro_serv"
                    },
                    {
                        data: "unidad"
                    },
                    {
                        data: "cantidad",
                    },
                    {
                        data: "nombre_empleado"
                    },
                    {
                        data: "fecha",
                    },
                    {
                        data: "persona"
                    },
                ],
                columnDefs: [{
                        targets: [1, 2, 3, 4, 5],
                        className: 'text-center'
                    },
                    /*  {
                         searchable: false,
                         targets: [1, 2, 3, 6]
                     }, */
                    {
                        targets: [4],
                        render: DataTable.render.date('DD/MM/YYYY HH:mm:ss')

                    },
                ],
                "order": [
                    [4, "desc"]
                ],
            });

            tablaServicios = $("#reporteVentasServicios").DataTable({
                language: {
                    decimal: ',',
                    emptyTable: 'No hay datos',
                    info: 'Mostrando _START_ a _END_ de _TOTAL_ registros',
                    infoEmpty: 'Mostrando 0 a 0 de 0 registros',
                    infoFiltered: '(filtrado de un total de _MAX_ registros)',
                    lengthMenu: 'Mostrar _MENU_ registros',
                    loadingRecords: 'Cargando...',
                    paginate: {
                        first: 'Primero',
                        last: 'Último',
                        next: '>',
                        previous: '<'
                    },
                    processing: 'Procesando...',
                    search: 'Buscar:'
                },
                lengthMenu: [
                    [5, 10, 15, -1],
                    [5, 10, 15, 'Todos']
                ],
                ajax: {
                    url: "../app/productos/obtener_ventas_servicios.php",
                    method: "GET",
                    dataSrc: "",
                },
                columns: [{
                        data: "venta_servicio_id"
                    },
                    {
                        data: "p_s"
                    },
                    {
                        data: "pro_serv"
                    },
                    {
                        data: "cliente_id"
                    },
                    {
                        data: "nombre_cliente"
                    },
                    {
                        data: "ap_cliente"
                    },
                    {
                        data: "fecha"
                    },
                    {
                        data: "vence"
                    },
                    {
                        data: "restan",
                        render: function(data, type, row) {
                            return `<label class="badge badge-primary rounded-circle">${data}</label>`;
                        }
                    },
                    {
                        data: "fventa"
                    },
                    {
                        data: "nombre_empleado"
                    },
                    {
                        data: "subtotal"
                    },
                    {
                        data: "couch",
                        render: function(data, type, row) {
                            return `<label class="badge badge-warning">${data}</label>`;
                        }
                    },
                    {
                        data: "fperso"
                    },
                    {
                        data: "finperso"
                    },
                    {
                        defaultContent: "<div class='d-flex justify-content-center'><i class='icon feather icon-check f-20 tomarAsistencia text-success mr-3'></i><i class='icon feather icon-calendar f-20 actualizarFechaServicio text-info mr-3' data-toggle='modal' data-target='#staticBackdrop'></i><?php echo $_SESSION['rol'] == 1 ? "<i class='icon feather icon-trash f-20 eliminarServicio text-danger'></i>" : '' ?></div>",
                    },
                ],
                columnDefs: [{
                        targets: [6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
                        className: 'text-center',
                    },
                    {
                        searchable: false,
                        targets: [0, 1, 2, 3, 6, 7, 8, 11, 12, 13, 14]
                    },
                    {
                        targets: [0, 1, 3],
                        className: 'ocultar-columna'
                    },
                    {
                        targets: [13],
                        className: 'checker'
                    },
                    {

                        targets: [6, 7, 9, 13, 14],
                        render: DataTable.render.date('DD/MM/YYYY HH:mm:ss')

                    }
                ],
                "order": [
                    [9, "desc"]
                ],

                rowCallback: function(row, data) {
                    $($(row).find("td")[11]).css("color", "#050d8d");
                    $($(row).find("td")[11]).css("font-weight", "500");

                    /*  if (data['couch'] == "ARMANDO") {
                         $($(row).find("td")[12]).css("color", "#DF5A4B");
                         $($(row).find("td")[12]).css("font-weight", "500");
                     } else {
                         $($(row).find("td")[12]).css("color", "#4BA0DF");
                         $($(row).find("td")[12]).css("font-weight", "500");
                     } */

                    if (data['restan'] == 0 && data['pro_serv'] != "VISITA" && data['pro_serv'] != "VISITA ESTUDIANTE") {

                        $($(row).find("td")[8]).find("label").css("background-color", "#dc3545");

                    }
                },

                footerCallback: function(row, data, start, end, display) {
                    let api = this.api();
                    let total = api.column(11, {
                        page: 'current'
                    }).data().reduce(function(a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);

                    $(api.column(10).footer()).html('TOTAL');
                    $(api.column(11).footer()).html("<p style='width:7rem;margin:0 auto;font-size:1rem;'><i class='fas fa-dollar-sign text-white mr-2'></i>" + total.toFixed(2) + "</p>");
                }
            });

            cancelacionProducto = $("#cancelacionVentaProducto").DataTable({
                /* paging: false, */
                language: {
                    decimal: ',',
                    emptyTable: 'No hay datos',
                    info: 'Mostrando _START_ a _END_ de _TOTAL_ registros',
                    infoEmpty: 'Mostrando 0 a 0 de 0 registros',
                    infoFiltered: '(filtrado de un total de _MAX_ registros)',
                    lengthMenu: 'Mostrar _MENU_ registros',
                    loadingRecords: 'Cargando...',
                    paginate: {
                        first: 'Primero',
                        last: 'Último',
                        next: '>',
                        previous: '<'
                    },
                    processing: 'Procesando...',
                    search: 'Buscar:'
                },
                lengthMenu: [
                    [5, 10, 15, -1],
                    [5, 10, 15, 'Todos']
                ],
                ajax: {
                    url: "../app/productos/ventas_productos_all.php",
                    method: "GET",
                    dataSrc: "",

                },
                columns: [{
                        data: "id"
                    },
                    {
                        data: "pro_serv"
                    },
                    {
                        data: "unidad"
                    },
                    {
                        data: "cantidad",
                    },
                    {
                        data: "nombre_empleado"
                    },
                    {
                        data: "fecha",
                    },
                    {
                        data: "subtotal"
                    },
                    {
                        defaultContent: "<div class='text-center'><i class='fa fa-times text-danger eliminarProducto' aria-hidden='true'></i>",
                    },
                ],
                columnDefs: [{
                        targets: [2, 3, 4, 5, 6],
                        className: 'text-center'
                    },
                    /*  {
                         searchable: false,
                         targets: [1, 2, 3, 6]
                     }, */
                    {
                        targets: [0],
                        className: 'ocultar-columna'
                    },
                    {
                        targets: [5],
                        render: DataTable.render.date('DD/MM/YYYY HH:mm:ss')

                    },
                ],
                "order": [
                    [5, "desc"]
                ],

                rowCallback: function(row, data) {
                    $($(row).find("td")[6]).css("color", "#050d8d");
                    $($(row).find("td")[6]).css("font-weight", "500");
                },
            });

            /* Tomar asistencia */
            $(document).on("click", ".tomarAsistencia", function() {
                function formatDateTime(date) {
                    const year = date.getFullYear();
                    const month = String(date.getMonth() + 1).padStart(2, '0');
                    const day = String(date.getDate()).padStart(2, '0');
                    const hours = String(date.getHours()).padStart(2, '0');
                    const minutes = String(date.getMinutes()).padStart(2, '0');
                    const seconds = String(date.getSeconds()).padStart(2, '0');

                    return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
                }
                let fechaActual = formatDateTime(new Date());
                let fila = $(this).closest("tr");
                let idcliente = parseInt(fila.find("td:eq(3)").text());
                let idempleado = <?php echo $_SESSION['id'] ?>;
                let p_s = parseInt(fila.find("td:eq(1)").text());

                $.ajax({
                    url: "../app/clientes/asistencia.php",
                    type: "POST",
                    datatype: "json",
                    data: {
                        idcliente: idcliente,
                        fecha: fechaActual,
                        idempleado: idempleado,
                        p_s: p_s,
                    },
                    success: function(response) {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Asistencia registrada!!",
                            showConfirmButton: false,
                            timer: 1000,
                        })
                    },
                });
            })

            let id, p_s, idempleado, termina, fechaVenta;

            function formatDateTime(date) {
                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, '0');
                const day = String(date.getDate()).padStart(2, '0');
                const hours = String(date.getHours()).padStart(2, '0');
                const minutes = String(date.getMinutes()).padStart(2, '0');
                const seconds = String(date.getSeconds()).padStart(2, '0');

                return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
            }

            $(document).on("click", ".actualizarFechaServicio", function() {

                let fila = $(this).closest("tr");
                p_s = parseInt(fila.find("td:eq(1)").text());
                restore_p_s = parseInt(fila.find("td:eq(1)").text());
                id = parseInt(fila.find("td:eq(0)").text());
                let instructor = fila.find("td:eq(12)").text();
                let fechaInicio = fila.find("td:eq(6)").text();
                let fechaVenta = fila.find("td:eq(9)").text();
                let fechaPerso = fila.find("td:eq(13)").text();

                let fecha = moment(fechaInicio, "DD/MM/YYYY HH:mm:ss");
                let fechaFormateada = fecha.format("YYYY-MM-DDTHH:mm:ss");

                let fechaDeVenta = moment(fechaVenta, "DD/MM/YYYY HH:mm:ss");
                let fechaVentaFormateada = fechaDeVenta.format("YYYY-MM-DDTHH:mm:ss");

                let fPerso = moment(fechaPerso, "DD/MM/YYYY HH:mm:ss");
                let fechaPersoFormateada = fPerso.format("YYYY-MM-DDTHH:mm:ss");

                $("#couchSelect").val(instructor);
                $("#tipoServicio").val(p_s);
                $("#fecha").val(fechaFormateada);
                $("#fechaVenta").val(fechaVentaFormateada);
                $("#fPerso").val(fechaPersoFormateada);

                idempleado = <?php echo $_SESSION['id'] ?>;
                termina = '';


                //RENOVACIÓN DE SERVICIOS
                $(document).on("click", ".renovar", function() {

                    if (p_s == 70 || p_s == 24 || p_s == 71 || p_s == 75 || p_s == 80) {
                        let fecha = moment(fechaInicio, "DD/MM/YYYY HH:mm:ss");
                        let actualizarMes = fecha.add(1, 'months');
                        let fechaFormateada = actualizarMes.format("YYYY-MM-DDTHH:mm:ss");
                        $("#fecha").val(fechaFormateada);
                        let fechaDeVenta = moment(new Date(), "DD/MM/YYYY HH:mm:ss");
                        let fechaVentaFormateada = fechaDeVenta.format("YYYY-MM-DDTHH:mm:ss");
                        $("#fechaVenta").val(fechaVentaFormateada);

                    }
                    if (p_s == 25 || p_s == 69) {
                        let fecha = moment(new Date(), "DD/MM/YYYY HH:mm:ss");
                        let fechaFormateada = fecha.format("YYYY-MM-DDTHH:mm:ss");
                        $("#fecha").val(fechaFormateada);
                        $("#fechaVenta").val(fechaFormateada);

                    }
                    if (p_s == 26) {
                        let fecha = moment(fechaInicio, "DD/MM/YYYY HH:mm:ss");
                        let actualizarSemana = fecha.add(1, 'weeks');
                        let fechaFormateada = actualizarSemana.format("YYYY-MM-DDTHH:mm:ss");
                        $("#fecha").val(fechaFormateada);
                        let fechaDeVenta = moment(new Date(), "DD/MM/YYYY HH:mm:ss");
                        let fechaVentaFormateada = fechaDeVenta.format("YYYY-MM-DDTHH:mm:ss");
                        $("#fechaVenta").val(fechaVentaFormateada);

                    }
                    if (p_s == 27) {
                        let fecha = moment(fechaInicio, "DD/MM/YYYY HH:mm:ss");
                        let actualizarQuincena = fecha.add(2, 'weeks');
                        let fechaFormateada = actualizarQuincena.format("YYYY-MM-DDTHH:mm:ss");
                        $("#fecha").val(fechaFormateada);
                        let fechaDeVenta = moment(new Date(), "DD/MM/YYYY HH:mm:ss");
                        let fechaVentaFormateada = fechaDeVenta.format("YYYY-MM-DDTHH:mm:ss");
                        $("#fechaVenta").val(fechaVentaFormateada);

                    }
                })

                $(document).on("click", ".resetear", function() {
                    // se queda guardada informacion en el reseteo corregido
                    if (instructor == '') {
                        $("#tipoServicio").val(p_s);
                        $("#fecha").val(fechaFormateada);
                        $("#fechaVenta").val(fechaVentaFormateada);
                        $("#couchSelect").val('');
                        $("#fPerso").val('');
                    } else {
                        $("#couchSelect").val(instructor);
                        $("#tipoServicio").val(p_s);
                        $("#fecha").val(fechaFormateada);
                        $("#fechaVenta").val(fechaVentaFormateada);
                        $("#fPerso").val(fechaPersoFormateada);
                    }


                })

            })

            $("#actualizarFecha").click(function() {
                let rol = <?php echo $_SESSION['rol'] ?>;
                let fecha = $("#fecha").val();
                let couch = $("#couchSelect").val().toUpperCase();
                let fechaPersonalizado = $("#fPerso").val();
                let fechaFinPersonalizado = vence(30, fechaPersonalizado);
                p_s = $("#tipoServicio").val();

                if (fecha == '') {
                    return;
                }

                if (couch == '') {
                    fechaPersonalizado = '';
                    fechaFinPersonalizado = '';
                }

                function vence(dias, fecha) {
                    let fechaOriginal = new Date(fecha);
                    let fechaNueva = new Date(fechaOriginal);
                    fechaNueva.setDate(fechaOriginal.getDate() + dias);

                    let year = fechaNueva.getFullYear();
                    let month = String(fechaNueva.getMonth() + 1).padStart(2, '0');
                    let day = String(fechaNueva.getDate()).padStart(2, '0');
                    const hours = String(fechaNueva.getHours()).padStart(2, '0');
                    const minutes = String(fechaNueva.getMinutes()).padStart(2, '0');
                    const seconds = String(fechaNueva.getSeconds()).padStart(2, '0');

                    let fechaFormateada = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
                    return fechaFormateada;

                }

                if (p_s == 24) {
                    termina = vence(30, fecha);
                } else if (p_s == 25) {
                    termina = fecha;
                } else if (p_s == 69) {
                    termina = fecha;
                } else if (p_s == 26) {
                    termina = vence(7, fecha)
                } else if (p_s == 27) {
                    termina = vence(15, fecha)
                } else if (p_s == 11) {
                    termina = vence(30, fecha)
                } else if (p_s == 71) {
                    termina = vence(30, fecha)
                } else if (p_s == 70) {
                    termina = vence(30, fecha)
                } else if (p_s == 80) {
                    termina = vence(30, fecha)
                }

                if (p_s == restore_p_s) {
                    fechaVenta = $("#fechaVenta").val();
                    console.log('el servicio es el mismo')
                } else {
                    fechaVenta = formatDateTime(new Date());
                    console.log('el servicio cambio')
                }



                /*   if (rol == 1) {
                      fechaVenta = $("#fechaVenta").val();
                  } else {
                      fechaVenta = formatDateTime(new Date());
                  } */


                $.ajax({
                    url: "../app/productos/actualizar_fecha_servicio.php",
                    type: "POST",
                    datatype: "json",
                    data: {
                        fecha: fecha,
                        vence: termina,
                        idempleado: idempleado,
                        couch: couch,
                        fventa: fechaVenta,
                        fperso: fechaPersonalizado,
                        finperso: fechaFinPersonalizado,
                        p_s: p_s,
                        id: id
                    },
                    success: function(response) {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Membresia renovada!",
                            showConfirmButton: false,
                            timer: 1500,
                        })
                        tablaServicios.ajax.reload(null, false);
                        tablaResumen.ajax.reload(null, false);
                        $("#staticBackdrop").modal("hide");
                    },
                });

            })


            $(document).on("click", ".eliminarServicio", function() {
                let fila = $(this).closest("tr");
                let id = parseInt($(this).closest("tr").find("td:eq(0)").text());
                Swal.fire({
                    title: "Estas seguro?",
                    text: "Esto no se podrá revertir!",
                    icon: "question",
                    showCancelButton: true,
                    cancelButtonText: "Cancelar!",
                    cancelButtonColor: "#6c757d",
                    confirmButtonColor: "#7267EF",
                    confirmButtonText: "Si, Eliminalo!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "../app/productos/eliminar_venta_servicio.php",
                            type: "POST",
                            datatype: "json",
                            data: {
                                id: id
                            },
                            success: function() {
                                tablaServicios.ajax.reload(null, false);
                                Swal.fire("Eliminado!", "Servicio eliminado!!", "success");
                            }
                        })
                    }
                })
            })
            $(document).on("click", ".eliminarProducto", function() {
                let fila = $(this).closest("tr");
                let id = parseInt($(this).closest("tr").find("td:eq(0)").text());
                Swal.fire({
                    title: "Estas seguro?",
                    text: "Esto no se podrá revertir!",
                    icon: "question",
                    showCancelButton: true,
                    cancelButtonText: "Cancelar!",
                    confirmButtonColor: "#040404",
                    cancelButtonColor: "#b93737",
                    confirmButtonText: "Si, Eliminalo!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "../app/productos/eliminar_venta_producto.php",
                            type: "POST",
                            datatype: "json",
                            data: {
                                id: id
                            },
                            success: function() {
                                tablaProductos.ajax.reload(null, false);
                                tablaResumen.ajax.reload(null, false);
                                cancelacionProducto.ajax.reload(null, false);
                                Swal.fire("Eliminado!", "Venta eliminada!!", "success");
                            }
                        })
                    }
                })
            })

        })
    </script>
</body>

</html>