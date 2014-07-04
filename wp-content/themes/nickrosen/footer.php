<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package nickrosen
 */
?>

<footer>
  <div class="footer__copyright">
  &copy; <?php echo date("Y") ?> Nick Rosen. All rights reserved, whatever that means.<br>
    Website by <a href="http://nadav.is">Nadav Spiegelman</a>.
  </div>
  <div class="footer__social">
    <?php dynamic_sidebar('footer_social'); ?>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
