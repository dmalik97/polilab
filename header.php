<?php
/**
 * Header
 */
?>

    <!DOCTYPE html>
    <head>
<?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Dominik Malik">


    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/general.css">
<?php
if(is_front_page()){
    echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri(). '/assets/css/home.css">';
}

?>
</head>
<body <?php body_class(); ?>>
<section id="p-header" class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-xl-3">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
            <div class="col-6 col-xl-9">
                <button class="p-hamburger d-xxl-none" type="button">
                    <!--<button class="navbar-toggler e-hamburger" type="button" data-bs-toggle="collapse" data-bs-target="#e-main-menu" aria-controls="e-main-menu" aria-expanded="false" aria-label="Toggle navigation">-->
                    <!--<span class="navbar-toggler-icon"></span>-->
                    <div id="p-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div id="p-main-menu">
                    <?php

                    wp_nav_menu( array(
                        'theme_location'  => 'header-menu',
                        'depth'           => 1,
                        'container'       => 'ul',
                        'container_class' => 'p-navbar',
                        'menu_class'      => 'p-menu mx-auto',

                    ));
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
