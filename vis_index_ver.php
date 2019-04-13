<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$info['titulo']?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jc.css">

    <!-- Custom fonts for this template -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <script src="js/slick.js"></script>
</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?=$info['titulo']?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button"  data-target="#navbarResponsive" id="mnumov" >
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <?php
                if ($componentes){
                foreach ($componentes as $com){?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#<?=implode('_',explode(' ',$com['titulo']));?>"><?=$com['titulo']?></a>
                    </li>
                <?php }}
                ?>
            </ul>
        </div>
    </div>
</nav>



<!-- Header -->
<header class="masthead" style="background-image: url(<?=$info['img']?>)">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Bienvenidos a </div>
            <div class="intro-heading text-uppercase"><?=$info['titulo']?></div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Ver más</a>
        </div>
    </div>
</header>



<?php
if ($componentes){
    foreach ($componentes as $com){
        switch ($com['tipo']){
            case 1:
                printParrafoVista($com);
                break;
            case 2:
                printSliderVista($com);
                break;
            case 3:
                printColcontVista($com);
                break;
            case 4:
                //printMaps($com);
                break;
        }
    }
}
?>



<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Desarrollado por MéxicoXP</span>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#">Portal padre</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">México XP</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<style>


</style>
<script>

    $(document).ready(function (e) {
        $('#mnumov').click(function (e) {

            if ($('#navbarResponsive').hasClass('show')){
                $('#navbarResponsive').fadeOut(100).removeClass('show')
            } else{
                $('#navbarResponsive').fadeIn(100).addClass('show')
            }
        })
    });

    $('.slick').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        fade: false,
        arrows: true
    });
</script>




</body>

</html>
