<footer>
    <div class="container">
        <div class="footer-header-flex">
            <a href="#"><img src="./assets/images/emailsbuzz-logo.svg" alt=""></a>
            <div class="mails-footer-flex">
                <span>
                    <svg fill="#fff" width="12" height="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                        <path
                            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4l217.6 163.2c11.4 8.5 27 8.5 38.4 0l217.6-163.2c12.1-9.1 19.2-23.3 19.2-38.4 0-26.5-21.5-48-48-48zM0 176v208c0 35.3 28.7 64 64 64h384c35.3 0 64-28.7 64-64V176L294.4 339.2a63.9 63.9 0 0 1-76.8 0z">
                        </path>
                    </svg>
                </span>
                <a href="mailto:emailbuzz@gmail.com">emailbuzz@gmail.com</a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-6 col-md-6">
                <div class="footer-content">
                    <div class="sub-seperator"> <span>Pages</span></div>
                    <ul>
                        <!-- <li><a href="single.html">Single</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="all-author.html">ALl Author</a></li>
                        <li><a href="author.html">Author</a></li>
                        <li><a href="category.html">Category</a></li>
                        <li><a href="contact-p.html">Contact</a></li>
                        <li><a href="search-n-found.html">Search Not Found</a></li>
                        <li><a href="thankyou.html">Thankyou</a></li> -->


                        <?php
                        $menu_name = 'pages'; // Menu location ID
                        
                        
                        // Get menu locations
                        $locations = get_nav_menu_locations();

                        // Check if the menu location exists and has a menu assigned
                        if (isset($locations[$menu_name])) {
                            $menu_id = $locations[$menu_name]; // Get menu ID
                            $menu_items = wp_get_nav_menu_items($menu_id); // Get menu items
                        
                            if (!empty($menu_items)) {
                                $menu_items = array_reverse($menu_items); // Reverse the order of menu items
                        
                                // Limit the number of menu items to display
                                $menu_items = array_slice($menu_items, 0);

                                echo '<ul class="list-unstyled foot-menu mt-4">';
                                foreach ($menu_items as $item) {
                                    echo '<li><a class="" aria-current="page" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
                                }
                                echo '</ul>';
                            } else {
                                echo 'No menu items found!';
                            }
                        } else {
                            echo 'Menu location not assigned!';
                        }
                        ?>


                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="footer-content">
                    <div class="sub-seperator"> <span>Important Link</span></div>
                    <ul>
                        <!-- <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Authors</a></li>
                        <li><a href="#">Privacy Policy</a></li> -->

                        <?php
                        $menu_name = 'important_link'; // Menu location ID
                        
                        
                        // Get menu locations
                        $locations = get_nav_menu_locations();

                        // Check if the menu location exists and has a menu assigned
                        if (isset($locations[$menu_name])) {
                            $menu_id = $locations[$menu_name]; // Get menu ID
                            $menu_items = wp_get_nav_menu_items($menu_id); // Get menu items
                        
                            if (!empty($menu_items)) {
                                $menu_items = array_reverse($menu_items); // Reverse the order of menu items
                        
                                // Limit the number of menu items to display
                                $menu_items = array_slice($menu_items, 0);

                                echo '<ul class="list-unstyled foot-menu mt-4">';
                                foreach ($menu_items as $item) {
                                    echo '<li><a class="" aria-current="page" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
                                }
                                echo '</ul>';
                            } else {
                                echo 'No menu items found!';
                            }
                        } else {
                            echo 'Menu location not assigned!';
                        }
                        ?>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="footer-content">
                    <div class="sub-seperator"> <span>Emailbuzz Tools</span></div>
                    <ul>
                        <!-- <li><a href="#">Random E-mail Generator</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li><a href="#">Email Marketing</a></li> -->

                        <?php
                        $menu_name = 'emailbuzz_tools'; // Menu location ID
                        
                        
                        // Get menu locations
                        $locations = get_nav_menu_locations();

                        // Check if the menu location exists and has a menu assigned
                        if (isset($locations[$menu_name])) {
                            $menu_id = $locations[$menu_name]; // Get menu ID
                            $menu_items = wp_get_nav_menu_items($menu_id); // Get menu items
                        
                            if (!empty($menu_items)) {
                                $menu_items = array_reverse($menu_items); // Reverse the order of menu items
                        
                                // Limit the number of menu items to display
                                $menu_items = array_slice($menu_items, 0);

                                echo '<ul class="list-unstyled foot-menu mt-4">';
                                foreach ($menu_items as $item) {
                                    echo '<li><a class="" aria-current="page" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
                                }
                                echo '</ul>';
                            } else {
                                echo 'No menu items found!';
                            }
                        } else {
                            echo 'Menu location not assigned!';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="copyright">
        <div class="container">
            <ul class="footer-links-flex">
                <li>
                    <a href="#">
                        <svg fill="#000" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">

                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141m0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7m146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8m76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8M398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg fill="#000" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">

                            <path
                                d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg fill="#000" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">

                            <path
                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg fill="#000" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512">

                            <path
                                d="M80 299.3V512h116V299.3h86.5l18-97.8H196v-34.6c0-51.7 20.3-71.5 72.7-71.5 16.3 0 29.4.4 37 1.2V7.9C291.4 4 256.4 0 236.2 0 129.3 0 80 50.5 80 159.4v42.1H14v97.8z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="">
                        <svg fill="#000" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 384 512">

                            <path
                                d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg fill="#000" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">

                            <path
                                d="M373 138.6c-25.2 0-46.3-17.5-51.9-41-30.6 4.3-54.2 30.7-54.2 62.4v.2c47.4 1.8 90.6 15.1 124.9 36.3 12.6-9.7 28.4-15.5 45.5-15.5 41.3 0 74.7 33.4 74.7 74.7 0 29.8-17.4 55.5-42.7 67.5-2.4 86.8-97 156.6-213.2 156.6S45.5 410.1 43 323.4c-25.4-11.9-43-37.7-43-67.7C0 214.4 33.4 181 74.7 181c17.2 0 33 5.8 45.7 15.6 34-21.1 76.8-34.4 123.7-36.4v-.3c0-44.3 33.7-80.9 76.8-85.5C325.8 50.2 347.2 32 373 32c29.4 0 53.3 23.9 53.3 53.3s-23.9 53.3-53.3 53.3M157.5 255.3c-20.9 0-38.9 20.8-40.2 47.9s17.1 38.1 38 38.1 36.6-9.8 37.8-36.9-14.7-49.1-35.7-49.1zM395 303.1c-1.2-27.1-19.2-47.9-40.2-47.9s-36.9 22-35.7 49.1 16.9 36.9 37.8 36.9 39.3-11 38-38.1zm-60.1 70.8c1.5-3.6-1-7.7-4.9-8.1-23-2.3-47.9-3.6-73.8-3.6s-50.8 1.3-73.8 3.6c-3.9.4-6.4 4.5-4.9 8.1 12.9 30.8 43.3 52.4 78.7 52.4s65.8-21.6 78.7-52.4">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
            <span>© 2024 Emailbuzz All Rights Reserved.</span>
        </div>
    </div> -->

    <?php if (is_active_sidebar('footer_social_media')): ?>
            <?php dynamic_sidebar('footer_social_media'); ?>
        <?php else: ?>
            <!-- Time to add some widgets! -->
            <p>Widgets no visible</p>
        <?php endif; ?>

</footer>

<?php wp_footer(); ?>
</body>
</html>