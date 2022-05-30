<?php
 $user_id = isset(auth()->user()->id) ? auth()->user()->id : '';
 $data = DB::table('local_delievery')->where('user_id',$user_id)->get()->toArray();

?>

<div class="user-main-div">
   <form id="local_delievery" method="" novalidate="">
      <div class="user-content-div">
         <h4 class="form-heading">Local Delievery</h4>
         <div class="row">
            <div class="alert alert-success local_delievery_alert" style="display: none;"></div>
            <input type="hidden" class="form-control" id="user_id" name="id" value="<?php echo $user_id;?>">
            <div class="col-md-6">
               <div class="form-group">
                  <label class="form-label">Travel/Check-In Date (Arrival):<span>*</span></label>
                  <input type="date" class="form-control" id="check_in_date" name="check_in_date" value="<?php echo isset($data[0]->check_in_date) ? $data[0]->check_in_date :'';?>" required="">
               </div>
			   <span class="invalid-feedback checkin-err" role="alert">
					<strong>Check-In date is required</strong>
				</span>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="form-label">Travel/Check-Out Date (Departure): <span>*</span></label>
                  <input type="date" class="form-control" id="check_out_date" name="check_out_date" value="<?php echo isset($data[0]->check_out_date) ? $data[0]->check_out_date :'';?>" required="">
               </div>
			   <span class="invalid-feedback checkout-err" role="alert">
					<strong>Check-Out date is required</strong>
				</span>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="form-label">Local Accommodation (Optional)</label>
                  <input type="text" class="form-control" id="local_accomodation" name="local_accomodation" value="<?php echo isset($data[0]->local_accomodation) ? $data[0]->local_accomodation :'';?>" required="">
               </div>

            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="form-label">Accommodation Type (Optional)<span>*</span></label>
                  <input type="text" class="form-control" id="accomodation_type" name="accomodation_type" value="<?php echo isset($data[0]->accomodation_type) ? $data[0]->accomodation_type :'';?>" required="">
               </div>
			  
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="form-label">Hosts Name (Optional):<span>*</span></label>
                  <input type="text" class="form-control" id="hosts_name" name="hosts_name" value="<?php echo isset($data[0]->hosts_name) ? $data[0]->hosts_name :'';?>" required="">
               </div>			    
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="form-label">Contact Ph# (Optional)</label>
                  <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="<?php echo isset($data[0]->contact_phone) ? $data[0]->contact_phone :'';?>" required="">
               </div>
			   <span class="invalid-feedback phn-err" role="alert">
				<strong>Phone is required</strong>
			</span>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="form-label">Local Street Address:</label>
                  <input type="text" class="form-control" id="local_street_address" name="local_street_address" value="<?php echo isset($data[0]->local_street_address) ? $data[0]->local_street_address :'';?>" required="">
               </div>
			   <span class="invalid-feedback street-err" role="alert">
				<strong>Street Address is required</strong>
			</span>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="form-label">Unit/Suite#</label>
                  <input type="text" class="form-control" id="unit" name="unit" value="<?php echo isset($data[0]->unit) ? $data[0]->unit :'';?>" required="">
               </div>
			   <span class="invalid-feedback unit-err" role="alert">
				<strong>Unit/Suite# is required</strong>
			</span>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="form-label">City/Town:<span>*</span></label>
                  <input type="text" class="form-control" id="city" name="city" value="<?php echo isset($data[0]->city) ? $data[0]->city :'';?>" required="">
               </div>
			   <span class="invalid-feedback city-err" role="alert">
				<strong>City/Town# is required</strong>
			</span>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="form-label">Province/State:<span>*</span></label>
                  <input type="text" class="form-control" id="province" name="province" value="<?php echo isset($data[0]->province) ? $data[0]->province :'';?>" required="">
               </div>
			   <span class="invalid-feedback province-err" role="alert">
				<strong>Province/State is required</strong>
			</span>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="form-label">Postal Code/Zip:</label>
                  <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?php echo isset($data[0]->postal_code) ? $data[0]->postal_code :'';?>" required="">
               </div>
			   <span class="invalid-feedback postal-err" role="alert">
				<strong>Postal Code/Zip is required</strong>
			</span>
            </div>
            <div class="col-lg-12">
               <div class="btn-box-bx text-center">
                  <button type="submit" id="" class="btn wine-btn">Update</button>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>

<script type="text/javascript">

   $("#local_delievery").submit(function(e){  
    e.preventDefault();  
	
	var check_in_date = $('#check_in_date').val();
	var check_out_date = $('#check_out_date').val();
	var hosts_name = $('#hosts_name').val();
	
	
	var contact_phone = $('#contact_phone').val();
	var street_address  = $('#local_street_address').val();
	var unit     = $('#unit').val();
	var city  = $('#city').val();
	var province   = $('#province').val();
	var postal_code   = $('#postal_code').val();		
	
	var validation_error = true;
	
	if(isNaN(contact_phone)){ 
		validation_error = false;
		$('.phn-err').text('only numeric value allow').show();
	}else {
		$('.phn-err').text('phone is required').hide();
	}
	
	if(street_address === ''){        	   		
		validation_error = false;
		$('.street-err').show();
	}
	if(city == ''){        	   		
		validation_error = false;
		$('.city-err').show();
	}
	if(unit == ''){        	   		
		validation_error = false;
		$('.unit-err').show();
	}
	if(province == ''){        	   		
		validation_error = false;
		$('.province-err').show();
	}	
	if(postal_code === ''){        	   		
		validation_error = false;
		$('.postal-err').show();
	}else if(isNaN(postal_code)){ 
		validation_error = false;
		$('.postal-err').text('only numeric value allow').show();
	}else {
		$('.postal-err').text('postal is required').hide();
	}
	
	
	if(check_in_date === ''){        	   		
		validation_error = false;
		$('.checkin-err').show();
	}
	if(check_out_date === ''){        	   		
		validation_error = false;
		$('.checkout-err').show();
	}	
	
	if(validation_error == true){     	  
    var form = $('#local_delievery')[0]; 
    var formValues = new FormData(form);
    $.ajax({
           type:'POST',
           url:"{{ route('local_delievery.form') }}",
            data:formValues, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){
               if(data.status == 200){
                  $('.local_delievery_alert').text('Data Updated Successfully');
                  $('.local_delievery_alert').css('display','block');
               $('html, body').stop().animate({
               scrollTop: $("#local_delievery").offset().top
               }, 600);
					setTimeout(function(){ 					
					window.location.href = '/dashboard';
				   }, 3000);
               }else{
                  $('.local_delievery_alert').css('display','none');
               }
           }                        
        });    
	}
       e.preventDefault();
        return false;   
    });
</script>