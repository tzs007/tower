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
									<h1 class="landlord-services-content-title">Non-Stop Online Access</h1>
									<h2 class="landlord-services-content-subtitle">Features of Tower 365</h2>
								</hgroup>

								<p>As a landlord with Tower you don't need to wonder what's happening over in Budapest with your property. Tower's unique online login system for landlords gives you 24 hour visibility of your property in Budapest with the click of a button. And now you can even access Tower 365 via your iPhone or Android Smartphone!</p>

								<ul>
									<li>24/7 access to your property online</li>
									<li>Management and maintenance notes / updates</li>
									<li>Viewing stats and notes for vacant properties</li>
									<li>Details on rental collection</li>
									<li>Downloadable documents including management contract copy</li>
									<li>Request financial statements</li>
									<li>Details on tax payments and rebates</li>
									<li>Access via web and smartphone!</li>
									<li>General information on your property</li>
								</ul>

								<p>&nbsp;</p>

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
			App.owl();
		</script>
	</body>
</html>
