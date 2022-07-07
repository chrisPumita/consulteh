<?php
    if (!isset($_GET['service']) || $_GET['service'] =="")
        header("Location:services.php");

    $servicio = $_GET['service'];

    switch ($servicio){
        case md5(1):
            $service_numer = 1;
            break;
        case md5(2):
            $service_numer = 2;
            break;
        case md5(3):
            $service_numer = 3;
            break;
        default:
            header("Location:services.php");
            break;
    }

    include("./services/template_services.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Conoce nuestros servicios || Consulteh || Servicios</title>
    <meta name="description" content="Nuestros servicios Consulteh">
    <?php include_once "./includes/header.php"?>
</head>

<body>
<div class="preloader">
    <img class="preloader__image" width="60" src="assets/images/loader.png" alt="">
</div>
<!-- /.preloader -->
<div class="page-wrapper">
    <?php include_once "./includes/nav.php"?>

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <?php echo $titulo; ?>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Service Details Start-->
    <section class="service-details" id="servicio">
        <div class="container">
            <div class="row">
                <?php  echo $container; ?>
            </div>
        </div>
    </section>
    <!--Service Details End-->

    <?php include_once "./includes/footer.php"?>

</div><!-- /.page-wrapper -->


<?php include_once "./includes/mobile_nav.php"?>

<?php include_once "./includes/js.php"?>
</body>

</html>