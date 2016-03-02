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

					<!-- custom form supplied by client -->
					<form method="post" class="af-form-wrapper form-horizontal" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
						<div style="display: none;">
							<input type="hidden" name="meta_web_form_id" value="1028126274" />
							<input type="hidden" name="meta_split_id" value="" />
							<input type="hidden" name="listname" value="default2544844" />
							<input type="hidden" name="redirect" value="https://www.aweber.com/thankyou-coi.htm?m=text" id="redirect_cbf4ab805d766b9297e851f9df084f35" />

							<input type="hidden" name="meta_adtracking" value="My_Web_Form" />
							<input type="hidden" name="meta_message" value="1" />
							<input type="hidden" name="meta_required" value="name,email" />

							<input type="hidden" name="meta_tooltip" value="" />
						</div>
						<div id="af-form-1028126274" class="af-form">
							<div id="af-header-1028126274" class="af-header">
								
							</div>
							<div id="af-body-1028126274" class="af-body af-standards">
								<div class="af-element form-group">
									<!-- <label class="previewLabel" for="awf_field-80979213">Name: </label> -->
									<div class="af-textWrap">
										<div class="col-sm-10 col-sm-offset-1">
											<input id="awf_field-80979213" type="text" name="name" class="text form-control" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" placeholder="Your Name"/>
										</div>
									</div>
									<div class="af-clear"></div>
								</div>
								<div class="af-element form-group">
									<!-- <label class="previewLabel" for="awf_field-80979214">Email: </label> -->
									<div class="af-textWrap">
										<div class="col-sm-10 col-sm-offset-1">
											<input class="text form-control" id="awf_field-80979214" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " placeholder="Your Email"/>
										</div>	
									</div>
									<div class="af-clear"></div>
								</div>
								<div class="af-element buttonContainer form-group">
									<div id="btn-fix" class="col-sm-2 col-sm-offset-10">
										<input name="submit" class="submit btn" type="submit" value="Submit" tabindex="502" />
									</div>
									<div class="af-clear"></div>
								</div>
								<div class="af-element privacyPolicy" style="text-align: center">
									<a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a>
									<div class="af-clear"></div>
								</div>
								<div class="af-element poweredBy" style="text-align: center; font-size: 9px;">
									<a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a>
									<div class="af-clear"></div>
								</div>
							</div>
							<div id="af-footer-1028126274" class="af-footer">
								
							</div>
						</div>
						<div style="display: none;">
							<img src="https://forms.aweber.com/form/displays.htm?id=jAxMHIxMbEzsLA==" alt="" />
						</div>
					</form>
					<script type="text/javascript">
					    <!--
					    (function() {
					        var IE = /*@cc_on!@*/false;
					        if (!IE) { return; }
					        if (document.compatMode && document.compatMode == 'BackCompat') {
					            if (document.getElementById("af-form-1028126274")) {
					                document.getElementById("af-form-1028126274").className = 'af-form af-quirksMode';
					            }
					            if (document.getElementById("af-body-1028126274")) {
					                document.getElementById("af-body-1028126274").className = "af-body inline af-quirksMode";
					            }
					            if (document.getElementById("af-header-1028126274")) {
					                document.getElementById("af-header-1028126274").className = "af-header af-quirksMode";
					            }
					            if (document.getElementById("af-footer-1028126274")) {
					                document.getElementById("af-footer-1028126274").className = "af-footer af-quirksMode";
					            }
					        }
					    })();
					    -->
					</script>

<!-- /AWeber Web Form Generator 3.0.1 -->


				</div><!-- close .mail-list -->

			</div>
		</div> <!-- close #contact -->
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
