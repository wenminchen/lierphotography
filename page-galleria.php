<?php
/*
Template Name: gallery page
*/
?>

//NOT USED. A plugin was used instead for the portfolio pages
<?php get_header(); ?>
			
<div id="content">
	<h1 class="screen-reader-text">Main Content</h1>

	<?php get_template_part( 'partials/loop', 'page-galleria' ); ?>
	
</div> <!-- end #content -->

<?php get_footer(); ?>