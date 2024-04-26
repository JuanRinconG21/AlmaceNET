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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/images/logotipos/logo-bellavista-bn.png" />
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
                            <h1 style="font-weight: bold; color: #ffff">Inicio</h1>
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
                            <a class="nav-link" href="./inicio.php">
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
                            <a href="./prestamos.php" class="nav-link">
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
                            <a href="docs/documentation.html" class="nav-link">
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
                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h3 class="text-dark font-weight-bold mb-2">
                                        Hola <span style="font-weight: bold;">$$$$</span>, Bienvenid@ de vuelta
                                    </h3>
                                    <h6 class="font-weight-normal mb-2">
                                        Fecha Actual : <?php echo date("d-m-Y"); ?> </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="text-success font-weight-bold">0</h2>
                                        <i class="mdi mdi-worker mdi-18px text-dark"></i>
                                    </div>
                                </div>
                                <canvas id="newClient"></canvas>
                                <div class="line-chart-row-title">Guantes de Nitrilo</div>
                            </div>
                        </div>
                        <div class="col-lg-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="text-danger font-weight-bold">0</h2>
                                        <i class="mdi mdi-worker mdi-18px text-dark"></i>
                                    </div>
                                </div>
                                <canvas id="allProducts"></canvas>
                                <div class="line-chart-row-title">Guantes de Carnaza</div>
                            </div>
                        </div>
                        <div class="col-lg-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="text-info font-weight-bold">0</h2>
                                        <i class="mdi mdi-worker mdi-18px text-dark"></i>
                                    </div>
                                </div>
                                <canvas id="invoices"></canvas>
                                <div class="line-chart-row-title">Tapabocas</div>
                            </div>
                        </div>
                        <div class="col-lg-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="text-warning font-weight-bold">0</h2>
                                        <i class="mdi mdi-worker mdi-18px text-dark"></i>
                                    </div>
                                </div>
                                <canvas id="projects"></canvas>
                                <div class="line-chart-row-title">Tapaoidos</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="card-title">
                                            Cantidad de Elementos de Protección en Inventario
                                        </h4>
                                    </div>
                                    <div id="support-tracker-legend" class="support-tracker-legend"></div>
                                    <canvas id="supportTracker"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-center justify-content-between mb-4">
                                        <h4 class="card-title">
                                            Cantidad de Elementos entregados en el Mes
                                        </h4>
                                        <p class="text-dark"></p>
                                    </div>
                                    <div class="product-order-wrap padding-reduced">
                                        <div id="productorder-gage" class="gauge productorder-gage"></div>
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
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
    <script src="../assets/vendors/justgage/raphael-2.1.4.min.js"></script>
    <script src="../assets/vendors/justgage/justgage.js"></script>
    <script src="../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- Custom js for this page-->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>