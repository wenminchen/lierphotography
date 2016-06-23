<?php get_header(); ?>

<div id="main" class="site-main">
	<h1 class="screen-reader-text">404 Page</h1>
	<section id= "error-404">
		<div id="inner-content" class="row">			
			<div class="large-8 medium-8 columns">
				<article id="content-not-found">
					<header class="article-header">
						<h1>Epic 404 - Article Not Found</h1>
					</header> <!-- end article header -->			
					<section class="entry-content">
						<p>The article you were looking for was not found, but maybe try looking again!</p>
					</section> <!-- end article section -->
					<section class="search">
					    <p><?php get_search_form(); ?></p>
					</section> <!-- end search section -->			
				</article> <!-- end article -->
			</div> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</section><!-- end #error-404-->	    					
</div> <!-- end #main -->

<?php get_footer(); ?>