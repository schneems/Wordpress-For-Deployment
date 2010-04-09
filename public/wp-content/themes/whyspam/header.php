<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

	




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<!--
<link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/jquery-ui.css" media="screen, projection" rel="stylesheet" type="text/css" /> 
-->

<link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/jquery-ui.css" media="screen, projection" rel="stylesheet" type="text/css" /> 



<link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/why.css" media="screen, projection" rel="stylesheet" type="text/css" /> 


<link rel="icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" /> 

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>


<link href="/stylesheets/print.css?1263766306" media="print" rel="stylesheet" type="text/css" />

<!--[if lt IE 8]><link href="/stylesheets/ie.css?1263766306" media="screen, projection" rel="stylesheet" type="text/css" /><![endif]-->


</head>
<body <?php body_class(); ?>>
	

	<div id = "content_wrapper" >
		<div id="dialog">
			<div id = "partial_update"></div>
		</div><!-- dialog -->
	
		<div class = "container">

		    
	
	
		<div id='site-title' class = "span-12 last">
			<h1 id="header"><a href = "http://www.whyspam.me">Awesome header</a></h1>
		</div>
	
		<div class = "top_bar prepend-12">
			<div class = "span-7 " id = "login_links">
			</div>
			<div class = " span-12 prepend-2 last">
				<?php get_search_form(); ?>
			</div>
		</div>

	
	<div class = "prepend-10 span-15 nav last">
		 <ul class = "">
			<li><a href="http://www.whyspam.me" class="nav-button"><img alt="Email" src="<?php bloginfo('stylesheet_directory'); ?>/images/email.png" /></a></li>

			<li><a href="http://www.whyspam.me/partners" class="nav-button"><img alt="partners" src="<?php bloginfo('stylesheet_directory'); ?>/images/partners.png" /></a></li>


			<li><a href="http://blog.whyspam.me" class="on"><img alt="Blog" src="<?php bloginfo('stylesheet_directory'); ?>/images/blog.png" /></a></li>

			<li><a href="http://www.whyspam.me/websites" class="nav-button"><img alt="Spamreport" src="<?php bloginfo('stylesheet_directory'); ?>/images/SpamReport.png" /></a></li>
		</ul>
	</div>

		</div><!-- container -->
	
	    <div id='whitespace' class='container clearfix'>
		
			<div class = "span-24 last">
		
			<div id = "inner-whitespace" class = "span-24 last">


