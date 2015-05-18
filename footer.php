<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
	<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation footer-navigation" role="navigation">										
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-nav-menu', 'depth' =>'-1' ) ); ?>					
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
			

	</footer><!-- .site-footer -->

</div><!-- .site -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-add-your-tracking-number-here', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>

</body>
</html>
