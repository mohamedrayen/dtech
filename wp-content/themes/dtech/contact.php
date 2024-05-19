<?php
/* Template Name: Contact */
get_header();
?>
<!-- section de la bannière -->
<!-- début du fil d'Ariane -->
<div class="xs-banner inner-banner contet-to-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center">
				<div class="xs-banner-content">
					<h1 class="banner-sub-title wow fadeInLeft">Contactez-nous</h1>
					<h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">ENTRER EN CONTACT</h2>
				</div><!-- .xs-banner-content END -->
			</div>
			<div class="col-lg-6 align-self-end">
				<div class="inner-welcome-image-group ">
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/innerWelcome/contact-bg.png" alt="image d'hébergement">
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/innerWelcome/phone.png" class="banner-ico banner-ico-1" alt="icône de téléphone">
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/innerWelcome/plane.png" class="banner-ico banner-ico-2" alt="icône de téléphone">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- fin du fil d'Ariane -->
    <!-- client section -->

<!-- section d'informations de contact -->
<section class="xs-section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mx-auto">
				<div class="xs-heading wow fadeIn">
					<h2 class="heading-sub-title">Trouvez-nous</h2>
					<h3 class="heading-title">CONTACTEZ <span>NOUS</span></h3>
				</div><!-- .xs-heading END -->
			</div>
		</div><!-- .row END -->
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="contact-info-group wow fadeInUp">
					<div class="contact-info-icon">
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/contact-info-icon-1.png" alt="icône d'informations de contact">
					</div>
					<h4 class="xs-title"><a href="#">Trouvez-nous</a></h4>
					<span>1Hd- 50, 010 Avenue, NY 90001</span>
					<span>États-Unis</span>
				</div><!-- .contact-info-group END -->
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="contact-info-group wow fadeInUp active" data-wow-duration="1.5s">
					<div class="contact-info-icon">
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/contact-info-icon-2.png" alt="icône d'informations de contact">
					</div>
					<h4 class="xs-title"><a href="tel:+216_92_560_245">Appeler</a></h4>
					<span>+216 92 560 245</span>
					<span>+216 92 550 245</span>
				</div><!-- .contact-info-group END -->
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="contact-info-group wow fadeInUp" data-wow-duration="2s">
					<div class="contact-info-icon">
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/contact-info-icon-3.png" alt="icône d'informations de contact">
					</div>
					<h4 class="xs-title"><a href="#">Envoyer un mail</a></h4>
					<a href="mailto:contact@example.com">contact@example.com</a>
					<a href="mailto:info@example.com">info@example.com</a>
				</div><!-- .contact-info-group END -->
			</div>
		</div><!-- .row END -->
	</div><!-- .container END -->
