<?php include("includes/head.php") ?>

		<div id="tower-sales" class="hidden-map hidden-ie">

			<?php include("includes/header.php"); ?>

			<section class="sales-map">
				<div id="map-canvas" class="map map-sm"></div>
			</section>

			<section class="property block-half">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-8 property-content">
							<h1 class="property-content-title">
								List of Available Apartments<br>
								for Sale in Budapest
							</h1>
							<p>Tower helps you find the nearest, finest and best apartment for you and your family.</p>
						</div>
						<div class="col-sm-5 col-sm-4 hidden-xs">
							<div class="hidden-form">
								<?php include('includes/enquiry-form.php') ?>
							</div>
							<button class="btn btn-success btn-lg pull-right" id="btn-contact">CONTACT US</button>
						</div>
					</div>
				</div>
			</section>

			<section class="property-search">
				<div class="container">
					<div class="row">
						<?php include('includes/search-bar.php'); ?>
					</div>
				</div>
			</section>

			<main id="property-mosaic-view" class="property-list">
				<div class="container">
					<div class="row">
					<?php for($i = 1; $i<=15; $i++): ?>
						<?php include('includes/sales-panel.php') ?>
					<?php endfor; ?>
					</div>
				</div>
			</main>

			<section id="property-list-view" class="property-list">
				<div class="container">
					<div class="row">
						<?php for($i = 1; $i<=15; $i++): ?>
							<?php include('includes/sales-row.php') ?>
						<?php endfor; ?>
					</div>
				</div>
			</section>

			<?php include('includes/pagination.php') ?>

			<?php include('includes/property-caution.php'); ?>

			<footer class="bottom">
				<?php include("includes/footer-extended.php"); ?>
				<?php include("includes/footer-navigation.php"); ?>
			</footer>

		</div>

		<!-- modal -->
		<?php include('includes/search-modal.php') ?>

		<script>
			App.propertyLauncher();
			App.showMapAndForm();
			App.switchView();

			// populate with lat|lng coords and path of the details page
			var places = [
				['pin-orange.png', 47.4880756, 18.998205, 'property-details.php'],
				['pin-orange.png', 47.54169, 19.005834, 'property-details.php']
			];
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script src="resources/js/google-map.js"></script>
		<script src="resources/js/google-map-properties.js"></script>
	</body>
</html>
