<?php
/* Template Name: Home page */
get_header();
?><!-- section de la bannière -->
<section class="xs-banner banner-v2">
    <div class="container">
        <div class="row">
            <div class="col-md-7 align-self-center">
                <div class="xs-banner-content">
                    <h1 class="banner-sub-title wow fadeInLeft">NOUS FOURNISSONS</h1>
                    <h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">HÉBERGEMENT PREMIUM</h2>
                    <p class="wow fadeInUp" data-wow-duration="1.5s">Partagez des processus et des données de manière sécurisée sur la base du besoin sans nécessiter de conciliation, en combinant les autorisations.</p>
                    <div class="xs-btn-wraper wow fadeInUp" data-wow-duration="1.7s">
                        <a href="<?php echo get_permalink( get_post( 16) ) ?>" class="btn btn-primary">Commencer</a>
                        <a href="<?php echo get_permalink( get_post( 12) ) ?>" class="btn btn-outline-primary">En savoir plus</a>
                    </div>
                </div><!-- .xs-banner-content FIN -->
            </div>
            <div class="col-md-5">
                <div class="xs-banner-image">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/welcome/banner_image-3.png" alt="Image de bannière de bienvenue">
                </div>
            </div>
        </div><!-- .row FIN -->
    </div><!-- .container FIN -->
</section><!-- Fin section de la bannière -->


<!-- section pourquoi choisir -->
<section class="why-choose-section xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Meilleur hébergement</h2>
                    <h3 class="heading-title">POURQUOI <span>NOUS CHOISIR</span></h3>
                </div><!-- .xs-heading FIN -->
            </div>
        </div><!-- .row FIN -->
        <div class="row choose-us-v2">
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp">
                    <div class="choose-us-img">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/chooseUs/choose-us-4.png" alt="Image d'hébergement de technologie D">
                    </div>
                    <h4 class="xs-title">Garantie de disponibilité</h4>
                    <p>Partagez des processus et des données en toute sécurité <br> selon le besoin de savoir</p>
                </div><!-- .why-choose-us-block FIN -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp" data-wow-duration="1.5s">
                    <div class="choose-us-img">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/chooseUs/choose-us-5.png" alt="Image d'hébergement de technologie D">
                    </div>
                    <h4 class="xs-title">Sûr et sécurisé</h4>
                    <p>Notre équipe assure que votre site Web est toujours sûr et sécurisé</p>
                </div><!-- .why-choose-us-block FIN -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp" data-wow-duration="2s">
                    <div class="choose-us-img">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/chooseUs/choose-us-6.png" alt="Image d'hébergement de technologie D">
                    </div>
                    <h4 class="xs-title">Notre support dédié</h4>
                    <p>Nous avons enfin trouvé un hébergeur qui comprend vraiment les besoins uniques</p>
                </div><!-- .why-choose-us-block FIN -->
            </div>
        </div>
    </div><!-- .container FIN -->
</section><!-- FIN section pourquoi choisir -->
<!-- section d'informations sur l'hébergement -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="hosting-info-wraper-2 wow fadeInLeft" data-wow-duration="1.5s">
                    <h2 class="content-title">Serveur et plateforme puissants</h2>
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/gaurd-icon.png" alt="icône d'information sur l'hébergement">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title small">Meilleure sécurité et serveur plus rapide</h4>
                            <p>Notre solution WordPress de premier ordre, avec une optimisation supplémentaire pour faciliter l'exécution d'un WooCommerce</p>
                        </div>
                    </div><!-- .hosting-info-list FIN -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/cloud-icon.png" alt="icône d'information sur l'hébergement">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title small">Transferts de site sans interruption</h4>
                            <p>Notre solution WordPress de premier ordre, avec une optimisation supplémentaire pour faciliter l'exécution d'un WooCommerce</p>
                        </div>
                    </div><!-- .hosting-info-list FIN -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/clock-icon.png" alt="icône d'information sur l'hébergement">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title small">Déploiement en quelques minutes</h4>
                            <p>Notre solution WordPress de premier ordre, avec une optimisation supplémentaire pour faciliter l'exécution d'un WooCommerce</p>
                        </div>
                    </div><!-- .hosting-info-list FIN -->
                    <a href="<?php echo get_permalink( get_post( 16) ) ?>" class="btn btn-primary">Commencer</a>
                </div><!-- .hosting-info-wraper FIN -->
            </div>
            <div class="col-lg-6">
                <div class="hosting-info-img wow fadeInRight" data-wow-duration="2s">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/info-img-3.png" alt="Image d'informations sur l'hébergement">
                </div>
            </div>
        </div><!-- .row FIN -->
    </div><!-- .container FIN -->
</section><!-- FIN section d'informations sur l'hébergement -->

