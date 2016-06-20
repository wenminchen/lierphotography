<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		  <div class="thumb-wrapper">
			<div id="thumbs" class="thumbs">
				<?php $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'post_status' => null, 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => -1 ) );
				if( $images ): ?>
			    <ul class="thumbs noscript">
			    	<?php foreach( $images as $attachment_id => $attachment ): ?>
			        <li>
			            <a class="thumb" href="<?php echo wp_get_attachment_url( $attachment_id ); ?>" title="<?php echo $attachment->post_title; ?>">
			                <?php echo wp_get_attachment_image( $attachment_id, 'thumbnail' );?>
			            </a>
			        </li>
			        <?php endforeach; ?>
			    </ul>
			    <?php endif; ?>
			</div>
		  </div>
		  	<a class="back-thumbs" href="#">back</a>
		  	<a class="next-thumbs" href="#">next</a>
		    
		    <div id="controls" class="controls hide-for-small-only"></div>
		    <div id="slideshow" class="slideshow"></div>
		
		</article><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; else : ?>
					
	<?php get_template_part( 'partials/content', 'missing' ); ?>

<?php endif; ?>
