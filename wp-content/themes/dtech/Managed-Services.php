<?php
/* Template Name: Managed Services */
get_header();
?>
    <div class="xs-banner inner-banner contet-to-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="xs-banner-content">
                        <h1 class="banner-sub-title wow fadeInLeft">Meilleurs tarifs</h1>
                        <h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">D-Technology</h2><p>Votre Partenaire en Infogérance et Intégration IT</p>
                    </div><!-- .xs-banner-content END -->
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="inner-welcome-image-group pricing-icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/innerWelcome/pricing.png" alt="hosting image">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/innerWelcome/dollar.png" class="banner-ico banner-ico-1" alt="phone icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/innerWelcome/euro.png" class="banner-ico banner-ico-2" alt="phone icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcumb end here--><!-- End banner section -->

    <?php get_template_part('parts/wcu');?>
    <!-- pricing section -->
    <section class="pricing-section xs-section-padding xs-bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="xs-heading wow fadeIn">
                        <h2 class="heading-sub-title">Plans Tarifaires</h2>
                        <h3 class="heading-title">NOS <span>MEILLEURS TARIFS</span></h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-md-12 xs-pricing-group">
                    <ul class="nav nav-tabs main-nav-tab tab-swipe wow fadeIn" role="tablist">
                        <li>
                            <a id="monthly-tab" class="active show" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="true">Mensuel</a>
                        </li>
                        <li>
                            <a id="yearly-tab" data-toggle="tab" href="#yearly" role="tab" aria-controls="yearly" aria-selected="false">Annuel</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fadeIn animated show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="xs-single-pricing">
                                        <div class="pricing-header">
                                            <div class="pricing-img-block">
                                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing.svg" alt="Image de tarification D technologie">
                                            </div>
                                            <h4 class="xs-title">Infogérance Essentielle</h4>
                                        </div><!-- .pricing-header END -->
                                        <div class="pricing-body">
                                            <ul class="wow fadeIn" role="tablist">
                                                <li>Surveillance proactive des systèmes.</li>
                                                <hr>
                                                <li>Maintenance préventive régulière.</li>
                                                <hr>
                                                <li>Support réactif pour résoudre les problèmes rapidement.</li>
                                                <hr>
                                                <li>Sécurité informatique de base.</li>
                                            </ul>

                                        </div><!-- .pricing-body END -->
                                        <div class="pricing-footer">
                                            <a href="<?php echo get_permalink( get_post( 16) ) ?>" class="btn btn-primary">Acheter maintenant</a>
                                        </div><!-- .pricing-footer END -->
                                    </div><!-- .xs-single-pricing END -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xs-single-pricing active">
                                        <div class="pricing-header">
                                            <div class="pricing-img-block">
                                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing.svg" alt="D technologie pricing image">
                                            </div>
                                            <h4 class="xs-title">Infogérance Gold</h4>
                                        </div><!-- .pricing-header END -->
                                        <div class="pricing-body">
                                            <ul class="wow fadeIn" role="tablist" style="color: white">
                                                <li>Surveillance avancée avec analyse prédictive.</li>
                                                <hr>
                                                <li>Maintenance proactive et planifiée.</li>
                                                <hr>
                                                <li>Support prioritaire avec temps de réponse garanti.</li>
                                                <hr>
                                                <li>Solutions de sécurité renforcées.</li>
                                            </ul>
                                        </div><!-- .pricing-body END -->
                                        <div class="pricing-footer">
                                            <a href="<?php echo get_permalink( get_post( 16) ) ?>" class="btn btn-primary">Acheter Maintenant</a>
                                        </div><!-- .pricing-footer END -->
                                    </div><!-- .xs-single-pricing END -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xs-single-pricing">
                                        <div class="pricing-header">
                                            <div class="pricing-img-block">
                                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing.svg" alt="D technologie pricing image">
                                            </div>
                                            <h4 class="xs-title">Infogérance Platinum</h4>
                                        </div><!-- .pricing-header END -->
                                        <div class="pricing-body">
                                            <ul class="wow fadeIn" role="tablist">
                                                <li>Surveillance en temps réel avec interventions automatisées.</li>
                                                <hr>
                                                <li>Maintenance avancée avec mises à niveau régulières.</li>
                                                <hr>
                                                <li>Support 24/7 avec assistance dédiée.</li>
                                                <hr>
                                                <li>Sécurité haut de gamme avec gestion des menaces.</li>
                                            </ul>
                                        </div><!-- .pricing-body END -->
                                        <div class="pricing-footer">
                                            <a href="<?php echo get_permalink( get_post( 16) ) ?>" class="btn btn-primary">Acheter Maintenant</a>
                                        </div><!-- .pricing-footer END -->
                                    </div><!-- .xs-single-pricing END -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fadeIn animated" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="xs-single-pricing">
                                        <div class="pricing-header">
                                            <div class="pricing-img-block">
                                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing.svg" alt="D technologie pricing image">
                                            </div>
                                            <h4 class="xs-title">Serveur Dédié</h4>
                                        </div><!-- .pricing-header END -->
                                        <div class="pricing-body">
                                            <p>La plateforme cloud haute performance ultime</p>
                                            <div class="pricing-price">
                                                <p>À partir de</p>
                                                <h2><sup>$</sup>100</h2>
                                                <h6 class="discount-price">Remise de 50%<del>$200.0</del></h6>
                                            </div>
                                        </div><!-- .pricing-body END -->
                                        <div class="pricing-footer">
                                            <a href="<?php echo get_permalink( get_post( 16) ) ?>" class="btn btn-primary">Acheter Maintenant</a>
                                        </div><!-- .pricing-footer END -->
                                    </div><!-- .xs-single-pricing END -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xs-single-pricing active">
                                        <div class="pricing-header">
                                            <div class="pricing-img-block">
                                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing.svg" alt="D technologie pricing image">
                                            </div>
                                            <h4 class="xs-title">Hébergement Revendeur</h4>
                                        </div><!-- .pricing-header END -->
                                        <div class="pricing-body">
                                            <p>La solution idéale pour les sites web d'entreprise et les blogs plus importants</p>
                                            <div class="pricing-price">
                                                <p>À partir de</p>
                                                <h2><sup>$</sup>59</h2>
                                                <h6 class="discount-price">Remise de 25%<del>$108.99</del></h6>
                                            </div>
                                        </div><!-- .pricing-body END -->
                                        <div class="pricing-footer">
                                            <a href="<?php echo get_permalink( get_post( 16) ) ?>" class="btn btn-primary">Acheter Maintenant</a>
                                        </div><!-- .pricing-footer END -->
                                    </div><!-- .xs-single-pricing END -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="xs-single-pricing">
                                        <div class="pricing-header">
                                            <div class="pricing-img-block">
                                                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing.svg" alt="D technologie pricing image">
                                            </div>
                                            <h4 class="xs-title">Hébergement Mutualisé</h4>
                                        </div><!-- .pricing-header END -->
                                        <div class="pricing-body">
                                            <p>La plateforme cloud haute performance ultime</p>
                                            <div class="pricing-price">
                                                <p>À partir de</p>
                                                <h2><sup>$</sup>19</h2>
                                                <h6 class="discount-price">Remise de 20%<del>$29.99</del></h6>
                                            </div>
                                        </div><!-- .pricing-body END -->
                                        <div class="pricing-footer">
                                            <a href="<?php echo get_permalink( get_post( 16) ) ?>" class="btn btn-primary">Acheter Maintenant</a>
                                        </div><!-- .pricing-footer END -->
                                    </div><!-- .xs-single-pricing END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- END pricing section -->
