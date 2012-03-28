<?php get_header(); ?>
<div id="container">
<div id="entries">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 style="display: block; font-size: 3.25em;"><a href="<?php the_permalink(); ?>" style="color:#000000;"><?php the_title(); ?></a></h1>
<div class="post">
	<?php the_content(); ?>

<br />

<p><?php printf(__('This entry was written by %1$s, posted on <abbr class="published" title="%2$sT%3$s">%4$s at %5$s</abbr>, filed under %6$s%7$s. Bookmark the <a href="%8$s" title="Permalink to %9$s" rel="bookmark">permalink</a>. Follow any comments here with the <a href="%10$s" title="Comments RSS to %9$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'sandbox'),
						'<span class="author vcard"><a class="url fn n" href="'.get_author_link(false, $authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'sandbox'), $authordata->display_name) . '">'.get_the_author().'</a></span>',
						get_the_time('Y-m-d'),
						get_the_time('H:i:sO'),
						the_date('', '', '', false),
						get_the_time(),
						get_the_category_list(', '),
						get_the_tag_list(' and tagged ', ', ', ''),
						get_permalink(),
						wp_specialchars(get_the_title(), 'double'),
						comments_rss() ) ?>


</div><!--end posts-->

 <?php endwhile; ?>
 <?php else : ?>
 <!-- no posts -->

 <h2>Sorry, no posts were found</h2>
 <?php endif; ?>

	<?php if (function_exists('related_posts')) { ?>
<h3>related</h3>
<ul>
<?php related_posts(); ?>
</ul>
<?php } ?>		

<?php if (function_exists('akpc_most_popular')) { ?>
<h3>popular</h3>
<ul>
<?php akpc_most_popular($limit = 5); ?>
</ul>
<?php } ?>

<?php comments_template(); ?><br/>
			
</div><!--end entries-->	
<?php get_sidebar(); ?>

<?php get_footer(); ?>