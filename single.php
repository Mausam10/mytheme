<?php get_header();?>

<section class="page-wrap">
<div class="container">
    
<section class="row">
        <div class="col-lg-3">
            <?php if(is_active_sidebar('blog-sidebar')):?>
                <?php dynamic_sidebar('blog-sidebar');?>
            <?php endif;?>
        </div>


  <div class="col-lg-9">
        <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class=".img-fluid mb-3 img-thumbnail" style="width:800px; height:400px;"  crop="true">

        <?php endif;?>


    <h1><?php the_title();?></h1>

    <?php get_template_part('include/section','blogcontent');?>
   
   </div>
</section>
    <!-- WP fn to link the page break within the post. -->
    <?php //wp_link_pages();?> 
</div>
</section>
<?php get_footer();?>