<?php
/*
Template Name: contact page
*/
?>

<?php get_header(); ?>
			
<div id="main" class="site-main">
	<h1 class="screen-reader-text">Main Content</h1>
  	<section id="content-contact">
  		<h2 class="screen-reader-text">Contact Form</h2>
    	<div class="row">
  	  		<div class="large-5 large-offset-3 medium-5 medium-offset-3 small-10 small-offset-1 columns">
  	  			<?php get_template_part( 'partials/loop', 'page-contact' ); ?>
  	  		</div>
  	  	</div>
  	</section>
</div>

<?php get_footer(); ?>