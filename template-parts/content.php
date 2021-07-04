<article class="<?php post_class()?>" id="<?php the_ID()?>">
    <div class="cat">
<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('medium_large'); ?>
    </a>
<?php endif; ?>
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title();?></a>
    </h2>
    <?php 
    if(is_single()){
        the_content();
    }else{
    the_excerpt();
        }
      ?> 
  
         <a href="<?php the_permalink(); ?>">Read More</a>  
    <p>
    <p><?php the_tags( 'Tagged with: ', ' • ', '<br />' ); ?></p>
    Dated:<?php the_date('F j, Y'); ?><br>
    Category:-<?php the_category( ', ' ); ?><br>
        Written By:-<?php the_author();?>
       <p>Comments</p> 
    </p>
	<p><?php comments_popup_link('no comments','1 comment','% comments');?></p>
       </div> 
</article>