<?php get_header(); ?>

<main>

   <!-- ovelay-part start -->
   <?php if (is_active_sidebar('achieve_excellence')): ?>
      <?php dynamic_sidebar('achieve_excellence'); ?>
   <?php else: ?>
      <!-- Time to add some widgets! -->
      <p>Widgets no visible</p>
   <?php endif; ?>

   <!-- ==== top email sopftware        -->
   <?php if (is_active_sidebar('top_email_software')): ?>
      <?php dynamic_sidebar('top_email_software'); ?>
   <?php else: ?>
      <!-- Time to add some widgets! -->
      <p>Widgets no visible</p>
   <?php endif; ?>


   <!-- ====================== Our Exceptional Email Solutions ================ -->
   <?php if (is_active_sidebar('our_exceptional_email_solutions')): ?>
      <?php dynamic_sidebar('our_exceptional_email_solutions'); ?>
   <?php else: ?>
      <!-- Time to add some widgets! -->
      <p>Widgets no visible</p>
   <?php endif; ?>


   <!-- ==========Our Exceptional Email Solutions =================== -->

   <?php if (is_active_sidebar('our_exceptional_email_solutions_1')): ?>
      <?php dynamic_sidebar('our_exceptional_email_solutions_1'); ?>
   <?php else: ?>
      <!-- Time to add some widgets! -->
      <p>Widgets no visible</p>
   <?php endif; ?>

   <!-- ============= Our Exceptional Email Solutions =========== -->
   <?php if (is_active_sidebar('our_exceptional_email_solutions_2')): ?>
      <?php dynamic_sidebar('our_exceptional_email_solutions_2'); ?>
   <?php else: ?>
      <!-- Time to add some widgets! -->
      <p>Widgets no visible</p>
   <?php endif; ?>


   <!-- ================= Our Exceptional Email Solutions ============== -->
   <?php if (is_active_sidebar('our_exceptional_email_solutions_3')): ?>
      <?php dynamic_sidebar('our_exceptional_email_solutions_3'); ?>
   <?php else: ?>
      <!-- Time to add some widgets! -->
      <p>Widgets no visible</p>
   <?php endif; ?>


   <?php if (is_active_sidebar('our_exceptional_email_solutions_4')): ?>
      <?php dynamic_sidebar('our_exceptional_email_solutions_4'); ?>
   <?php else: ?>
      <!-- Time to add some widgets! -->
      <p>Widgets no visible</p>
   <?php endif; ?>

   <!-- =========================== Software App ===================== -->
   <div class="bg-primary">
      <div class="container card-header-bg mb-5">

         <?php if (is_active_sidebar('software_apps')): ?>
            <?php dynamic_sidebar('software_apps'); ?>
         <?php else: ?>
            <!-- Time to add some widgets! -->
            <p>Widgets no visible</p>
         <?php endif; ?>

         <!-- =============== this is content of above ============== -->


         <!-- ============== end here ===================== -->



         <div id="All" class="tabcontent">
            <div class="row overflow-mobail-cards">
               <?php
               $category_id = 22;
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'cat' => $category_id,
                  'order' => 'DESC'
               );

               $custom_query = new WP_Query($args);

               if ($custom_query->have_posts()):
                  // Loop through the posts
                  while ($custom_query->have_posts()):
                     $custom_query->the_post(); ?>


                     <div class="col-lg-4 col-md-6 mb-3">
                        <div class="row h-100">
                           <div class="col-lg-12">
                              <div class="site-card-flex">
                                 <div class="img-placeholder">
                                    <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('auto', ['class' => 'img-fluid']); ?>
                                    </a>
                                 </div>
                                 <div class="site-card-content-flex p-20">
                                    <ul>
                                       <li><a href="#" class="cat-g">Software &amp; Apps</a></li>
                                    </ul>
                                    <a href="<?php the_permalink(); ?>" class="sw_app_title"><?php the_title(); ?></a>
                                    <div class="mt-auto author">
                                       <span>
                                          <svg fill="#c7c7c7" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 448 512">

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





                  <?php endwhile;

                  // Reset post data after custom query
                  wp_reset_postdata();
               else:
                  echo 'No posts found in this category.';
               endif;
               ?>

               <!-- =================== END HERE LOOP =================================== -->
               <!-- ====================================================================== -->
            </div>
         </div>



         <div id="Job Application" class="tabcontent" style="display: none;">
            <div class="row overflow-mobail-cards">
               <?php
               $category_id = 23;
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'cat' => $category_id,
                  'order' => 'DESC'
               );

               $custom_query = new WP_Query($args);

               if ($custom_query->have_posts()):
                  // Loop through the posts
                  while ($custom_query->have_posts()):
                     $custom_query->the_post(); ?>


                     <div class="col-lg-4 col-md-6 mb-3">
                        <div class="row h-100">
                           <div class="col-lg-12">
                              <div class="site-card-flex">
                                 <div class="img-placeholder">
                                    <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('auto', ['class' => 'img-fluid']); ?>
                                    </a>
                                 </div>
                                 <div class="site-card-content-flex p-20">
                                    <ul>
                                       <li><a href="#" class="cat-g">Software &amp; Apps</a></li>
                                    </ul>
                                    <a href="<?php the_permalink(); ?>" class="sw_app_title"><?php the_title(); ?></a>
                                    <div class="mt-auto author">
                                       <span>
                                          <svg fill="#c7c7c7" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 448 512">

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
                  <?php endwhile;
                  
                  // Reset post data after custom query
                  wp_reset_postdata();
               else:
                  echo 'No posts found in this category.';
               endif;
               ?>

               <!-- =================== END HERE LOOP =================================== -->
               <!-- ====================================================================== -->

            </div>
         </div>
         <div id="Leave Application" class="tabcontent" style="display: none;">
            <div class="row overflow-mobail-cards">
               <?php
               $category_id = 24;
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'cat' => $category_id,
                  'order' => 'DESC'
               );

               $custom_query = new WP_Query($args);

               if ($custom_query->have_posts()):
                  // Loop through the posts
                  while ($custom_query->have_posts()):
                     $custom_query->the_post(); ?>


                     <div class="col-lg-4 col-md-6 mb-3">
                        <div class="row h-100">
                           <div class="col-lg-12">
                              <div class="site-card-flex">
                                 <div class="img-placeholder">
                                    <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('auto', ['class' => 'img-fluid']); ?>
                                    </a>
                                 </div>
                                 <div class="site-card-content-flex p-20">
                                    <ul>
                                       <li><a href="#" class="cat-g">Software &amp; Apps</a></li>
                                    </ul>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <div class="mt-auto author">
                                       <span>
                                          <svg fill="#c7c7c7" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 448 512">

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
                  <?php endwhile;

                  // Reset post data after custom query
                  wp_reset_postdata();
               else:
                  echo 'No posts found in this category.';
               endif;
               ?>

               <!-- =================== END HERE LOOP =================================== -->
               <!-- ====================================================================== -->

            </div>
         </div>
         <div id="Resume Format" class="tabcontent" style="display: none;">
            <div class="row overflow-mobail-cards">
               <?php
               $category_id = 25;
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'cat' => $category_id,
                  'order' => 'DESC'
               );

               $custom_query = new WP_Query($args);

               if ($custom_query->have_posts()):
                  // Loop through the posts
                  while ($custom_query->have_posts()):
                     $custom_query->the_post(); ?>


                     <div class="col-lg-4 col-md-6 mb-3">
                        <div class="row h-100">
                           <div class="col-lg-12">
                              <div class="site-card-flex">
                                 <div class="img-placeholder">
                                    <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('auto', ['class' => 'img-fluid']); ?>
                                    </a>
                                 </div>
                                 <div class="site-card-content-flex p-20">
                                    <ul>
                                       <li><a href="#" class="cat-g">Software &amp; Apps</a></li>
                                    </ul>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <div class="mt-auto author">
                                       <span>
                                          <svg fill="#c7c7c7" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 448 512">

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

                  <?php endwhile;

                  // Reset post data after custom query
                  wp_reset_postdata();
               else:
                  echo 'No posts found in this category.';
               endif;
               ?>

               <!-- =================== END HERE LOOP =================================== -->
               <!-- ====================================================================== -->

            </div>
         </div>
         <div id="Salary" class="tabcontent" style="display: none;">
            <div class="row overflow-mobail-cards">
               <?php
               $category_id = 26;
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'cat' => $category_id,
                  'order' => 'DESC'
               );

               $custom_query = new WP_Query($args);

               if ($custom_query->have_posts()):
                  // Loop through the posts
                  while ($custom_query->have_posts()):
                     $custom_query->the_post(); ?>


                     <div class="col-lg-4 col-md-6 mb-3">
                        <div class="row h-100">
                           <div class="col-lg-12">
                              <div class="site-card-flex">
                                 <div class="img-placeholder">
                                    <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('auto', ['class' => 'img-fluid']); ?>
                                    </a>
                                 </div>
                                 <div class="site-card-content-flex p-20">
                                    <ul>
                                       <li><a href="#" class="cat-g">Software &amp; Apps</a></li>
                                    </ul>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <div class="mt-auto author">
                                       <span>
                                          <svg fill="#c7c7c7" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 448 512">

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

                  <?php endwhile;

                  // Reset post data after custom query
                  wp_reset_postdata();
               else:
                  echo 'No posts found in this category.';
               endif;
               ?>

               <!-- =================== END HERE LOOP =================================== -->
               <!-- ====================================================================== -->

            </div>
         </div>
         <div id="Generic" class="tabcontent" style="display: none;">
            <div class="row overflow-mobail-cards">
               <?php
               $category_id = 27;
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'cat' => $category_id,
                  'order' => 'DESC'
               );

               $custom_query = new WP_Query($args);

               if ($custom_query->have_posts()):
                  // Loop through the posts
                  while ($custom_query->have_posts()):
                     $custom_query->the_post(); ?>


                     <div class="col-lg-4 col-md-6 mb-3">
                        <div class="row h-100">
                           <div class="col-lg-12">
                              <div class="site-card-flex">
                                 <div class="img-placeholder">
                                    <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('auto', ['class' => 'img-fluid']); ?>
                                    </a>
                                 </div>
                                 <div class="site-card-content-flex p-20">
                                    <ul>
                                       <li><a href="#" class="cat-g">Software &amp; Apps</a></li>
                                    </ul>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <div class="mt-auto author">
                                       <span>
                                          <svg fill="#c7c7c7" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 448 512">

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

                  <?php endwhile;

                  // Reset post data after custom query
                  wp_reset_postdata();
               else:
                  echo 'No posts found in this category.';
               endif;
               ?>

               <!-- =================== END HERE LOOP =================================== -->
               <!-- ====================================================================== -->



            </div>
         </div>
         <div class="btn-container-flex">
            <a href="#" class="secondry-btn btn-flex m-auto">Read All Blogs</a>
         </div>
      </div>
   </div>

   <!-- Frequently Asked Questions -->
   
      
      <?php if (is_active_sidebar('our_exceptional_email_solutions_5')): ?>
         <?php dynamic_sidebar('our_exceptional_email_solutions_5'); ?>
      <?php else: ?>
         <!-- Time to add some widgets! -->
         <p>Widgets no visible</p>
      <?php endif; ?>

   
</main>

<?php get_footer(); ?>