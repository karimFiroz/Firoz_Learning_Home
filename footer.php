

<?php
/**
 * Footer template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Firoz_Learning_Home
 * @subpackage wp-tutorial
 * @since news times 1.0.0.1
 */
?>
<div class="container">
<?php dynamic_sidebar('footer-map'); ?>
</div>
<container class="cr-nav">
<ul class="menu">

<?php
wp_nav_menu(
array(
'theme_location' =>'footer_menu',
'container_class' =>'cr-nav',
'items_wrap' =>'<ul coass="menu">%3$s</ul>'
)
);
?>
</ul>
</container>

<div class="container deer">
  <div class="row">
   
      <div class="col-md-4">
      <?php dynamic_sidebar('footer-1'); ?>
      </div>
       <div class="col-md-4"> 
      <?php dynamic_sidebar('footer-2'); ?>
      </div>
       <div class="col-md-4"> 
      <?php dynamic_sidebar('footer-3'); ?>
      </div>

      
<?php dynamic_sidebar('Footer-Copyright'); ?>
      
      
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
       
<script src="<?php echo get_template_directory_uri(); ?>/jquery.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js" type="text/javascript">
</script>
      <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://localhost/mywordpress/';
}, false );
</script>
	<?php wp_footer(); ?> 
</div>
</div>
</div>
<script type="text/javascript">$('.carousel').carousel()</script>

<div id="bottom"></div> 
<div align="center"><a class="btn btn-info btn-sm" href="#top"><img src="images/up.jpg"/width="30px"height="30px">Go to Top</a></div>


    </body>

</html>