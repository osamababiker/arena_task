<?php

get_header(); 
global $wp_query;
?>

<!-- home jumbotron section -->
<section class="jumbotron bg-white">
  <div class="container-fluid d-md-flex justify-content-between ">
      <div class="jumbotron-details animate__animated animate__bounce">
        <?php the_field('title'); ?>
        <?php the_field('sub_title'); ?> 
        <p class="">
            <?php the_field('bio'); ?>
        </p>
        <?php
            $link = get_field('quotation');
            if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn arena-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
      <div class="jumbotron-images d-flex">
          <div class="left-images animate__animated animate__backInRight">
            <?php
                $left_image_top = get_field('left_image_top');
                $left_image_bottom = get_field('left_image_bottom');
                if( !empty( $left_image_top ) ): ?>
                    <img class="d-block img-fluid" src="<?php echo esc_url($left_image_top); ?>" alt="" />
                <?php endif;

                if( !empty( $left_image_bottom ) ): ?>
                    <img class="d-block img-fluid" src="<?php echo esc_url($left_image_bottom); ?>" alt="" />
            <?php endif; ?>
          </div>
          <div class="right-images animate__animated animate__backInRight">
            <?php
                $right_image_top = get_field('right_image_top');
                $right_image_bottom = get_field('right_image_bottom');
                if( !empty( $right_image_top ) ): ?>
                    <img class="d-block img-fluid" src="<?php echo esc_url($right_image_top); ?>" alt="" />
                <?php endif;

                if( !empty( $right_image_bottom ) ): ?>
                    <img class="d-block img-fluid" src="<?php echo esc_url($right_image_bottom); ?>" alt="" />
            <?php endif; ?>
          </div>
      </div>
  </div>
</section>
<!-- properties section -->
<section class="properties">
  <div class="container-fluid section-padding">
      <h4 class="properties-section-lable"> <?php the_field('booking_label'); ?> </h4>
      <h2 class="section-title"> <?php the_field('booking_title'); ?>  </h2>
      <?php the_field('booking_bio'); ?>

      <div
        class="row boxes"
        data-page="<?= get_query_var('paged') ? get_query_var('paged') : 1  ?>"
        data-max="<?= $wp_query->max_num_pages; ?>"
        >
        <?php
            $query = new WP_Query(array(
            'post_type' => 'property',
            'posts_per_page' => 3
            ));

            while ($query->have_posts()) {
            $query->the_post(); ?>

            <!-- single property  -->
            <?php get_template_part('template-parts/posts'); ?>

            <?php } wp_reset_postdata(); 
        ?>

      </div>
      <div class="text-center more-btn">
        <a href="javascript:void(0)" id="more-btn">
            Load More
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
              <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg>
        </a>
      </div>
  </div>
</section>

<!-- contact us section -->
<section class="contact-us">
  <div class="container-fluid section-padding">
      <h4 class="contact-section-lable" style=""> <?php the_field('contact_label'); ?> </h4>
      <h2 class="section-title"> <?php the_field('contact_title'); ?> </h2>
      <div class="contact-form">
        <?php the_field('contact_form');?>
      </div>
  </div>
</section>

<?php get_footer();

?>