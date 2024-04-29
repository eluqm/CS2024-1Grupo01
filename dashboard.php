<!DOCTYPE html>
<?php
  session_start();
  header("Cache-Control: no-store, no-cache, must-revalidate");
	if (!isset($_SESSION['username'])){
			header("location: index.php");
	}
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LIMPERU</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert.css">
    <script src="js/sweetalert-dev.js"></script>
</head>
<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="javascript:void(0);" class="navbar-brand mx-4 mb-3">
                  <img class="col-md-12" src="img/logo.jpg" alt="" style="width: 100%;height: 50px;">
                </a>

                <div class="navbar-nav w-100">
                    <a href="javascript:void(0);" id="inicio" class="nav-item nav-link inicio active">
                      <i class="fa fa-tachometer-alt me-2"></i>Inicio</a>
                    <a href="javascript:void(0);" id="operadores" class="nav-item nav-link  operadores">
                      <i class="fa-solid fa-users-line"></i>Operadores
                    </a>
                    <a href="javascript:void(0);" id="zonas" class="nav-item nav-link zonas">
                      <i class="fa-solid fa-map-location-dot"></i>
                      Zonas
                    </a>
                    <a href="javascript:void(0);" id="asignacion" class="nav-item nav-link asignacion">
                      <i class="fa-solid fa-broom"></i>Asignacion
                    </a>
                    <a href="javascript:void(0);" id="planificacion" class="nav-item nav-link planificacion">
                      <i class="fa fa-table me-2"></i>Historial
                    </a>
                    <a href="javascript:void(0);" id="reporte" class="nav-item nav-link reportes">
                      <i class="fa fa-chart-bar me-2"></i>
                      Reporte
                    </a>
                    <a href="javascript:void(0);" id="admin" class="nav-item nav-link reportes">
                      <i class="fa fa-chart-bar me-2"></i>
                      Administrador
                    </a>
                    <a href="javascript:void(0);" id="configuracion" class="nav-item nav-link reportes">
                      <i class="fa-solid fa-gear"></i>
                      Configuracion
                    </a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <!-- Content Start -->
        <div class="content" id="container">
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/Ajax.js"></script>
    <script src="js/funcionesAjax.js"></script>


    <script src="js/jquery-validation-1.14.0/dist/jquery.validate.js"></script>

    <script type="text/javascript">
    funcionajax("pages/inicio/index.php","container","");

    $("#inicio").click(function(){
      $('.nav-item').removeClass('active');
      $('.inicio').addClass('active');
     funcionajax("pages/inicio/index.php","container","");
   });
   $("#operadores").click(function(){
     $('.nav-item').removeClass('active');
     $('.operadores').addClass('active');
    funcionajax("pages/operadores/index.php","container","");
  });
    $("#zonas").click(function(){
      $('.nav-item').removeClass('active');
      $('.zonas').addClass('active');
     funcionajax("pages/zonas/index.php","container","");
   });
   $("#asignacion").click(function(){
     $('.nav-item').removeClass('active');
     $('.asignacion').addClass('active');
    funcionajax("pages/asignacion/index.php","container","");
  });
  $("#planificacion").click(function(){
    $('.nav-item').removeClass('active');
    $('.planificacion').addClass('active');
   funcionajax("pages/planificacion/index.php","container","");
  });
  $("#admin").click(function(){
    $('.nav-item').removeClass('active');
    $('.admin').addClass('active');
   funcionajax("pages/admin/index.php","container","");
  });
  $("#reporte").click(function(){
    $('.nav-item').removeClass('active');
    $('.reporte').addClass('active');
   funcionajax("pages/reportes/index.php","container","");
  });
  $("#configuracion").click(function(){
    $('.nav-item').removeClass('active');
    $('.configuracion').addClass('active');
   funcionajax("pages/configuracion/index.php","container","");
  });
    </script>
</body>

</html>
