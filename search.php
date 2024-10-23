<?php get_header();?>

<section class="page-wrap">
<div class="container">
    <h1>Search Results for '<?php echo get_search_query();?>'</h1>


    <?php get_template_part('include/section','searchresults');?>
    <!-- 1st way for pagination in WP -->
    <?php previous_posts_link();?>
    <?php next_posts_link();?>

</div>
</section>
<?php get_footer();?>