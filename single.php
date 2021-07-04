<?php get_header();?>

<?php 
if(have_posts()):

while(have_posts()): 
the_post();
?>

<div class="deer">

<h2><?php the_title();?></h2>
 <p><?php the_tags( 'Tagged with: ', ' • ', '<br />' ); ?></p>

<p><?php the_content();?></p>



<h3>Comments</h3>

<?php comments_template( '', true ); ?>

<?php comments_popup_link('no comments','1 comment','% comments');?>


</div>

<?php
endwhile;
else:
 endif;

 ?>
 
 
 		<div class="deer">
 		     
           <?php echo get_avatar( get_the_author_meta('ID'), $size, $default, $alt, $args ); ?>
           <strong>Total Posts:<?php echo get_the_author_posts();?></strong>
            <h4><span>View Author Posts:<?php the_author_posts_link();?></span></h4>
            
          <p><?php the_author_meta('description');?></p>
          
          <div class="author-info">
  <div class="social-icon">
        <ul>
        	 <li class="transition3s"><a  class="btn btn-info btn-sm" href="#">Go To Top</a></li>
            <li class="transition3s"><a  class="btn btn-warning btn-sm" href="<?php the_author_meta('facebook');?>">Facebook</a></li>
            <li class="transition3s"><a  class="btn btn-info btn-sm" href="<?php the_author_meta('twitter');?>">Twitter</a></li>
           
            <li class="transition3s"><a  class="btn btn-danger btn-sm" href="<?php the_author_meta('instagram');?>">Instagram</a></li>
        </ul>
                        </div>

</div>
         
 </div>


 <div class="deer">
      <h3>Related Posts</h3>
 <?php

	$tags = wp_get_post_tags($post->ID);

	if ($tags) {
		$first_tag = $tags[0]->term_id;
		
		$my_query = new WP_Query(array(
			'tag__in' => array($first_tag),
			'post__not_in' => array($post->ID),
		'posts_per_page'=>3,
			 'orderby'=>'rand',
            'order'=>'ASC',
			'caller_get_posts'=>1
		));
		if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post(); ?>

	<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
 <p><?php the_tags( 'Tagged with: ', ' • ', '<br />' ); ?></p>

<p><?php the_excerpt();?></p>
		
		 
		<?php
		endwhile;
		}
		wp_reset_query();
	}
?>
</div>
 

<?php get_footer();?>