					<footer id="footer" class="footer" role="contentinfo">
						<h1 class="screen-reader-text">Footer</h1>
					    <div class="row">
							<div class="medium-4 columns" id="footer-one">
							  <?php dynamic_sidebar('footer-one'); ?>
							</div><!-- /footer-one -->
							<div class="medium-2 medium-offset-1 columns" id="footer-two">
							  <?php dynamic_sidebar('footer-two'); ?>
							</div><!-- /footer-two -->
							<div class="medium-4 medium-offset-1 columns" id="footer-three">
							  <?php dynamic_sidebar('footer-three'); ?>
							</div><!-- /footer-three -->
						</div><!-- end row -->
						<div id="footer-bottom">
							<p class="text-center copyright-credit">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Lier Chen • Website by Wenmin Chen</p>
						</div><!-- /footer-bottom --> 	 			
					</footer> <!-- end .footer -->
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div> <!-- end .off-canvas-wrap -->
			
			<?php get_template_part('parts/content', 'modal'); ?>	
			<!-- all js scripts are loaded in library/core-functions.php -->
			<?php wp_footer(); ?>
	</body>

</html> <!-- end page -->