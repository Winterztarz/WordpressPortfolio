<?php get_header(); ?>

      <div class="container">

    <section>

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <section>
              <?php the_content(); ?>
          </section>
        <?php endwhile; ?>
        <?php else : ?>
        <p><?php __('No Page Found'); ?></p>
      <?php endif; ?>

    </section>

    <section class="boxes">
      <p class="hh"> Want to find out more? </p>

      <div class="row">
        <div class="col-lg-4">
          <div class="box">
            <a href="<?php echo get_page_link(8); ?>"><img class="rounded-circle" src="<?php bloginfo('template_url'); ?>/img/lulul.jpg" alt="Generic placeholder image" width="140" height="140"></a>
          <?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>
          <p><a class="btn btn-secondary" href="<?php echo get_page_link(8); ?>" role="button">Click here »</a></p>
        </div>
      </div>

        <div class="col-lg-4">
          <div class="box">
          <a href="<?php echo get_page_link(10); ?>"><img class="rounded-circle" src="<?php bloginfo('template_url'); ?>/img/lolil.jpg" alt="Generic placeholder image" width="140" height="140"></a>
          <?php if(is_active_sidebar('box2')) : ?>
            <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>
          <p><a class="btn btn-secondary" href="<?php echo get_page_link(10); ?>" role="button">Click here »</a></p>
        </div>
      </div>

        <div class="col-lg-4">
          <div class="box">
          <a href="<?php echo get_page_link(12); ?>"><img class="rounded-circle" src="<?php bloginfo('template_url'); ?>/img/conta.jpg" alt="Generic placeholder image" width="140" height="140"></a>
          <?php if(is_active_sidebar('box3')) : ?>
            <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
        <p><a class="btn btn-secondary" href="<?php echo get_page_link(12); ?>" role="button">Click here »</a></p>
        </div>
      </div>
      </div>

    </section>

</div>
<hr>

<?php get_footer(); ?>
