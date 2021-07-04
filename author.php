<?php get_header();?>

 <?php $i=0;?>
    <?php if(have_posts()):  while(have_posts()):  the_post();?>

    <?php if($i ==0 or $i ==1 or $i ==2){?>
<div class="deer">

<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
 <p><?php the_tags( 'Tagged with: ', ' • ', '<br />' ); ?></p>
 
<p><?php the_content();?></p>



<h6>Comments</h6>

<?php comments_template( '', true ); ?>



<?php comments_popup_link('no comments','1 comment','% comments');?>


</div>

<?php }
$i++;
?>
<?php
endwhile;
else:
 endif;

 ?>


  <?php $i=0;?>
    <?php if(have_posts()):  while(have_posts()):  the_post();?>

<?php if($i !=0 and $i !=1 and $i !=2){?>

<div class="deer">

<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
 <p><?php the_tags( 'Tagged with: ', ' • ', '<br />' ); ?></p>
 
<p><?php the_content();?></p>



<h6>Comments</h6>

<?php comments_template( '', true ); ?>



<?php comments_popup_link('no comments','1 comment','% comments');?>


</div>
<?php }
$i++;
?>
<?php
endwhile;
else:
 endif;

 ?>
 
 
 	<div class="deer">
  <h4><span>View Author Posts:<?php the_author_posts_link();?></span></h4>
       
         
           <?php echo get_avatar( get_the_author_meta('ID'), $size, $default, $alt, $args ); ?>
            <strong>Total Posts:<?php echo get_the_author_posts();?></strong>
          <p><?php the_author_meta('description');?></p>
		  
<div class="deer">
  <div class="social-icon">
        <ul>
        	 <li class="transition3s"><a href="#">Go To Top</a></li>
            <li class="transition3s"><a href="<?php the_author_meta('facebook');?>">Facebook</a></li>
            <li class="transition3s"><a href="<?php the_author_meta('twitter');?>">Twitter</a></li>
           
            <li class="transition3s"><a href="<?php the_author_meta('instagram');?>">Instagram</a></li>
			<li>Email:<?php the_author_meta('user_email');?></li>
			<li>Website:<?php the_author_meta('user_url');?></li>
        </ul>
                        </div>

</div>	  
		  
 </div>


<div class="deer">
      <h3>Related Posts</h3>
     <div class="deer">
         
          
                   
           
            
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
		
<?php the_post_thumbnail('post-thumbnails', array('class' => 'post-thumb')); ?>
 <p><?php the_tags( 'Tagged with: ', ' • ', '<br />' ); ?></p>
	<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<p><?php the_excerpt();?></p>

		 
		<?php
		endwhile;
		}
		wp_reset_query();
	}
?>
</div>
 </div>
 
<?php the_posts_pagination();?>
<?php get_footer();?>