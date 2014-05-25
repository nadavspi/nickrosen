<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package nickrosen
 */

get_header(); ?>

	<main role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page__header">
				<h1 class="page__title"><?php printf( __( 'Search Results for: %s', 'nickrosen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php nickrosen_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
