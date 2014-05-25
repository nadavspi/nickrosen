<?php
/**
 * @package nickrosen
 */
?>

<?php if (has_post_thumbnail()) { ?>

<li>
  <?php if ($url = get_field('discography_url')) { ?>
    <a href="<?php echo $url; ?>">
  <?php } ?>
    <?php the_post_thumbnail(); ?>
  <?php if ($url) { ?>
    </a>
  <?php } ?>
</li>

<?php } ?>
