					<footer id="footer" class="footer" role="contentinfo">
						<h1 class="hiddenHeader">Footer</h1>
					    <div class="row">
							<div class="medium-5 columns" id="footer-one">
							  <?php dynamic_sidebar('footer-one'); ?>
							</div><!-- /footer-one -->
							<div class="medium-2 medium-offset-1 columns" id="footer-two">
							  <?php dynamic_sidebar('footer-two'); ?>
							</div><!-- /footer-two -->
							<div class="medium-3 medium-offset-1 columns" id="footer-three">
							  <?php dynamic_sidebar('footer-three'); ?>
							</div><!-- /footer-three -->
						</div><!-- end row -->
						<div id="footer-bottom">
							<p class="text-center copyright-credit">&copy; <?php echo date( 'Y' ); ?> Lier Chen • Website by Wenmin Chen</p>
						</div><!-- /footer-bottom --> 	 			
					</footer> <!-- end .footer -->
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div> <!-- end .off-canvas-wrap -->
				
				<!-- all js scripts are loaded in library/lierphotography.php -->
				<?php wp_footer(); ?>
	</body>

</html> <!-- end page -->