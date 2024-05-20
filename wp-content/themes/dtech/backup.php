<?php
/* Template Name: Sauvegardes */
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
                            <h2 class="banner-title wow fadeInLeft" data-wow-duration="1s">Sauvegardes</h2>
                            <p class="wow fadeInLeft" data-wow-duration="1.5s">Chez D-Technology, nous comprenons l'importance cruciale de la sauvegarde dans le maintien de la continuité des activités. Nos solutions de sauvegarde robustes et flexibles sont conçues pour garantir la sécurité et la disponibilité de vos applications et données stratégiques..</p>
                        </div>
                    </div><!-- .xs-banner-content END -->
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="inner-welcome-image-group wow fadeIn">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/innerWelcome/cloud-hosting-bg.png" data-parallax='{"y": 150}' alt="hosting image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcumb end here--><!-- End banner section -->
<?php get_template_part('parts/wcu');?>
<?php get_template_part('parts/info'); ?>
    <div style="padding:1.5em;"></div>
<?php
get_footer();
