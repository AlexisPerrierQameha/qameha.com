<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php if( is_front_page() ) : ?>
		<title><?php bloginfo('name'); ?> | <?php bloginfo('description');?></title>
		<?php elseif( is_page() ) : ?>

		<title><?php the_title(); ?> |
 <?php bloginfo('name'); ?></title>


		<?php elseif( is_404() ) : ?>
		<title>Page Not Found | <?php bloginfo('name'); ?></title>
    <?php elseif( is_search() ) : ?>
    <title><?php  print 'Search Results for ' . wp_specialchars($s); ?> | <?php bloginfo('name'); ?></title>
		<?php else : ?>
		<title>Qameha, Agile Recruiting Solutions</title>
		<?php endif; ?>

	<!-- Basic Meta Data -->
	<meta name="Copyright" content="Titan Theme Design: Copyright 2009 Jestro LLC" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php if((is_single() || is_category() || is_page() || is_home()) && (!is_paged())){} else {?>
	<meta name="robots" content="noindex,follow" /><?php } ?>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />

	<!--Stylesheets-->
	<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" rel="stylesheet" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/ie/ie.css" />
	<![endif]-->
	<!--[if lte IE 6]>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/ie/nav.js"></script>
	<![endif]-->
  
	<!--Wordpress-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--WP Hook-->
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>
	<div id="header" class="clear">
    <div id="follow">
      <div class="wrapper clear">
        <dl>
<!-- VO
          <dt>Follow:</dt>
-->
						<?php $email = get_option('T_feed_email'); ?>
						<?php $email_toggle = get_option('T_email_toggle'); ?>
	          <?php $twitter = get_option('T_twitter'); ?>
						<?php $twitter_toggle = get_option('T_twitter_toggle'); ?>
            <dd><a class="rss" href="<?php bloginfo('rss2_url'); ?>">RSS</a></dd>
						<?php if ($email_toggle == 'true') : else : ?>
            	<dd><a class="email" href="<?php if ($email !== '') echo htmlspecialchars($email, UTF-8); else echo "#"; ?>">Email</a></dd>
						<?php endif; ?>
            <?php if ($twitter_toggle == 'true') : else : ?>
							<dd><a class="twitter" href="<?php if ($twitter !== '') echo htmlspecialchars($twitter, UTF-8); else echo "#"; ?>">Twitter</a></dd>
						<?php endif; ?> 
        </dl>
      </div><!--end wrapper-->
    </div><!--end follow-->
    <div class="wrapper">

    <div style="position : absolute; left : 10px;">
<a href="http://qameha.com" title="Qameha : Agile Recruiting Solutions">
<img src="http://qameha.com/img/logo_qameha_com_black_with_tag.png" alt="Agile Recruiting Solutions" height="70" width = "300" border = "0" style="margin-top : 10px; ">
</a>
</div>
    <div style="height : 90px; width : 100%;">
    <div style="float : right; right : 10px; margin-top : 20px; color: #cfc4b6; font-size : 16px;">
Tél: +33 (0) 1 45 81 82 59
<br />
<a href="mailto:Contact@qameha.com">contact@qameha.com</a>
</div>

</div>

<!-- VO
      <?php if (is_home()) echo('<h1 id="title">'); else echo('<div id="title">'); ?>
<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
<?php if (is_home()) echo('</h1>'); else echo('</div>');?>
      <div id="description">       <?php bloginfo('description'); ?>      </div>
-->   
      <div id="navigation">
        <ul id="nav">
          <?php $exclude_pages = get_option('T_pages_to_exclude'); ?>
          <?php $exclude_cats = get_option('T_categories_to_exclude'); ?>
					<?php $hide_pages = get_option('T_hide_pages'); ?>
					<?php $hide_cats = get_option('T_hide_cats'); ?>
					<?php if ($hide_pages != 'true') : ?>
          	<?php wp_list_pages('title_li=&exclude=' . $exclude_pages); ?>
					<?php endif; ?>
					<?php if ($hide_cats != 'true') : ?>
          	<?php wp_list_categories('title_li=&exclude=' . $exclude_cats); ?>
					<?php endif; ?>
<!-- VO
          <li class="home page_item <?php if (is_home()) echo('current_page_item');?>"><a href="<?php bloginfo('url'); ?>">Blog</a></li>
-->
        </ul>
      </div><!--end navigation-->
     </div><!--end wrapper-->
	</div><!--end header-->
<div class="content-background">
<div class="wrapper">
	<div class="notice">
		<?php 
	      $notice_custom = get_option('T_custom_notice'); 
	      $notice_content = get_option('T_notice_content');
	  ?> 
	  <?php if ((is_front_page()) && ($notice_custom == 'true')) {?> 
    	<div><?php echo stripslashes($notice_content); ?></div>
    <?php } ?>
	 </div><!--end notice-->
	<div id="content">     