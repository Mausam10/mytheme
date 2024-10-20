<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header();?>

<section class="page-wrap">
<div class="container">
    <h1><?php the_title();?></h1>
<div class="row">
    <div class="col-lg-6">
        THIS IS WHERE THE CONTACT FORM GOES
    </div>
    <div class="col-lg-6">
     <?php get_template_part('include/section','content');?>
    </div>
</div>
    
</div>
</section>
<?php get_footer();?>