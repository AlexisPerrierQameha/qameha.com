<?php
/* Fusion/digitalnature */

function init_language(){
	if (class_exists('xili_language')) {
		define('THEME_TEXTDOMAIN','fusion');
		define('THEME_LANGS_FOLDER','/lang');
	} else {
	   load_theme_textdomain('fusion', get_template_directory() . '/lang');
	}
}
add_action ('init', 'init_language');

// theme options
class FusionOptions {
	function getOptions() {
		$options = get_option('fusion_options');
		if (!is_array($options)) {
			$options['metakeywords'] = '';
			$options['logoimage'] = false;    
			$options['hidehometab'] = false;
			$options['hidecategories'] = false;
			$options['hidesearch'] = false;
			$options['categorytabs'] = false;
			$options['layouttype'] = 'fixed';
			$options['sidebarpos'] = 'right';
			$options['nolayoutcontrol'] = false;
			$options['nojquery'] = false;
			$options['customcss'] = '';
			update_option('fusion_options', $options);
		}
		return $options;
	}

	function add() {
		if(isset($_POST['fusion_save'])) {
			$options = FusionOptions::getOptions();

			// meta keywords
			$options['metakeywords'] = stripslashes($_POST['metakeywords']);

			// logo image
			if ($_POST['logoimage']) {	$options['logoimage'] = (bool)true;	} else { $options['logoimage'] = (bool)false; }
			$options['logoimage'] = stripslashes($_POST['logoimage']);

			// hide home tab
			if ($_POST['hidehometab']) {  $options['hidehometab'] = (bool)true;	} else { $options['hidehometab'] = (bool)false; }
			$options['hidehometab'] = stripslashes($_POST['hidehometab']);

			// hide categories
			if ($_POST['hidecategories']) {  $options['hidecategories'] = (bool)true;	} else { $options['hidecategories'] = (bool)false; }
			$options['hidecategories'] = stripslashes($_POST['hidecategories']);

			// hide search
			if ($_POST['hidesearch']) {  $options['hidesearch'] = (bool)true;	} else { $options['hidesearch'] = (bool)false; }
			$options['hidesearch'] = stripslashes($_POST['hidesearch']);

			// show category tabs instead of page tabs
			if ($_POST['categorytabs']) {  $options['categorytabs'] = (bool)true;	} else { $options['categorytabs'] = (bool)false; }
			$options['categorytabs'] = stripslashes($_POST['categorytabs']);

            // page width
			$options['layouttype'] = stripslashes($_POST['layouttype']);

            // page width
			$options['sidebarpos'] = stripslashes($_POST['sidebarpos']);

			// hide <>
			if ($_POST['nolayoutcontrol']) {  $options['nolayoutcontrol'] = (bool)true;	} else { $options['nolayoutcontrol'] = (bool)false; }
			$options['nolayoutcontrol'] = stripslashes($_POST['nolayoutcontrol']);

			// disable jquery
			if ($_POST['nojquery']) {  $options['nojquery'] = (bool)true;	} else { $options['nojquery'] = (bool)false; }
			$options['nojquery'] = stripslashes($_POST['nojquery']);

			// meta keywords
			$options['customcss'] = stripslashes($_POST['customcss']);

			update_option('fusion_options', $options);

		} else {
			FusionOptions::getOptions();
		}

		add_theme_page(__("Fusion Theme Options","fusion"), __("Fusion Theme Options","fusion"), 'edit_themes', basename(__FILE__), array('FusionOptions', 'display'));
	}

