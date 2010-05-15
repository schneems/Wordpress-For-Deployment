<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: home
*/
?>

<?php get_header(); ?>
<div class="container clearfix">  
	<div class = "main">
		<div class = "span-6 navigation" >
			<a class = "span-6 nav nav-button" href = "#">
				<div class = "span-2 film">
					&nbsp <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/greenFilm.png" />	
				</div>
				<div class = "span-3 text">SAMPLE WORK</div>
				
			</a>
			
			<a class = "span-6 nav nav-button" href = "#">
				<div class = "span-2">
					&nbsp <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/greenQuestion.png" />	
				</div>
				<div class = "span-3 text">WHO WE ARE</div>
				
			</a>
			
			<a class = "span-6  nav nav-button" href = "#">
				<div class = "span-2">
					&nbsp <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/greenMoney.png" />	
				</div>
				<div class = "span-3 text">PRICING</div>
				
			</a>
			
			<a class = "span-6 nav nav-button" href = "#">
				<div class = "span-2 mail">
					&nbsp <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/greenMail.png" />	
				</div>
				<div class = "span-3 text">GET IN TOUCH</div>
				
			</a>
		</div>
		<div class = "span-16 prepend-1">
			<div class = "playBackground">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<br /><br />
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<div class="entry">
							<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

						</div>
					</div>
				<?php endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</div>
			
		</div>
		
	</div><!-- main -->

</div><!-- container -->





<?php get_footer(); ?>
