<?php get_header(); ?>
			
	<div id="main" class="site-main">
		<h1 class="screen-reader-text">Search</h1>
		
		<div id="inner-content" class="row">
	
			<div class="large-8 medium-8 columns first">
				<h1 class="archive-title"><span><?php _e('Search Results for:', 'lierphotography'); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<header class="article-header">

							<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<?php get_template_part( 'partials/content', 'byline' ); ?>
				
						</header> <!-- end article header -->
			
						<section class="entry-content">
							<?php the_content('<button class="tiny">Read more...</button>'); ?> 
						</section> <!-- end article section -->
				
						<footer class="article-footer">
					
						</footer> <!-- end article footer -->
			
					</article> <!-- end article -->
			
				<?php endwhile; ?>	
			
				        <?php lierphotography_page_navi(); ?>	
			
			    <?php else : ?>
			
				    <article id="post-not-found" class="hentry clearfix">
				    	<header class="article-header">
				    		<h3>Sorry, No Results.</h3>
				    	</header>
				    	<section class="entry-content">
				    		<p>Try your search again.</p>
				    	</section>
				    	<section class="search">
                            			<p><?php get_search_form(); ?></p>
        		                </section> <!-- end search section -->
				    	<footer class="article-footer">
				    	    <p>This is the error message in the search.php template.</p>
				    	</footer>
				    </article>
			
			    <?php endif; ?>
	
		    </div>
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #main -->

<?php get_footer(); ?>
