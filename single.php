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


  <?php get_header();?>

<div class="container pt-5 pd-5">
<div class="card mb-4">
<div class="card-body">
<div class="row">
<!--Right posts -->
<div  class="colm1">
<h1><?php single_cat_title();?></h1> 
<?php if (has_post_thumbnail()): ?> <!-- Start the Loop.-->
<img src="<?php the_post_thumbnail_url('largest'); ?> " class="img-fluid">
 <?php endif;?> <!-- End the loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post();  ?>  <!--Start the Loop.-->
<h3><?php the_title();?></h3> 
<?php the_content(); ?> 
<p>   
<?php echo whiteGreenery_the_post_navigation(); ?>
 <?php      
// If comments are open or we have at least one comment, load up the comment template
if ( comments_open() || '0' != get_comments_number() )
comments_template();
?>
<?php endwhile; endif;?>  <!-- End the loop. -->  
 </div>   
<!--Left sidebar -->
<div class="colm2">
<!--Jquery slideToggle -->
<div id="flip">Click to slide<br/> the panel down or up</div>
<div id="panel">The Space Lion Gr Net</div>
<?php get_sidebar(); ?>
</div>
</div>
</div>
</div>	
</div>
<?php  get_footer(); ?>