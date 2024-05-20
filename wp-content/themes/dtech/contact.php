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

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199.5308100237976!2d10.186337415303552!3d36.854617653885214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34b3e5a0b527%3A0xa9c47d7f44f95d83!2sJektis%20Travel%20Ariana!5e0!3m2!1sfr!2stn!4v1716224021774!5m2!1sfr!2stn" style="width: 100%;border:0;" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<?php get_template_part('parts/swiper'); ?>


    <!-- section du formulaire de contact -->
<section class="xs-section-padding">
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
					<?php echo do_shortcode('[contact-form-7 id="d19dd00" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</div><!-- .container END -->
</section><!-- section du formulaire de contact END -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            liste=document.getElementsByClassName("screen-reader-response");
            el=liste[0];
            el.style.display="none";
        }, false);
    </script>
   <?php

get_footer();