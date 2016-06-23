<?php 
	// Set up WP_Query for different portfolio pages
	if (is_page( 'Abstract' ) )  :
	    $args = array(
	      'post_type'     => 'portfolio',
	      'category_name' => 'abstract'
	    );    

	elseif(is_page( 'Imagined' )) :
		 $args = array(
	      'post_type'     => 'portfolio',
	      'category_name' => 'imagined'
	    );

	elseif(is_page( 'Real' )) :
		 $args = array(
	      'post_type'     => 'portfolio',
	      'category_name' => 'real'
	    );

	else :
	    $args = array(
	      'post_type'     => 'portfolio',
	      'category_name' => 'recent'
	    );

	endif; 

	$the_query = new WP_Query( $args );

	// The loop
	if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
		the_content();
	endwhile; endif;
?>  

