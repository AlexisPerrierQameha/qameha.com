<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>
<!-- You can start editing here. -->
<div id="comments">
<?php if ( have_comments() ) : ?>
  <div class="comment-number">
    <span><?php comments_number('No Comments Yet', '1 Comment', '% Comments' );?></span>
    <a id="leavecomment" href="#respond" title="<?php _e("Leave One"); ?>"> &rarr;</a>
  </div><!--end comment-number-->
  <ol class="commentlist">
    <?php wp_list_comments('type=comment&callback=custom_comment'); ?>
  </ol>
	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
  <?php if ( ! empty($comments_by_type['pings']) ) : ?>
    <h3 class="pinghead">Trackbacks &amp; Pingbacks</h3>
    <ol class="pinglist">
      <?php wp_list_comments('type=pings&callback=list_pings'); ?>
    </ol>
  <?php endif; ?>
 <?php else : // this is displayed if there are no comments so far ?>
  
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="note">Comments are closed for this entry.</p>
	<?php endif; ?>
<?php endif; ?>
</div><!--end comments-->

<?php if ('open' == $post->comment_status) : ?>
  
  <div id="respond">
    <div class="cancel-comment-reply">
      <small><?php cancel_comment_reply_link(); ?></small>
    </div>
    <h4 id="postcomment"><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h4>
    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
      <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
      </div><!--end respond-->
    <?php else : ?>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( $user_ID ) : ?>
        <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
      <?php else : ?>
        <fieldset>
					<label for="author" class="comment-field"><small>Name <?php if ($req) _e('(required)'); ?>:</small></label>
					<input class="text-input" type="text" name="author" id="author" value="<?php echo $comment_author; ?>"  tabindex="1" />
				</fieldset>
        <fieldset>
					<label for="email" class="comment-field"><small>Email <?php if ($req) _e('(required)'); ?>:</small></label>
					<input class="text-input" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" />
				</fieldset>
        <fieldset>
					<label for="url" class="comment-field"><small>Website:</small></label>
					<input class="text-input" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" />
				</fieldset>
      <?php endif; ?>
      <fieldset>
				<label for="comment" class="comment-field"><small>Comment:</small></label>
				<textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea>
			</fieldset>
      <p class="guidelines"><strong>Note:</strong> XHTML is allowed. Your email address will <strong>never</strong> be published.</p>
      <p class="comments-rss"><?php comments_rss_link(__('Subscribe to this comment feed via RSS')); ?></p>
      <?php do_action('comment_form', $post->ID); ?>
      <fieldset>
				<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</fieldset>
      <?php comment_id_fields(); ?>
    </form><!--end commentform-->
  </div><!--end respond-->

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>