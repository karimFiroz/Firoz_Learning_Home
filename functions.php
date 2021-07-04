<?php
 //advance shorcode register
function basic_shortcode($atts, $content = null) {
	return('<span style="background:red;color:white;padding:20px;font-size:18px">'.$content.'</span>'); 
}
add_shortcode("basic", "basic_shortcode");


//advance shorcode register
function youtube_shortcode($atts, $content = null) {
   return('<iframe width="400" height="300" src="https://www.youtube.com/embed/'.$content.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
}
add_shortcode("youtube", "youtube_shortcode");





//advance shorcode register
function box_shortcode($atts, $content = null) {
   return('<div class="cow">'.$content.'</div>');
}
add_shortcode("mybox", "box_shortcode");



/**
*Add script
*/
function add_scripts(){
	wp_enqueue_style('Style',get_stylesheet_uri());
	
	wp_enqueue_style('Master CSS',get_template_directory_uri().'/css/bootstrap.min.css','','3.2.1','all');
	wp_enqueue_style('Master CSS',get_template_directory_uri().'/css/bootstrap-grid.min.css','','3.2.1','all');


	wp_enqueue_style('Master CSS',get_template_directory_uri().'/bootstrap-reboot.min.css','','3.2.1','all');
	wp_enqueue_style('Master CSS',get_template_directory_uri().'/style.css','','3.2.1','all');
	

	wp_enqueue_script('script',get_template_directory_uri().'/js/jquery.js','','3.2.1','all');
	wp_enqueue_script('script',get_template_directory_uri().'/js/bootstrap.min.js','','3.2.1','all');
	wp_enqueue_script('script',get_template_directory_uri().'/js/bootstrap.bundle.min.js','','3.2.1','all');
}
add_action('wp_enqueue_scripts','add_scripts');









/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string Filtered title.
 */
function wpdocs_filter_wp_title( $title, $sep ) {
    global $paged, $page;
 
    if ( is_feed() )
        return $title;
 
    // Add the site name.
    $title .= get_bloginfo( 'name' );
 
    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";
 
    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf(esc_html__( 'Page %s', 'wp-tutorial' ), max( $paged, $page ) );
 
    return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          =>esc_html__( 'Main Sidebar', 'wp-tutorial' ),
        'id'            => 'sidebar-1',
        'description'   =>esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'wp-tutorial' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );



/**
 * Add a sidebar.
 */
function footer_1_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          =>esc_html__( 'Footer 1', 'wp-tutorial' ),
        'id'            => 'footer-1',
        'description'   =>esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'wp-tutorial' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footer_1_theme_slug_widgets_init' );



/**
 * Add a sidebar.
 */
function footer_2_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          =>esc_html__( 'Footer 2', 'wp-tutorial' ),
        'id'            => 'footer-2',
        'description'   =>esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'wp-tutorial' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footer_2_theme_slug_widgets_init' );



/**
 * Add a sidebar.
 */
function footer_3_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          =>esc_html__( 'Footer 3', 'wp-tutorial' ),
        'id'            => 'footer-3',
        'description'   =>esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'wp-tutorial' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footer_3_theme_slug_widgets_init' );



/***
 * Firoz_Learning_Home function and defination
 * @package news-times
 * link https://developer.wordpress.org/theme/theme-functions
 */

/**
 * Registering menu Support
 */

if ( ! function_exists( 'carnews_register_nav_menu' ) ) {
 
    function carnews_register_nav_menu(){
        register_nav_menus( array(
            'header_menu' =>esc_html__( 'Header Menu', 'wp-tutorial' ),
            'footer_menu'  =>esc_html__( 'Footer Menu', 'wp-tutorial' ),
        ) );
    }
    add_action( 'after_setup_theme', 'carnews_register_nav_menu', 0 );
}


//call style
wp_enqueue_style( 'style', get_stylesheet_uri() );




/**
 * Essential theme supports
 * */
function theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );
 
    /** tag-title **/
    add_theme_support( 'title-tag' );
 
    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);
 
    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );
 
    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
 
    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );
 
    /** custom background **/
    $bg_defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        'default-attachment'     => 'scroll',
    );
    add_theme_support( 'custom-background', $bg_defaults );
 
    /** custom header **/
    $header_defaults = array(
        'default-image'          => '',
        'width'                  => 300,
        'height'                 => 60,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support( 'custom-header', $header_defaults );
 
    /** custom log **/
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
    
}
add_action('after_setup_theme','theme_setup');


/**
 * Add a sidebar.
 */
