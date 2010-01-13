</div><!--end wrapper-->
</div><!--end content-background-->
<div id="footer">
	<div class="wrapper clear">
		<div id="footer-about" class="footer-column">
			<h2>About</h2>
				<?php $about = get_option('T_about'); ?>
				<?php if ($about != '') : ?>
					<?php echo stripslashes($about); ?>
				<?php else : ?>
				<?php endif; ?>
		</div>
		<div id="footer-flickr" class="footer-column">
			<?php $flickr_off = get_option('T_flickr_off'); ?>
			<?php if ($flickr_off == 'true') : ?>
				<ul>
		  		<?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar('Footer') ) : ?>
						<li class="widget widget_categories">
							<h2 class="widgettitle"><?php _e('Categories'); ?></h2>
							<ul>
								<?php wp_list_cats('sort_column=name&hierarchical=0'); ?>
							</ul>
						</li>
		  		<?php endif; ?>
		  	</ul>
			<?php else : ?>
			<?php endif; ?>
		</div>
		<div id="footer-search" class="footer-column">
			<h2>Search</h2>
			 <?php include (TEMPLATEPATH . '/searchform.php'); ?>
		</div>
		<div id="copyright">
			<?php include (COPY); ?>
		</div><!--end copyright-->
	</div><!--end wrapper-->
</div><!--end footer-->

<?php wp_footer(); ?>
<?php
	$tmp_stats_code = get_option('T_stats_code');
	if($tmp_stats_code != ''){
		echo stripslashes($tmp_stats_code);
	}
?>
</body>
</html>
	