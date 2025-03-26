<?php get_header(); ?>
<main>
    <?php if (is_active_sidebar('category_breadcrum')): ?>
        <?php dynamic_sidebar('category_breadcrum'); ?>
    <?php else: ?>
        <!-- Time to add some widgets! -->
        <p>Widgets no visible</p>
    <?php endif; ?>
    <div class="container">
        <div class="bg-radius-white">
            <div class="row category">
                <?php
                if (have_posts()) {
                    while ( have_posts()) {
                         the_post();

                        ?>
                        <!-- --------------- INSIDE CODE ----------------------- -->

                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="row h-100">
                                <div class="col-lg-12">
                                    <div class="site-card-flex">
                                        <div class="img-placeholder">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                            </a>
                                        </div>
                                        <div class="site-card-content-flex p-20">
                                            <ul>
                                                <li><a href="#" class="cat-g">Software &amp; Apps</a></li>
                                            </ul>
                                            <a href="<?php the_permalink(); ?>" class="truncate site-title"><?php the_title(); ?> </a></a>
                                            <div class="mt-auto author">
                                                <span>
                                                    <svg fill="#c7c7c7" width="16" height="16"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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

                        <!-- ------------------------- END HERE ------------------------ -->
                        

                        <?php
                    }

                    
                    //  ================== pagination =========================== 

                    // Set the big number for pagination
                    $big = 999999999;

                    // Get the current page number (or set it to 1 if it's not available)
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    // Define the pagination arguments correctly
                    $args = array(
                        'paged' => $paged,
                        'max_num_pages' => $wp_query->max_num_pages, // Ensure this is set
                    );

                    // Generate the pagination links
                    $pagination = paginate_links(array(
                        'format' => 'page/%#%/',
                        'current' => max(1, $paged), // Make sure the current page is set correctly
                        'total' => $args['max_num_pages'], // Total number of pages
                        'prev_text' => __('&laquo;', 'probabs'),
                        'next_text' => __('&raquo;', 'probabs'),
                    ));

                    // Output the pagination HTML
                    printf(
                        '<nav class="navigation pagination" aria-label="Posts"><div class="nav-links">%s</div></nav>',
                        $pagination
                    );
                } else {

                     if (is_active_sidebar('search_breadcrum')): 
                         dynamic_sidebar('search_breadcrum'); 
                     else: 
                         ?>
                        <p>Widgets no visible</p>
                    <?php endif; 

                }                
                ?>

            </div>
        </div>
    </div>
    <div id="progress" style="display: none; background: conic-gradient(rgb(243, 127, 39) 0%, rgb(235, 243, 255) 0%);">
        <span id="progress-value">
            <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.134.366a1.25 1.25 0 0 0-1.768 0l-6 6a1.25 1.25 0 1 0 1.768 1.768L6 4.268V17.25a1.25 1.25 0 1 0 2.5 0V4.268l3.866 3.866a1.25 1.25 0 0 0 1.768-1.768z"
                    fill="#f37f27"></path>
            </svg>
        </span>
    </div>
</main>




<?php get_footer(); ?>