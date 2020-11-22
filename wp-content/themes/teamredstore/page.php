<?php get_header(); ?>

<div class="content container-fluid">
  <div class="container p-5">
    <?php if(have_posts()): while(have_posts()) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; else: endif; ?>
  </div>
</div>

<?php get_footer(); ?>