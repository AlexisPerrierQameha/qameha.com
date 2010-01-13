<?php
$themename = "Titan";
$shortname = "T";
$options = array (

        array(	"name" => "Custom Logo Image <a href=\"https://themes.jestro.com/members/signup.php\"><em>PRO Feature</em></a>",
						"type" => "subhead"),
        
        array(	"name" => "Enable custom logo image",
					    "id" => $shortname."_logo",
						"desc" => "Check this box to use a custom logo.",
					    "std" => "false",
					    "type" => "checkbox"),
        
        array(  "name" => "Logo image file name",
              "id" => $shortname."_logo_img",
              "desc" => "Place your images in the <code>/wp-content/themes/titan/images</code> subdirectory",
              "std" => "",
              "type" => "text"),
            
        array(  "name" => "Logo image ALT tag",
              "id" => $shortname."_logo_img_alt",
              "desc" => "An alt tag for your logo image. Important for SEO.",
              "std" => "",
              "type" => "text"),
              
        array( "name" => "Display tagline",
					    "id" => $shortname."_tagline",
						"desc" => "Check this box to show your tagline next to your logo.",
					    "std" => "false",
					    "type" => "checkbox"),

				array(	"name" => "Follow Links",
									"type" => "subhead"),
									
				array(	"name" => "Email updates link",
						"id" => $shortname."_feed_email",
						"desc" => "Enter your feed email link here.",
						"type" => "textarea",
						"options" => array("rows" => "2",
										   "cols" => "80") ),
											
				array( "name" => "Disable Email Link",
				    "id" => $shortname."_email_toggle",
					  "desc" => "Don't want to offer email updates, check the box.",
				    "std" => "",
				    "type" => "checkbox"),
											
				array(	"name" => "Twitter updates link",
						"id" => $shortname."_twitter",
						"desc" => "Enter your twitter link here.",
						"type" => "textarea",
						"options" => array("rows" => "2",
										   "cols" => "80") ),
										
				array( "name" => "Disable Twitter",
				    "id" => $shortname."_twitter_toggle",
					  "desc" => "Not hip to Twitter? That's cool, just check this box.",
				    "std" => "",
				    "type" => "checkbox"),

				array(	"name" => "Navigation",
						"type" => "subhead"),
        
        array(  "name" => "Exclude pages",
              "id" => $shortname."_pages_to_exclude",
              "desc" => "Page ID's you don't want displayed in your header navigation. Use a comma-delimited list, eg. 1,2,3",
              "std" => "",
              "type" => "text"),

				array(	"name" => "Hide all pages",
					    "id" => $shortname."_hide_pages",
							"desc" => "Check this box to hide all pages.",
					    "std" => "false",
					    "type" => "checkbox"),
           
        array(  "name" => "Exclude categories",
              "id" => $shortname."_categories_to_exclude",
              "desc" => "Category ID's you don't want displayed in your header navigation. Use a comma-delimited list, eg. 1,2,3",
              "std" => "",
              "type" => "text"),
							
				array(	"name" => "Hide all categories",
					    "id" => $shortname."_hide_cats",
							"desc" => "Check this box to hide all categories.",
					    "std" => "true",
					    "type" => "checkbox"),
        
        array(	"name" => "Homepage Notice",
						"type" => "subhead"),
            
        array(	"name" => "Custom notice",
					    "id" => $shortname."_custom_notice",
						"desc" => "Check this box to use a custom notice on the home page.",
					    "std" => "false",
					    "type" => "checkbox"),
            
        array(	"name" => "Custom Notice Content",
						"id" => $shortname."_notice_content",
						"desc" => "Use XHTML/HTML in the message.",
						"std" => "",
						"type" => "textarea",
						"options" => array("rows" => "3",
										   "cols" => "50") ),
              
        array(	"name" => "Sidebar Sidebox",
						"type" => "subhead"),
            
        array(	"name" => "Disable sidebox",
					    "id" => $shortname."_sidebox",
						"desc" => "Check this box to disable the sidebar sidebox.",
					    "std" => "false",
					    "type" => "checkbox"),
            
        array(	"name" => "Custom code",
					    "id" => $shortname."_sidebox_custom_code",
						"desc" => "Check this box to use custom code for the sidebox.",
					    "std" => "false",
					    "type" => "checkbox"),
            
        array(	"name" => "Custom code content",
						"id" => $shortname."_sidebox_custom_code_content",
						"desc" => "Must use properly formatted XHTML/HTML.",
						"std" => "",
						"type" => "textarea",
						"options" => array("rows" => "7",
										   "cols" => "70") ),
     
        array(	"name" => "Sidebar Adbox",
              "type" => "subhead"),
        
   			array(	"name" => "Enable adbox",
				    "id" => $shortname."_adbox",
					"desc" => "Check this box to enable the sidebar adbox.",
				    "std" => "",
				    "type" => "checkbox"),

				array(  "name" => "Ad 1 Image",
            "id" => $shortname."_adurl_1",
            "desc" => "Ad 1 image file name",
            "std" => "",
            "type" => "text"), 

				array(  "name" => "Ad 1 URL",
              "id" => $shortname."_adlink_1",
              "desc" => "Link for the first ad",
              "std" => "",
              "type" => "text"),
        
        array(  "name" => "Ad 1 alt",
              "id" => $shortname."_adalt_1",
              "desc" => "Alt tag for the first ad",
              "std" => "",
              "type" => "text"),

   			array(  "name" => "Ad 2 Image",
            "id" => $shortname."_adurl_2",
            "desc" => "Ad 2 image file name",
            "std" => "",
            "type" => "text"), 

              
        array(  "name" => "Ad 2 URL",
              "id" => $shortname."_adlink_2",
              "desc" => "Link for the second ad",
              "std" => "",
              "type" => "text"),
        
        array(  "name" => "Ad 2 alt",
              "id" => $shortname."_adalt_2",
              "desc" => "Alt tag for the second ad",
              "std" => "",
              "type" => "text"),
        
				
        array(	"name" => "Footer",
						"type" => "subhead"),
						
				array(	"name" => "About",
						"id" => $shortname."_about",
						"desc" => "Something about you or your business. Use HTML!",
						"type" => "textarea",
						"options" => array("rows" => "6",
										   "cols" => "80") ),
						
				array(	"name" => "Flickr Link",
						"id" => $shortname."_flickr",
						"desc" => "Create a <a href=\"http://www.flickr.com/badge_new.gne\">javascript Flickr badge</a>. When Flickr gives you the code at the end of the process, extract the URL and paste here.",
						"type" => "textarea",
						"options" => array("rows" => "2",
										   "cols" => "80") ),
										
	 			array(	"name" => "Disable Flickr",
				    "id" => $shortname."_flickr_off",
						"desc" => "Check this box to disable Flickr and enable footer widget instead.",
				    "std" => "",
				    "type" => "checkbox"),

				array(	"name" => "Copyright notice",
					    "id" => $shortname."_copyright_name",
					    "std" => "Your Name Here",
					    "type" => "text"),			
				
				array(	"name" => "Stats code",
						"id" => $shortname."_stats_code",
						"desc" => "If you use Google Analytics or need any other tracking script in your footer just copy and paste it here.<br /> The script will be inserted before the closing <code>&#60;/body&#62;</code> tag.",
						"std" => "",
						"type" => "textarea",
						"options" => array("rows" => "5",
										   "cols" => "40") ),
		  );

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=titan-admin.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=titan-admin.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

