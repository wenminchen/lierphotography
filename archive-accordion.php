<?php get_header(); ?>
			
			<div id="main" class="site-main">
			
				<div id="inner-content" class="row clearfix">
					
				    <div class="large-8 medium-8 columns first clearfix">
				
						<h1 class="page-title"><?php post_type_archive_title(); ?></h1>
						<dl class="accordion" data-accordion>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<dd>											
								<a href="#panel<?php the_ID(); ?>" title="<?php the_title_attribute(); ?>"> <h4 class="fi-plus "> <?php the_title(); ?></h4></a>
							
							    <div class="content" id="panel<?php the_ID(); ?>">
							
								    <?php the_content(); ?>
	
							    <div> <!-- end article section -->
							</dd>		
					    <?php endwhile; ?>
					    </dl>	
					
					        <?php if (function_exists('lierphotography_page_navi')) { ?>
					            <?php lierphotography_page_navi(); ?>
					        <?php } else { ?>
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "lierphotography")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "lierphotography")) ?></li>
					                </ul>
					            </nav>
					        <?php } ?>
					
					    <?php else : ?>
					
                <?php get_template_part( 'partials/missing', 'content' ); ?>
					
					    <?php endif; ?>
			
    				</div>
    				
    				<?php get_sidebar(); ?>
                    
                </div> <!-- end #inner-content -->
                
			</div> <!-- end #main -->

<?php get_footer(); ?>
