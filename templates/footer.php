 
            <footer id="footer">
			<div class="container">
				<div class="row">

					<!-- Footer Navigation Menu -->
					<div id="footer_nav" class="col-sm-6 col-md-4">
						<ul class="footer-nav clearfix">
							<li><a href="tel:+27870571581">087 057-1581</a></li>
						 
							<li><a href="disclaimer.php">Disclaimer</a></li>
							<li><a href="privacy.php">Privacy</a></li>
							<li><a href="terms.php">Terms</a></li>
						</ul>

						<div id="footer_copy">
							<p>&copy; Copyright 2019 <span>Work Placements Online</span> All Right Reserved</p>
						</div>
					</div> <!-- End Footer Navigation Menu -->


					<!-- Footer Social Icons -->
					<div id="footer_icons" class="col-sm-6 col-md-4 text-center">
						<ul class="footer-socials clearfix">
							<li><a class="foo_social ico-facebook" href="https://web.facebook.com/workplacements.online"><i class="fa fa-facebook"></i></a></li>
							<li><a class="foo_social ico-twitter" href="https://twitter.com/WorkplacementsO"><i class="fa fa-twitter"></i></a></li>
					 </ul>
					</div> <!-- End Footer Social Icons -->


					<!-- Newsletter Form -->
					<div class="col-md-4">
						 
					</div> <!-- End Newsletter Form -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</footer> <!-- END FOOTER -->


	</div> <!-- END CONTENT WRAPPER -->
 
 	
	<script>
		(function(){
 
			document.addEventListener('DOMContentLoaded', ()=>{
				const subscriptionForm = document.getElementById('mc-embedded-subscribe-form')
				subscriptionForm.addEventListener('submit', (formRef)=>{
					 swal("Confirmation", "Your application has been submitted!", "success")
				})
			})
		}())
	</script>

	<script src="js/jquery-2.1.0.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/retina.js" type="text/javascript"></script>
	<script src="js/modernizr.custom.js" type="text/javascript"></script>
	<script src="js/jquery.easing.js" type="text/javascript"></script>
	<script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
	<script src="js/jquery.validate.min.js" type="text/javascript"></script>
	<script defer src="js/jquery.flexslider.js" type="text/javascript"></script>
	<script src="js/jquery.accordion.source.js" type="text/javascript"></script>
	<script src="js/owl.carousel.js" type="text/javascript"></script>
	<script src="js/waypoints.min.js" type="text/javascript"></script> 
	<script src="js/custom.js" type="text/javascript"></script>

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+27870571581", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
 
</body>

</html>