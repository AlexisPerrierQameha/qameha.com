<?php $dateFormat = get_settings('date_format'); ?>
<?php get_header(); ?>


<div id="content">
	<div id="content-inner">

<div id="main">


 <h2 id="sectiontitle"><?php single_tag_title('Posts tagged: '); ?></h2>

<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>
			
	<div class="post" id="post-<?php the_ID(); ?>">
	
			
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to '); ?><?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="entry">
				<?php the_content(__('Read more &raquo;')); ?>
				<div style="clear:both"></div>
		</div>
	
		<div class="postmetadata">
		
			<p><img style="vertical-align:-5px;" alt="categories" src="<?php bloginfo('template_directory'); ?>/images/category.gif" height="16" width="16" /> <?php the_category(', ') ?> | <?php the_author_posts_link(); ?> | <?php the_date($dateFormat); ?> | <img style="vertical-align:-5px;" alt="comments" src="<?php bloginfo('template_directory'); ?>/images/comment.gif" height="16" width="16" /> <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?> <?php edit_post_link('Edit',' ',''); ?></p>
			 <?php if (get_the_tags()){?>
		 		  	<p><img style="vertical-align:-5px;" alt="categories" src="<?php bloginfo('template_directory'); ?>/images/tag.gif" height="16" width="16" /> <?php the_tags('') ?></p>
		<?php } ?>			
			</div> 
	
		
		
		<?php comments_template(); ?>
		
		
		</div>
		
		


	<?php endwhile; ?>

	
	
	<div id="navigation">
			<div class="fleft"><?php next_posts_link(__('&laquo; Older')) ?></div>
					<div class="fright"> <?php previous_posts_link(__('Newer &raquo;')) ?></div>
	</div>
			
	

	<?php else : ?>
	
	<div class="post">
	<div class="entry">
<?php 	_e('<h2>Not Found</h2>'); ?>
<?php 	_e('<p>Sorry, you are looking for something that isn\'t here.</p>'); ?>
	</div>
	</div>	
		
	<?php endif; ?>
	
	

	</div> <!-- eof main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
