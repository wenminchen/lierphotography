<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
							
		<header class="article-header">
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h3>
			<?php get_template_part( 'partials/content', 'byline' ); ?>
		</header> <!-- end article header -->
						
		<section class="entry-content" itemprop="articleBody">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
			<?php the_content('<button class="tiny">Read more...</button>'); ?>
		</section> <!-- end article section -->
							
		<footer class="article-footer">
	    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'lierphotography') . '</span> ', ', ', ''); ?></p>
		</footer> <!-- end article footer -->
							    						
	</article> <!-- end article -->

<?php endwhile; ?>	
					
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

<?php get_template_part( 'partials/content', 'missing' ); ?>

<?php endif; ?>

