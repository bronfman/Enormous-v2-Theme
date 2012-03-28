<?php get_header(); ?>
<?php
$header_image = rand(1,4);
?>
<div id="container">

<div id="entries">

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<h1 style="display: block; font-size: 3.25em;"><a href="<?php the_permalink(); ?>" style="color:#000000;"><?php the_title(); ?></a></h1>
					
 
<div class="post">
<?php the_content(); ?>
<br />
<p><?php printf(__('By %1$s, posted on <abbr class="published" title="%2$sT%3$s">%4$s at %5$s</abbr>', 'sandbox'),
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



<br><br><br><br>

</div><!--end posts-->


 <?php endwhile; ?>
 <?php else : ?>
 <!-- no posts -->

 <h2>Sorry, no posts were found</h2>
 <?php endif; ?>


<?php next_posts_link('&laquo; Previous Entries') ?><br/>
<?php previous_posts_link('&raquo; Next Entries') ?>

<br/><br/>

</div><!--end entries-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>