<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="search-modal-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="search-modal-label">Search properties</h5>
			</div>
			<div class="modal-body">
				<form action="" role="form" class="form-horizontal">
					<fieldset>
						<div class="form-group">
							<label for="price" class="col-sm-3 control-label input-lg">Price:</label>
							<div class="col-sm-3">
								<div class="hyphen">-</div>
								<input type="text" class="form-control input-lg" id="price" placeholder="from">
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control input-lg" id="" placeholder="to">
							</div>
							<div class="col-sm-3">
								<select name="currency" id="currency" class="form-control input-lg">
									<option value="huf" seleted>HUF</option>
									<option value="eur">EUR</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="bedrooms" class="col-sm-3 control-label input-lg">Bedroom(s):</label>
							<div class="col-sm-3">
								<select name="bedrooms" id="bedrooms" class="form-control input-lg">
									<option value="studio" selected>Studio</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="type" class="col-sm-3 control-label input-lg">Type:</label>
							<div class="col-sm-4">
								<select name="type" id="type" class="form-control input-lg">
									<option value="classical" selected>Classical</option>
									<option value="officeUse">Office Use</option>
									<option value="commercial">Commercial</option>
									<option value="luxury">Luxury</option>
									<option value="newBuilt">New Built</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="size" class="col-sm-3 control-label input-lg">Size:</label>
							<div class="col-sm-2">
								<div class="hyphen">-</div>
								<input type="text" class="form-control input-lg" id="size" placeholder="">
							</div>
							<div class="col-sm-2">
								<input type="text" class="form-control input-lg" id="" placeholder="">
							</div>
							<div class="col-sm-2">
								<p class="form-control-static input-lg">m<sup>2</sup></p>
							</div>
						</div>
						<div class="form-group">
							<label for="district" class="col-sm-3 control-label input-lg">District:</label>
							<div class="col-sm-5">
								<select name="type" id="district" class="form-control input-lg">
									<option value="1" selected>1. (112 apartments)</option>
									<option value="2">2. (132 apartments)</option>
									<option value="3">3. (231 apartments)</option>
									<option value="4">4. (32 apartments)</option>
									<option value="5">5. (432 apartments)</option>
								</select>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-link btn-lg" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-success btn-lg">Search</button>
			</div>
		</div>
	</div>
</div>
