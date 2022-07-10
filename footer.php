<?php
$footerCol1 = get_field('about_us', 'options');
$footerCol2 = get_field('address', 'options');
$footerCol3 = get_field('opening_hours', 'options');
$footerCol4 = get_field('social_media', 'options');
$boxContainer2 = get_field('box_container_2');
$boxContainer3 = get_field('box_container_3');
?>
<section id="footer" class="mt-5 py-lg-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="logo text-center text-sm-start">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
            <div class="col-12 col-sm-2 text-center text-sm-start mt-4 mt-sm-0">
                <h4><?php echo $footerCol1['heading'] ?></h4>
                <div class="footer-column-description mt-3">
                    <?php echo $footerCol1['description']?>
                </div>
            </div>
            <div class="col-12 col-sm-2 text-center text-sm-start mt-4 mt-sm-0">
                <h4><?php echo $footerCol2['heading'] ?></h4>
                <div class="footer-column-description mt-3">
                    <?php echo $footerCol2['description']?>
                </div>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start mt-4 mt-sm-0">
                <h4><?php echo $footerCol3['heading'] ?></h4>
                <div class="footer-column-description mt-3">
                    <?php echo $footerCol3['description']?>
                </div>
            </div>
            <div class="col-12 col-sm-2 text-center text-sm-start mt-4 mt-sm-0">
                <h4><?php echo $footerCol4['heading'] ?></h4>
                <div class="footer-column-description mt-3">
                    <?php echo $footerCol4['description']?>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/wp-content/themes/polilab/assets/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/dist/bundle.js"></script>


<?php wp_footer(); ?>
</body>
</html>