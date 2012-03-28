<?php get_header(); ?>
<div id="container">
<div id="entries">

	
	<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

 
          <div class="results_content">
          <h1 style="display: block; font-size: 4.65em;"><a href="<?php the_permalink(); ?>" style="color:#000000;"><?php the_title(); ?></a></h1>

       
              <?php the_content(); ?>

<p><?php printf(__('This entry was written by %1$s, posted on <abbr class="published" title="%2$sT%3$s">%4$s at %5$s</abbr>, filed under %6$s%7$s. Leave a comment or view the discussion at the <a href="%8$s" title="Permalink to %9$s" rel="bookmark">permalink</a> and follow any comments with the <a href="%10$s" title="Comments RSS to %9$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'sandbox'),
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

        
          </div>
       <?php endwhile; ?>
  
	<?php else : ?>
		
<h1 style="display:inline; font-size:4.65em;">Nothing Found</h1><br/><br/>
Sorry. I looked everywhere, but I didn't find anything. Try again?
	<?php endif; ?>
<?php previous_post_link('&laquo; %link','%title') ?><br/>
<?php next_post_link('&raquo; %link','%title') ?><br/>	
</div><!--end entries-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>