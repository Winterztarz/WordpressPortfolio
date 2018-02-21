<?php get_header(); ?>


      <div class="container">

    <section>
      <p class="hh"> My Work </p>
      <p>Here you can find different websites i have coded and pictures i have painted and edited. Click the pictures if you want to check out the sites, or take a closer look at the pictures.
      </p>
      </section>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <section>
      <div class="leftt">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </section>
  <?php endwhile; ?>
  <?php else : ?>
  <p><?php __('No Post Found'); ?></p>
<?php endif; ?>

</div>
<hr>
<?php get_footer(); ?>
