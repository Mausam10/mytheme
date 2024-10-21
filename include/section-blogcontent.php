<?php if(have_posts()):while(have_posts()):the_post();?>

<!-- Wordpress function to display the exact date and time of the post creation. -->
  <p><?php echo get_the_date('F j, Y  h:i:s');?></p> 
  <!-- Wordpress fn to display the content in the respective page. -->
  <?php the_content();?>

  <!-- WP fn to display the author meta details -->
  <?php 
  $fname = get_the_author_meta('first_name');
  $lname = get_the_author_meta('last_name');
  echo 'Posted by'.' '.$fname .' '.$lname;
  ?>
  <br>
  <?php
  $tags = get_the_tags();
  foreach($tags as $tag):?>
  <a href="<?php echo get_tag_link($tag->term_id);?>">
    <?php echo $tag->name;?>
  </a>

  <?php endforeach;?>
  <br>



  <?php
    $categories = get_the_category();
    foreach($categories as $cat):?>

    <a href="<?php echo get_category_link($cat->term_id);?>"><?php echo $cat->name;?></a>
    <?php endforeach;?>
    
    <!-- WP fn to display the comment in the page -->
    <!-- <?php //comments_template();?> -->
<?php endwhile; else: endif;?>