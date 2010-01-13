<?php


	// Widgets
  if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => __('Left Sidebar'),
		
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',

	));
	
		register_sidebar(array(
		'name' => __('Right Sidebar'),
		
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',

	));
			
}


add_filter('comments_template', 'legacy_comments');

function legacy_comments($file) {
	if ( !function_exists('wp_list_comments') ) 
		$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
}


	function buildMenu(){

			$mo = ap_getPageMenuOrder();
			$exc = get_settings('ap_pagesOmit');		
					
			$excString = (!empty($exc)) ? '&exclude=' . $exc : '';
							
			wp_list_pages('title_li=&sort_column='.$mo. '&depth=-1'. $excString);
		return NULL;
	}				

function ap_add_theme_page() {
	global $wpdb;

	$errorFlag = false;	
	if ($_GET['page'] == basename(__FILE__)) {
	
	    // save settings
		if ( 'save' == $_REQUEST['action'] ) {

			if (valid_colour($_REQUEST['ap_linkColour'])){
					update_option('ap_linkColour', $_REQUEST['ap_linkColour']);
			} else {
 				$errorFlag = true;
			}
			
	if (valid_colour($_REQUEST['ap_hoverColour'])){
					update_option('ap_hoverColour', $_REQUEST['ap_hoverColour']);
			} else {
 				$errorFlag = true;
			}	
		
		
			
			if (($_REQUEST['ap_pageMenuOrder'] == 'menu') || 
				($_REQUEST['ap_pageMenuOrder'] == 'alpha') || 
				($_REQUEST['ap_pageMenuOrder'] == 'pageid')  
			){
			update_option('ap_pageMenuOrder', $_REQUEST['ap_pageMenuOrder']);
			} else {
 				$errorFlag = true;
			}
	
		if (checkPagesOmit($_REQUEST['ap_pagesOmit'])){
			update_option('ap_pagesOmit', trim($_REQUEST['ap_pagesOmit']));
			} else {
 				$errorFlag = true;
			}
	
							
			// goto theme edit page
			if($errorFlag){
					header("Location: themes.php?page=functions.php&error=true");
					die;
			} else {
					header("Location: themes.php?page=functions.php&saved=true");
					die;
			}
			
			
  		// reset defaults
		} else if('reset' == $_REQUEST['action']) {
			delete_option('ap_linkColour');
			delete_option('ap_hoverColour');	
			delete_option('ap_pageMenuOrder');	
			delete_option('ap_pagesOmit');						
			header("Location: themes.php?page=functions.php&reset=true");
			die;

		}
	}

    add_theme_page(__('Corp Theme Options'), __('Corp Theme Options'), 'edit_themes', basename(__FILE__), 'ap_theme_page');

}

