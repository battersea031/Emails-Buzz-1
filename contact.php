<?php get_header(); ?>

<?php if (is_active_sidebar('contact_us_page')): ?>
    <?php dynamic_sidebar('contact_us_page'); ?>
<?php else: ?>
    <!-- Time to add some widgets! -->
    <p>Widgets no visible</p>
<?php endif; ?>

<?php get_footer(); ?>