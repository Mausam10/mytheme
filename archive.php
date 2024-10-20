<?php get_header();?>

<section class="page-wrap">
<div class="container">

    <?php get_template_part('include/section','archive');?>
    <!-- 1st way for pagination in WP -->
    <!-- <?php previous_posts_link();?>
    <?php next_posts_link();?> -->

    <!-- 2nd way for pagination in WP-->
     <?php
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
     ?>
</div>
</section>
<?php get_footer();?>