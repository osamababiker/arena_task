<div class="col-md-4">
    <div class="card shadow-sm my-3">
    <?php the_post_thumbnail( 'small', array('class' => 'card-img-top') ); ?>
        <div class="card-body">
            <h3 class="card-title">
            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
            </h3>
            <p class="primary-color"><?php echo wp_trim_words(get_the_content(), 18); ?> ...</p>
            <div class="d-flex justify-content-between">
                <p id="price">AED <?php the_field('property_price') ?></p>
                <p id="plan">On-plan</p>
            </div>
            <div class="d-flex justify-content-between payments-details">
                <div class="">
                    <h5><?php the_field('package_type') ?></h5>
                    <p>paid returns</p>
                </div>
                <div class="">
                    <h5><?php the_field('paid_percent') ?>%</h5>
                    <p>annual yield</p>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <button class="col-8 offset-2 btn arena-btn">Enquire Now</button>
        </div>
    </div>
</div>