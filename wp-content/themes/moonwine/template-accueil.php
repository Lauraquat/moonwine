<?php
/*Template Name: Accueil*/
get_header();

$image = get_field('image_header');
$image_discover = get_field('image_discover');
$image_ap = get_field('ap_images');
?>
<main class="">
    <?php
    if( !empty( $image ) ): ?>
        <h1 id="first-title"><?php the_field('slogan'); ?></h1>
        <div id="image-accueil">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>
        <section id="section-discover" class="event-back-scroll">
                <div id="discover" class="">
                    <div id="discover-img" class="discover-img">
                        <img src="<?php echo esc_url($image_discover['url']); ?>" alt="<?php echo esc_attr($image_discover['alt']); ?>" />
                    </div>
                    <div id="content-discover">
                        <div id="info-discover">
                            <p><?php the_field('titre_discover'); ?></p>
                            <h5 class="color-ter">LA BOX<?php the_field('number_box'); ?></h5>
                        </div>
                        <h4> <?php the_field('name_box'); ?></h4>
                    </div> 
                    
                </div>
                <div id="aPropos" style="background-image: url('<?php echo esc_url($image_ap['url']); ?>');">
                    <div>
                        <h6 class="color-main-50">A propos</h6>
                        <h3><?php the_field('ap_question'); ?></h3>
                    </div>
                    <h6><?php the_field('ap_sous_titre_2'); ?></h6>
                    <p><?php the_field('ap_texte'); ?></p>
                </div>
        </section>
</main>