//add_theme_page($themename . 'Header Options', 'Header Options', 'edit_themes', basename(__FILE__), 'headimage_admin');

function headimage_admin(){
	
}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
	<h2 class="updatehook" style=" padding-top: 20px; font-size: 2.8em;"><?php echo $themename; ?> Options</h2>
	<p style="line-height: 1.6em; font-size: 1.2em; width: 75%;">Welcome to the Titan Options menu. If you have any questions or need support you can sign up for a <a href="https://themes.jestro.com/members/signup.php">PRO Membership</a>.</p> 
	<p style="line-height: 1.6em; font-size: 1.2em; width: 75%;">Titan was hand coded and brought to you by <a href="http://www.jestro.com/">Jestro</a>.</p>
	<form method="post">
<form method="post">

<table class="form-table">

<?php foreach ($options as $value) { 
	
	switch ( $value['type'] ) {
		case 'subhead':
		?>
			</table>
			
			<h3 style="padding-top: 15px;"><?php echo $value['name']; ?></h3>
			
			<table class="form-table">
		<?php
		break;
		case 'text':
		option_wrapper_header($value);
		?>
		        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
		<?php
		option_wrapper_footer_nobreak($value);
		break;
		
		case 'select':
		option_wrapper_header($value);
		?>
	            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	                <?php foreach ($value['options'] as $option) { ?>
	                <option <?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
	                <?php } ?>
	            </select>
		<?php
		option_wrapper_footer_nobreak($value);
		break;
		
		case 'textarea':
		$ta_options = $value['options'];
		option_wrapper_header($value);
		?>
				<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="<?php echo $ta_options['cols']; ?>" rows="<?php echo $ta_options['rows']; ?>"><?php 
				if( get_settings($value['id']) != "") {
						echo stripslashes(get_settings($value['id']));
					}else{
						echo stripslashes($value['std']);
				}?></textarea>
		<?php
		option_wrapper_footer($value);
		break;

		case "radio":
		option_wrapper_header($value);
		
 		foreach ($value['options'] as $key=>$option) { 
				$radio_setting = get_settings($value['id']);
				if($radio_setting != ''){
		    		if ($key == get_settings($value['id']) ) {
						$checked = "checked=\"checked\"";
						} else {
							$checked = "";
						}
				}else{
					if($key == $value['std']){
						$checked = "checked=\"checked\"";
					}else{
						$checked = "";
					}
				}?>
	            <input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
		<?php 
		}
		 
		option_wrapper_footer($value);
		break;
		
		case "checkbox":
		option_wrapper_header($value);
						if(get_settings($value['id'])){
							$checked = "checked=\"checked\"";
						}else{
							$checked = "";
						}
					?>
		            <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
		<?php
		option_wrapper_footer_nobreak($value);
		break;

		default:

		break;
	}
}
?>

</table>

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<?php
}

function option_wrapper_header($values){
	?>
	<tr valign="top"> 
	    <th scope="row"><?php echo $values['name']; ?>:</th>
	    <td>
	<?php
}
function option_wrapper_footer($values){
	?>
		<br />
		<?php echo $values['desc']; ?>
	    </td>
	</tr>
	<?php 
}
function option_wrapper_footer_nobreak($values){
	?>
		<?php echo $values['desc']; ?>
	    </td>
	</tr>
	<?php 
}
add_action('admin_menu', 'mytheme_add_admin'); 
?>