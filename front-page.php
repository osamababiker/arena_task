<?php

get_header(); ?>

<!-- Page content-->
      <!-- Page title-->
      <section class="container pt-5 pb-4 pb-lg-0 my-md-2 my-lg-5">
        <div class="row pt-5 pb-4 pb-lg-5 mb-2 mt-1 mt-sm-2 my-xl-3">
          <div class="col-md-7">
            <h1 class="display-3 fw-medium text-uppercase mb-0">مدونة عن التقنية , الحياة والبزنس</h1>
          </div>
          <div class="col-md-5 col-lg-4 offset-lg-1 pt-3 pt-md-2">
            <p class="mb-0">
              هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
            </p>
          </div>
        </div>
        <hr>
      </section>
      <!-- Featured posts-->
      <section class="container mt-2 mt-md-0 pb-5 mb-md-2 mb-lg-3 mb-xl-4 mb-xxl-5">
        <!-- Filters-->
        <div class="row align-items-center">
          <div class="col-sm-8 col-lg-4 col-xl-3 offset-xl-1 order-sm-2 mb-3 mb-sm-0">
            <div class="position-relative mb-4 mb-lg-5"><i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control ps-5" type="search" placeholder="ابحث عن مقال ... ">
            </div>
          </div>
          <div class="col-sm-4 col-lg-8 order-sm-1">
            <!-- Visible on screens > 991px-->
            <div class="d-none d-lg-flex flex-wrap align-items-center">
              <h3 class="h6 mb-2 me-4">المواضيع :</h3>
              <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">عام</a>
              <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">التصميم وتجربة المستخدم</a>
              <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">كتب</a>
              <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">البرمجة</a>
              <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">البزنس </a>
            </div>
            <!-- Visible on screens < 992px-->
            <div class="dropdown d-lg-none">
              <button class="btn btn-outline-secondary dropdown-toggle rounded-pill w-100" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Topics</button>
              <div class="dropdown-menu my-1">
                <a class="dropdown-item" href="#">عام</a>
                <a class="dropdown-item" href="#">التصميم وتجربة المستخدم</a>
                <a class="dropdown-item" href="#">كتب</a>
                <a class="dropdown-item" href="#">البرمجة</a>
                <a class="dropdown-item" href="#">البزنس</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-sm-2 mt-lg-0 pt-4 pt-lg-5 pb-md-4">
          <div class="col-md-7 pb-2 pb-md-0 mb-4 mb-md-0">
            <?php 
              $sticyHomePosts = new WP_Query(array(
                'post_type' => 'property'
                'posts_per_page' => 3
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
            <!-- More articles button --><a class="btn btn-primary mt-n2 mt-sm-n1 mt-md-0" href="<?php echo site_url('/blog'); ?>">أطلع على جميع المقالات</a>
          </div>
          <!-- Relevant articles sidebar-->
          <aside class="col-md-5 col-xl-4 offset-xl-1" style="margin-top: -115px;">
            <div class="position-sticky top-0 ps-md-4 ps-xl-0" style="padding-top: 125px;">
              <h2 class="h4">أقرا ايضا</h2>
              <article class="my-1 my-lg-0 py-2 py-lg-3">
                <h3 class="h6 mb-2 mb-lg-3">
                  <a href="blog-single.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
                </h3>
                <div class="d-flex flex-wrap align-items-center mt-n2">
                  <a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 ms-3" href="#">
                    4 &nbsp; <i class="ai-download fs-lg ms-1"></i>
                  </a>
                  <a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">
                    6 &nbsp; <i class="ai-message fs-lg ms-1"></i>
                  </a>
                  <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                  <span class="fs-sm text-muted mt-2">9 ساعة</span>
                </div>
              </article>
              <article class="my-1 my-lg-0 py-2 py-lg-3">
                <h3 class="h6 mb-2 mb-lg-3">
                  <a href="blog-single.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
                </h3>
                <div class="d-flex flex-wrap align-items-center mt-n2">
                  <a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 ms-3" href="#">
                    4 &nbsp; <i class="ai-download fs-lg ms-1"></i>
                  </a>
                  <a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">
                    6 &nbsp; <i class="ai-message fs-lg ms-1"></i>
                  </a>
                  <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                  <span class="fs-sm text-muted mt-2">9 ساعة</span>
                </div>
              </article>
              <article class="my-1 my-lg-0 py-2 py-lg-3">
                <h3 class="h6 mb-2 mb-lg-3">
                  <a href="blog-single.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
                </h3>
                <div class="d-flex flex-wrap align-items-center mt-n2">
                  <a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 ms-3" href="#">
                    4 &nbsp; <i class="ai-download fs-lg ms-1"></i>
                  </a>
                  <a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">
                    6 &nbsp; <i class="ai-message fs-lg ms-1"></i>
                  </a>
                  <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                  <span class="fs-sm text-muted mt-2">9 ساعة</span>
                </div>
              </article>
            </div>
          </aside>
        </div>
      </section>
      <!-- Popular articles (Carousel)-->
      <section class="bg-secondary py-5">
        <div class="container d-flex align-items-center pt-lg-2 pt-xl-4 pt-xxl-5 pb-3 mt-1 mt-sm-3 mb-3 my-md-4">
          <h2 class="h1 mb-0">الاكثر قراءة</h2>
          <div class="d-flex me-auto">
            <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button" id="prev-popular"><i class="ai-arrow-right"></i></button>
            <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button" id="next-popular"><i class="ai-arrow-left"></i></button>
          </div>
        </div>
        <!-- Swiper slider-->
        <div class="container-start">
          <div class="swiper" data-swiper-options="{
        &quot;slidesPerView&quot;: 1,
        &quot;spaceBetween&quot;: 24,
        &quot;loop&quot;: true,
        &quot;navigation&quot;: {
          &quot;prevEl&quot;: &quot;#prev-popular&quot;,
          &quot;nextEl&quot;: &quot;#next-popular&quot;
        },
        &quot;breakpoints&quot;: {
          &quot;576&quot;: {
            &quot;slidesPerView&quot;: &quot;auto&quot;
          }
        }
      }">
            <div class="swiper-wrapper">
              <!-- Item-->
              <article class="swiper-slide w-sm-auto h-auto">
                <div class="card h-100 border-0 mx-auto" style="max-width: 416px;">
                  <a href="blog-single.html">
                    <img class="card-img-top" src="assets/img/blog/grid/01.jpg" alt="Post image">
                  </a>
                  <div class="card-body pb-4">
                    <div class="d-flex align-items-center mb-4 mt-n1">
                      <span class="fs-sm text-muted">12 ساعة</span>
                      <span class="fs-xs opacity-20 mx-3">|</span>
                      <a class="badge text-nav fs-xs border" href="#">كتب</a>
                    </div>
                    <h3 class="h4 card-title">
                      <a href="blog-single-v1.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
                    </h3>
                    <p class="card-text">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                    </p>
                  </div>
                </div>
              </article>
              <!-- Item-->
              <article class="swiper-slide w-sm-auto h-auto">
                <div class="card h-100 border-0 mx-auto" style="max-width: 416px;">
                  <a href="blog-single.html">
                    <img class="card-img-top" src="assets/img/blog/grid/01.jpg" alt="Post image">
                  </a>
                  <div class="card-body pb-4">
                    <div class="d-flex align-items-center mb-4 mt-n1">
                      <span class="fs-sm text-muted">12 ساعة</span>
                      <span class="fs-xs opacity-20 mx-3">|</span>
                      <a class="badge text-nav fs-xs border" href="#">كتب</a>
                    </div>
                    <h3 class="h4 card-title">
                      <a href="blog-single-v1.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
                    </h3>
                    <p class="card-text">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                    </p>
                  </div>
                </div> 
              </article>
              <!-- Item-->
              <article class="swiper-slide w-sm-auto h-auto">
                <div class="card h-100 border-0 mx-auto" style="max-width: 416px;">
                  <a href="blog-single.html">
                    <img class="card-img-top" src="assets/img/blog/grid/01.jpg" alt="Post image">
                  </a>
                  <div class="card-body pb-4">
                    <div class="d-flex align-items-center mb-4 mt-n1">
                      <span class="fs-sm text-muted">12 ساعة</span>
                      <span class="fs-xs opacity-20 mx-3">|</span>
                      <a class="badge text-nav fs-xs border" href="#">كتب</a>
                    </div>
                    <h3 class="h4 card-title">
                      <a href="blog-single-v1.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
                    </h3>
                    <p class="card-text">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                    </p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
        <!-- All articles button-->
        <div class="container text-center pt-4 pb-1 pb-sm-3 pb-md-4 py-lg-5 mb-xl-1 mb-xxl-4 mt-2 mt-lg-0"><a class="btn btn-primary mb-1" href="blog-grid-sidebar.html">اطلع على المزيد</a></div>
      </section>
    </main>
    <!-- Subscription-->
    <div class="dark-mode container mb-2 mb-md-3 mb-xl-4 pb-2">
      <div class="position-relative bg-dark rounded-5 overflow-hidden p-md-5 p-4">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255, 255, 255, .02);"></div>
        <div class="position-relative p-xl-5 p-md-4 py-4 px-sm-3">
          <h2 class="h1 pb-md-4 pb-3 mt-n2">كن على اطلاع باخر المقالات</h2>
          <div class="row gy-md-5 gy-4 gx-xl-5">
            <div class="col-lg-7">
              <div class="row row-cols-sm-3 row-cols-2 gy-lg-4 gy-3 gx-xl-4 gx-sm-3 gx-2">
                <div class="col">
                  <div class="form-check mb-0">
                    <label class="form-check-label fs-base fw-medium" for="advert-updates">مقالات عن الكتب</label>
                    <input class="form-check-input" id="advert-updates" type="checkbox" checked>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check mb-0">
                    <label class="form-check-label fs-base fw-medium" for="newsletter">مقالات عن البرمجة</label>
                    <input class="form-check-input" id="newsletter" type="checkbox">
                  </div>
                </div>
                <div class="col">
                  <div class="form-check mb-0">
                    <label class="form-check-label fs-base fw-medium" for="week-in-review">مقالات عن التصميم</label>
                    <input class="form-check-input" id="week-in-review" type="checkbox">
                  </div>
                </div>
                <div class="col">
                  <div class="form-check mb-0">
                    <label class="form-check-label fs-base fw-medium" for="inspiration">مقالات عن البزنس</label>
                    <input class="form-check-input" id="inspiration" type="checkbox">
                  </div>
                </div>
                <div class="col">
                  <div class="form-check mb-0">
                    <label class="form-check-label fs-base fw-medium" for="psychology">مقالات عامة</label>
                    <input class="form-check-input" id="psychology" type="checkbox">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="input-group rounded-pill">
                <input class="form-control" type="text" placeholder="Your email">
                <button class="btn btn-primary rounded-pill" type="button">اشتراك</button>
              </div>
              <div class="form-text mt-3 fs-sm">* نعم انا اوافق على  <a href='#'>الشروط</a> و <a href='#'>سياسة الاستخدام</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer();

?>