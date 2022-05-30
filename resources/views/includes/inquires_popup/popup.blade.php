
<!-- Modal -->
<div class="modal fade popup-inquiry" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
			<div class="modal-content">
				 <div class="modal-header">			
				    <h4 class="form-heading">INQUIRY</h4>
				</div> 
				<form class="container" id="" method="post" enctype="multipart/form-data" action="accomodation_inqueries"> 

				<input type="hidden" name="id"  id="vendor_id">
							@if(session()->has('message'))
							<div class="alert alert-success" style="display:none;">
							{{ session()->get('message') }}
							</div>
							@endif
					<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>What is your tentative travel/check-in date?</label>
											<input id="datepicker" class="form-control" placeholder="dd/mm/yyyy" name="check_in" type="date" data-fv-field="check_in" required>
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="check_in" data-fv-result="NOT_VALIDATED" style="display: none;">Travel/check-in date is required</small></div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>What is your tentative travel/check-out date?</label>
											<input id="datepicker2" class="form-control" placeholder="dd/mm/yyyy" name="check_out" type="date" data-fv-field="check_out" required>
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="check_out" data-fv-result="NOT_VALIDATED" style="display: none;">travel/check-out date is required</small></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>What is the nature of your visit?</label>
											<select class="form-control" name="visit_nature">
												<option value="Business">Business</option>
												<option value="Pleasure">Pleasure</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>How many guests in your traveling party?</label>
										 <input type="number" class="form-control" placeholder="" name="guest_no" value="0" data-fv-field="guest_no">
										<small class="help-block" data-fv-validator="integer" data-fv-for="guest_no" data-fv-result="NOT_VALIDATED" style="display: none;" >Please enter a valid number</small></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>What is your preferred accommodation type?</label>
											<select class="form-control" name="accommodation_type">
												<option value="Hotel">Hotel</option>

												<option value="Motel">Motel</option>

												<option value="Inn">Inn</option>

												<option value="B &amp; B">B &amp; B</option>

												<option value="Vacation Property (Entire Home)">Vacation Property (Entire Home)</option>

												<option value="Vacation Property (Guest House)">Vacation Property (Guest House)</option>

												<option value="Serviced Apartment">Serviced Apartment</option>

												<option value="Furnished Room">Furnished Room</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>What sub-region would you prefer to be located?</label>
											<select class="form-control" name="sub_region">
												<option value="Niagara Falls">Niagara Falls</option>

												<option value="Niagara-on-the-Lake">Niagara-on-the-Lake</option>

												<option value="Niagara Escarpment / Twenty Valley">Niagara Escarpment / Twenty Valley</option>

												<option value="Fort Erie / Niagara's South Coast">Fort Erie / Niagara's South Coast</option>
											</select>

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Submit">
									</div>
								</div>
		 		</form> 
      </div>
    </div>
  </div>
  <script type="text/javascript">
  	// @if(session()->has('message'))
  	
  	// setTimeout(function(){ 
  	// $( "#exampleModal" ).modal( "show");
   //  }, 3000);
   //  	@endif
  	
  </script>