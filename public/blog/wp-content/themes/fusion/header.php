<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php /* Fusion/digitalnature */
  $options = get_option('fusion_options');
  if (is_home()) {
  	$metakeywords = $options['metakeywords'];
  } else if (is_single()) {
  	$metakeywords = "";
  	$tags = wp_get_post_tags($post->ID);
  	foreach ($tags as $tag ) {
  	  $metakeywords = $metakeywords . $tag->name . ", ";
  	}
  }    
?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if($options['metakeywords']) { ?>
<meta name="keywords" content="<?php echo $metakeywords; ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php } ?>

<title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="all">@import "<?php bloginfo('stylesheet_url'); ?>";</style>
<!--[if lte IE 6]>
<script type="text/javascript">
/* <![CDATA[ */
   blankimgpath = '<?php bloginfo('template_url'); ?>/images/blank.gif';
 /* ]]> */
</script>
<style type="text/css" media="screen">
  @import "<?php bloginfo('template_url'); ?>/ie6.css";
  body{ behavior:url("<?php bloginfo('template_url'); ?>/js/ie6hoverfix.htc"); }
  img{ behavior: url("<?php bloginfo('template_url'); ?>/js/ie6pngfix.htc"); }
</style>
<![endif]-->

<?php if($options['layouttype']=='fluid') { ?><style type="text/css" media="all">@import "<?php bloginfo('template_url'); ?>/options/fluid.css";</style><?php }?>
<?php if($options['sidebarpos']=='left') { ?><style type="text/css" media="all">@import "<?php bloginfo('template_url'); ?>/options/leftsidebar.css";</style><?php }?>
<?php // custom css?
  $usercss = $options['customcss'];
  if($usercss<>'') { ?>
<style type="text/css" media="screen">
  <?php echo $usercss; ?>
</style>
<?php } ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php if(!$options['nojquery']) { ?>
 <?php wp_enqueue_script('jquery'); ?>
 <?php wp_enqueue_script('fusion',get_bloginfo('template_url').'/js/fusion.js'); ?>
<?php } ?>

<?php wp_head(); ?>

<?php if(!$options['nojquery']) { ?>
<script type="text/javascript">
/* <![CDATA[ */
 jQuery(document).ready(function(){
  // body .safari class
  if (jQuery.browser.safari) jQuery('body').addClass('safari');

  // layout controls
  <?php if(!$options['nolayoutcontrol']) { ?>
   jQuery("#layoutcontrol a").click(function() {
     switch (jQuery(this).attr("class")) {
	   case 'setFont' : setFontSize();	break;
	   case 'setLiquid'	: setPageWidth();	break;
	 }
	 return false;
    });
   // set the font size from cookie
   var font_size = jQuery.cookie('fontSize');
   if (font_size == '.7em') { jQuery('body').css("font-size",".7em"); }
   if (font_size == '.95em') { jQuery('body').css("font-size",".95em"); }
   if (font_size == '.8em') { jQuery('body').css("font-size",".8em"); }

   // set the page width from cookie
   var page_width = jQuery.cookie('pageWidth');
   if (page_width) jQuery('#page').css('width', page_width);
  <?php } ?>

  jQuery('#secondary-tabs').minitabs(333, 'slide');

  if (document.all && !window.opera && !window.XMLHttpRequest && jQuery.browser.msie) { var isIE6 = true; }
  else { var isIE6 = false;} ;
  jQuery.browser.msie6 = isIE6;
  if (!isIE6) {
    initTooltips({
		timeout: 6000
   });
  }
  tabmenudropdowns();

  // some jquery effects...
  jQuery('#sidebar ul.nav li ul li a').mouseover(function () {
   	jQuery(this).animate({ marginLeft: "4px" }, 100 );
  });
  jQuery('#sidebar ul.nav li ul li a').mouseout(function () {
    jQuery(this).animate({ marginLeft: "0px" }, 100 );
  });
  // scroll to top
  jQuery("a#toplink").click(function(){
    jQuery('html, body').animate({scrollTop:0}, 'slow');
  });

 });

 /* ]]> */
</script>
<?php } ?>

</head>
<body <?php if (is_home()) { ?>class="home"<?php } else { ?>class="<?php echo $post->post_name; ?>"<?php } ?>>
  <!-- page wrappers (100% width) -->
  <div id="page-wrap1">
    <div id="page-wrap2">
      <!-- page (actual site content, custom width) -->
      <div id="page"<?php if(is_page_template('page-3col.php')) { ?> class="with-sidebar2"<?php } else if(!is_page_template('page-nosidebar.php')) { ?> class="with-sidebar"<?php } ?>>

       <!-- main wrapper (side & main) -->
       <div id="main-wrap">
        <!-- mid column wrap -->
    	<div id="mid-wrap">
          <!-- sidebar wrap -->
          <div id="side-wrap">
            <!-- mid column -->
    	    <div id="mid">
              <!-- header -->
              <div id="header">
                <div id="topnav" class="description"> <?php bloginfo('description'); ?></div>

                <?php
                // logo image option checked?
                if($options['logoimage']) {
    			?><a id="logo" href="<?php bloginfo('url'); ?>/"><img src="<?php if(file_exists(TEMPLATEPATH.'/logo.png')) echo get_bloginfo('template_url').'/logo.png'; else echo get_bloginfo('template_url').'/logo-default.png'; ?>" title="<?php bloginfo('name');  ?>" alt="<?php bloginfo('name');  ?>" /></a><?php
    		} else {
    			?><h1 id="title"><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1><?php
    		}
                ?>
                <!-- top tab navigation -->
                <div id="tabs">
                 <ul>
                 <?php
                  if((!$options['hidehometab']) && (!$options['categorytabs'])) {
                    if(is_home() && !is_paged()){ ?>
                   <li class="current_page_item"><a href="<?php echo get_settings('home'); ?>" title="<?php _e('You are Home','fusion'); ?>"><span><span><?php _e('Home','fusion'); ?></span></span></a></li>
                 <?php } else { ?>
                  <li><a href="<?php echo get_option('home'); ?>" title="<?php _e('Click for Home','fusion'); ?>"><span><span><?php _e('Home','fusion'); ?></span></span></a></li>
                 <?php
                   }
                  }
                  ?>
                 <?php
                   if($options['categorytabs']) {
                    echo preg_replace('@\<li([^>]*)>\<a([^>]*)>(.*?)\<\/a>@i', '<li$1><a$2><span><span>$3</span></span></a>', wp_list_categories('show_count=0&echo=0&title_li='));
                    }
                   else {
                     echo preg_replace('@\<li([^>]*)>\<a([^>]*)>(.*?)\<\/a>@i', '<li$1><a$2><span><span>$3</span></span></a>', wp_list_pages('echo=0&orderby=name&title_li=&'));
                   }
                  ?>
                 </ul>
                </div>
                <!-- /top tabs -->

              </div><!-- /header -->
