<?php get_header();?>

<section class="page-wrap">
<div class="container">
   
        <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class=".img-fluid mb-3 img-thumbnail" style="max-width:100%; height:auto;"  crop="true">

        <?php endif;?>


    <h1><?php the_title();?></h1>

    <?php get_template_part('include/section','blogcontent');?>
   
   
    <!-- WP fn to link the page break within the post. -->
    <?php //wp_link_pages();?> 
</div>
</section>
<?php get_footer();?>