<?php /* Fusion/digitalnature

Template Name: Links 
*/ ?>
<?php get_header(); ?>


  <!-- mid content -->
  <div id="mid-content">
 <h2><?php _e("Links:","fusion"); ?></h2>
 <ul>
  <?php wp_list_bookmarks(); ?>
 </ul>
  </div>
    <!-- mid content -->
   </div>
   <!-- /mid -->

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
