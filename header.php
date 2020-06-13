<?php
/**
 * Header file for WhiteGreenery WordPress theme.
 *
 * @link https://profiles.wordpress.org/thespaceliongrnet/
 *
 * @package WordPress
 * @subpackage WhiteGreenery
 * @since WhiteGreenery 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
        
		<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>

           <header id="masthead" class="site-header" role="banner"  style="display:inline;">                                   
                       <div class="card mb-4">
	                    <div class="card-body">
            <div class="container">
	<div class="custom-logo"  style="display:inline;"><?php the_custom_logo();?><br/><?php echo get_bloginfo('name' );?><br/> <?php echo get_bloginfo( 'description' );?></div>
  <?php if ( has_nav_menu( 'top-menu' ) ) : ?>
	<nav class="mymenu" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
	</nav>
	<?php endif; ?>
	</div>
 </div>
     </div>
  </header> 
 <?php //Scroll Text deciption   ?>
   <div class="scroll-box">
  <div class="scroll-text">custom-background, custom-colors, custom-header, custom-menu, editor-style, featured-images,, left-sidebar, one-column, two-columns, css-scroll-text, jquery-slideToggle</div>
</div> 
        



