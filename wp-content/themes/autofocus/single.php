<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post(); ?>
			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span>') ?></div>
				<div class="nav-next"><?php next_post_link('%link', '<span class="meta-nav">&raquo;</span>') ?></div>
			</div>

			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class(); ?>">
				<div class="full-photo">
					<span class="photo-credit">&copy; <?php the_time('Y'); ?> <?php the_author(); ?></span>
<?php the_post_image('large'); ?>
				</div>

				<h2 class="entry-title"><?php the_title(); ?></h2>
				<div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'sandbox') . '&after=</div>') ?>
				</div>
				<div class="entry-meta">
					<span class="bigdate entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></abbr></span>
					<?php printf(__('Posted by %1$s.<br /><br /><strong>View more titanium paintings of %6$s%7$s.</strong><br /><br />', 'sandbox'),
						'<span class="author vcard"><a class="url fn n" href="'.get_author_link(false, $authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'sandbox'), $authordata->display_name) . '">'.get_the_author().'</a></span>',
						get_the_time('Y-m-d'),
						get_the_time('H:i:sO'),
						the_date('', '', '', false),
						get_the_time(),
						get_the_category_list(', '),
						get_the_tag_list(' '.__('and tagged').' ', ', ', ''),
						get_permalink(),
						wp_specialchars(get_the_title(), 'double'),
						comments_rss() ) ?>
<?php /* Comments and trackbacks disabled since we're using Disqus and these are kind of stupid anyway. */

/*

<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Comments and trackbacks open ?>
					<?php printf(__('<a class="comment-link" href="#disqus_thread" title="Post a comment">Post a comment</a> or view the <a class="trackback-link" href="%s" title="Trackback URL for this post" rel="trackback">Trackback URL</a>.', 'sandbox'), get_trackback_url()) ?>
<?php elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Only trackbacks open ?>
					<?php printf(__('<a class="trackback-link" href="%s" title="Trackback URL for this post" rel="trackback">Trackback URL</a>.', 'sandbox'), get_trackback_url()) ?>
<?php elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Only comments open ?>
					<?php printf(__('<a class="comment-link" href="#disqus_thread" title="Post a comment">Post a comment</a>.', 'sandbox')) ?>
<?php elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Comments and trackbacks closed ?>
					<?php _e('Comments and trackbacks are currently closed.') ?>
<?php endif; ?>

*/ ?>
					<span class="attachment-link"><?php link_to_attachment(); ?></span>
<?php edit_post_link(__('Edit', 'sandbox'), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>"); ?>

				</div>
			</div><!-- .post -->

 <?php comments_template('', true); ?>

			<div id="nav-below" class="navigation">

        <div class="browse"><h3>Browse</h3></div>

        		<?php 
        			$previouspost = get_previous_post($in_same_cat, $excluded_categories);

        			if ($previouspost != null) {

        			echo '<div class="nav-previous">';
        			previous_post_link('Older: %link');
        			echo '<div class="nav-excerpt"><p>';
        			previous_post_excerpt();
        			echo '</p></div></div>';
        			 } ?>

        				<?php 
        			$nextpost = get_next_post($in_same_cat, $excluded_categories);

        			if ($nextpost != null) {

        			echo '<div class="nav-next">';
        			next_post_link('Newer: %link');
        			echo '<div class="nav-excerpt"><p>';
        			next_post_excerpt();
        			echo '</p></div></div>';
        			 } ?>

			</div><!-- #nav-below -->

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>
