<?php include("includes/head.php") ?>

		<div id="tower-myhomes" class="hidden-ie">

			<?php include("includes/header.php"); ?>

			<section class="mylist-map">
				<div id="map-canvas" class="map map-sm"></div>
			</section>

			<section class="property block-half">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-8 property-content">
							<h1 class="property-content-title">
								List of Available Apartments<br>
								which are interesting you
							</h1>
							<p>Tower helps you find the nearest, finest and best apartment for you and your family.</p>
						</div>
						<div class="col-sm-5 col-sm-4 hidden-xs">
							<div class="hidden-form">
								<?php include('includes/enquiry-form.php') ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="property-search">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 property-search-content">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-4 hidden-xs">
											<form action="" id="realEstateSearchForm">
												<div class="form-group">
													<label for="min_price" class="sr-only">Property search</label>
													<input type="text" id="min_price" name="min_price" class="form-control" value="" placeholder="Search by minimum price">
													<button class="btn btn-sm btn-success btn-find">Search</button>
												</div>
											</form>
										</div>
										<div class="col-sm-3 col-md-2">
											<a href="javascript:void(0);" class="advanced-search btn btn-block" data-toggle="modal" data-target="#search-modal">Entire search</a>
										</div>
										<div class=" col-sm-5 col-md-6 col-lg-5 col-lg-offset-1 property-search-sort clearfix">
											<div class="property-search-tab property-search-sort-links pull-right" style="padding-right:10px;">
												<strong class="hidden-sm">Sort by:</strong>&nbsp;&nbsp;&nbsp;
												<a href="#" class="active">Price</a>&nbsp;&nbsp;&bull;&nbsp;
												<a href="#">District</a>&nbsp;&nbsp;&bull;&nbsp;
												<a href="#">Rooms</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<main id="property-list-view" class="property-list" style="display:block !important;">
				<div class="container">
					<div class="row">
						<?php for($i = 1; $i<=15; $i++): ?>
							<?php include('includes/sales-row.php') ?>
						<?php endfor; ?>
					</div>
				</div>
			</main>

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
