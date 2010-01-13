  <?php 
  $sidebox = get_option('T_sidebox'); 
  $custom_code = get_option('T_sidebox_custom_code');
  $custom_code_content = get_option('T_sidebox_custom_code_content');
  $adbox = get_option('T_adbox'); 
	$adurl1 = get_option('T_adurl_1');
  $adlink1 = get_option('T_adlink_1');
  $adalt1 = get_option('T_adalt_1');
	$adurl2 = get_option('T_adurl_2');
  $adlink2 = get_option('T_adlink_2');
  $adalt2 = get_option('T_adalt_2');
	?>
	<div id="sidebar">
  	<?php if ($sidebox != 'true') {?>
      <div id="sidebox">
        <?php if ($custom_code == 'true') : ?>
          <?php echo stripslashes($custom_code_content); ?>
        <?php else : ?>
          <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/sidebar/sidebox.jpg" width="236" height="236" alt="Titan WordPress Theme" /></a>
        <?php endif; ?>
      </div><!--end sidebox-->
  	<?php } ?>
    <?php if ($adbox == 'true') {?>
      <div id="adbox" class="clear">
        <a href="<?php if ($adlink1 != '') echo htmlspecialchars($adlink1, UTF-8); else echo "#"; ?>"><img class="alignleft" src="<?php bloginfo('template_url'); ?>/images/sidebar/<?php if ($adurl1 != '') echo $adurl1; else echo "125_ad_1.gif"; ?>" width="125" height="125" alt="<?php if ($adalt1 != '') echo stripslashes($adalt1); else echo bloginfo('name'); ?>" /></a>
        <a href="<?php if ($adlink2 != '') echo htmlspecialchars($adlink2, UTF-8); else echo "#"; ?>"><img class="alignright" src="<?php bloginfo('template_url'); ?>/images/sidebar/<?php if ($adurl2 != '') echo $adurl2; else echo "125_ad_1.gif"; ?>" width="125" height="125" alt="<?php if ($adalt2 != '') echo stripslashes($adalt2); else echo bloginfo('name'); ?>" /></a>
      </div><!--end adbox-->
    <?php } ?>  
  	<ul>
  		<?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar() ) : ?>
			<ul>
				<li class="widget widget_recent_entries">
					<h2 class="widgettitle"><?php _e('Recent Articles'); ?></h2>
					<ul>
						<?php $side_posts = get_posts('numberposts=10'); foreach($side_posts as $post) : ?>
						<li><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li class="widget widget_categories">
					<h2 class="widgettitle"><?php _e('Categories'); ?></h2>
					<ul>
						<?php wp_list_cats('sort_column=name&hierarchical=0'); ?>
					</ul>
				</li>
				<li class="widget widget_archive">
					<h2 class="widgettitle"><?php _e('Archives'); ?></h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
			</ul>
  		<?php endif; ?>
  	</ul>
	</div><!--end sidebar-->