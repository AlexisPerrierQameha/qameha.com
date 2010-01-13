<?php get_header(); ?>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post single" id="post-<?php the_ID(); ?>">
			<div class="post-header">
				<div class="tags"><?php the_tags('<span>Tags</span> <p>', ', ', '</p>'); ?></div>
				<h1><?php the_title(); ?></h1>
        <div class="author">by <?php the_author() ?> on <?php the_time('F jS, Y'); ?></div>
      </div><!--end post header-->		
			<div class="entry clear">
				<?php the_content('read more...'); ?>
        <?php edit_post_link('Edit This','<p>','</p>'); ?>
				<?php wp_link_pages(); ?>
			</div><!--end entry-->       
      <div class="meta clear">
        <p>From <?php the_category(', ') ?> </p>
      </div><!--end meta-->    
		</div><!--end post-->
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<?php comments_template('', true); ?>
		<?php else : ?>
		<?php endif; ?>
	</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>