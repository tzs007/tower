<?php include("includes/head.php") ?>

	<div id="tower-landlord" class="hidden-ie">

		<?php include("includes/header.php"); ?>

			<main class="landlord-services block-half">
				<div class="container">
					<div class="row">

						<?php include('includes/landlord-navigation.php'); ?>

						<div class="col-sm-7 col-md-8 col-sm-pull-5 col-md-pull-4 landlord-services-content">
							<article>
								<hgroup>
									<h1 class="landlord-services-content-title">Landlord Services</h1>
									<h2 class="landlord-services-content-subtitle">The Leading Property Services Group in Budapest</h2>
								</hgroup>

								<ul>
									<li>We give you <span>online access for landlords</span> - real time updates, mobile application</li>
									<li>We've <span>96% occupancy</span> on managed properties</li>
									<li>We're managing close to <span>700 properties</span></li>
									<li><span>No takeover fee</span></li>
									<li>We employ <span>in-house chartered accountants</span>, specialized in property</li>
									<li><span>We give you professional<span> valuations and property sales <span>support</span></li>
									<li>We work with <span>over 50 multi-langual staff</span> (spoken languages: English, German, Spanish, Russian, Romanian, Italian, French)</li>
									<li>Landlords switching to Tower every month</li>
								</ul>
							</article>
							<article>
								<hgroup>
									<h1 class="landlord-services-content-title">Have a personal consultation today!</h1>
								</hgroup>
								<ul>
									<li><strong>Ireland Toll Free 1-800-904-177</strong></li>
									<li><strong>UK Toll Free 0-808-189-1343</strong></li>
								</ul>
								<p>&nbsp;</p>
								<p>Once you've decided you would like to switch to or sign up with Tower we will give you initial access to our unique online system for landlords called Tower 365.</p>
								<p>Click below for a demonstration of our unique online system for landlords!</p>

								<!-- 16:9 aspect ratio -->
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/R_wPtsLPGww" allowfullscreen></iframe>
								</div>

							</article>

							<p>&nbsp;</p>

						</div>

						<div id="mobile-enquiry-form" class="col-xs-12 visible-xs">
							<?php include("includes/enquiry-form.php"); ?>
						</div>
					</div>
				</div>
			</main>

			<?php include('includes/client-testimonial.php'); ?>

			<?php include('includes/hero-small.php'); ?>

			<footer class="bottom">
				<?php include("includes/footer-portfolio.php"); ?>
				<?php include("includes/footer-navigation.php"); ?>
			</footer>

		</div>

		<!-- scripts -->

		<script>
			$(function(){
				$('.enquiry-form').stick_in_parent();
			});
		</script>
	</body>
</html>
