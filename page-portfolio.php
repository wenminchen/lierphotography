<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
			
<div id="main" class="site-main">
	<h1 class="screen-reader-text">Portfolio Page</h1>
	<section id=  <?php if (is_page( 'Abstract' ) )  :?>		
					"content-abstract"
				  <?php elseif (is_page( 'Imagined' ) )  :?>
					"content-imagined"
				  <?php elseif (is_page( 'Real' ) )  :?>
					"content-real"
				  <?php else :?>
					"content-recent"
				  <?php endif; ?>
	>
		<div id="inner-content gallery" class="clearfix">
			<?php if (is_page( 'Abstract' ) )  :?>		
				<div class="portfolio-category">
					<img class="show-for-small-only" src="<?php echo get_template_directory_uri(); ?>/library/images/abstract-backg-sm.png">
					<img class="show-for-medium-only" src="<?php echo get_template_directory_uri(); ?>/library/images/abstract-backg-med.png">
				</div>
			<?php elseif (is_page( 'Imagined' ) )  :?>
				<div class="portfolio-category">
					<img class="show-for-small-only" src="<?php echo get_template_directory_uri(); ?>/library/images/imagined-backg-sm.png">
					<img class="show-for-medium-only" src="<?php echo get_template_directory_uri(); ?>/library/images/imagined-backg-med.png">
				</div>
			<?php elseif (is_page( 'Real' ) )  :?>
				<div class="portfolio-category">
					<img class="show-for-small-only" src="<?php echo get_template_directory_uri(); ?>/library/images/real-backg-sm.png">
					<img class="show-for-medium-only" src="<?php echo get_template_directory_uri(); ?>/library/images/real-backg-med.png">
				</div>
			<?php else :?>
				<div class="portfolio-category">
					<img class="show-for-small-only" src="<?php echo get_template_directory_uri(); ?>/library/images/recent-backg-sm.png">
					<img class="show-for-medium-only" src="<?php echo get_template_directory_uri(); ?>/library/images/recent-backg-med.png">
				</div>
			<?php endif; ?>
					    		
		    <?php get_template_part( 'partials/loop', 'page-portfolio' ); ?>
		</div>
	</section><!-- end #portfolio-page -->	    					
</div> <!-- end #main -->

<?php get_footer(); ?>
