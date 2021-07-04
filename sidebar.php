<div class="cat">
<?php dynamic_sidebar('sidebar-1'); ?>
    </div>
	
	<?php get_search_form();?>
	
	
	<h3>Categories</h3>
	    <?php
    $args = array(
        'orderby' => 'wp-tutorial',
        'parent' => 0
    );

    $categories = get_categories( $args );
    foreach ( $categories as $category ) {
        echo '<li><a href="' .
		get_category_link( $category->term_id ) .
		'" rel="bookmark"> <i class="glyphicon glyphicon-ok"> '  .
		$category->name . '</i>' . '' . $category->description .
		'</a></li>';
     }
?>

<h3>Archives</h3>
<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12,'order' => 'DESC' )); ?>






                      
   <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Random Posts</h4>
                                <?php
                           $tecno=new wp_query(array(
                            'post_type'=>'post',
                            'posts_per_page'=>3,
                            'orderby'=>'rand',
                            'order'=>'DESC'
                           ));
                if(have_posts()):while($tecno->have_posts()):$tecno->the_post();
                           ?>
 
                                    <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <div class="widget-news">
             <?php the_post_thumbnail('post-thumbonails', array('class' => 'post-thumb')); ?> 
              <p><?php the_tags( 'Tagged with: ', ' • ', '<br />' ); ?></p>
                                <div class="news-text">
                                    <p>
									<a class="" href="<?php the_permalink();?>">Read More</a><br>
									</p>
                                   
                                </div>
                            </div>
                          
                           
                        </div>
                 
                  <?php endwhile;?>
                     <?php endif;?>
                        

                        </div>
						
						
						
						   <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Uncategorized Posts</h4>
                                <?php
                           $tecno=new wp_query(array(
                            'post_type'=>'post',
                            'posts_per_page'=>3,
                            'orderby'=>'title',
                            'order'=>'DESC',
                            'category_name'=>'uncategorized'
                           ));
                if(have_posts()):while($tecno->have_posts()):$tecno->the_post();
                           ?>
 
                                    <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <div class="widget-news">
          <?php the_post_thumbnail('post-thumbonails', array('class' => 'post-thumb')); ?> 
           <p><?php the_tags( 'Tagged with: ', ' • ', '<br />' ); ?></p>
                                <div class="news-text">
                                    <p>
									<a class="" href="<?php the_permalink();?>">Read More</a><br>
									</p>
                                   
                                </div>
                            </div>
                          
                           
                        </div>
                 
                  <?php endwhile;?>
                     <?php endif;?>
                        

                        </div>