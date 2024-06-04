<?php
 include("../../model/MySQL.php");
 $conexion = new MySQL();
 $pdo = $conexion->conectar();
 $sql = "SELECT * FROM area_trabajo WHERE estado=0";
 $stmt = $pdo->prepare($sql);
 $stmt->execute();
 $fila = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AlmaceNET</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../assets/images/logotipos/logo-bellavista-bn.png" />
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
                            <h1 style="font-weight: bold; color: #ffff">Areas Generales</h1>
                        </div>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    id="profileDropdown">
                                    <span class="nav-profile-name" style="color: white;">Johnson</span>
                                    <span class="online-status"></span>
                                    <img src="../../assets/images/faces/face28.png" alt="profile" />
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
                            <a class="nav-link" href="./area-general.php">
                                <i class="mdi mdi-city-variant-outline menu-icon"></i>
                                <span class="menu-title">Áreas</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./area-general.php">Generales</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./area-talleryobras.php">Taller y Obras Civiles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./area-retrokiosco.php">Retro y Kiosco</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="../personal/general.php" class="nav-link">
                                <i class="mdi mdi-worker menu-icon"></i>
                                <span class="menu-title">Personal</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../personal/general.php">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../personal/talleryobras.php">Taller y Obras
                                            Civiles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../personal/retroykiosco.php">Retro y Kiosco
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../personal/patios.php">Patios </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="../entregas/proteccion.php" class="nav-link">
                                <i class="mdi mdi-truck-delivery menu-icon"></i>
                                <span class="menu-title">Entrega</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../entregas/proteccion.php">Protección</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../entregas/talleryobras.php">Taller y Obras
                                            Civiles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../entregas/kioscoyretro.php">Kiosco y Retro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../entregas/patios.php">Patios </a>
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
                            <a href="../bitacoras/bitacoras.php" class="nav-link">
                                <i class="mdi mdi-file-document menu-icon"></i>
                                <span class="menu-title">Bitácoras</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../bitacoras/maquinaria-equipo.php">Administración de
                                            Maquinaria
                                            o Zona</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../bitacoras/bitacoras.php">Bitácoras</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="../motores.php" class="nav-link">
                                <i class="mdi mdi-oil menu-icon"></i>
                                <span class="menu-title">Motores</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="../gastos/gastos.php" class="nav-link">
                                <i class="mdi mdi-currency-usd menu-icon"></i>
                                <span class="menu-title">Gastos</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li style="color: #a54f03;" class="nav-item">
                                        <a class="nav-link" href="../gastos/proveedores.php">Proveedores</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../gastos/gastos.php">Gastos</a>
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
                            Agregar Área
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0d6efd; color: #ffff">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar Área</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="card-description">
                                            Ingresa el Area que quieres agregar, ejemplo: Patios,PPC, etc.
                                        </p>
                                        <form class="forms-sample">
                                            <div class="form-group row">
                                                <label for="exampleInputUsername2"
                                                    class="col-sm-3 col-form-label">Area</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputUsername2"
                                                        placeholder="Ejemplo: PPC, Hornos, Camaras">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary me-2">Guardar</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive" style="width:98%; margin: 0 auto;">
                                    <table id="example" class="table table-hover">
                                        <thead style="background-color: #0d6efd; color: white;">
                                            <tr style="text-align: center;">
                                                <th style="text-align: center;">IDENTIFICADOR</th>
                                                <th style="text-align: center;">AREA</th>
                                                <th style="text-align: center;">ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center;">
                                            <?php
                                            foreach ($fila as $key ) {
                                            ?>
                                            <tr>
                                                <td><?php echo $key['idArea_Trabajo'] ?></td>
                                                <td><?php echo $key['nombre'] ?></td>
                                                <td>
                                                    <button style="color: white;" type="button" class="btn btn-danger">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                    <button style="color: white;" type="button" class="btn btn-warning">
                                                        <i class="mdi mdi-lead-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>


                                        </tbody>
                                    </table>
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
    <script src="../../assets/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../assets/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../../assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
    <script src="../../assets/vendors/justgage/raphael-2.1.4.min.js"></script>
    <script src="../../assets/vendors/justgage/justgage.js"></script>
    <script src="../../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- Custom js for this page-->
    <script src="../../assets/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>