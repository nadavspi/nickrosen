<?php
/*
 Template name: Schedule Page
 *
 * @package nickrosen
 */

get_header(); ?>

<div class="container">
	<main class="main" role="main">
    <section class="schedule">
      <h1 class="center">Performance Schedule</h1>
      <?php
        $schedule_loop = new WP_Query(array(
            'post_type' => 'schedule',
            'meta_key' => 'event_date',
            /* 'meta_value' => date('Ymd'), */
            /* 'meta_compare' => '>=', */
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
          ));
        if ($schedule_loop->have_posts()) {
        ?>
        <article>
          <?php
            while ($schedule_loop->have_posts()) : $schedule_loop->the_post();
              get_template_part('content', 'schedule');
            endwhile;
          ?>
        </article>
      <?php } ?>
    </section>
	</main>
</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
