<!DOCTYPE HTML>
<html lang="fr">

<head>
    <title>Kombinat - création sites web</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Kombinat, création sites web" />
    <meta name="keywords" content="Kombinat, html, création site web, pme, tpe, startup, CSS, JavaScript, PHP" />
    <meta name="author" content="Kombinat" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous"> -->


    <link rel="shortcut icon" href="images/favicon2.ico" />
    <link href='http://fonts.googleapis.com/css?family=League+Script%7CPoppins:300,400,500,600,700%7CMontserrat:900'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href='style.css' />

    <!--[if lt IE 9]>
        <script src="js/html5.js"></script>            
        <script src="js/respond.min.js"></script>                   
        <![endif]-->
</head>

<body>

    <div class="site-wrapper">

        <div class="doc-loader">
            <img src="images/preloader.gif" alt="Preloader">
        </div>


        <header class="header-holder">
            <div class="menu-wrapper center-relative relative">
                <div class="header-logo">

                    <a href="index.php">
                        <img src="images/logoTransparent.png" alt="Logo">
                    </a>
                </div>

                <div class="toggle-holder">
                    <div id="toggle" class="">
                        <div class="first-menu-line"></div>
                        <div class="second-menu-line"></div>
                        <div class="third-menu-line"></div>
                    </div>
                </div>

        <?php include "./partials/header.html" ?>

        <div id="content" class="site-content center-relative">

        <?php include "./partials/home.html" ?>


        <?php include "./partials/services.html" ?>
        <?php include "./partials/clients.html" ?>
        <?php include "./partials/team.html" ?>
        <?php include "./partials/pricing.html" ?>
        <?php include "./partials/contact.html" ?>
        <?php include "./partials/footer.html" ?>







            


            

            





            

    </div>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>



    <!--Load JavaScript-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type='text/javascript' src='js/imagesloaded.pkgd.js'></script>
    <script type='text/javascript' src='js/jquery.fitvids.js'></script>
    <script type='text/javascript' src='js/jquery.smartmenus.min.js'></script>
    <script type='text/javascript' src='js/isotope.pkgd.js'></script>
    <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
    <script type='text/javascript' src='js/countUp.min.js'></script>
    <script type='text/javascript' src='js/slick.min.js'></script>
    <script type='text/javascript' src='js/main.js'></script>
</body>

</html>