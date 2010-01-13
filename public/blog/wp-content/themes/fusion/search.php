<?php /* Fusion/digitalnature */ ?>
<?php get_header(); ?>


  <!-- mid content -->
  <div id="mid-content">
	<?php if (have_posts()) : ?>
   	 <h2 class="pagetitle"><?php _e("Search Results","fusion"); ?></h2>
	 <div class="navigation" id="pagenavi">
      <?php if(function_exists('wp_pagenavi')) : ?>
	  <?php wp_pagenavi() ?>
      <?php else : ?>
	   <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries','fusion')) ?></div>
	   <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;','fusion')) ?></div>
       <div class="clear"></div>
      <?php endif; ?>
	 </div>

     <?php while (have_posts()) : the_post(); ?>
       <?php if (function_exists("post_class")) { ?>
       <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       <?php } else { ?>
       <div class="post" id="post-<?php the_ID(); ?>">
       <?php } ?>
  		<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
      		<small><?php the_time(__('l, F jS, Y','fusion')) ?></small>
      		<p class="postmetadata"><?php the_tags(__('Tags: ','fusion'), ', ', '<br />'); ?> <?php printf(__('Posted in %s','fusion'), get_the_category_list(', '));?> | <?php edit_post_link(__('Edit','fusion'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments','fusion'), __('1 Comment','fusion'), __('% Comments','fusion')); ?></p>
       </div>
     <?php endwhile; ?>
     <div class="navigation" id="pagenavi">
       <?php if(function_exists('wp_pagenavi')) : ?>
        <?php wp_pagenavi() ?>
       <?php else : ?>
        <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries','fusion')) ?></div>
        <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;','fusion')) ?></div>
        <div class="clear"></div>
       <?php endif; ?>
     </div>
	<?php else : ?>
  	 <h2 class="center"><?php _e('No posts found. Try a different search?','fusion'); ?></h2>
	 <?php get_search_form(); ?>
	<?php endif; ?>

  </div>
    <!-- mid content -->
   </div>
   <!-- /mid -->

   <?php get_sidebar(); ?>

<?php get_footer(); ?>
