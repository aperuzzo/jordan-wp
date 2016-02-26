<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid" id="about">
		<div class="gradient row">
			<div class="container">
				<?php dynamic_sidebar( 'sidebar-about' ); ?>
			</div>
		</div>
	</div>
	<div class="container-fluid">	
		<div id="contact" class="row black">
			<div class="site-footer-inner col-sm-12">

				<div class="mail-list">
					<div class="mail-header">
						<h2>Want More?</h2>
						<p>sign up for the mailing list</p>
					</div>
					<form class="form-horizontal">
					  <div class="form-group">
					    <div class="col-sm-10 col-sm-offset-1">
					      <input type="text" class="form-control" id="inputName" placeholder="Your Name">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-10 col-sm-offset-1">
					      <input type="email" class="form-control" id="inputEmail" placeholder="Your Email">
					    </div>
					  </div>
					  <div class="form-group">
					    <div id="btn-fix" class="col-sm-2 col-sm-offset-10">
					      <button type="submit" class="btn">submit</button>
					    </div>
					  </div>
					</form>
				</div><!-- close .mail-list -->

			</div>
		</div> <!-- close #contact -->
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
