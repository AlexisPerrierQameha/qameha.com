<?php /* Fusion/digitalnature

Template Name: 3-column page 
*/ ?>
<?php get_header(); ?>

   <!-- mid content -->
  <div id="mid-content">

       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <?php if (function_exists("post_class")) { ?>
       <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       <?php } else { ?>
       <div class="post" id="post-<?php the_ID(); ?>">
       <?php } ?>
        <h2 class="left"><?php the_title(); ?></h2>
        <p class="right"><span class="editlink page"><?php edit_post_link(''); ?></span></p>
        <div class="clear"></div>
        <div class="entry clearfix">
    		<?php the_content(__('Read the rest of this page &raquo;', 'fusion')); ?>
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        </div>
       </div>
       <?php endwhile; endif; ?>

       <?php comments_template(); ?>


    </div>
    <!-- mid content -->
   </div>
   <!-- /mid -->

   <?php include(TEMPLATEPATH . '/sidebar2.php'); ?>
   <?php get_sidebar(); ?>

<?php get_footer(); ?>