<!-- section d'informations sur l'hébergement -->
<section class="xs-section-padding xs-bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hosting-info-img wow fadeInRight">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/info-img-4.png" alt="Image d'informations sur l'hébergement">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="hosting-info-wraper">
                    <div class="spinner-icon wow">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/electric-wave.png" alt="icône d'informations sur l'hébergement">
                    </div>
                    <div class="wow fadeInUp" data-wow-duration="1.5s">
                        <h2 class="content-title">Hébergement optimisé pour WordPress</h2>
                        <p>WordPress est un puissant système de gestion de contenu conçu pour fonctionner. Nous transformons notre passion pour WordPress en la plateforme gérée la plus incroyable pour vos sites Web WordPress.</p>
                        <ul class="xs-list check">
                            <li>Pas de limites sur le trafic, le stockage et les sites Web*</li>
                            <li>Inscription de domaine gratuite avec des plans annuels.</li>
                            <li>Chiffrement SSL gratuit avec l'installateur en un clic de Let's Encrypt</li>
                        </ul>
                        <a href="<?php echo get_permalink( get_post( 16) ) ?>" class="btn btn-primary">Commencer</a>
                    </div>
                </div><!-- .hosting-info-wraper FIN -->
            </div>
        </div><!-- .row FIN -->
    </div><!-- .container FIN -->
</section><!-- FIN section d'informations sur l'hébergement -->
	<!-- call to action section -->
	<section class="call-to-action-section call-to-action-v2 wow fadeIn">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
                    <div class="call-to-action-content">
                        <h2>Nous ne compromettons pas avec la meilleure solution d'hébergement</h2>
                        <div class="xs-btn-wraper">
                            <a href="<?php echo get_permalink( get_post( 16) ) ?>" class="btn btn-secondary">Commencer</a>
                            <a href="<?php echo get_permalink( get_post( 12 ) ) ?>" class="btn btn-outline-primary">En savoir plus</a>
                        </div>
                    </div>
				</div>
			</div><!-- .row END -->
		</div><!-- .container END -->
		<div class="icon-bg" style="background-image: url(<?= get_stylesheet_directory_uri() ?>/assets/images/icon-bg-2.png)"></div>
	</section><!-- END call to action section -->
<!-- section des services -->
<section class="service-section xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto wow fadeIn">
                <div class="xs-heading">
                    <h2 class="heading-sub-title">Meilleur Service</h2>
                    <h3 class="heading-title">NOTRE <span>MEILLEUR SERVICE</span></h3>
                </div><!-- .xs-heading FIN -->
            </div>
        </div><!-- .row FIN -->
        <div class="row">
            <div class="col-lg-4 col-md-6 xs-mb-8">
                <div class="xs-service-block wow fadeInUp">
                    <div class="service-img">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-7.png" alt="icône de service d'hébergement">
                    </div>
                    <h4 class="xs-title"><a href="shared-hosting.html">Hébergement partagé</a></h4>
                    <p>Partagez des processus et des données en toute sécurité sur la base du besoin de savoir</p>
                    <a href="shared-hosting.html" class="simple-btn icon-right">En savoir plus<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block FIN -->
            </div>
            <div class="col-lg-4 col-md-6 xs-mb-8">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="1.5s">
                    <div class="service-img">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-8.png" alt="icône de service d'hébergement">
                    </div>
                    <h4 class="xs-title"><a href="reseller-hosting.html">Hébergement revendeur</a></h4>
                    <p>Sur les poignées d'hébergement et de solutions que nous avons testées</p>
                    <a href="reseller-hosting.html" class="simple-btn icon-right">En savoir plus<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block FIN -->
            </div>
            <div class="col-lg-4 col-md-6 xs-mb-8">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="2s">
                    <div class="service-img">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-9.png" alt="icône de service d'hébergement">
                    </div>
                    <h4 class="xs-title"><a href="vps-hosting.html">Hébergement VPS</a></h4>
                    <p>Nous avons enfin trouvé un hébergeur qui comprenait vraiment les besoins uniques</p>
                    <a href="vps-hosting.html" class="simple-btn icon-right">En savoir plus<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block FIN -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="2.5s">
                    <div class="service-img">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-10.png" alt="icône de service d'hébergement">
                    </div>
                    <h4 class="xs-title"><a href="cloud-hosting.html">Hébergement Cloud</a></h4>
                    <p>Partagez des processus et des données en toute sécurité sur la base du besoin de savoir</p>
                    <a href="cloud-hosting.html" class="simple-btn icon-right">En savoir plus<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block FIN -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="3s">
                    <div class="service-img">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-11.png" alt="icône de service d'hébergement">
                    </div>
                    <h4 class="xs-title"><a href="dedicated-hosting.html">Hébergement dédié</a></h4>
                    <p>Sur les poignées d'hébergement et de solutions que nous avons testées</p>
                    <a href="dedicated-hosting.html" class="simple-btn icon-right">En savoir plus<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block FIN -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="3.5s">
                    <div class="service-img">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-12.png" alt="icône de service d'hébergement">
                    </div>
                    <h4 class="xs-title"><a href="domain.html">Nom de domaine</a></h4>
                    <p>Nous avons enfin trouvé un hébergeur qui comprenait vraiment les besoins uniques</p>
                    <a href="domain.html" class="simple-btn icon-right">En savoir plus<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block FIN -->
            </div>
        </div>
    </div><!-- .container FIN -->
</section><!-- FIN section des services -->

<?php
get_footer();