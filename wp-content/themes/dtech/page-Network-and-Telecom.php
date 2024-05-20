<?php
/* Template Name: Network And Telecom */
get_header();
?>

	<!-- banner section -->
	<!--breadcumb start here-->
	<div class="xs-banner service-banner contet-to-center" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/innerWelcome/inner-welcome-banner.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 align-self-center">
					<div class="xs-banner-content">
						<div class="xs-banner-group">
							<h2 class="banner-title wow fadeInLeft" data-wow-duration="1s">Réseau et Télécom</h2>
							<p class="wow fadeInLeft" data-wow-duration="1.5s">Solutions Complètes pour une Connectivité Optimale et Sécurisée</p>
						</div>
					</div><!-- .xs-banner-content END -->
				</div>
			</div>
		</div>
		<div class="xs-overlay bg-gradient"></div>
	</div>
	<!--breadcumb end here--><!-- End banner section -->

    <!-- why choose section -->
    <section class="why-choose-section xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="xs-heading wow fadeIn">
                        <h3 class="heading-title">Expertise en <span>Câblage Réseau</span></h3>

                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <p style="text-align: center;padding:0em 5em;font-weight: lighter; font-size: larger;"><q > Notre équipe dédiée assure le déploiement expert du câblage réseau, accompagné de diagnostics approfondis et de tests rigoureux du parc informatique. Garantissez une connectivité optimale et fiable pour soutenir la croissance fluide de votre infrastructure.</q></p>

        </div><!-- .container END -->
    </section><!-- END why choose section -->
	<!-- include feature section -->
	<section class="xs-section-padding included-feature-list bg-gradient">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<div class="xs-heading wow fadeIn">
						<h3 class="heading-title">CARACTÉRISTIQUES <span>INCLUSES</span></h3>
					</div><!-- .xs-heading END -->
				</div>
			</div><!-- .row END -->
			<div class="row">
				<div class="col-lg-6">
					<div class="include-feature-list">
						<div class="media hosting-info-list">
							<div class="d-flex info-icon">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/included-feature/included-feature-1.png" alt="included feature icon">
							</div>
							<div class="media-body">
                                <h4 class="xs-title">Installation de Câblage Réseau</h4>
                                <p>Réseaux câblés structurés<br>Câblage cuivre et fibre optique<br>Points de terminaison et panneaux de brassage</p>

                            </div>
						</div><!-- .hosting-info-list END -->
						<div class="media hosting-info-list">
							<div class="d-flex info-icon">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/included-feature/included-feature-2.png" alt="included feature icon">
							</div>
							<div class="media-body">
								<h4 class="xs-title">Diagnostic et Maintenance</h4>
								<p>Résolution de problèmes de connectivité<br>Maintenance préventive<br>Tests de performance</p>
							</div>
						</div><!-- .hosting-info-list END -->
						<div class="media hosting-info-list">
							<div class="d-flex info-icon">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/included-feature/included-feature-3.png" alt="included feature icon">
							</div>
							<div class="media-body">
								<h4 class="xs-title">Optimisation de Réseau</h4>
                                <p>Analyse et recommandations<br>Mise à jour des infrastructures<br>Optimisation de la bande passante</p>
                            </div>
						</div><!-- .hosting-info-list END -->
					</div><!-- .include-feature-list END -->
				</div>
				<div class="col-lg-6">
					<div class="include-feature-list">
						<div class="media hosting-info-list">
							<div class="d-flex info-icon">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/included-feature/included-feature-4.png" alt="included feature icon">
							</div>
							<div class="media-body">
								<h4 class="xs-title">Sécurité Réseau</h4>
                                <p>Renforcement de la sécurité<br>Pare-feu, détection d'intrusion, VPN<br>Formation en sécurité</p>
                            </div>
						</div><!-- .hosting-info-list END -->
						<div class="media hosting-info-list">
							<div class="d-flex info-icon">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/included-feature/included-feature-5.png" alt="included feature icon">
							</div>
							<div class="media-body">
								<h4 class="xs-title">Support et Assistance</h4>
                                <p>Assistance à distance et sur site<br>Formation et documentation<br>Support 24/7</p>
                            </div>
						</div><!-- .hosting-info-list END -->
						<div class="media hosting-info-list">
							<div class="d-flex info-icon">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/included-feature/included-feature-6.png" alt="included feature icon">
							</div>
							<div class="media-body">
								<h4 class="xs-title">Gestion de Projets</h4>
                                <p>Planification et coordination<br>Suivi des délais et des budgets<br>Communication et reporting</p>
                            </div>
						</div><!-- .hosting-info-list END -->
					</div><!-- .include-feature-list END -->
				</div>
			</div>
		</div><!-- .container END -->
	</section><!-- END include feature section -->

<?php get_template_part('parts/swiper'); ?>
<?php get_template_part('parts/info'); ?>
<div style="padding:1.5em;"></div>
<?php
get_footer();