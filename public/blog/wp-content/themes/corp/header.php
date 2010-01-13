<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<style type="text/css" media="screen">
	
body{
	background: #f5f5f5 url("<?php bloginfo('template_directory'); ?>/images/bodybg.jpg") 
	 repeat-x;
	}
	

blockquote{
			background: #f2f2f2 url("<?php bloginfo('template_directory'); ?>/images/quotes.gif") top left no-repeat;
	}
		
.menu ul li.widget ul li{
	 background: #fff url("<?php bloginfo('template_directory'); ?>/images/listbullet.gif") no-repeat 0 2px;
	}
		
.post h2{
	 background: #fff url("<?php bloginfo('template_directory'); ?>/images/header_bullet.gif") no-repeat 1px 5px;
	}		
				
a{
		color: <?php ap_themeColour(); ?>;
		}
		
a:hover{
		color: <?php ap_hoverColour(); ?>;
		}		
		
.menu ul li.widget h3 {
		background: #ccc url("<?php bloginfo('template_directory'); ?>/images/sideheaderbg.jpg") left top repeat-x;
		}
	
	<?php if (get_settings('thread_comments') == 1){ ?>	
		
	ol.commentlist li div.reply {
	background:#ddd;
	border:1px solid #aaa;
	padding:2px 10px;
	text-align:center;
	width:35px;
	 -moz-border-radius: 3px;
   -khtml-border-radius: 3px;
   -webkit-border-radius: 3px;
   border-radius: 3px;
	}
		
		ol.commentlist li div.reply:hover {
background:#f3f3f3;
border:1px solid #aaa;
		}
	<?php } ?>			
		
	</style>
	
	<!--[if IE]>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie-only.css" />
<![endif]-->
	
	
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/utils.js"></script>
	
<?php
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	wp_head();
 ?>	

</head>
<body>
<div id="wrapper">


	<div id="header">
	

	
		<form id="searchform2" method="get" action="<?php bloginfo('home'); ?>">
		
			<input type="text"  onfocus="doClear(this)" value="<?php _e('Search this site...'); ?>" class="searchinput" name="s" id="s" size="25" /> <input type="submit" class="searchsubmit"  value="<?php _e('Go'); ?>" />
			
		</form>
	
	
		<h3><a href="<?php bloginfo('home'); ?>/"><?php bloginfo('name'); ?></a></h3>

		
		<h2><?php bloginfo('description'); ?></h2>
		
		
		<div id="tabs">
	
			<ul>
			<li class="first"><a href="<?php bloginfo('siteurl'); ?>/">Home</a></li>
			<?php
		
		buildMenu();

				
 			?> 
			
			
			</ul>
		</div>	

	</div>





		

