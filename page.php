<?php get_header(); ?>


<?php if (have_posts()): ?>

  <?php while (have_posts()):
    the_post();
    // $author_id = get_the_author_meta('ID');
    ?>

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
    </main>

  <?php endwhile; endif; ?>
  
<?php get_footer(); ?>