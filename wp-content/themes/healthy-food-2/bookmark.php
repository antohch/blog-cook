<ul>
	<li><a href="http://digg.com/submit?phase=2&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>"><img class="bookmark_icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/bookmark/digg.png" alt="Digg" /></a></li>
	<li><a href="http://del.icio.us/post?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>"><img class="bookmark_icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/bookmark/delicious.png" alt="Del.icio.us" /></a></li>
	<li><a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>"><img class="bookmark_icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/bookmark/stumbleupon.png" alt="StumbleUpon" /></a></li>
	<li><a href="http://reddit.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>"><img class="bookmark_icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/bookmark/reddit.png" alt="Reddit" /></a></li>
	<li><a href="http://twitter.com/home?status=<?php the_permalink(); ?>"><img class="bookmark_icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/bookmark/twitter.png" alt="Twitter" /></a></li>
	<li><?php $themePath = get_bloginfo('template_url'); ?><?php $imagePath = '<img class="bookmark_icon" src="' . $themePath . '/images/bookmark/rss.png" alt="RSS" />'; ?><?php post_comments_feed_link( $link_text = $imagePath) ?></li>
</ul>