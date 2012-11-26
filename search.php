<?php get_header(); ?>

<!-- debut div contenu -->
<section id="page-blanche">

<div id="contenu">
	<?php if ( have_posts() ) : ?>
		<h4 class="page-title"><?php printf( __( 'Résultat(s) de la recherche pour : %s' ), '<span style="color: #0088CC">' . get_search_query() . '</span>');?></h4>
				<?php while(have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php
				//On affiche quoi pour le corps du contenu ?
				//the_content();
				//the_content("...lire la suite de " . get_the_title('', '', false));
				the_excerpt();
				?>
			</div>
		</div>

	<?php endwhile; else :
		?>
		<h2>Aucun résultat pour <?php printf( __( 'Résultat(s) de la recherche pour : %s' ), '<span style="color: #0088CC">' . get_search_query() . '</span>');?></h2>
			<div class="entry">
				<p>Désolé mais le terme recherché n'a pas renvoyé de résultat. Essayez avec un autre terme ?</p>
				<?php get_search_form(); ?>
			</div>
		<?php

	endif;

	//On affiche quelle pagination ?
	//multi_pages_navi();
	pages_prec_suiv();
	?>
</div><!-- fin div contenu -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