function footer_copy_right_widgets_init() {
    register_sidebar( array(
        'name'          =>esc_html__( 'Footer Copyright', 'wp-tutorial' ),
        'id'            => 'Footer-Copyright',
        'description'   =>esc_html__( 'Footer Copyright elements', 'wp-tutorial' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footer_copy_right_widgets_init' );





/**
*Set comment box behind Other fiends
*/

function firoz_learning_home_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
add_filter( 'comment_form_fields', 'firoz_learning_home_move_comment_field_to_bottom' );

/**
*Remove any field
*/

function firoz_learning_home_any_field_remove_from_comment_forms( $fields ) {
unset( $fields['url'] );//author means name, url means website
return $fields;
}
 add_filter( 'comment_form_fields', 'firoz_learning_home_any_field_remove_from_comment_forms' );
 
 /*
 *Footer map widget registration
 */
 
 function footer_map_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          =>esc_html__( 'Footer map Widget', 'wp-tutorial' ),
        'id'            => 'footer-map',
        'description'   =>esc_html__( 'Footer Contact Widgets in this area will be shown on all posts and pages.', 'wp-tutorial' ),
        'before_widget' => '<div class="container">',
        'after_widget'  => ' </div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footer_map_theme_slug_widgets_init' );



/**
*Facebook account settings
*/


function my_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="facebook">Facebook</label></th>

			<td>
				<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your facebook username. [e.g http://www.facebook.com/karim.1s]</span>
			</td>
		</tr>

		<tr>
			<th><label for="twitter">Twitter</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your twitter username. [e.g http://www.twitter.com/karim.1s]</span>
			</td>
		</tr>

		<tr>
			<th><label for="instagram">Instagram</label></th>

			<td>
				<input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your instagram username. [e.g http://www.instagram.com/karim.1s]</span>
			</td>
		</tr>

	</table>
<?php }
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );



function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

		/* Copy and paste this line for additional fields. Make sure to change 'facebook' to the field ID. */
		update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
		update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
		update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
	}
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );





/**
*Featured Image Support
*/
add_theme_support('post-thumbnails',array('post','page','slider-item'));
set_post_thumbnail_size(300,200,true);

add_image_size('slider-item','1300','530',true);
add_image_size('slider-item-featured','80','71',true);  

//specific post category
add_image_size('spc_post_cat','200','200',true);
//single page image
add_image_size('single-page-image','700','500',true);
//thumbnail post image
add_image_size('home-thumb-image','90','70',true);




/**
*Enabling custom post taxonomy for Main slider
*/
function main_slider_taxonomy(){
	register_taxonomy(
'main_slider_cat',
'slider-item',
array(
'hierarchical'=>true,
'label'			=>'Slider Category',
'query_var'		=>true,
'rewrite'		=>array(
'slug'			=>'Slider-Category',
'with_fornt'		=>true
)
)

	);
}
add_action('init','main_slider_taxonomy');



/**
*
Main slider
*registering custom post for main slider
*/

add_action('init','main_slider');
function main_slider(){
register_post_type('slider-item',array(
'labels'        =>array(
'name'          =>('Slider'),
'singular_name' =>('Slider'),
'menu_name'     =>('Main Slider'),
'name_admin_bar'=>('Add New'),
'all_items'     =>('All Slider'),
'add_new'       =>('Add New'),
'add_new_item'  =>('All Slider'),
'edit_item'     =>('Edit Slider'),
'view_item'     =>('View Slider'),
'search_items'     =>('Search Slider')
),
'public'       =>true,
'has_archive'  =>true,
'rewrite'      =>array('slug'=>'slider-item'),
'menu_position'=>9,
'menu_icon'    =>'dashicons-video-alt',
'supports'     =>array('title','thumbnail','editor')
)
);
}

/*
Custom metabox এর জন্য 

*/

function slider_custom_meta() {
	add_meta_box( 'slider_meta', __( 'Others Section', 'wp-tutorial' ), 'slider_meta_callback', 'slider-item' );
}
add_action( 'add_meta_boxes', 'slider_custom_meta' );

/*
Create Field

*/
function slider_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'slider_nonce' );
	$slider_stored_meta = get_post_meta( $post->ID );
	?>
	<input type="text" name="meta-url-slider" id="meta-text" value="<?php if ( isset ( $slider_stored_meta['
	meta-url-slider'] ) ) echo $slider_stored_meta['meta-url-slider'][0]; ?>" style="
	width:100%;font-size:16px;" placeholder="Enter Slider subtitle Here">
	
	
	
	<input type="text" name="meta-url-name-slider" id="meta-text" value="<?php if ( isset ( $slider_stored_meta['
	meta-url-name-slider'] ) ) echo $slider_stored_meta['meta-url-name-slider'][0]; ?>" 
	style="
	width:100%;
	font-size:16px;" 
	margin-bottom:15px; 
	placeholder="Enter Slider url name Here">
	
	<?php
}


/*
Save Field value

*/

function slider_meta_save( $post_id ) {
 
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'slider_nonce' ] ) && wp_verify_nonce( $_POST[ 'slider_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-url-slider' ] ) ) {
		update_post_meta( $post_id, 'meta-url-slider', sanitize_text_field( $_POST[ 'meta-url-slider' ] ) );
	}
	
	if( isset( $_POST[ 'meta-url-name-slider' ] ) ) {
		update_post_meta( $post_id, 'meta-url-name-slider', sanitize_text_field( $_POST[ 'meta-url-name-slider' ] ) );
	}
}
add_action( 'save_post', 'slider_meta_save' );

