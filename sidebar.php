<div id="sidebar">

<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(1) ) : ?>


<?php if (function_exists('akpc_most_popular')) { ?>

<?php } ?>


<?php if (function_exists('get_recent_comments')) { ?>
<?php } ?>

<?php endif; ?>




 

<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(3) ) : ?>


				
				


<?php endif; ?>




<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(2) ) : ?>





			<?php endif; ?>
			

</div><!--end sidebar-->