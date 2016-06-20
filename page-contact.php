<?php
/*
Template Name: contact page
*/
?>

<?php get_header(); ?>
			
<div id="content-contact">
	<h1 class="screen-reader-text">Main Content</h1>
	<!--<div id="content-contact" class="contact clearfix">-->

		<?php get_template_part( 'partials/loop', 'page-contact' ); ?>
	
	<!--</div><!-- end #content-contact -->
</div> <!-- end #content -->

<?php get_footer(); ?>