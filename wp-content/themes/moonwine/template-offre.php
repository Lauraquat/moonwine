<?php
/*Template Name: Offre*/
get_header();
$image = get_field('lp_image_slogan');
?>

<main class="" style=" width: 100%;    height: 100%;">
	<!-- mettre le choix de la couleur en acf-->
        <div style=" z-index:0;   background-color: var(--other-red);    height: 150vh;    position: absolute;    top: 0;    width: 100%;" >
			<img class="" style="    height: 70%;    opacity: 0.1;" src="http://lquatannens.ecv-monsite.fr/wp-content/uploads/2022/06/bg-offres.png" alt="" />			
        </div>
	
	  	<div style="z-index:2 ;position:relative; display:flex; flex-direction:column; align-items:center;     height: 70%; gap:50px; justify-content: center">
			<div class="linkOffre">
 				<a class="color-sec" href="http://lquatannens.ecv-monsite.fr/index.php/landing-page/">Abonnements</a> / <a href="#" class="color-sec-50"> Offre Premium</a>
			</div>
			<div>
				<h1 id="slogan" class="first-title">Offre Premium</h1>
				<p style="color:var(--secondary-50); font-size:16px; font-weight:bold; text-align:center">		39,99€ / Mois	</p>
			</div>			
			<button class="buttonPlus" onclick="openInfoOffer()" style="background-color:var(--other-red); border:none; border-radius:50px;">
				<img width="24" src="http://lquatannens.ecv-monsite.fr/wp-content/themes/moonwine/asset-custom/image/plus.png"/>
			</button>
			<div class="elementOffre" style="border: 1px solid var(--secondary); padding: 50px;   border-radius: 20px; display:none; transition:5s;">
				<ul class="abo-list color-sec">
					<li>6 Box de série</li>
					<li>3 hors-série</li>
					<li>Facilités de paiement (1, 3 ou 12 fois)</li>
					<li>Envoi CHRONOPOST en point relais ou domicile</li>
					<li>Livraison offerte en point relais si paiement en une fois</li>
					<li>6 bouteilles aux choix parmi la cave</li>			
				</ul>
			</div>
			<div style="display:flex; flex-direction:row; gap:20px">
				<a class="button-main-2" href="#">Comparer</a>
				<a class="button-main-3" href="#">Je m'abonne </a>
			</div>
		</div>
        
		
	 <section id="section-landingpage" class="landingpage-event-back-scroll">
		<img  style="border-radius :  border-radius: 20px 20px 0 0; " src="http://lquatannens.ecv-monsite.fr/wp-content/themes/moonwine/asset-custom/image/boxVisu.png" alt="" />
		<div id="" style="margin-top: 140px;" >    
		
		 </div>
	</section>
</main>
	<?php