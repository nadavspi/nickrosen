<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package nickrosen
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header">
		<h1 class="entry__title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry__content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page__links">' . __( 'Pages:', 'nickrosen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'nickrosen' ), '<footer class="entry__meta"><span class="entry__edit">', '</span></footer>' ); ?>
</article><!-- #post-## -->
