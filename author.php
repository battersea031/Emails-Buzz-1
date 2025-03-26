<!-- == header ========== -->
<?php get_header(); ?>


<!-- === main body ======= -->

<div class="container">
    <div class="row">
        <div class="col-md">
            <?php
            if (have_posts()):

                $author_id = get_queried_object_id();
                print_r($author_id);
                ?>

                <!-- ============= author info ================== -->

                <div class="author-content d-flex align-items-center mt-5 mb-3">
                    <div class="circle mt-1">
                        <a href="#"> <?php echo get_avatar($author_id); ?></a>
                    </div>
                    <div class="author-content mt-2 ms-2">
                        <h2><span class="me-3"><a href=""
                                    class="text-decoration-none ps-2 author"><?php the_author_meta('display_name', $author_id); ?></a></span>
                        </h2>
                    </div>
                </div>
                <hr>

                <!-- ================== end here =================== -->

                <div class="author-info pb-5">
                    <div class="author-bio">
                        <?php the_author_meta('description', $author_id); ?>
                    </div>
                </div>

                <h3>Posts by <?php the_author_meta('display_name', $author_id); ?>:</h3>



                <!-- ================== blog post ============== -->
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        // Loop through author's posts
                        while (have_posts()):
                            the_post(); ?>
                            <div class="col-md-4 p-2">
                                <div class="card" style="width:auto;">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                    <div class="card-body">

                                        <div class="author-content d-flex align-items-center mb-3">
                                            <div class="date-container mt-2 ms-3">
                                                <span><i class="fa-regular fa-calendar-days"></i></span>
                                                <span class="ps-2"><?php echo get_the_date(); ?></span>
                                            </div>
                                        </div>

                                        <h5 class="card-title auther_blog_post"><a
                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h5>
                                        <p class="card-text"><?php the_excerpt(); ?></p>
                                        <hr>
                                        <div class="author-content d-flex align-items-center mb-3">
                                            <div class="circle mt-1">
                                                <a href="#"> <?php echo get_avatar($author_id); ?></a>
                                            </div>
                                            <div class="author-content mt-2 ms-2">
                                                <span class="me-3"><a href=""
                                                        class="text-decoration-none ps-2 author"><?php the_author(); ?></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>

                    <!-- ==================== end here ======================= -->

                    <!-- ======================== pagination ===================== -->
                    <?php

                    $big = 999999999;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $pagination = paginate_links(array(
                        'format' => 'page/%#%/',
                        'current' => max(1, $args['paged']),
                        'total' => $args['max_num_pages'],
                        'prev_text' => __('&laquo;', 'probabs'),
                        'next_text' => __('&raquo;', 'probabs'),
                    ));

                    printf(
                        '<nav class="navigation pagination" aria-label="Posts"><div class="nav-links">%s</div></nav>',
                        $pagination
                    );


                    ?>
                    <!-- ========================= end here ====================== -->


                    <?php
            else:
                echo '<p>No posts found.</p>';
            endif;
            ?>

            </div>
        </div>
    </div>
</div>


<!-- ==== footer ======= -->
<?php get_footer(); ?>