   function display() {
   $options = FusionOptions::getOptions();
    ?>
      <form action="#" method="post" enctype="multipart/form-data" name="fusion_form" id="fusion_form">
      <div class="wrap">
            <h2><?php _e('Fusion Theme Options','fusion'); ?></h2>
            <br />
            <p>
              <label><?php _e('Meta keywords:','fusion'); ?></label><br />
            <input type="text" name="metakeywords" id="metakeywords" class="code" value="<?php echo($options['metakeywords']); ?>" /><br /><em><?php _e('Separate with commas','fusion'); ?></em>
            </p>
            <br />
            <p>
            <input name="logoimage" type="checkbox" value="checkbox" <?php if($options['logoimage']) echo "checked='checked'"; ?> />
            <?php _e('Use custom logo image','fusion'); ?><br /><em> <?php _e('Upload your logo as "logo.png" in the theme directory:','fusion'); echo ' <strong>'; bloginfo('template_url'); echo '</strong>.<br />'; _e('You should export the logo image with transparency enabled','fusion'); ?></em>
            </p>
            <br />
            <p>
            <input name="hidehometab" type="checkbox" value="checkbox" <?php if($options['hidehometab']) echo "checked='checked'"; ?> />
            <?php _e('Disable homepage tab','fusion'); ?><br /><em><?php _e('Check this if you are using a static page as the homepage','fusion'); ?></em>
            </p>
            <br />
            <p>
            <input name="categorytabs" type="checkbox" value="checkbox" <?php if($options['categorytabs']) echo "checked='checked'"; ?> />
            <?php _e('Show the categories as header tabs','fusion'); ?><br /><em><?php _e('(instead of pages)','fusion'); ?></em>
            </p>
            <br />
            <p>
            <input name="hidecategories" type="checkbox" value="checkbox" <?php if($options['hidecategories']) echo "checked='checked'"; ?> />
            <?php _e('Disable the default category block in the sidebar','fusion'); ?><br /><em><?php _e('Check if you prefer the widgetized category display or just want to hide the categories','fusion'); ?></em>
            </p>
            <br />
            <p>
            <input name="hidesearch" type="checkbox" value="checkbox" <?php if($options['hidesearch']) echo "checked='checked'"; ?> />
            <?php _e('Disable the default search block in the sidebar','fusion'); ?><br /><em><?php _e('Check if you don\'t like the theme-default search look','fusion'); ?></em>
            </p>
            <br />
            <p>
            <input name="nolayoutcontrol" type="checkbox" value="checkbox" <?php if($options['nolayoutcontrol']) echo "checked='checked'"; ?> />
            <?php _e('Disable layout controls (Aa/<>)','fusion'); ?>
            <br />
            <?php _e('Default page content width:','fusion'); ?>
            <label>
            <input name="layouttype" type="radio" value="fixed" <?php if($options['layouttype'] != 'fluid') echo "checked='checked'"; ?> />
            <?php _e('Fixed (960 pixels)','fusion'); ?>
            </label>
            <label style="padding-left: 15px;">
            <input name="layouttype" type="radio" value="fluid" <?php if($options['layouttype'] == 'fluid') echo "checked='checked'"; ?> />
            <?php _e('Fluid (95 percent of the visitor\'s screen width)','fusion'); ?>
            </label><br /><em><?php _e('Note that if the layout controls are enabled, the visitor\'s javascript page width cookie setting will override this option','fusion'); ?></em>
            </p>
            <br />
            <p>
            <?php _e('Sidebar position:','fusion'); ?>
            <label>
            <input name="sidebarpos" type="radio" value="right" <?php if($options['sidebarpos'] != 'left') echo "checked='checked'"; ?> />
            <?php _e('Right (default)','fusion'); ?>
            </label>
            <label style="padding-left: 15px;">
            <input name="sidebarpos" type="radio" value="left" <?php if($options['sidebarpos'] == 'left') echo "checked='checked'"; ?> />
            <?php _e('Left','fusion'); ?>
            </label><br />
            </p>
            <br />
            <p>
            <input name="nojquery" type="checkbox" value="checkbox" <?php if($options['nojquery']) echo "checked='checked'"; ?> />
            <?php _e('Disable jQuery and the associated code','fusion'); ?><br /><em><?php _e('This will reduce the page load with ~70 KB, but will also disable some features and effects (layout controls, rss links inside category menu, comment tabs, trackbacks).<br />You shouldn\'t change this unless you have problems with your host regarding bandwidth','fusion'); ?></em>
            </p>
            <br />
            <textarea name="customcss" id="customcss" class="code" style='float: left' rows="10" cols="40"><?php echo($options['customcss']); ?></textarea><p style="float:left;padding-left: 10px; width: 300px;"><strong><?php _e('Custom CSS code','fusion'); ?></strong><br /><br /><em><?php printf(__('Here you can add or change anything related to design if you have some basic CSS knowledge. Check %s to see existing styles, which you can redefine here.','fusion'),'<a href="'.get_bloginfo('template_url').'/style.css">style.css</a>'); ?></em> <?php echo'<br /><br /><em style="color: #ed1f24">';_e('Don\'t modify style.css if you wish to preserve your changes after theme update! Use this option instead.','fusion');echo '</em>'?></p>;
            <br clear="left" />
            <p class="submit">
            <input class="button-primary" type="submit" name="fusion_save" value="<?php _e('Save Changes','fusion'); ?>" />
            </p>
      </div>
      </form>
   <?php
  }
}

