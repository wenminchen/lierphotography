<?php get_header(); ?>
      
<div id="main" class="site-main">
  <h1 class="screen-reader-text">Main Content</h1>

  <!-- homepage image carousel -->
  <section id="carousel">
    <h2 class="screen-reader-text">Image Carousel</h2>
    <div class="row">
      <div class="medium-12 columns">
        <?php get_template_part( 'partials/content', 'carousel' ); ?>
      </div> 
    </div>
  </section><!-- end carousel -->

  <!-- featured section -->
      <section class="show-for-medium-up" id="portfolio">
        <div class="row">
          <h4><span>Portfolio</span></h4> 
          <?php get_template_part( 'partials/content', 'featured' ); ?>
        </div><!-- end outer row -->                   
      </section><!-- end featured section -->

</div> <!-- end #main -->

<?php get_footer(); ?>