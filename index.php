<?php get_header(); ?>

<div class="container">
  <div class="row"> 
     
    <div class="col-lg-9 col-md-9 col-sm-12">

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