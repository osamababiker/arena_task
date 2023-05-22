<?php
  
  get_header();
 ?>
  <!-- Page content-->
  <!-- Container-->
  <section class="container pt-5 mt-5"> 
    <!-- Breadcrumb-->
    <nav aria-label="breadcrumb">
      <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">الرئيسية</a></li>
        <li class="breadcrumb-item"><a href="<?php echo site_url('/blog'); ?>">المدونة</a></li>
      </ol>
    </nav>

    <div class="row">
      <?php 
       while(have_posts()) {
        the_post(); ?>
        <div class="col-lg-9 col-xl-8 pe-lg-4 pe-xl-0">
          <!-- Post title + post meta-->
          <h1 class="pb-2 pb-lg-3"><?php the_title(); ?></h1>
          <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom mb-4">
            <div class="d-flex align-items-center mb-4 me-4">
              <span class="fs-sm me-2">نشر بواسطة :</span>
               <?php the_author_posts_link(); ?>  
            </div>
            <div class="d-flex align-items-center mb-4">
              <span class="fs-sm me-2">تحميل المقال :</span>
              <div class="d-flex">
                <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="تحميل">
                  <i class="ai-download"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- Post content-->
          <p class="fs-lg pt-2 pt-sm-3">
            <?php the_content(); ?>
          </p>

          <!-- Comments-->
          <div class="pt-4 pt-xl-5 mt-4" id="comments">
            <h2 class="h1 py-lg-1 py-xl-3">14 تعليق</h2>
            <!-- Comment-->
            <div class="border-bottom py-4 mt-2 mb-4">
              <div class="d-flex align-items-center pb-1 mb-3">
                <img class="rounded-circle" src="assets/img/logo.jpeg" width="48" alt="Comment author">
                <div class="pe-3">
                  <h6 class="mb-0">احمد علي</h6><span class="fs-sm text-muted">5 ساعة</span>
                </div>
              </div>
              <p class="pb-2 mb-0">
                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.  
              </p>
            </div>
            <!-- All comments button-->
            <div class="text-end pb-5 mb-lg-1 mb-xl-3"><a class="btn btn-link px-0" href="#">اعرض جميع التعليقات<i class="ai-chevron-left fs-lg ms-1"></i></a></div>
            <!-- Comment form-->
            <div class="card border-0 bg-secondary pt-2 p-md-2 p-xl-3 p-xxl-4 mt-n3 mt-md-0">
              <div class="card-body">
                <h2 class="pb-2 pb-lg-3 pb-xl-4">اترك تعليقا</h2>
                <form class="row needs-validation g-4" novalidate>
                  <div class="col-sm-6">
                    <label class="form-label" for="c-name">الاسم</label>
                    <input class="form-control" type="text" placeholder="الاسم كاملا" required id="c-name">
                    <div class="invalid-feedback">الرجاء ادخال الاسم!</div>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="c-email">الايميل</label>
                    <input class="form-control" type="email" placeholder="الايميل الخاص بك" required id="c-email">
                    <div class="invalid-feedback">الرجاء ادخال الايميل الخاص بك!</div>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="c-comment">التعليق</label>
                    <textarea class="form-control" rows="4" placeholder="اكتب التعليق الخاص بك هنا ..." required id="c-comment"></textarea>
                    <div class="invalid-feedback">الرجاء كتابة التعليق اولا!</div>
                  </div>
                  <div class="col-12">
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="c-save">
                      <label class="form-check-label" for="c-save">عرض الاسم والايميل ؟</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">نشر التعليق</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- Sidebar (offcanvas on sreens < 992px)-->
      <aside class="col-lg-3 offset-xl-1">
        <div class="offcanvas-lg offcanvas-end" id="sidebar">
          <div class="offcanvas-header">
            <h4 class="offcanvas-title"> القائمة الجانبية </h4>
            <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebar"></button>
          </div>
          <div class="offcanvas-body">
            <!-- Search box-->
            <div class="position-relative mb-4 mb-lg-5"><i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control ps-5" type="search" placeholder="ابحث عن مقال ... ">
            </div>
            <!-- Popular posts-->
            <h4 class="pt-1 pt-lg-0 mt-lg-n2">الاكثر قراءة :</h4>
            <div class="mb-lg-5 mb-4">
              <article class="position-relative pb-2 mb-3 mb-lg-4">
                <img class="rounded-5" src="assets/img/blog/list/01.jpg" alt="Post image">
                <h5 class="h6 mt-3 mb-0">
                  <a class="stretched-link" href="blog-single-v1.html"> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة </a>
                </h5>
              </article>
              <article class="position-relative">
                <img class="rounded-5" src="assets/img/blog/list/06.jpg" alt="Post image">
                <h5 class="h6 mt-3 mb-0">
                  <a class="stretched-link" href="blog-single-v2.html">
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة
                  </a>
                </h5>
              </article>
            </div>

            <!-- Relevant topics-->
            <h4 class="pt-3 pt-lg-1 mb-4">مواضيع اخرى  :</h4>
            <div class="d-flex flex-wrap mt-n3 ms-n3 mb-lg-5 mb-4 pb-3 pb-lg-0">
              <a class="btn btn-outline-secondary rounded-pill mt-3 ms-3" href="#">كتب</a>
              <a class="btn btn-outline-secondary rounded-pill mt-3 ms-3" href="#">عام</a>
              <a class="btn btn-outline-secondary rounded-pill mt-3 ms-3" href="#">البرمجة</a>
              <a class="btn btn-outline-secondary rounded-pill mt-3 ms-3" href="#">التصميم</a></div>
          </div>
        </div>
      </aside>
    </div>
  </section>
  <!-- Related articles (carousel) -->
  <section class="container py-5 mt-sm-2 my-md-4 my-xl-5">
    <div class="d-flex align-items-center pb-3 mb-3 mb-lg-4 mt-2 mt-xxl-3">
      <h2 class="h1 mb-0 me-4">مقالات مشابهة</h2>
      <div class="d-flex me-auto">
        <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle ms-3" type="button" id="prev-post"><i class="ai-arrow-right"></i></button>
        <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle" type="button" id="next-post"><i class="ai-arrow-left"></i></button>
      </div>
    </div>
    <div class="swiper pb-2 pb-sm-3 pb-md-4" data-swiper-options="
        {
          &quot;spaceBetween&quot;: 24,
          &quot;loop&quot;: true,
          &quot;autoHeight&quot;: true,
          &quot;navigation&quot;: {
            &quot;prevEl&quot;: &quot;#prev-post&quot;,
            &quot;nextEl&quot;: &quot;#next-post&quot;
          },
          &quot;breakpoints&quot;: {
            &quot;576&quot;: { &quot;slidesPerView&quot;: 2 },
            &quot;1000&quot;: { &quot;slidesPerView&quot;: 3 }
          }
        }
      ">
      <div class="swiper-wrapper">
        <?php 
        $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
        if( $related ) foreach( $related as $post ) {
        setup_postdata($post); ?>
        <!-- Post-->
        <article class="swiper-slide">
          <div class="position-relative">
            <?php the_post_thumbnail( 'medium', array('class' => 'rounded-5') ); ?>
            <h3 class="h4 mt-4 mb-0">
              <a class="stretched-link" href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a>
            </h3>
          </div>
        </article>
        <?php }
        wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <!-- Sidebar toggle button-->
  <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas" data-bs-target="#sidebar"><i class="ai-layout-column me-2"></i>القائمة الجانبية</button>
</main>
<!-- Subscription-->
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

<?php
  get_footer();

?>