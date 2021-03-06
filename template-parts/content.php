<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bulmascores
 */

?>

<div class="card mb-2">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="card-content">
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="title">', '</h1>' );
				else :
					the_title( '<h2 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta mb-2">
					<?php
						bulmascores_posted_on(); 
						echo " | ";
						bulmascores_posted_by();
					?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header --><?php bulmascores_post_thumbnail(); ?>

			<div class="entry-content mb-2">
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bulmascores' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bulmascores' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>
		<footer class="entry-footer notification">
			<?php bulmascores_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>