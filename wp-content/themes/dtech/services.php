<?php
/* Template Name: services */
get_header();
?>

<!-- banner section -->
<!--breadcumb start here-->
<div class="xs-banner service-banner contet-to-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 align-self-center">
                <div class="xs-banner-content">
                    <div class="xs-banner-group">
                        <h2 class="banner-title wow fadeInLeft" data-wow-duration="1s">Nos Solutions</h2>
                        <p class="wow fadeInLeft" data-wow-duration="1.5s">Découvrez notre gamme complète de solutions informatiques conçues pour répondre à vos besoins professionnels les plus exigeants. Que vous cherchiez à améliorer votre infrastructure, à migrer vers le cloud ou à sécuriser vos données, nous avons les solutions adaptées à votre entreprise. Explorez nos offres et libérez le potentiel de votre entreprise dès aujourd'hui.</p>
                    </div>
                </div><!-- .xs-banner-content END -->
            </div>
            <div class="col-lg-5 align-self-center">
                <div class="inner-welcome-image-group wow fadeIn">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/innerWelcome/shared-hosting.png" data-parallax='{"y": 150}' alt="hosting image">
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcumb end here--><!-- End banner section -->
<?php get_template_part('parts/wcu');?>
    <!-- section des informations sur l'hébergement -->
    <section class="xs-section-padding xs-hosting-info" style="padding-bottom: 1em;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hosting-info-img">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/info-img-1.png" alt="Image d'information sur l'hébergement">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/icon-1.png" class="info-icon icon-1" alt="icône d'hébergement">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/icon-2.png" class="info-icon icon-2" alt="icône d'hébergement">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/icon-3.png" class="info-icon icon-3" alt="icône d'hébergement">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/icon-4.png" class="info-icon icon-4" alt="icône d'hébergement">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="hosting-info-wraper">
                        <div class="spinner-icon wow">
                            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/electric-wave.png" alt="icône d'information sur l'hébergement">
                        </div>
                        <div class="wow fadeInUp">
                            <h2 class="content-title">VPS sur Demande pour une Flexibilité Totale</h2>
                            <p>Expérimentez la puissance du VPS sur demande, offrant une flexibilité totale pour répondre à vos besoins en temps réel. Scalez vos ressources à la demande et profitez d'un environnement virtualisé performant et sécurisé, adapté à votre croissance dynamique.</p>
                            <ul class="xs-list check">
                                <li>Ressources évolutives en temps réel</li>
                                <li>Environnement virtualisé performant</li>
                                <li>Sécurité avancée pour vos données</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Commencer</a>
                        </div>
                    </div><!-- .hosting-info-wraper END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="hosting-info-wraper-2 wow fadeInLeft" data-wow-duration="1.5s">
                        <h2 class="content-title">Migration vers le Cloud pour une Expérience Optimale</h2>
                        <div class="media hosting-info-list">
                            <div class="d-flex info-icon">
                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/gaurd-icon.png" alt="icône d'information sur l'hébergement">
                            </div>
                            <div class="media-body">
                                <h4 class="xs-title small">Optimisez votre infrastructure IT</h4>
                                <p>Optimisez votre infrastructure IT en migrant vers notre solution de Cloud Public. Accédez à vos applications desktop en ligne, bénéficiez de la flexibilité du cloud et assurez-vous une performance sans compromis pour propulser votre entreprise vers de nouveaux sommets.</p>
                            </div>
                        </div><!-- .hosting-info-list END -->
                        <div class="media hosting-info-list">
                            <div class="d-flex info-icon">
                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/cloud-icon.png" alt="icône d'information sur l'hébergement">
                            </div>
                            <div class="media-body">
                                <h4 class="xs-title small">Flexibilité et Performance</h4>
                                <p>Accédez à vos applications desktop en ligne, bénéficiez de la flexibilité du cloud et assurez-vous une performance sans compromis pour propulser votre entreprise vers de nouveaux sommets.</p>
                            </div>
                        </div><!-- .hosting-info-list END -->
                        <div class="media hosting-info-list">
                            <div class="d-flex info-icon">
                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/clock-icon.png" alt="icône d'information sur l'hébergement">
                            </div>
                            <div class="media-body">
                                <h4 class="xs-title small">Déploiement Rapide</h4>
                                <p>Profitez d'un déploiement rapide et sans interruption, permettant une transition fluide vers le cloud.</p>
                            </div>
                        </div><!-- .hosting-info-list END -->
                        <a href="#" class="btn btn-primary">Commencer</a>
                    </div><!-- .hosting-info-wraper-2 END -->
                </div>
                <div class="col-lg-6">
                    <div class="hosting-info-img wow fadeInRight" data-wow-duration="2s">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/info-img-2.png" alt="Image d'information sur l'hébergement">
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- section des informations sur l'hébergement END -->

    <!-- section d'informations sur l'hébergement -->
    <section class="xs-section-padding">
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
                            <h2 class="content-title">Accès Sécurisé à vos Postes de Travail</h2>
                            <p>Explorez une nouvelle dimension de la flexibilité professionnelle avec notre service Cloud PC. Accédez à vos postes de travail à tout moment, de n'importe où, grâce à une plateforme en ligne sécurisée. Libérez la puissance de votre entreprise sans contraintes physiques.</p>
                            <ul class="xs-list check">
                                <li>Accès à distance sécurisé</li>
                                <li>Performance élevée en toute circonstance</li>
                                <li>Flexibilité pour les professionnels en déplacement</li>
                            </ul>
                            <a href="<?php echo get_permalink( get_post( 16) ) ?>" class="btn btn-primary">Commencer</a>
                        </div>
                    </div><!-- .hosting-info-wraper FIN -->
                </div>
            </div><!-- .row FIN -->
        </div><!-- .container FIN -->
    </section><!-- FIN section d'informations sur l'hébergement -->

    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="hosting-info-wraper-2 wow fadeInLeft" data-wow-duration="1.5s">
                        <h2 class="content-title">Hébergement Web Robuste et Sécurisé</h2>
                        <div class="media hosting-info-list">
                            <div class="d-flex info-icon">
                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/gaurd-icon.png" alt="icône d'information sur l'hébergement">
                            </div>
                            <div class="media-body">
                                <h4 class="xs-title small">Sécurité Avancée</h4>
                                <p>Notre hébergement web offre la flexibilité du mutualisé et la puissance d'un VPS dédié. Bénéficiez de la garantie de sécurité avancée et de backups quotidiens pour assurer la stabilité et la protection de votre présence en ligne.</p>
                            </div>
                        </div><!-- .hosting-info-list FIN -->
                        <div class="media hosting-info-list">
                            <div class="d-flex info-icon">
                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/cloud-icon.png" alt="icône d'information sur l'hébergement">
                            </div>
                            <div class="media-body">
                                <h4 class="xs-title small">Performance Optimale</h4>
                                <p>Notre hébergement web offre la flexibilité du mutualisé et la puissance d'un VPS dédié. Bénéficiez de la garantie de sécurité avancée et de backups quotidiens pour assurer la stabilité et la protection de votre présence en ligne.</p>
                            </div>
                        </div><!-- .hosting-info-list FIN -->
                        <div class="media hosting-info-list">
                            <div class="d-flex info-icon">
                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/clock-icon.png" alt="icône d'information sur l'hébergement">
                            </div>
                            <div class="media-body">
                                <h4 class="xs-title small">Déploiement en Quelques Minutes</h4>
                                <p>Notre hébergement web offre la flexibilité du mutualisé et la puissance d'un VPS dédié. Bénéficiez de la garantie de sécurité avancée et de backups quotidiens pour assurer la stabilité et la protection de votre présence en ligne.</p>
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

<?php
get_footer();
