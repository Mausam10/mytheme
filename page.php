<?php get_header();?>

<section class="page-wrap">
<div class="container">
    <h1><?php the_title();?></h1>

    <?php if(has_post_thumbnail()):?>

        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class=".img-fluid mb-3 img-thumbnail" style="height:400px; width:800px;" crop="trues">

    <?php endif;?>

    <?php if(has_post_thumbnail()):?>

<img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class=".img-responsive mb-3 img-thumbnail" style="height:300px; width:300px;" crop="false">

<?php endif;?>


<?php if(has_post_thumbnail()):?>

<img src="<?php the_post_thumbnail_url('blog-thumbnail');?>" alt="<?php the_title();?>" class=".img-responsive mb-3 img-thumbnail mr-4" style="height:100px; width:100px;" crop="false">

<?php endif;?>


    <?php get_template_part('include/section','content');?>
</div>
</section>
<?php get_footer();?>