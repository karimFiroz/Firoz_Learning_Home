<?php get_header(); ?>

<div class="container">
  <div class="row"> 
     
    <div class="col-lg-9 col-md-9 col-sm-12">

<h3 class="headbar">Your Keyword <span><?php _e(''); echo '&quot;'.$s.'&quot;'; ?></span> Results are bellow :</h3>

<?php
while ( have_posts() ) : the_post(); 
 get_template_part('template-parts/content');
   
 endwhile;
?>

   
    </div>
      <div class="col-md-3">
          <div class="row">
        
          <?php get_sidebar();?>
      </div>
  </div>
    
    </div> 
</div>   
<?php the_posts_pagination();?>
 <?php get_footer();?>