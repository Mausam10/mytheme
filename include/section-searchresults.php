<?php if(have_posts()):while(have_posts()):the_post();?>
    
<div class="card">
        <div class="card-body d-flex justify-content-center text-align-center align-items-center">

        <!-- php loop for post_thumbnail fn to manually set the size of the img. -->
        <?php if(has_post_thumbnail()):?>

                <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class=".img-fluid mb-3 img-thumbnail" style="width:300px; height:200px;" crop="true">

        <?php endif;?>


        <div class="blog-content" style="margin-left: 10px; ">
        
                <h3><?php the_title();?></h3>        
        
                <?php the_excerpt();?>
            
                <a href="<?php the_permalink();?>" class="btn btn-success">Read more...</a> 
        </div>
        

        </div>
    </div>
<?php endwhile; else:?>
   THERE ARE NO RESULTS FOR YOUR SEARCH  '<?php echo get_search_query();?>'
    <?php endif;?>