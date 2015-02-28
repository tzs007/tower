<div class="col-sm-5 col-md-4 col-sm-push-7 col-md-push-8 landlord-services-sidebar">
	<div class="landlord-services-menu">
		<div class="panel panel-default">
			<ul class="list-group list-unstyled">
				<li class="list-group-item<?php echo (basename($_SERVER['REQUEST_URI']) == 'landlord.php' ? ' active' : ''); ?>">
					<a href="landlord.php" id="service-overview">Overview</a>
				</li>
				<li class="list-group-item<?php echo (basename($_SERVER['REQUEST_URI']) == 'landlord-management.php' ? ' active' : ''); ?>">
					<a href="landlord-management.php" id="service-management">Management Services</a>
				</li>
				<li class="list-group-item<?php echo (basename($_SERVER['REQUEST_URI']) == 'landlord-rentals.php' ? ' active' : ''); ?>">
					<a href="landlord-rentals.php" id="service-rentals">Property Rentals</a>
				</li>
				<li class="list-group-item<?php echo (basename($_SERVER['REQUEST_URI']) == 'landlord-sales.php' ? ' active' : ''); ?>">
					<a href="landlord-sales.php" id="service-sales">Property Sales</a>
				</li>
				<li class="list-group-item<?php echo (basename($_SERVER['REQUEST_URI']) == 'landlord-investments.php' ? ' active' : ''); ?>">
					<a href="landlord-investments.php" id="service-investments">Property Investments</a>
				</li>
				<li class="list-group-item<?php echo (basename($_SERVER['REQUEST_URI']) == 'landlord-renovation.php' ? ' active' : ''); ?>">
					<a href="landlord-renovation.php" id="service-renovation">Renovation Services</a>
				</li>
				<li class="list-group-item<?php echo (basename($_SERVER['REQUEST_URI']) == 'landlord-accounting.php' ? ' active' : ''); ?>">
					<a href="landlord-accounting.php" id="service-accounting">Accounting Services</a>
				</li>
				<li class="list-group-item<?php echo (basename($_SERVER['REQUEST_URI']) == 'landlord-tower365.php' ? ' active' : ''); ?>">
					<a href="landlord-tower365.php" id="service-tower365">Non-Stop Online Access</a>
				</li>
				<li class="list-group-item<?php echo (basename($_SERVER['REQUEST_URI']) == 'landlord-customer-care.php' ? ' active' : ''); ?>">
					<a href="landlord-customer-care.php" id="service-customer-care">Customer Care</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="enquiry-form " class="hidden-xs">
		<?php include("includes/enquiry-form.php"); ?>
	</div>
</div>