// register functions
add_action('admin_menu', array('FusionOptions', 'add'));

if ( function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Default sidebar',
		'before_widget' => '<li><div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => '2nd sidebar (only on 3-col pages)',
		'before_widget' => '<li><div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
    ));
}

function list_pings($comment, $args, $depth) {
 $GLOBALS['comment'] = $comment;
 ?>
 <li id="comment-<?php comment_ID(); ?>"><?php comment_author_link(); ?>
<?php
}

// custom comments
function list_comments($comment, $args, $depth) {
 $GLOBALS['comment'] = $comment;
 global $commentcount;
 if(!$commentcount) { $commentcount = 0; }
 ?> <!-- comment entry -->
	<li <?php if (function_exists('get_avatar') && get_option('show_avatars')) echo comment_class('with-avatars'); else comment_class(); ?> id="comment-<?php comment_ID() ?>">
      <div class="wrap<?php if(comments_open()) { ?> tiptrigger<?php } ?>">
       <?php if (function_exists('get_avatar') && get_option('show_avatars')) { ?>
       <div class="avatar">
         <a class="gravatar"><?php echo get_avatar($comment, 64); ?></a>
       </div>
       <?php } ?>
       <div class="details <?php if($comment->comment_author_email == get_the_author_email()) echo 'admincomment'; else echo 'regularcomment'; ?>">
        <p class="head">
         <span class="info">
          <?php
           if (get_comment_author_url()):
            $authorlink='<a id="commentauthor-'.get_comment_ID().'" href="'.get_comment_author_url().'">'.get_comment_author().'</a>';
           else:
            $authorlink='<b id="commentauthor-'.get_comment_ID().'">'.get_comment_author().'</b>';
           endif;
           printf(__('%s by %s at %s', 'fusion'), '<a href="#comment-<?php comment_ID() ?>">#'.++$commentcount.'</a>', $authorlink, get_comment_time(__('F jS, Y', 'fusion')), get_comment_time(__('H:i', 'fusion')));
          ?>
         </span>
        </p>
        <!-- comment contents -->
        <div class="text">
		 <?php if ($comment->comment_approved == '0') : ?>
		 <p class="error"><small><?php _e('Your comment is awaiting moderation.','fusion'); ?></small></p>
		 <?php endif; ?>
		 <div id="commentbody-<?php comment_ID() ?>">
          <?php comment_text(); ?>
         </div>
       </div>
       <!-- /comment contents -->
       </div>
       <?php if(comments_open()) { ?>
   	   <div class="act tip">
	     <span class="button reply"><?php comment_reply_link(array_merge( $args, array('add_below' => 'commentbody', 'depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => '<span><span>'.__('Reply','fusion').'</span></span>'.$my_comment_count))) ?></span> <span class="button quote"><a title="<?php _e('Quote','fusion'); ?>" href="javascript:void(0);" onclick="MGJS_CMT.quote('commentauthor-<?php comment_ID() ?>', 'comment-<?php comment_ID() ?>', 'commentbody-<?php comment_ID() ?>', 'comment');"><span><span><?php _e('Quote','fusion'); ?></span></span></a></span>
	   </div>
       <?php } ?>
       <span class="editlink"><?php edit_comment_link(''); ?></span>
      </div>
<?php
  }
?>