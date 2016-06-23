<?php get_header(); ?>
			
			<div id="main" class="site-main">
			
				<div id="inner-content" class="row">
			
				    <div class="large-8 medium-8 columns">
						
						<!-- To see additional archive styles, visit the /partials directory -->
					    <?php get_template_part( 'partials/loop', 'archive' ); ?>
								
				    </div>
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #main -->

<?php get_footer(); ?>