</section><!-- section d'informations de contact END -->

    <div class="swiper">
        <div class="swiper-wrapper">
	        <?php  display_brands();?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <style>
        .swiper-wrapper > *{
            min-width: 10%;
            padding: 1em;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <style>

        /*.single-client{*/
        /*    display: flex!important;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*    margin: 20px;*/
        /*}*/
        /*.img-client{*/
        /*    max-width: 100%;*/
        /*    max-height: 100%;*/
        /*}*/
        /*.client-slider-slick.slick-slide.slick-current.slick-active.slick-initialized.slick-slider,.slick-track{*/
        /*    width: 100%!important;*/
        /*}*/
    </style>
<!-- section du formulaire de contact -->
<section class="xs-section-padding xs-bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mx-auto">
				<div class="xs-heading wow fadeIn">
					<h2 class="heading-sub-title">Vous avez une question ?</h2>
					<h3 class="heading-title">ENVOYER <span>UN MESSAGE</span></h3>
				</div><!-- .xs-heading END -->
			</div>
		</div><!-- .row END -->
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<div class="xs-form-group wow fadeInUp">
<!--					<form action="#" method="POST" id="xs-contact-form" class="xs-form">-->
<!--						<div class="form-group">-->
<!--							<input type="text" class="form-control" name="name" placeholder="Nom" id="xs_contact_name">-->
<!--                            <input type="email" class="form-control" name="email" placeholder="E-mail" id="xs_contact_email">-->
<!--							<textarea name="message" placeholder="Vos questions" id="x_contact_message" class="form-control" cols="30" rows="10"></textarea>-->
<!--						</div>-->
<!--						<div class="xs-btn-wraper">-->
<!--							<input type="submit" class="btn btn-primary" id="xs_contact_submit" value="Envoyer maintenant">-->
<!--						</div>-->
<!--					</form>-->
					<?php echo do_shortcode('[contact-form-7 id="d19dd00" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</div><!-- .container END -->
</section><!-- section du formulaire de contact END -->

<!-- début du sélecteur de langue -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="language-content">
				<p>Changer de langue</p>
				<ul class="flag-lists">
					<li><a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/flags/006-united-states.svg" alt=""><span>Anglais</span></a></li>
					<li><a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/flags/002-canada.svg" alt=""><span>Anglais</span></a></li>
					<li><a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/flags/003-vietnam.svg" alt=""><span>Vietnamien</span></a></li>
					<li><a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/flags/004-france.svg" alt=""><span>Français</span></a></li>
					<li><a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/flags/005-germany.svg" alt=""><span>Allemand</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div><!-- Fin du xs modal --><!-- fin du sélecteur de langue -->

<!-- début du panneau de recherche -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
	<div class="modal-dialog modal-lg">
		<

		div class="modal-content">
		<div class="xs-search-panel">
			<form action="#" method="POST" class="xs-search-group">
				<input type="search" class="form-control" name="search" id="search" placeholder="Rechercher">
				<button type="submit" class="search-button"><i class="icon icon-search"></i></button>
			</form>
		</div>
	</div>
</div>
</div><!-- Fin du xs modal --><!-- fin du panneau de recherche -->

<!-- début du panier de décalage -->
<!-- élément de panier latéral -->
<div class="xs-sidebar-group cart-group">
	<div class="xs-overlay xs-bg-black"></div>
	<div class="xs-sidebar-widget">
		<div class="sidebar-widget-container">
			<div class="widget-heading media">
				<div class="media-body">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
			</div>
			<div class="xs-empty-content">
				<h3 class="widget-title">Panier</h3>
				<h4 class="xs-title">Aucun produit dans le panier.</h4>
				<p class="empty-cart-icon">
					<i class="icon icon-shopping-cart"></i>
				</p>
				<p class="xs-btn-wraper">
					<a class="btn btn-primary" href="#">Retour à la boutique</a>
				</p>
			</div>
		</div>
	</div>
</div>    <!-- FIN de l'élément de panier latéral -->    <!-- FIN du panier de décalage -->

<!-- début du panier de décalage -->
<!-- élément de widget latéral -->
<div class="xs-sidebar-group info-group">
	<div class="xs-overlay xs-bg-black"></div>
	<div class="xs-sidebar-widget">
		<div class="sidebar-widget-container">
			<div class="widget-heading">
				<a href="#" class="close-side-widget">
					X
				</a>
			</div>
			<div class="sidebar-textwidget">
				<div class="sidebar-logo-wraper">
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/blue_logo.png" alt="logo latéral">
				</div>
				<p>Loin, très loin, derrière la word moun tains, loin des pays Vokalia et Consonantia, là vivent les textes aveugles. Séparés, ils vivent dans Bookmarksgrove juste au bord de </p>
				<ul class="sideabr-list-widget">
					<li>
						<div class="media">
							<div class="d-flex">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/location.png" alt="">
							</div>
							<div class="media-body">
								<p>759 Pinewood Avenue</p>
								<span>Marquette, Michigan</span>
							</div>
						</div><!-- adresse 1 -->
					</li>
					<li>
						<div class="media">
							<div class="d-flex">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/mail.png" alt="">
							</div>
							<div class="media-body">
								<a href="mailto:contact@d-technology.com">contact@d-technology.com</a>
								<span>Assistance en ligne</span>
							</div>
						</div><!-- adresse 1 -->
					</li>
					<li>
						<div class="media">
							<div class="d-flex">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/phone.png" alt="">
							</div>
							<div class="media-body">
								<p>906-624-2565</p>
								<span>Lun-ven 8h-17h</span>
							</div>
						</div><!-- adresse 1 -->
					</li>
				</ul><!-- .sideabr-list-widget -->
				<div class="subscribe-from">
					<p>Inscrivez-vous !</p>
					<form action="#" method="POST" id="subscribe-form" class="subscribe-form">
						<label for="sub-input"></label>
						<div class="form-group">
							<input type="email" name="email" id="sub-input" placeholder="Entrez votre e-mail ici" class="form-control">
							<button class="sub-btn" type="submit"><i class="icon icon-arrow-right"></i></button>
						</div>
					</form>
				</div>
				<ul class="social-list version-2">
					<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
				</ul><!-- .social-list -->
				<div class="text-center">
					<a href="#" class="btn btn-primary">Acheter maintenant</a>
				</div>
			</div>
		</div>
	</div>
</div>    <!-- FIN de l'élément de widget latéral -->    <!-- FIN du panier de décalage -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            liste=document.getElementsByClassName("screen-reader-response");
            el=liste[0];
            el.style.display="none";
        }, false);
    </script>

<?php

get_footer();