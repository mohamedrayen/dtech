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

<?php get_template_part('parts/wcu');?>
<?php get_template_part('parts/swiper');?>
<?php get_template_part('parts/moreinfo');?>

<!-- section d'informations sur l'hébergement -->
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