<?php get_header(); ?>


<?php if (have_posts()): ?>

  <?php while (have_posts()):
    the_post();
    $author_id = get_the_author_meta('ID'); ?>

    <main>
      <div class="overlay-part">
        <div class="container">
          <div class="top-part">
            <p id="breadcrumbs"><span><span><a href="https://getassist.net/category/social-media/">Social Media</a></span> /
                <span><a href="https://getassist.net/category/social-media/facebook/">Facebook</a></span> / <span><a
                    href="https://getassist.net/category/social-media/facebook/">Facebook</a></span></span></p>
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
      <div class="container all-page">
        <div class="bg-radius-white">
          <div class="blog-details">
            <ul>
              <li><a href="#"><?php echo get_avatar($author_id, 96);
              the_author(); ?> </a></li>
              <li>
                <span class="date-icon-flex">
                  <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#a)" stroke="#093a52" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path
                        d="M12.667 3.007H3.333C2.597 3.007 2 3.604 2 4.34v9.334c0 .736.597 1.333 1.333 1.333h9.334c.736 0 1.333-.597 1.333-1.333V4.34c0-.736-.597-1.333-1.333-1.333m-2-1.333V4.34M5.333 1.674V4.34M2 7.007h12">
                      </path>
                    </g>
                    <defs>
                      <clipPath id="a">
                        <path fill="#fff" d="M0 .34h16v16H0z"></path>
                      </clipPath>
                    </defs>
                  </svg>
                  Published <?php echo get_the_date('m j, Y'); ?>
                </span>
              </li>
              <li><a href="#"><?php echo get_avatar($author_id, 96); ?></a>
                <span>
                  Fact checked by </span><a href="#"><?php the_author(); ?></a>
              </li>
            </ul>
          </div>
          <p></p>

          <div class="row">
            <div class="col-lg-9">
              <?php the_content(); ?>
            </div>

            <div class="col-lg-3">
              <aside>
                <div class="sub-seperator"> <span>Our Services</span></div>
                <ul class="our-services">
                  <li><a href="#">Tax Outsourcing</a></li>
                  <li><a href="#">Accounting & Bookkeeping Outsourcing</a></li>
                  <li><a href="#">CPA & CA</a></li>
                  <li><a href="#">Payroll Outsourcing</a></li>
                  <li><a href="#">UK, US, Canada, and Australia Outsourcing</a></li>
                </ul>
                <div class="share">
                  <div class="h6">Share on:</div>
                  <ul class="footer-links-flex">
                    <li>
                      <a href="#">
                        <svg fill="#000" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                          <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141m0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7m146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8m76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8M398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg fill="#000" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                          <path
                            d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg fill="#000" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                          <path
                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg fill="#000" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                          <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                          <path
                            d="M80 299.3V512h116V299.3h86.5l18-97.8H196v-34.6c0-51.7 20.3-71.5 72.7-71.5 16.3 0 29.4.4 37 1.2V7.9C291.4 4 256.4 0 236.2 0 129.3 0 80 50.5 80 159.4v42.1H14v97.8z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <svg fill="#000" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                          <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                          <path
                            d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5">
                          </path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>

      <!-- ================ RELATED POST ================ -->
      <div class="container">
        <div class="big-head related-post">Related Post</div>
          <div class="row category">

            <!-- ================= START HERE =================== -->

            <?php

            $categories = get_the_category();
            $category_id = $categories[0]->cat_ID;
            // $posts_per_page = 8;
        
            $args = array(
              'cat' => $category_id,
              // 'posts_per_page' => $posts_per_page,
              'post_status' => 'publish',
            );

            $query = new WP_Query($args);
            if ($query->have_posts()):
              while ($query->have_posts()):
                $query->the_post();
                ?>

                <!-- ------------ CONTENT HERE ======================= -->

                <div class="col-lg-3 col-md-6 mb-3">
                  <div class="row h-100">
                    <div class="col-lg-12">
                      <div class="site-card-flex">
                        <div class="img-placeholder">
                          <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                        </div>
                        <div class="site-card-content-flex p-20">
                          <ul>
                            <li><a href="#" class="cat-g">Software &amp; Apps</a></li>
                          </ul>
                          <a href="<?php the_permalink(); ?>" class="truncate site-title"><?php the_title(); ?></a>
                          <div class="mt-auto author">
                            <span>
                              <svg fill="#c7c7c7" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                  d="M304 128a80 80 0 1 0-160 0 80 80 0 1 0 160 0m-208 0a128 128 0 1 1 256 0 128 128 0 1 1-256 0M49.3 464h349.4c-8.9-63.3-63.3-112-129-112h-91.4c-65.7 0-120.1 48.7-129 112M0 482.3C0 383.8 79.8 304 178.3 304h91.4c98.5 0 178.3 79.8 178.3 178.3 0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3">
                                </path>
                              </svg>
                            </span>
                            <a href="#" class="aut-name"><?php the_author(); ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- -------------------- END HERE --------------------- -->

                <?php
              endwhile;

              wp_reset_postdata();
            else:
              echo '<p>No posts found in this category.</p>';
            endif;
            ?>
            <!-- ==================== END HERE ================== -->
          </div>
      </div>

    </main>

  <?php endwhile; endif; ?>



<?php get_footer(); ?>