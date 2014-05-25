<?php
/**
 * @package nickrosen
 */
?>


<dl class="event">
  <dt class="event__meta">
    <?php if (get_field('event_date')): ?>
      <?php the_field('event_date') ?><br>
    <?php endif; ?>
    <?php if (get_field('event_time')): ?>
      <?php the_field('event_time') ?><br>
    <?php endif; ?>
    <?php if (get_field('event_price')): ?>
      <?php the_field('event_price') ?><br>
    <?php endif; ?>
  </dt>
  <dd class="event__details">
    <h2 class="event__title"><?php the_title(); ?></h2>
    <?php if (get_field('event_details')): ?>
      <div class="event__content">
        <?php the_field('event_details') ?><br>
      </div>
    <?php endif; ?>
    <?php if (get_field('event_venue_name')): ?>
      <dl class="event__venue">
        <dt class="event__venue__name">
          <?php the_field('event_venue_name') ?><br>
        </dt>
        <?php if (get_field('event_venue_address')) : ?>
          <dd class="event__venue__address">
            <?php the_field('event_venue_address'); ?>
          </dd>
        <?php endif; ?>
      </dl>
    <?php endif; ?>
  </dd>
</dl>

