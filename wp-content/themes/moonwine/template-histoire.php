<?php
/*Template Name: histoire*/
get_header();
?>

<div id="histoire">
	<h1>Notre histoire</h1>
	
	<div class="histoire">
		<?php if (have_rows('blocs_histoire')) : ?>
			<?php while (have_rows('blocs_histoire')) : the_row(); ?>
			
		<?php if (get_row_layout() == 'titre') : ?>
			<?= get_sub_field('titre') ?>
		<?php endif; ?>
		
			<?php if (get_row_layout() == 'bloc1') : ?>
				<div class="box_cols">
					<div class="col_left">
						<img src="<?= get_sub_field('img') ?>">
					</div>
					<div class="col_right">
						<?= get_sub_field('texte') ?>
					</div>
				</div>
			<?php endif; ?>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>	
</div>

<?php
get_footer();
