<?php get_header(); ?>
			
<div id="content">
	<h1 class="hiddenHeader">Main Content</h1>
	<?php $image1 = wp_get_attachment_image_src( get_field('slider1') );
  	$image2 = wp_get_attachment_image_src( get_field('slider2') );
  	$image3 = wp_get_attachment_image_src( get_field('slider3') );
  	$image4 = wp_get_attachment_image_src( get_field('slider4') );
  	$image5 = wp_get_attachment_image_src( get_field('slider5') );
  	$image6 = wp_get_attachment_image_src( get_field('slider6') );
  	$image7 = wp_get_attachment_image_src( get_field('slider7') );
  	$image8 = wp_get_attachment_image_src( get_field('slider8') );
  	$image9 = wp_get_attachment_image_src( get_field('slider9') );
  	$image10 = wp_get_attachment_image_src( get_field('slider10') );
  	$image11 = wp_get_attachment_image_src( get_field('slider11') );
  	$image12 = wp_get_attachment_image_src( get_field('slider12') );
?>
	
	<ul data-orbit data-options="pause_on_hover:false; timer_speed:5000;">
  	  <li>
       <img src="<?php echo $image1[0]; ?>" />
      </li>
      <?php if(get_field('slider2')) { ?>
      <li>
       <img src="<?php echo $image2[0]; ?>" />
      </li>
      <?php } ?>
      <?php if(get_field('slider3')) { ?>
      <li>
       <img src="<?php echo $image3[0]; ?>" />
      </li>
      <?php } ?>
      <?php if(get_field('slider4')) { ?>
      <li>
       <img src="<?php echo $image4[0]; ?>" />
      </li>
      <?php } ?>
      <?php if(get_field('slider5')) { ?>
      <li>
       <img src="<?php echo $image5[0]; ?>" />
      </li>
      <?php } ?>
      <?php if(get_field('slider6')) { ?>
      <li>
       <img src="<?php echo $image6[0]; ?>" />
      </li>
      <?php } ?>
      <?php if(get_field('slider7')) { ?>
      <li>
       <img src="<?php echo $image7[0]; ?>" />
      </li>
      <?php } ?>
      <?php if(get_field('slider8')) { ?>
      <li>
       <img src="<?php echo $image8[0]; ?>" />
      </li>
      <?php } ?>
      <?php if(get_field('slider9')) { ?>
      <li>
       <img src="<?php echo $image9[0]; ?>" />
      </li>
      <?php } ?>
      <?php if(get_field('slider10')) { ?>
      <li>
       <img src="<?php echo $image10[0]; ?>" />
      </li>
      <?php } ?>
      <?php if(get_field('slider11')) { ?>
      <li>
       <img src="<?php echo $image11[0]; ?>" />
      </li>
      <?php } ?>
      <?php if(get_field('slider12')) { ?>
      <li>
       <img src="<?php echo $image12[0]; ?>" />
      </li>
      <?php } ?>
    </ul>

</div> <!-- end #content -->

<?php get_footer(); ?>