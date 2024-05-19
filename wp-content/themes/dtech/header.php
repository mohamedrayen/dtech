<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php wp_title(); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,700,700i%7CRubik:300,400,500,700" rel="stylesheet">

	<link rel="icon" type="image/png" href="favicon.ico">
	<!-- Place favicon.ico in the root directory -->
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/animate.css">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/iconfont.css">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/jquery-ui.theme.min.css">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/rev-settings.css">
<!--    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


	<!--For Plugins external css-->
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/plugins.css" />

	<!--Theme custom css -->
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/style.css">

	<!--Theme Responsive css-->
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/responsive.css" />
</head>
<body>
<!--[if lt IE 10]>
<p class="browserupgrade">Vous utilisez un <strong>navigateur obsolète</strong>. Veuillez <a href="http://browsehappy.com/">mettre à jour votre navigateur</a> pour améliorer votre expérience.</p>
<![endif]-->

<!-- prelaoder -->
<div id="preloader">
    <div class="preloader-wrapper">
        <div class="spinner"></div>
    </div>
    <div class="preloader-cancel-btn">
        <a href="#" class="btn btn-secondary prelaoder-btn">Annuler le préchargement</a>
    </div>
</div>    <!-- END prelaoder -->
<div class="header-transparent nav-sticky">
    <!-- topBar section -->
    <div class="xs-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="xs-top-bar-info">
                        <li>
                            <p><i class="icon icon-phone1"></i>+216 92 560 245</p>
                        </li>
                        <li>
                            <a href="mailto:contact@d-technology.com"><i class="icon icon-envelope1"></i>contact@d-technology.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="top-menu">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="googlePlus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </div>    <!-- End topBar section -->

    <!-- header section -->
    <header class="xs-header header-style-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="xs-logo-wraper">
                    <a href="index.html" class="xs-logo">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="">
                    </a>
                </div>
                <nav class="xs-menus ml-auto">
                    <div class="nav-header">
                        <a class="nav-brand" href="index.html"></a>
                        <div class="nav-toggle"></div>
                    </div>
                    <!-- menu list start -->
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu">

                            <li class="mega-menus">
                                <a href="<?php echo get_permalink( get_post( 12 ) ) ?>">Qui Somme Nous</a>
                            </li>
                            <li class="mega-menus"><a href="<?php echo get_permalink( get_post( 14 ) ) ?>">Infogérence</a>
                            </li>
                            <li class="mega-menus"><a href="#">Nos Solutions</a>
                                <div class="megamenu-panel xs-service-menu">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="Backup.php">
                                                <div class="media">
                                                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/menu-icon/icon-1.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Sauvegarde</h4>
                                                        <p>Sécurise tes données contre pertes et corruptions.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="reseller-hosting.php">
                                                <div class="media">
                                                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/menu-icon/icon-2.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Hébergement Web</h4>
                                                        <p>Lance ton site internet rapidement et facilement.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="vps-hosting.php">
                                                <div class="media">
                                                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/menu-icon/icon-3.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Messagerie</h4>
                                                        <p>Communique de manière professionnelle et fiable.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="cloud-hosting.php">
                                                <div class="media">
                                                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/menu-icon/icon-4.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Cloud Computing</h4>
                                                        <p>Puissance informatique à la demande, sans matériel.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="dedicated-hosting.php">
                                                <div class="media">
                                                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/menu-icon/icon-5.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Public Cloud</h4>
                                                        <p>Stockage et applications en ligne, accessibles partout.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="domain.php">
                                                <div class="media">
                                                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/menu-icon/icon-6.png" alt="">
                                                    <div class="media-body">
                                                        <h4>VPS</h4>
                                                        <p>Contrôle serveur dédié, coût inférieur, flexibilité élevée.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mega-menus"><a href="Network-and-Telecom.php">Réseau et Télecom</a>
                            </li>
                            <li><a href="<?php echo get_permalink( get_post( 16 ) ) ?>">Contact</a></li>

                        </ul>
                    </div>                <!-- menu list end -->

                </nav>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </header>    <!-- End header section -->
</div>