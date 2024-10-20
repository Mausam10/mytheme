<?php if(have_posts()):while(have_posts()):the_post();?>

<!-- Wordpress function to display the exact date and time of the post creation. -->
  <p><?php echo get_the_date('d/m/Y h:i:s');?></p> 
  <!-- Wordpress fn to display the content in the respective page. -->
  <?php the_content();?>

  <!-- WP fn to display the author meta details -->
  <?php 
  $fname = get_the_author_meta('first_name');
  $lname = get_the_author_meta('last_name');
  echo 'Posted by'.' '.$fname .' '.$lname;
  ?>
<?php endwhile; else: endif;?>