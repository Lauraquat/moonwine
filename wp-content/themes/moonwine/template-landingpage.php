<?php
/*Template Name: Landingpage*/
get_header();
$image = get_field('lp_image_slogan');
$imageApropos = get_field('lp_image_intro');
$imageLeft = get_field('lp_image_gauche_intro_offres');
$imageRight = get_field('lp_image_droite_intro_offres');
$imageOffres = get_field('lp_background_offres');
$imagePremium = get_field('lp_premium_image');
$imageExplorer = get_field('lp_explorer_image');
$imageBasic = get_field('lp_basic_image');
$imageVin = get_field('categorie_image_vin_rouge');
$imageBgBasic = get_field('lp_basic_image_bg');
$contenuBasic = new WP_Query(['post_type' => 'product', 'posts_per_page' => 1, 'post__in' => array(131)]);
$contenuExplorer = new WP_Query(['post_type' => 'product', 'posts_per_page' => 1, 'post__in' => array(145)]);
$contenuPremium = new WP_Query(['post_type' => 'product', 'posts_per_page' => 1, 'post__in' => array(149)]);
$typesVin = get_field("types_de_vin");
?>

<main class="">
	 <?php
    if( !empty( $image ) ): ?>
        <h1 id="slogan" class="first-title"><?php the_field('lp_slogan'); ?></h1>
        <div class="image-accueil">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>
    
        <section id="section-landingpage" class="landingpage-event-back-scroll">

                <div id="" style="margin-top: 140px;" >               
					<div id="aPropos" style="background-image: url('<?php echo esc_url($imageApropos['url']); ?>');">
						<div>
							<h6 class="color-main-50">A propos</h6>
							<h2><?php the_field('lp_titre_intro'); ?></h2>
						</div>	
						<p style="padding: 0 20%;"><?php the_field('lp_texte_intro'); ?></p>
						<a class="button-main" style="margin: 0 auto" href="<?php the_field('lp_lien_intro'); ?>">Je m'abonne</a>		
                	</div>
										
					<article id="categorieVin">
						<?php foreach ($typesVin as $typeVin): ?>
						<div class="categorie" style=" background-image: url('<?php echo esc_url($imageApropos['url']); ?>')">
							<img class="img-categorie" src="<?= $typeVin['image']; ?>">
							<div class="info-categorie">
								<h3><?= $typeVin['titre']; ?></h3>
								<p style="font-size:18px"><?= $typeVin['description']; ?></p>
							</div>							
						</div>
						<?php endforeach ?>
					</article>

					
					<div id="block-intro-offre">
						 <?php
    						if( !empty( $imageLeft) ): ?>
								<img src="<?php echo esc_url($imageLeft['url']); ?>" alt="<?php echo esc_attr($imageLeft['alt']); ?>" />
						  <?php endif; ?>
						<div class="text-intro-offre" >
							<h2 style="padding:0 20%"><?php the_field('lp_titre_intro_offres'); ?></h2>
							<p style="padding: 0 20%"><?php the_field('lp_texte_intro_offres'); ?></p>
						</div>	
						<?php
    						if( !empty( $imageRight) ): ?>
								<img src="<?php echo esc_url($imageRight['url']); ?>" alt="<?php echo esc_attr($imageRight['alt']); ?>" />
						  <?php endif; ?>						
					</div>				                  
					
                </div>
			<article class="lp-offres offre-premium">
				<img class="bg-image" src="<?php echo esc_url($imageOffres['url']); ?>">
				<div class="content-offre">
					<div>
						<h2><?php the_field('lp_premium_titre'); ?></h2>
						<p class="prix-offre"><?php the_field('lp_premium_prix'); ?></p>
					</div>
					<p class="texte-offre"><?php the_field('lp_premium_texte'); ?></p>
					<div class="button-offre">
						<a class="button-main-2" href="#">Comparer</a>
						<a class="button-main-3" href="#">Je veux en savoir plus</a>
					</div>
				</div>
				<?php
				if( !empty( $imagePremium) ): ?>
				<div class="illu-offre">
					<img src="<?php echo esc_url($imagePremium['url']); ?>" alt="" />						 
				</div>
				 <?php endif; ?>	
			</article>
			<article class="lp-offres offre-explorer">
				<img class="bg-image" src="<?php echo esc_url($imageOffres['url']); ?>">
				<div class="content-offre">
					<div>
						<h2><?php the_field('lp_explorer_titre'); ?></h2>
						<p class="prix-offre"><?php the_field('lp_explorer_prix'); ?></p>
					</div>
					<p class="texte-offre"><?php the_field('lp_explorer_texte'); ?></p>
					<div class="button-offre">
						<a class="button-main-2" href="#">Comparer</a>
						<a class="button-main-3" href="#">Je veux en savoir plus</a>
					</div>
				</div>
				<?php
				if( !empty( $imagePremium) ): ?>
				<div class="illu-offre">
					<img src="<?php echo esc_url($imageExplorer['url']); ?>" alt="" />						 
				</div>
				 <?php endif; ?>	
			</article>
			<article class="lp-offres offre-basic">
				<img class="bg-image" src="<?php echo esc_url($imageBgBasic['url']); ?>">
				<div class="content-offre">
					<div>
						<h2><?php the_field('lp_basic_titre'); ?></h2>
						<p class="prix-offre"><?php the_field('lp_basic_prix'); ?></p>
					</div>
					<p class="texte-offre"><?php the_field('lp_basic_texte'); ?></p>
					<div class="button-offre">
						<a class="button-main-4" href="#">Comparer</a>
						<a class="button-main" href="#">Je veux en savoir plus</a>
					</div>
				</div>
				<?php
				if( !empty( $imagePremium) ): ?>
				<div class="illu-offre">
					<img src="<?php echo esc_url($imageBasic['url']); ?>" alt="" />						 
				</div>
				 <?php endif; ?>	
			</article>
			
			<!--TO DO faire ACF + mettre style dans CSS + dupliqué pour les deux autres-->
			<article class="article-abonnement">
				<h2>L'abonnement idéal</h2>
				<div class="block-abo">
					<div class="abo-b-e">
						<img class="img-abo-b-e" src="<?php echo esc_url($imageBgBasic['url']); ?>"/>
						<div class="z-1">
							<h3><?php the_field('lp_basic_titre'); ?></h3>
							<h2 class="color-ter"><?php the_field('lp_basic_prix'); ?></h2>
							<p style="font-size:9px"><?php the_field('lp_precision_prix'); ?></p>
						</div>
						<?php if ($contenuBasic->have_posts()) : ?>
							<?php while ( $contenuBasic->have_posts() ) : $contenuBasic->the_post(); ?>
								<?php the_content(); ?>
								<a class="button-main-4" href="<?= get_permalink($product->get_id()); ?>">Je veux cette offre</a>
							<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>						
					</div>				
				
					<div class="abo-b-e">
						<img class="img-abo-b-e" src="<?php echo esc_url($imageExplorer['url']); ?>"/>
						<div class="z-1">
							<h3><?php the_field('lp_premium_titre'); ?></h3>
							<h2 class="color-ter"><?php the_field('lp_premium_prix'); ?></h2>
							<p style="font-size:9px"><?php the_field('lp_precision_prix'); ?></p>
						</div>						
						<?php if ($contenuPremium->have_posts()) : ?>
							<?php while ( $contenuPremium->have_posts() ) : $contenuPremium->the_post(); ?>
								<?php the_content(); ?>
								<a class="button-main-3" href="<?= get_permalink($product->get_id()); ?>">Je veux cette offre</a>
							<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>				
				
					<div class="abo-b-e">
						<img class="img-abo-b-e" src="<?php echo esc_url($imageBgBasic['url']); ?>"/>
						<div class="z-1">
							<h3><?php the_field('lp_explorer_titre'); ?></h3>
							<h2 class="color-ter"><?php the_field('lp_explorer_prix'); ?></h2>
							<p style="font-size:9px"><?php the_field('lp_precision_prix'); ?></p>
						</div>						
						<?php if ($contenuExplorer->have_posts()) : ?>
							<?php while ( $contenuExplorer->have_posts() ) : $contenuExplorer->the_post(); ?>
								<?php the_content(); ?>
								<a class="button-main-4" href="<?= get_permalink($product->get_id()); ?>">Je veux cette offre</a>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>				
				</div>
			</article>
			
			<article style="height:80vh;position:relative; background-image:url('<?php echo esc_url($imageApropos['url']); ?>')">
				<div style="height:80vh; width:100%;background:linear-gradient(var(--secondary) 20%, var(--secondary-50)); z-index: 1; position: absolute;"></div>
				<div style="z-index: 1;position: relative;display: flex;flex-direction: column; align-items: center; height: 100%;justify-content: center;">
					<img src="http://lquatannens.ecv-monsite.fr/wp-content/themes/moonwine/asset-custom/image/imageAbonne.svg" alt"" style="position:absolute;top: 0px;"/>
					<img src="http://lquatannens.ecv-monsite.fr/wp-content/themes/moonwine/asset-custom/image/logoMW.svg" alt"" style="width:5%"/>
					<h2 style="">Lancez-vous.</h2>
					<img src="http://lquatannens.ecv-monsite.fr/wp-content/themes/moonwine/asset-custom/image/bottle.svg" alt"" style="position:absolute; bottom:60px;"/>
					<a class="button-main" href="#" style="">Je m'abonne</a>
				</div>
				
			</article>
			<article style="background-color:var(--main); padding: 120px; color: var(--secondary)">
				<h2>
					Au cas ou il vous manque quelque chose.
				</h2>
				<button class="collapsible" style="border-radius: 20px 20px 0 0;">Des algorithmes et outils certes, mais pas seulement. Un veilleur de notre écosystème sensible à vos sujets s’approprie vos besoins</button>
				<div class="content">
				  <p>Des algorithmes et outils certes, mais pas seulement. Un veilleur de notre écosystème sensible à vos sujets s’approprie vos besoins et vous accompagne tout au long du programme avec un regard éclairé (échanges, points d’étapes...)</p>
				</div>
				<button class="collapsible">Des algorithmes et outils certes, mais pas seulement. Un veilleur de notre écosystème sensible à vos sujets s’approprie vos besoins</button>
				<div class="content">
				  <p>Des algorithmes et outils certes, mais pas seulement. Un veilleur de notre écosystème sensible à vos sujets s’approprie vos besoins et vous accompagne tout au long du programme avec un regard éclairé (échanges, points d’étapes...)</p>
				</div>
				<button class="collapsible">Des algorithmes et outils certes, mais pas seulement. Un veilleur de notre écosystème sensible à vos sujets s’approprie vos besoins</button>
				<div class="content">
				  <p>Des algorithmes et outils certes, mais pas seulement. Un veilleur de notre écosystème sensible à vos sujets s’approprie vos besoins et vous accompagne tout au long du programme avec un regard éclairé (échanges, points d’étapes...)</p>
				</div>
				<button class="collapsible" style="border-radius:0 0 20px 20px;">Des algorithmes et outils certes, mais pas seulement. Un veilleur de notre écosystème sensible à vos sujets s’approprie vos besoins</button>
				<div class="content">
				  <p>Des algorithmes et outils certes, mais pas seulement. Un veilleur de notre écosystème sensible à vos sujets s’approprie vos besoins et vous accompagne tout au long du programme avec un regard éclairé (échanges, points d’étapes...)</p>
				</div>
			</article>
			<?php 
			get_footer();?>
			
        </section>
</main> 