function ap_theme_page() {

	global $wpdb;

	
 ?>

	<script language="javascript"><?php include(TEMPLATEPATH . '/scripts/picker.js'); ?></script>
	

<div class="wrap">


<?php if ($_REQUEST['saved'] ) echo '<div style="margin:10px 0;" id="message" class="updated fade"><p><strong>'.__('Settings saved.','').'</strong></p></div>';
	if ($_REQUEST['reset'] ) echo '<div style="margin:10px 0;" id="message" class="updated fade"><p><strong>'.__('Settings reset.','').'</strong></p></div>';
	if ($_REQUEST['error'] ) echo '<div style="margin:10px 0;" id="message" class="error errorfade"><p><strong>'.__('Error - invalid data','').'</strong></p></div>';

 ?>


<h2><?php _e('Corp Theme Options') ;?></h2>

<p><?php _e('Corp theme by <a href="http://dansette.com/">Dansette</a>'); ?></p>

<form name="tcp" method="post">


<table width="100%" cellspacing="2" cellpadding="5" class="form-table">

<?php


		
		ap_th(__('Link Color'));
		
		$setLinkColour = get_settings('ap_linkColour');
		$valLinkColour = !empty($setLinkColour) ? $setLinkColour : '#993333';
		
		ap_input( 'ap_linkColour', 'text', '', $valLinkColour );

		echo ' <a href="javascript:TCP.popup(document.forms[\'tcp\'].elements[\'ap_linkColour\'])"><img width="15" height="13" border="0" alt="Pick a color" src="'. get_bloginfo('template_directory').'/images/sel.gif"></a><br /><small>6 figure hex code, with hash</small>';
		ap_cth();	
	
		ap_th(__('Hover Color'));
		
		$setHoverColour = get_settings('ap_hoverColour');
		$valHoverColour = !empty($setHoverColour) ? $setHoverColour : '#CC0000';
		
		ap_input( 'ap_hoverColour', 'text', '', $valHoverColour );

		echo ' <a href="javascript:TCP.popup(document.forms[\'tcp\'].elements[\'ap_hoverColour\'])"><img width="15" height="13" border="0" alt="Pick a color" src="'. get_bloginfo('template_directory').'/images/sel.gif"></a><br /><small>6 figure hex code, with hash</small>';
		ap_cth();	
	
	ap_th(__('Pages Menu'));
		
		$setPageMenuOrder = get_settings('ap_pageMenuOrder');
		$pageMenuOrder = !empty($setPageMenuOrder) ? $setPageMenuOrder : 'menu';
		

 ?>
			
		Order by: <select name="ap_pageMenuOrder">
		<option <?php if($setPageMenuOrder == 'alpha') echo 'selected'  ?> value="alpha">Page Title</option>
		<option <?php if($setPageMenuOrder == 'menu') echo 'selected'  ?> value="menu">Page Order</option>
		<option <?php if($setPageMenuOrder == 'pageid') echo 'selected'  ?> value="pageid">Page ID</option>
		</select>
		
		<br />
		Exclude:<br />
		
<?php 
$valPagesOmit = (!empty($_REQUEST['ap_pagesOmit'])) ? $_REQUEST['ap_pagesOmit'] :  get_settings('ap_pagesOmit');
		

ap_input( 'ap_pagesOmit', 'text', '', $valPagesOmit ); ?>
		

	<?php 
		
	_e('<br /><small>Page IDs, separated by commas</small>');
	
		ap_cth();	
	
	
		
?>

</table>


<?php ap_input('save', 'submit', '', __('Save Settings','')); ?>


<input type="hidden" name="action" value="save" />

</form>



<form method="post">




<?php

	ap_input('reset', 'submit', '', __('Restore Default Settings'));
	
?>


<input type="hidden" name="action" value="reset" />

</form>


<?php
}

add_action('admin_menu', 'ap_add_theme_page');


function ap_input($var, $type, $description='', $value='', $selected='', $onchange='' ) {


 	echo "\n";
 	
	switch( $type ){
	
	    case "text":

	 		printf('<input name="%s" id="%s"  type="%s" style="width: 60%%" class="code" value="%s" onchange="%s" />', $var, $var, $type, $value, $onchange);
			 
			break;
			
		case "submit":
		
			printf('<p class="submit"><input name="%s" type="%s" value="%s" /><p>',  $var, $type, $value);

			break;

		case "option":
		
			if($selected == $value)  $extra = 'selected '; 

			printf('<option value="%s" %s>%s</option>', $value, $extra, $description);
		
		    break;
  		case "radio":
  		if($selected == $value)  $extra = 'checked '; 
  		
			printf('<label><input name="%s" id="%s" type="%s" value="%s" %s /> %s</label> &nbsp;', $var, $var, $type, $value, $extra, $description); 
 			
  			break;
  			
		case "checkbox":
		
			if($selected == $value)  $extra = 'checked '; 

				printf('<label><input name="%s" id="%s" type="%s" value="%s" %s /> %s</label><br/>', $var, $var, $type, $value, $extra, $description); 

  			break;

		case "textarea":
		
			printf('<textarea name="%s" id="%s" style="width: 60%%; height: 10em;" class="code"></textarea>',$var, $var, $value ); 
		
		    break;
	}

}

function ap_th( $title ) {


   	echo '<tr valign="top">';
		echo '<th align="right" width="33%" scope="row">'.$title.' </th>';
		echo '<td>';

}

function ap_cth() {

	echo '</td>';
	echo '</tr>';
	
}

function valid_colour($var){
	$regex = '^#([a-f]|[A-F]|[0-9]){6}^';
	return preg_match($regex,$var);
}
	
function ap_themeColour() {

	$tc =  get_settings('ap_linkColour');
	if (empty($tc)) $tc = '#993333';
	echo $tc;
	return NULL;
}


function ap_hoverColour() {

	$tc =  get_settings('ap_hoverColour');
	if (empty($tc)) $tc = '#CC0000';
	echo $tc;
	return NULL;
}


function ap_getPageMenuOrder() {

	switch (get_settings('ap_pageMenuOrder')){
	
		case ('alpha'):
		$mo = 'post_title';
		break;
		
		case ('pageid'):
		$mo = 'ID';
		break;
		
		default:
		$mo = 'menu_order';
	}
	
	return $mo;
}

function checkPagesOmit($str){
	if (empty($str)) return true;
	$regex = '/^[0-9 ,]+$/';
	return preg_match($regex,$str);
}
?>