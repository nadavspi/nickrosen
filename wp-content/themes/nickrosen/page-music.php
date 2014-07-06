<?php
/*
 Template name: Music Page
 *
 * @package nickrosen
 */

get_header(); ?>

<div class="container">
	<main class="main" role="main">
    <section class="center">
      <?php
        /*
        *Tracks
        */
        $tracks_loop = new WP_Query(array(
          'post_type' => 'tracks',
          'orderby' => 'menu_order',
          'order' => 'DESC'
        ));
        if ($tracks_loop->have_posts()) {
        ?>
        <article class="tracks">
        <h1>Tracks</h1>
        <?php
          while ($tracks_loop->have_posts()) : $tracks_loop->the_post();
            the_content();
          endwhile;
        ?>
        </article>
        <?php } ?>
      <?php
        /*
        *Videos
        */
          $tracks_loop = new WP_Query(array(
            'post_type' => 'videos',
            'orderby' => 'menu_order',
            'order' => 'DESC'
          ));
        if ($tracks_loop->have_posts()) {
        ?>
        <article class="videos">
        <h1>Videos</h1>
        <?php
          while ($tracks_loop->have_posts()) : $tracks_loop->the_post();
            the_content();
          endwhile;
        ?>
        </article>
        <?php } ?>
      <?php
        /*
        *Discography
        */
          $tracks_loop = new WP_Query(array(
            'post_type' => 'discography',
            'orderby' => 'menu_order',
            'order' => 'DESC'
          ));
        if ($tracks_loop->have_posts()) {
        ?>
        <article class="discography">
        <h1>Discography</h1>
        <ul>
        <?php
          while ($tracks_loop->have_posts()) : $tracks_loop->the_post();
            get_template_part('content', 'discography');
          endwhile;
        ?>
        </ul>
        </article>
        <?php } ?>
    </section>
	</main>
</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
