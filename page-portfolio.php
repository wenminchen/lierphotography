<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
			
<div id="main" class="site-main">
	<h1 class="screen-reader-text">Portfolio Page</h1>
	<section id= 
		<?php if (is_page( 'Abstract' ) )  :?>
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
		    <?php get_template_part( 'partials/loop', 'page-portfolio' ); ?>
		</div>
	</section><!-- end #portfolio-page -->	    					
</div> <!-- end #main -->

<?php get_footer(); ?>
