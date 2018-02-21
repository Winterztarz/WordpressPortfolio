<?php get_header(); ?>


      <div class="container">

    <section>

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <section>
              <h1 class="leftt"><?php the_title(); ?></h1>
              <?php the_content(); ?>
              <section>
                  <div class="row">
                  			<div class="col-md-6">
                          <?php if (is_page('About Me')) : ?>
                          <?php $loop = new WP_Query( array( 'post_type' => 'skills', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                            <h4><?php the_title(); ?></h4>
                            <div class="progress">
                              	<div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo get_field('skills'); ?>%">
                              			<span class="sr-only">80%</span>
                              	</div>
                            </div>

                          <?php endwhile; wp_reset_query(); ?>
</div>
              <script>
              $(function() {
                 $("#one").addClass("progress-bar-purple");
              });
              </script>
                        <div class="col-md-6">

                          <?php $loop = new WP_Query( array( 'post_type' => 'language', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                            <h4><?php the_title(); ?></h4>
                            <div class="progress">
                              	<div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo get_field('language'); ?>%">
                              			<span class="sr-only">80%</span>
                              	</div>
                            </div>

                          <?php endwhile; wp_reset_query(); ?>
<?php endif; ?>
                  		</div>
              </section>
          </section>
        <?php endwhile; ?>
        <?php else : ?>
        <p><?php __('No Page Found'); ?></p>
      <?php endif; ?>

    </section>

</div>
<hr>
<?php get_footer(); ?>
