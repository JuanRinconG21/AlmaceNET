<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AlmaceNET</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/images/logotipos/logo-bellavista-bn.png" />
    <!-- Estilos personalizados para la tabla -->

    <!--javascript -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0 bg-primary">
                <div class="container-fluid">
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                        <ul class="navbar-nav navbar-nav-left">
                            <li class="nav-item ms-0 me-5 d-lg-flex d-none">

                            </li>
                            <li class="nav-item dropdown">
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="notificationDropdown">

                                </div>
                            </li>
                            <li class="nav-item dropdown">

                            </li>
                            <li class="nav-item dropdown">

                            </li>
                            <li class="nav-item nav-search d-none d-lg-block ms-3">

                            </li>
                        </ul>
                        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                            <h1 style="font-weight: bold; color: #ffff">Motores</h1>
                        </div>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    id="profileDropdown">
                                    <span class="nav-profile-name" style="color: white;">Johnson</span>
                                    <span class="online-status"></span>
                                    <img src="../assets/images/faces/face28.png" alt="profile" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                    aria-labelledby="profileDropdown">
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-logout"></i>
                                        Cerrar Session
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-toggle="horizontal-menu-toggle">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </div>
            </nav>
            <nav class="bottom-navbar">
                <div class="container">
                    <ul class="nav page-navigation">
                        <li class="nav-item">
                            <a class="nav-link" href="../inicio.php">
                                <i class="mdi mdi mdi-warehouse menu-icon"></i>
                                <span class="menu-title">Inicio</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./areas/area-general.php">
                                <i class="mdi mdi-city-variant-outline menu-icon"></i>
                                <span class="menu-title">Áreas</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./areas/area-general.php">Generales</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./areas/area-talleryobras.php">Taller y Obras
                                            Civiles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./areas/area-retrokiosco.php">Retro y Kiosco</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="mdi mdi-worker menu-icon"></i>
                                <span class="menu-title">Personal</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#Generales">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#TalleryObrasCiviles">Taller y Obras Civiles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#RetroyKiosco">Retro y Kiosco
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#RetroyKiosco">Patios </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="mdi mdi-truck-delivery menu-icon"></i>
                                <span class="menu-title">Entrega de Elementos</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#Generales">Protección</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#TalleryObrasCiviles">Taller y Obras Civiles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#RetroyKiosco">Kiosco y Retro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#RetroyKiosco">Patios </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="../prestamos.php" class="nav-link">
                                <i class="mdi mdi-replay menu-icon"></i>
                                <span class="menu-title">Préstamos</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./bitacoras/maquinaria-equipo.php" class="nav-link">
                                <i class="mdi mdi-file-document menu-icon"></i>
                                <span class="menu-title">Bitácoras</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item">
                                        <a class="nav-link" href="./bitacoras/maquinaria-equipo.php">Administración de
                                            Maquinaria
                                            o Zona</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./bitacoras/bitacoras.php">Bitácoras</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="./motores.php" class="nav-link">
                                <i class="mdi mdi-oil menu-icon"></i>
                                <span class="menu-title">Motores</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="mdi mdi-currency-usd menu-icon"></i>
                                <span class="menu-title">Gastos</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li style="color: #a54f03;" class="nav-item">
                                        <a class="nav-link" href="pages/samples/login.html">Proveedores</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/samples/login-2.html">Gastos</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-md-12 grid-margin stretch-card">
                        <button type="button" style="background-color: #0d6efd; color: white; " class="btn mt-2 mb-2 "
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Agregar Salida
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0d6efd; color: #ffff">
                                        <h5 class="modal-title" id="exampleModalLabel">Generar Prestamo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="background-color: #f0f3f6;">
                                        <p class=" card-description">
                                            Lena todos los campos para generar un prestamo:
                                        </p>
                                        <form class="forms-sample">
                                            <div class="form-group row">
                                                <label style="color: black;" for="exampleInputUsername2"
                                                    class="col-sm-3 col-form-label">Nombre:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="" id="" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="color: black;" for="exampleInputUsername2"
                                                    class="col-sm-3 col-form-label">Destino:</label>
                                                <div class="col-sm-9">
                                                    <div id="the-basics">
                                                        <input class="form-control" type="text"
                                                            style="margin-right: 200rem;" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="color: black;" for="exampleInputUsername2"
                                                    class="col-sm-3 col-form-label">Fecha y Hora de Salida:</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="datetime-local" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="color: black;" for="exampleInputUsername2"
                                                    class="col-sm-3 col-form-label">Concepto:</label>
                                                <div class="col-sm-9">
                                                    <div id="the-basics">
                                                        <textarea class="form-control" name="" id="">

                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="color: black;" for="exampleInputUsername2"
                                                    class="col-sm-3 col-form-label">Autorizo:</label>
                                                <div class="col-sm-9">
                                                    <div id="the-basics">
                                                        <input class="typeahead" style="margin-right: 200rem;"
                                                            type="text" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <h1 style="text-align: center;">
                                                <button type="submit" class="btn btn-primary me-2 mt-2">Guardar</button>
                                            </h1>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 mt-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title p-2" style="margin-bottom: 0; text-align:center;">
                                                    Detalles de Salida - Entrada
                                                </h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Motor:</strong></p>
                                                        <p id="motor-data"></p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Destino:</strong></p>
                                                        <p id="destino-data"></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Fecha de Salida:</strong></p>
                                                        <p id="fecha-salida-data"></p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Concepto:</strong></p>
                                                        <p id="concepto-data"></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Fecha de Entrega:</strong></p>
                                                        <p id="fecha-entrega-data"></p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Autoriza:</strong></p>
                                                        <p id="autoriza-data"></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Estado:</strong></p>
                                                        <p id="estado-data"></p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button type="button"
                                                            style="background-color: #ee5b5b; color:white"
                                                            class=" btn btn-danger" id="btn-cancelar">Cancelar</button>
                                                        <button type="button" class="btn btn-success"
                                                            style="color:white" id="btn-entregar">Entrega</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6 mt-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title p-2" style="margin-bottom: 0; text-align:center;">
                                                    Detalles de Salida - Entrada
                                                </h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Motor:</strong></p>
                                                        <p id="motor-data"></p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Destino:</strong></p>
                                                        <p id="destino-data"></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Fecha de Salida:</strong></p>
                                                        <p id="fecha-salida-data"></p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Concepto:</strong></p>
                                                        <p id="concepto-data"></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Fecha de Entrega:</strong></p>
                                                        <p id="fecha-entrega-data"></p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Autoriza:</strong></p>
                                                        <p id="autoriza-data"></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="mb-2"><strong>Estado:</strong></p>
                                                        <p id="estado-data"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="footer-wrap">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                                <a
                                    href="https://wa.me/+523234681033?text=Hola,%20me%20intereso%20tu%20Software%20y%20quiero%20uno%20parecido%20u%20otro%20software">Juan
                                    Jose Rincon G </a>2024</span>
                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <script>
    new DataTable('#example', {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
        },
    });
    </script>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="../assets/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../assets/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
    <!-- Custom js for this page-->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <!-- plugin js for this page -->
    <script src="../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../assets/vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../assets/js/file-upload.js"></script>
    <script src="../assets/js/typeahead.js"></script>
    <script src="../assets/js/select2.js"></script>
    <!-- End custom js for this page-->
</body>

</html>