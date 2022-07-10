<?php get_header() ?>
<?php
$backgroundImage = get_field('hero_background_image');
$heroHeading = get_field('hero_heading');
$heroShortDescription = get_field('hero_short_description');
$heroButton = get_field('hero_button');
?>
    <section class="hero p-top-fixed" style="
    <?php
    if(!empty($backgroundImage)){
        echo 'background-image: url(' . esc_url($backgroundImage['url']) .');';
        } ?>
            ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-6">
                    <?php
                    if(!empty($heroHeading) && !empty($heroShortDescription)) : ?>
                        <h1><?php echo $heroHeading; ?></h1>
                        <p><?php echo $heroShortDescription; ?></p>
                    <?php endif;
                    if(!empty($heroButton)) : ?>
                        <a class="button-primary hero-button mt-4" href="<?php echo esc_url($heroButton['url']); ?>"><?php echo $heroButton['text']; ?></a>
                    <?php endif;

                    ?>
                </div>
            </div>
        </div>

    </section>
<?php
$boxContainer1 = get_field('box_container_1');
$boxContainer2 = get_field('box_container_2');
$boxContainer3 = get_field('box_container_3');
if(!empty($boxContainer1) && !empty($boxContainer2) && !empty($boxContainer3)) :
?>
    <section id="p-grid-boxes">
        <div class="container">
            <div class="row">
                <div id="p-box-1" class="col-12 col-sm-4 p-box">
                    <h3 class="text-center"><?php echo $boxContainer1['heading'] ?></h3>
                    <div class="d-flex align-items-center mt-4">
                        <img loading="lazy" class="" width="50px" height="auto" src="<?php echo esc_url($boxContainer1['icon']['url']) ?>" alt="<?php echo esc_attr($boxContainer1['icon']['alt']) ?>" />
                        <div class="ms-3"><?php echo $boxContainer1['description'] ?></div>
                    </div>
                </div>
                <div id="p-box-2" class="col-12 col-sm-4 p-box">
                    <h3 class="text-center"><?php echo $boxContainer2['heading'] ?></h3>
                    <div class="d-flex align-items-center mt-4">
                        <img loading="lazy" class="" width="45px" height="auto" src="<?php echo esc_url($boxContainer2['icon']['url']) ?>" alt="<?php echo esc_attr($boxContainer2['icon']['alt']) ?>" />
                        <div class="ms-3"><?php echo $boxContainer2['description'] ?></div>
                    </div>
                </div>
                <div id="p-box-3" class="col-12 col-sm-4 p-box">
                    <h3 class="text-center"><?php echo $boxContainer3['heading'] ?></h3>
                    <div class="d-flex align-items-center mt-4">
                        <img loading="lazy" class="" width="55px" height="auto" src="<?php echo esc_url($boxContainer3['icon']['url']) ?>" alt="<?php echo esc_attr($boxContainer3['icon']['alt']) ?>" />
                        <div class="ms-3"><?php echo $boxContainer3['description'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php
$aboutUsImage = get_field('about_us_image');
$aboutUsHeading = get_field('about_us_heading');
$aboutUsDescription = get_field('about_us_description');

if(!empty($aboutUsDescription)) :
?>
<section id="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-4 text-center text-sm-start">
                <img loading="lazy" class="p-5 p-lg-0 pe-5" width="90%" height="auto" src="<?php echo esc_url($aboutUsImage['url']) ?>" alt="<?php echo esc_attr($aboutUsImage['alt']) ?>" />
            </div>
            <div class="col-12 col-sm-8">
                <h2 class="p-home-heading-2 text-center text-sm-start"><?php echo $aboutUsHeading; ?></h2>
                <div class="mt-3 home-description">
                    <?php echo $aboutUsDescription; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php
    $statistics = get_field('statistic');
    $statisticsBg = get_field('statistics_background_image');

if(!empty($statistics)) :
    ?>
<section id="statistics" style="
<?php
if(!empty($statisticsBg)){
    echo 'background-image: url(' . esc_url($statisticsBg['url']) .');';
} ?>
        ">
    <div class="container">
        <div class="row justify-content-center align-items-center mt-4">
            <?php foreach ($statistics as $statistic) : ?>
                <div class="col-12 col-sm-3 col-xl-2">
                    <div class="statistic-container text-center mt-4 mt-sm-0">
                        <span class="statistic-number" toval="<?php echo $statistic['number'] ?>">0</span>
                        <p class="mt-3 px-2"><?php echo $statistic['description'] ?></p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>

</section>
<script>

</script>
<?php endif; ?>
<?php
$workHeading = get_field('how_we_work_heading');
$workDescription = get_field('how_we_work_description');
$workImage = get_field('how_we_work_image');

if(!empty($workDescription)) :
    ?>
<section id="work" class="mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-6">
                <h2 class="p-home-heading-2 text-center text-sm-start"><?php echo $workHeading; ?></h2>
                <div class="mt-3 home-description">
                    <?php echo $workDescription; ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-start">
                <img loading="lazy" class="box-shadow-image m-lg-5" width="100%" height="auto" src="<?php echo esc_url($workImage['url']) ?>" alt="<?php echo esc_attr($workImage['alt']) ?>" />
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$args = array(
    'post_type' => 'services',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'orderby' => 'date',
    'order'   => 'ASC',
);
$loop = new WP_Query( $args );
if(!empty($loop)) :
?>
<section id="services" class="mt-5 pt-5">
    <?php
        $servicesHeading = get_field('services_heading');
    ?>
    <div class="container">
        <h2 class="text-center p-home-heading-2"><?php echo $servicesHeading; ?></h2>
        <hr class="mx-auto p-line-heading"/>
        <div class="row tab mt-5 pt-5">
            <?php
            while ( $loop->have_posts() ) : $loop->the_post();
                $slug = get_post_field( 'post_name', get_the_ID() );
            ?>
                <div id="link-<?php echo $slug ?>" class="col-12 col-sm-3 text-center tablinks" onclick="openServiceContent(event,'<?php echo $slug ?>')">
                    <div class="featured-icon-service">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <h3 class="mt-3"><?php the_title() ?></h3>
                    <?php


                    ?>
                </div>

            <?php endwhile;


            //wp_reset_postdata();

            ?>
        </div>
    </div>
    <div class="second-background">
        <div class="container">
           <?php while ( $loop->have_posts() ) : $loop->the_post();
               $slug = get_post_field( 'post_name', get_the_ID() );
           ?>
           <div id="<?php echo $slug; ?>" class="row tabcontent">
               <div class="col-12 col-lg-8 mx-auto">
                   <?php

                   the_content();
                   ?>
               </div>
           </div>
           <?php endwhile;
           wp_reset_postdata();
           ?>
        </div>

    </div>

</section>
<script>
    function openServiceContent(evt, serviceName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(serviceName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<?php endif; ?>
<?php
    $backgroundImageCta = get_field('cta_background');
    $ctaHeading = get_field('cta_heading');
    $ctaPhoneNumber = get_field('cta_phone_number');
if(!empty($ctaHeading) && !empty($ctaPhoneNumber)) :
    ?>
<section id="cta" class="py-5" style="
<?php
if(!empty($backgroundImageCta)){
    echo 'background-image: url(' . esc_url($backgroundImageCta['url']) .');';
} ?>
        ">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-8 mx-auto text-center">
                <h2 class="cta-heading"><?php echo $ctaHeading ?></h2>
                <a class="cta-button mt-4" href="tel:<?php echo $ctaPhoneNumber; ?>"><?php echo $ctaPhoneNumber; ?></a>
            </div>
        </div>
    </div>


</section>
<?php endif;?>
<?php

$args = array(
    'post_type' => 'experts',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'orderby' => 'date',
    'order'   => 'ASC',
);
$loop = new WP_Query( $args );
if(!empty($loop)) :
?>
<section id="experts" class="mt-5 py-5">
    <?php
        $expertsHeading = get_field('experts_heading');
        $expertsDescription = get_field('experts_description');
    ?>
    <div class="container">
        <h2 class="text-center p-home-heading-2"><?php echo $expertsHeading; ?></h2>
        <hr class="mx-auto p-line-heading"/>
        <div class="row">
            <div class="col-12 col-sm-8 mx-auto">
                <div class="section-description text-center">
                    <?php echo $expertsDescription; ?>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-12 col-sm-3 text-center">
                <div class="expert-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php
                $title = get_the_title();
                $pieces = explode(' ', $title);
                $surname = array_pop($pieces);
                $name= preg_replace('/\W\w+\s*(\W*)$/', '$1', $title);

                ?>
                <h3 class="mt-4 expert-heading"> <?php echo $name . ' <span><strong>' . $surname . '</strong></span>';?></h3>
                <div class="expert-description">
                    <?php the_content() ?>
                </div>
            </div>

<?php endwhile;

            wp_reset_postdata();

            ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$contactHeading = get_field('contact_heading');
$contactForm = get_field('contact_form');
if(!empty($contactForm)) :
?>
<section id="contact" class="mt-5 py-5">
    <div class="container">
        <h2 class="text-center p-home-heading-2"><?php echo $contactHeading; ?></h2>
        <hr class="mx-auto p-line-heading"/>
        <div class="row mt-5">
            <div class="col-12 col-lg-8 mx-auto">
                <?php echo do_shortcode( $contactForm ); ?>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer() ?>