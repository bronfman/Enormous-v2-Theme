<?php get_header(); ?>

<div id="container">

<div id="entries">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 style="display: block; font-size: 3.25em;"><a href="<?php the_permalink(); ?>" style="color:#000000;"><?php the_title(); ?></a></h1>

<div class="post">
<?php the_content(); ?>
</div><!--end posts-->

 <?php endwhile; ?>
 <?php else : ?>
 <!-- no posts -->

 <h2>Sorry, no posts were found</h2>
 <?php endif; ?>

</div><!--end entries-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>