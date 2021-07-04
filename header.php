<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Firoz_Learning_Home
 * @subpackage wp-tutorial
 * @since news times 1.0.0.1
 */
?>

 <!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title('|', true, 'right'); ?></title>
       <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
<link rel="pingback" <?php bloginfo("pingback_url"); ?>>
		<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-reboot.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css">
		 <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri();?>/images/fav-icon/apple-icon-57x57.png">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        
<?php
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
?>

        
            
		<?php wp_head(); ?>
    </head>
<body class="<?php body_class('csekarim'); ?>">
 <div id="top"></div>  
      <div align="center"><a class="btn btn-info btn-sm" href="#bottom"><img src="images/down.jpg"/width="30px"height=30px>Go To Bottom</a></div> 
  <div class="container">
  <div class="row">  
    <div class="body_control_wp-tutorial">

    <div class="container tiger">
  <div class="row">
    <div class="col-md-12">
      
       <strong><h1 align="center"><?php bloginfo('name'); ?></h1></strong>
      </div>
    </div>
</div>    
    
<!--
<div class="container">
  <div class="row">
    
    </div>
</div>
-->
   
   <!--        navbar start-->
<div class="container">
  <div class="row">

<?php echo get_template_part('template-parts/nav'); ?>
    </div>
</div>

   <!--        navbar end-->     
        
   
        
        
  <!--     slider start   -->
<div class="container-fuild tiger">
  <div class="row">
         <?php echo get_template_part('template-parts/slider'); ?>
    </div>   
    </div>
<!--   slider end     -->   
        
        
        
<container class="cr-nav">
<ul class="menu">

<?php
wp_nav_menu(
array(
'theme_location' =>'header_menu',
'container_class' =>'cr-nav',
'items_wrap' =>'<ul coass="menu">%3$s</ul>'
)
);
?>
</ul>
</container> 
        
 

        
    </div>
</div>
      
      







    
      
      
      
      
      