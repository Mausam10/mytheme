<?php get_header();?>

<section class="page-wrap">
<div class="container">


        <h1><?php the_title();?></h1>
    
            <?php if(has_post_thumbnail()):?>

                <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class=".img-fluid mb-3 img-thumbnail" style="width:800px; height:400px;"  crop="true">

            <?php endif;?>

<div class="row">


        <div class="col-lg-6">
    
                   <?php get_template_part('include/section','cars');?>
                <?php wp_link_pages();?>
        </div>
        <div class="col-lg-6">
            <ul>
                <li>
                    <!-- this fn works with the ACF -->
                    Color: <?php the_field('color');?>
                    <!-- Color: <?php  //echo get_post_meta($post->ID,'Color', true);?> -->
                </li>

                <li>
                    Registration: <?php the_field('registration');?>
                    <!-- Registration: <?php  //echo get_post_meta($post->ID,'Registration', true);?> -->
                </li>
                  
            </ul>
       
        </div>
</div>
</div>
</section>
<?php get_footer();?>