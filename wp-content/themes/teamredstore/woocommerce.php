<?php get_header(); ?>

<div class="content container-fluid">
  <div class="container p-5">
    <?php if ( have_posts() ) : ?>
    
    <?php woocommerce_content(); ?>
    
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>