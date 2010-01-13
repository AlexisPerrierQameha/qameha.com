<?php /* Fusion/digitalnature */
  $options = get_option('fusion_options');
?>

  </div>
  <!-- /side wrap -->
 </div>
 <!-- /mid column wrap -->
</div>
<!-- /main wrapper -->

<!-- clear main & sidebar sections -->
<div class="clearcontent"></div>
<!-- /clear main & sidebar sections -->

<!-- footer -->
 <div id="footer">
   <!-- please do not remove this. respect the authors :) -->
   <p>
    <?php
      printf(__('Fusion theme by %s', 'fusion'), '<a href="http://digitalnature.ro/projects/fusion">digitalnature</a>');
      print ' | ';
      printf(__('powered by %s', 'fusion'), '<a href="http://wordpress.org/">WordPress</a>');
    ?>
    <br />
   <a class="rss" href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','fusion'); ?></a> <?php _e('and','fusion');?> <a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','fusion'); ?></a> <a href="#" id="toplink">^</a>
   <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
   </p>
 </div>
 <!-- /footer -->
 <?php if((!$options['nolayoutcontrol']) && (!$options['nojquery'])) { ?>
 <div id="layoutcontrol">
   <a href="javascript:void(0);" class="setFont" title="<?php _e('Increase/Decrease text size','fusion'); ?>"><span>SetTextSize</span></a>
   <a href="javascript:void(0);" class="setLiquid" title="<?php _e('Switch between full and fixed width','fusion'); ?>"><span>SetPageWidth</span></a>
 </div>
 <?php } ?>
</div>
<!-- /page -->

</div>
</div>
<!-- /page wrappers -->


<?php wp_footer(); ?>
</body>
</html>
