<?php get_header(); ?>

<?php if (is_active_sidebar('about_us')): ?>
            <?php dynamic_sidebar('about_us'); ?>
         <?php else: ?>
            <!-- Time to add some widgets! -->
            <p>Widgets no visible</p>
         <?php endif; ?>

<?php get_footer(); ?>