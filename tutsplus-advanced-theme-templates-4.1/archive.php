<?php
/* The file for displaying archive pages */
?>

<?php get_header(); ?>
		
	<div class="main">
		
		<div id="content" class="two-thirds left">
			
			<h2><?php the_archive_title(); ?></h2>
			
			<?php
			if( is_tax( 'tutsplus_genre' ) ) {
				get_template_part( 'includes/loop', 'genre' );
			}
			else {
				get_template_part( 'includes/loop', 'archive' );
			}
			?>
			
		</div><!-- #content -->

		
<?php get_sidebar(); ?>

<?php get_footer(); ?>

