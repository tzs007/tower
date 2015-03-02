<?php include("includes/head.php") ?>

		<div id="tower-details" class="hidden-ie">

			<?php include("includes/header.php"); ?>

			<section class="sales-map">
				<div id="map-canvas" class="map map-sm">map</div>
			</section>

			<section class="property block-half">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-8 property-content">
							<h1 class="property-content-title clearfix">
								<span class="pull-right"><small>Ref.:</small> 1337</span>
								Luxury in Felvinci Street
							</h1>
							<aside class="property-content-meta">
								<strong>Rented for:</strong> 105.000 HUF &bull;
								<strong>Yield: 4.10%</strong>
							</aside>
							<aside class="property-content-social pull-right" style="margin-top: -10px;">
								<ul class="list-unstyled list-inline">
									<li><a href=""><i class="icon icon-et"></i></a></li>
									<li><a href=""><i class="icon icon-facebook"></i></a></li>
									<li><a href=""><i class="icon icon-linkedin"></i></a></li>
									<li><a href=""><i class="icon icon-googleplus"></i></a></li>
									<li><a href=""><i class="icon icon-twitter"></i></a></li>
								</ul>
							</aside>
							<p class="pull-left">District 12 &bull; 3 bedrooms &bull; Size: 138 m<sup>2</sup></p>
						</div>
						<div class="col-sm-5 col-md-4 property-sidebar">
							<?php include("includes/enquiry-form.php") ?>
						</div>
					</div>
				</div>
			</section>

			<section class="property-details">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-md-9 property-details-content">
							<div class="row">
								<div class="col-sm-6 col-md-4"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
								<div class="col-sm-6 col-md-4"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
								<div class="col-sm-6 col-md-4 hidden-sm"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
							</div>
							<div class="row btn-gallery-container">
								<div class="col-sm-12 text-center">
									<button class="btn btn-default btn-lg" id="btn-gallery">SEE THE FULL GALLERY</button>
								</div>
							</div>
							<div class="row" id="full-gallery">
								<div class="col-sm-6 col-md-4"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
								<div class="col-sm-6 col-md-4"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
								<div class="col-sm-6 col-md-4"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
								<div class="col-sm-6 col-md-4"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
								<div class="col-sm-6 col-md-4"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
								<div class="col-sm-6 col-md-4"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
								<div class="col-sm-6 col-md-4"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
								<div class="col-sm-6 col-md-4"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
								<div class="col-sm-6 col-md-4"><img src="resources/images/property.jpg" alt="" class="img-responsive"></div>
							</div>
							<div class="row property-details-content-description">
								<div class="col-sm-12">
									<h2 class="property-details-subtitle">
										Description
									</h2>
									<p>A clever interior redesign has added a stylish edge to this unique two level residence and made it a light filled home with many smart modern finishes throughout. It offers a designer living space with a layout that embraces easycare living complete garden access with parking. This sought-after 12th District address is tucked away just a moment’s stroll to Szell Kalman Square, Budagyongye Shopping Mall, Mammuth Shopping Center and to many National Parks.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-3 property-details-sidebar">
							<div class="panel panel-default">
								<div class="panel-body">
									<ul class="list-unstyled">
										<li><strong>Type:</strong> Luxury, New Built</li>
										<li><strong>Floor:</strong> Ground</li>
										<li><strong>Parking:</strong> Garage</li>
										<li><strong>View:</strong> Garden</li>
										<li><strong>Furnished:</strong> No</li>
										<li><strong>Elevator:</strong> No</li>
										<li><strong>Air conditioned</strong> Yes</li>
									</ul>
									<ul class="list-unstyled">
										<li><strong>Selling price:</strong></li>
										<li class="related-property-price">58.300.000 HUF</li>
									</ul>
									<button class="btn btn-info btn-block btn-lg btn-info btn-add-to-list">Add to my list</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="related-properties block">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="related-properties-title clearfix">Related properties <small>in the same district</small></h1>
						</div>

						<?php for($i = 1; $i<=3; $i++): ?>
							<?php include('includes/sales-panel.php') ?>
						<?php endfor; ?>
					</div>

					<div class="row btn-related-properties-container">
						<div class="col-sm-12 text-center">
							<button class="btn btn-default btn-lg" id="btn-related-properties">More</button>
						</div>
					</div>

					<div class="row" id="all-related-properties">
						<?php for($i = 1; $i<=12; $i++): ?>
							<?php include('includes/sales-panel.php') ?>
						<?php endfor; ?>
					</div>
				</div>
			</section>

			<?php include('includes/property-caution.php'); ?>

			<footer class="bottom">
				<?php include("includes/footer-extended.php"); ?>
				<?php include("includes/footer-navigation.php"); ?>
			</footer>

		</div>

		<!-- scripts -->
		<script>
			App.showFullGallery();
			App.showAllRelatedProperties();
		</script>
		<!-- google map -->
		<script>
			var places = [
				['pin-orange.png', 47.4880756, 18.998205],
				['pin-orange.png', 47.54169, 19.005834]
			];
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script src="resources/js/google-map.js"></script>
		<script src="resources/js/google-map-property.js"></script>

	</body>
</html>