<?php get_template_part('parts/info'); ?>
    <!-- package included section -->
    <section class="xs-bg-gray xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="xs-heading wow fadeIn">
                        <h2 class="heading-sub-title">Questions</h2>
                        <h3 class="heading-title">LES <span>FORFAITS</span> INCLUENT</h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-lg-6">
                    <div id="accordion" class="xs-accordion" role="tablist">
                        <div class="card isActive">
                            <div class="card-header" role="tab" id="headingOne">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Offrez-vous un support technique 24/7 ? <i class="icon icon-down-arrow1"></i>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Oui, notre équipe de support est disponible 24/7 pour répondre à toutes vos questions et résoudre vos problèmes.</p>
                                </div>
                            </div>
                        </div><!-- .card .isActive END -->
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Quels sont les avantages de votre service d'hébergement ? <i class="icon icon-down-arrow1"></i>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Notre service d'hébergement offre une fiabilité exceptionnelle, des performances élevées et une sécurité avancée pour votre site web.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Puis-je mettre à niveau mon forfait d'hébergement à tout moment ? <i class="icon icon-down-arrow1"></i>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    Oui, vous pouvez mettre à niveau votre forfait d'hébergement à tout moment en fonction de vos besoins croissants.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingFour">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Proposez-vous des sauvegardes automatiques de mes données ? <i class="icon icon-down-arrow1"></i>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    Oui, nous proposons des sauvegardes automatiques régulières pour garantir la sécurité de vos données.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div id="accordion-two" class="xs-accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingSix">
                                <a data-toggle="collapse" class="collapsed" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Comment configurer une redirection d'e-mail gratuite ? <i class="icon icon-down-arrow1"></i>
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion-two">
                                <div class="card-body">
                                    <p>Pour configurer une redirection d'e-mail gratuite, vous pouvez accéder à votre panneau de contrôle et suivre les instructions fournies dans la section des e-mails.</p>
                                </div>
                            </div>
                        </div><!-- .card END -->
                        <div class="card">
                            <div class="card-header" role="tab" id="headingSeven">
                                <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Comment transférer un domaine ? <i class="icon icon-down-arrow1"></i>
                                </a>
                            </div>
                            <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion-two">
                                <div class="card-body">
                                    Pour transférer un domaine, vous devez d'abord obtenir un code d'autorisation de votre registrar actuel, puis suivre les instructions de votre nouveau registrar pour initier le transfert.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingEight">
                                <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Comment transférer un compte d'hébergement existant ? <i class="icon icon-down-arrow1"></i>
                                </a>
                            </div>
                            <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordion-two">
                                <div class="card-body">
                                    Pour transférer un compte d'hébergement existant, vous devez d'abord sauvegarder tous vos fichiers et bases de données, puis suivre les instructions de votre nouveau fournisseur d'hébergement pour migrer vos données.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingNine">
                                <a class="collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Comment renouveler mon domaine ? <i class="icon icon-down-arrow1"></i>
                                </a>
                            </div>
                            <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion-two">
                                <div class="card-body">
                                    Pour renouveler votre domaine, connectez-vous à votre compte chez votre registrar et suivez les instructions pour renouveler votre domaine pour une période supplémentaire.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTen">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Comment fonctionne WhoisGuard pour garantir la sécurité ? <i class="icon icon-down-arrow1"></i>
                                </a>
                            </div>
                            <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordion-two">
                                <div class="card-body">
                                    WhoisGuard protège votre identité et vos informations personnelles en remplaçant vos informations de contact dans le Whois public par les informations de contact de WhoisGuard.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- END package included section -->

<?php
get_footer();