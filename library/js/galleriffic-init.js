/*
galleriffic script initializing file
 */

jQuery(document).ready(function($) {
	// We only want these styles applied when javascript is enabled
	//$('.gallery').css('display', 'block');
	//$('#loader').hide();

	// Initially set opacity on thumbs and add
	// additional styling for hover effect on thumbs
	var onMouseOutOpacity = 0.67;
	$('#thumbs ul.thumbs li, a.back-thumbs, a.next-thumbs').opacityrollover({
		mouseOutOpacity:   onMouseOutOpacity,
		mouseOverOpacity:  1.0,
		fadeSpeed:         'fast',
		exemptionSelector: '.selected'
	});

	   $('.thumb-wrapper').each(function(){	
	   var mql = Modernizr.mq('only screen and (max-width: 784px)'); 
	   var mqlS = Modernizr.mq('only screen and (max-width: 480px)'); 
	   var mqlM = Modernizr.mq('only screen and (min-width: 481px) and (max-width: 784px)'); 	
	   var gallery = $(this).galleriffic({
	       imageContainerSel: $(this).parent().children('.slideshow'),
	       numThumbs: 				  mql ? 5 : 10, //condition ? expr1 : (condition( expr2 : expr3 ))	
	       //numThumbs: 				  Modernizr.mq('only screen and (max-width: 480px)') ? 3 : (Modernizr.mq('only screen and (min-width: 481px) and (max-width: 784px)') ? (5 : 10)),
	       //numThumbs:                 10, // The number of thumbnails to show page
	       preloadAhead:              10, // Set to -1 to preload all images
	       enableBottomPager:         false,
	       controlsContainerSel:      '#controls',
	       renderSSControls:          true, 
	       renderNavControls:         true,
	       playLinkText:              'Play Slideshow',
		   pauseLinkText:             'Pause Slideshow',
           prevLinkText:              '&lsaquo; Previous',
		   nextLinkText:              'Next &rsaquo;',
	       nextPageLinkText:          'Next',
	       prevPageLinkText:          'Back',

	       onPageTransitionIn:        function() {
				var prevPageLink = $(this).parent().find('a.back-thumbs').css('visibility', 'hidden');
				var nextPageLink = $(this).parent().find('a.next-thumbs').css('visibility', 'hidden');
				
				// Show appropriate next / prev page links
				if (this.displayedPage > 0)
					prevPageLink.css('visibility', 'visible');

				var lastPage = this.getNumPages() - 1;
				if (this.displayedPage < lastPage)
					nextPageLink.css('visibility', 'visible');

	       }

	   });

	   /**************** Event handlers for custom next / prev page links **********************/
	   	   
		$(this).parent().children('a.back-thumbs').click(function(e) {
			gallery.previousPage();
			e.preventDefault();
		});

		$(this).parent().children('a.next-thumbs').click(function(e) {
			gallery.nextPage();
			e.preventDefault();
		});
	});
	
	//jQuery(window).resize(function(){ 	

	//});
});

