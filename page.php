<?php get_header();?>

<?php 
if(have_posts()):

while(have_posts()): 
the_post();
?>

<div>

<h2><?php the_title();?></h2>

<p>
<?php the_content();?>
</p>

</div>

<?php
endwhile;
else:
 endif;

 ?>

<?php get_footer();?>