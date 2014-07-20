<?php
/*
 Template name: Schedule Page
 *
 * @package nickrosen
 */

get_header(); ?>

<div class="container">
	<main class="main" role="main">
  <?php
    $schedule_loop = new WP_Query(array(
        'post_type' => 'schedule',
        'meta_key' => 'event_date',
        'meta_value' => date('Ymd'),
        'meta_compare' => '>=',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
      ));
    if ($schedule_loop->have_posts()) {
    ?>
    <section class="schedule">
      <h1 class="center">Upcoming Performances</h1>
        <article>
          <?php
            while ($schedule_loop->have_posts()) : $schedule_loop->the_post();
              get_template_part('content', 'schedule');
            endwhile;
          ?>
        </article>
      <?php } ?>
    </section>
<?php
  $past_schedule_loop = new WP_Query(array(
      'post_type' => 'schedule',
      'meta_key' => 'event_date',
      'meta_value' => date('Ymd'),
      'meta_compare' => '<',
      'orderby' => 'meta_value_num',
      'order' => 'ASC',
    ));
  if ($past_schedule_loop->have_posts()) {
?>
<hr>
    <section class="schedule">
      <h1 class="center">Past Performances</h1>
        <article>
          <?php
            while ($past_schedule_loop->have_posts()) : $past_schedule_loop->the_post();
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
