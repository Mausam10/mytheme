<?php get_header();?>

<section class="page-wrap">
<div class="container">
<h1><?php echo single_cat_title();?></h1>
    <?php get_template_part('include/section','archive');?>
    <!-- 1st way for pagination in WP -->
    <?php previous_posts_link();?>
    <?php next_posts_link();?>
</div>
</section>
<?php get_footer();?>