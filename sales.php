<?php include("includes/head.php") ?>

		<div id="tower-sales" class="hidden-ie">

			<?php include("includes/header.php"); ?>

			<section class="sales-map">
				<div id="map-canvas" class="map map-sm">map</div>
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
										<div class="col-sm-4">
											<form action="" id="realEstateSearchForm">
												<div class="form-group">
													<label for="min_price" class="sr-only">Property search</label>
													<input type="text" id="min_price" name="min_price" class="form-control" value="" placeholder="Search by minimum price">
													<button class="btn btn-sm btn-success btn-find">Search</button>
												</div>
											</form>
										</div>
										<div class="col-sm-3 col-md-2">
											<a href="javascript:void(0);" class="advanced-search" data-toggle="modal" data-target="#search-modal">Advanced search</a>
										</div>
										<div class=" col-sm-5 col-md-6 col-lg-5 col-lg-offset-1 property-search-sort clearfix">
											<div class="property-search-tab property-search-sort-links pull-left">
												<strong class="hidden-sm">Sort by:</strong>&nbsp;&nbsp;&nbsp;
												<a href="#" class="active">Price</a>&nbsp;&nbsp;&bull;&nbsp;
												<a href="#">District</a>&nbsp;&nbsp;&bull;&nbsp;
												<a href="#">Rooms</a>
											</div>
											<div class="property-search-tab property-search-sort-view pull-right">
												<strong class="hidden-sm">List view:</strong>&nbsp;&nbsp;&nbsp;
												<a href="#" class="active"><i class="icon-th"></i></a>&nbsp;&nbsp;&nbsp;
												<a href="#"><i class="icon-th-list"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="property-list">
				<div class="container">
					<div class="row">
					<?php for($i = 1; $i<=15; $i++): ?>
						<?php include('includes/sales-panel.php') ?>
					<?php endfor; ?>
					</div>
				</div>
			</section>

			<section class="property-paginate">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							pagination
						</div>
					</div>
				</div>
			</section>

			<?php include('includes/property-caution.php'); ?>

			<footer class="bottom">
				<?php include("includes/footer-extended.php"); ?>
				<?php include("includes/footer-navigation.php"); ?>
			</footer>

		</div>

		<!-- modal -->
		<?php include('includes/search-modal.php') ?>

		<!-- call scripts -->
		<script>
			App.propertyLauncher();
		</script>
	</body>
</html>
