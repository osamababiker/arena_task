<?php

get_header(); ?>

<!-- home jumbotron section -->
<section class="jumbotron bg-white">
  <div class="container-fluid d-md-flex justify-content-between ">
      <div class="jumbotron-details">
          <h1 class="">Fixed Rate Bonds</h1>
          <h2 class=""> With Risk-Free <br> Guranteed Returns </h2>
          <p class="">
              Lorem ipsum is placeholder text commonly used in the graphic. 
              Lorem ipsum is placeholder text commonly used in the graphic.
            </p>
          <button class="btn arena-btn" role="button">Fill Out a Questionnair</button>
      </div>
      <div class="jumbotron-images d-flex">
          <div class="left-images">
              <img src="<?php echo get_theme_file_uri('assets/img/1.png') ?>" class="d-block img-fluid" alt="">
              <img src="<?php echo get_theme_file_uri('assets/img/2.png') ?>" class="d-block img-fluid" alt="">
          </div>
          <div class="right-images">
              <img src="<?php echo get_theme_file_uri('assets/img/3.png') ?>" class="d-block img-fluid" alt="">
              <img src="<?php echo get_theme_file_uri('assets/img/4.png') ?>" class="d-block img-fluid" alt="">
          </div>
      </div>
  </div>
</section>
<!-- properties section -->
<section class="properties">
  <div class="container-fluid section-padding">
      <h4 class="properties-section-lable"> Book Now  </h4>
      <h2 class="section-title"> Our Properties </h2>
      <p class="section-bio pt-3"> Choose from our spectacular rang of iconic properties in Dubai starting from AED 1,000,000 only. </p>
      <p class="section-bio primary-color">20% Guranteed Rental Income Per Annum*</p>

      <div class="row boxes">
        <?php 
            $sticyHomePosts = new WP_Query(array(
            'posts_per_page' => 2
            ));

            while ($sticyHomePosts->have_posts()) {
            $sticyHomePosts->the_post(); ?>
            
            <!-- Article-->
            <article class="pb-5 pt-sm-1 mb-lg-3 mb-xl-4">
            <a href="<?php the_permalink(); ?>">
                <div class="rounded-5">
                <?php the_post_thumbnail( 'medium', array('class' => 'rounded-5') ); ?>
                </div>
                
            </a>
            <h2 class="h3 pt-3 mt-2 mt-md-3">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p> <?php echo wp_trim_words(get_the_content(), 18); ?> ...</p>
            <div class="d-flex flex-wrap align-items-center pt-1 mt-n2">
                <a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 ms-3" href="#">
                6 &nbsp; <i class="ai-download fs-lg ms-1"></i>
                </a>
                <a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">
                12 &nbsp; <i class="ai-message fs-lg ms-1"></i>
                </a>
                <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                <span class="fs-sm text-muted mt-2"><?php the_time('F j, Y'); ?></span>
                <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                <a class="badge text-nav fs-xs border mt-2" href="#"><?php echo get_the_category_list(', '); ?></a>
            </div>
            </article>

            <?php } wp_reset_postdata(); 
        ?>
          <div class="col-md-4">
              <div class="card shadow-sm my-3">
                  <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/img/box1.png') ?>" alt="">
                  <div class="card-body">
                      <h3 class="card-title">Consectetur Adipiscing</h3>
                      <p class="primary-color">Lorem ipsum is placeholder</p>
                      <div class="d-flex justify-content-between">
                          <p id="price">AED 600,000</p>
                          <p id="plan">On-plan</p>
                      </div>
                      <div class="d-flex justify-content-between payments-details">
                          <div class="">
                              <h5>Quartely</h5>
                              <p>paid returns</p>
                          </div>
                          <div class="">
                              <h5>20%</h5>
                              <p>annual yield</p>
                          </div>
                      </div>
                  </div>
                  <div class="row py-3">
                  <button class="col-8 offset-2 btn arena-btn">Enquire Now</button>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card shadow-sm my-3">
                  <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/img/box2.png') ?>" alt="">
                  <div class="card-body">
                      <h3 class="card-title">Consectetur Adipiscing</h3>
                      <p class="primary-color">Lorem ipsum is placeholder</p>
                      <div class="d-flex justify-content-between">
                          <p id="price">AED 600,000</p>
                          <p id="plan">On-plan</p>
                      </div>
                      <div class="d-flex justify-content-between payments-details">
                          <div class="">
                              <h5>Quartely</h5>
                              <p>paid returns</p>
                          </div>
                          <div class="">
                              <h5>20%</h5>
                              <p>annual yield</p>
                          </div>
                      </div>
                  </div>
                  <div class="row py-3">
                  <button class="col-8 offset-2 btn arena-btn">Enquire Now</button>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card shadow-sm my-3">
                  <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/img/box3.png') ?>" alt="">
                  <div class="card-body">
                      <h3 class="card-title">Consectetur Adipiscing</h3>
                      <p class="primary-color">Lorem ipsum is placeholder</p>
                      <div class="d-flex justify-content-between">
                          <p id="price">AED 600,000</p>
                          <p id="plan">On-plan</p>
                      </div>
                      <div class="d-flex justify-content-between payments-details">
                          <div class="">
                              <h5>Quartely</h5>
                              <p>paid returns</p>
                          </div>
                          <div class="">
                              <h5>20%</h5>
                              <p>annual yield</p>
                          </div>
                      </div>
                  </div>
                  <div class="row py-3">
                  <button class="col-8 offset-2 btn arena-btn">Enquire Now</button>
                  </div>
              </div>
          </div>
      </div>
      <div class="text-center more-btn">
          <a href="#" id="more-btn">Load More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
              <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg> </a>
      </div>
  </div>
</section>
<!-- contact us section -->
<section class="contact-us">
  <div class="container-fluid section-padding">
      <h4 class="contact-section-lable" style=""> Get in touch </h4>
      <h2 class="section-title"> Interested To Know More? </h2>
      <div class="contact-form">
          <form action="">
              <div class="row">
                  <div class="col-md-6">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="form-control">
                  </div>
                  <div class="col-md-6">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <label for="phone">Phone Number</label>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <div class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <a class="dropdown-item" href="#">
                                      <img src="<?php echo get_theme_file_uri('assets/img/uae-flag.png') ?>" width="20" height="20" alt="">
                                      <span>+971</span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                          <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                      </svg>
                                  </a>
                              </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with dropdown button">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <label for="amount">Investment Amount</label>
                      <select name="amount" id="amount" class="form-control">
                          <option value="100,000">100,000 EUR</option>
                      </select>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="message">Message</label>
                      <textarea name="message" id="message" cols="30" rows="6" class="form-control"></textarea>
                  </div>
              </div>
              <div class="row">
                  <div class="col-6">
                      <button class="btn contact-btn arena-btn">Submit</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</section>

<?php get_footer();

?>