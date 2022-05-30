   <?php
 $user_id =  auth()->user()->id;
 $data = DB::table('guest_registry')->where('user_id',$user_id)->get()->toArray();
?>
<div class="user-main-div">
   <form id="guest_registsry" method="" novalidate>
   <div class="user-content-div">
<h4 class="form-heading">Guest Registry</h4>
      <div class="row">
          <div class="alert alert-success guest" style="display: none;"></div>
         <input type="hidden" class="form-control" id="user_id" name="id" value="{{auth()->user()->id}}">
      <div class="col-md-6">
        
         <div class="form-group">
            <label class="form-label">User Contact Ph# <span>*</span></label>
            <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="<?php echo isset($data[0]->contact_phone) ? $data[0]->contact_phone :'';?>" required="" maxlength="12">
			<span class="invalid-feedback phn-err" role="alert">
				<strong>Phone is required</strong>
			</span>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Home Street Address<span>*</span></label>
            <input type="text" class="form-control" id="street_address" name="street_address" value="<?php echo isset($data[0]->street_address) ? $data[0]->street_address : '';?>" required="">
			<span class="invalid-feedback street-err" role="alert">
				<strong>Street Address is required</strong>
			</span>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Unit/Suite#</label>
            <input type="text" class="form-control" id="unit" name="unit" value="<?php echo isset($data[0]->unit) ? $data[0]->unit : '';?>" required="">
			<span class="invalid-feedback unit-err" role="alert">
				<strong>Unit/Suite# is required</strong>
			</span>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Home City/Town<span>*</span></label>
            <input type="text" class="form-control" id="city" name="city" value="<?php echo isset($data[0]->city) ? $data[0]->city : '';?>" required="">
			<span class="invalid-feedback city-err" role="alert">
				<strong>Home City/Town is required</strong>
			</span>
         </div>
      </div>
       <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Home Province/State<span>*</span></label>
            <input type="text" class="form-control" id="province" name="province" value="<?php echo isset($data[0]->province) ? $data[0]->province : '';?>" required="">
			<span class="invalid-feedback province-err" role="alert">
				<strong>Province/State is required</strong>
			</span>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Home Postal Code/Zip<span>*</span></label>
            <input type="text" class="form-control" id="postal" name="postal" value="<?php echo isset($data[0]->postal) ? $data[0]->postal : '';?>" required="" maxlength="12">
         </div>
		 <span class="invalid-feedback postal-err" role="alert">
				<strong>Postal Code/Zip is required</strong>
		</span>
      </div>
       <div class="logo-graphic-sec">
      <div class="row">
           <div class="logo-content-flex col-lg-4 col-md-6 mb-3">
            <div class="logo-content-flex-inner">
               <div class="choose-your-file comon-width" onclick="">
                    <div class="form-group"> 
                      <input type="file" id="file-upload" class="file-upload" name="front_image" multiple required />
                       <label class="form-check-label" for="exampleCheck1">Upload Drivers License - Front*<i class="fa fa-camera" aria-hidden="true"></i></label>
                       </div>
                  </div>
                  <div class="no-file-choose comon-width" onclick="">
                   <div id="file-upload-filename" class="file-upload-filename logo_thumbnail">
                   <?php 
                   $front_image = isset($data[0]->license_front_image) ? $data[0]->license_front_image : '';
                   if($front_image != ''){?>

                    <img src="<?php echo $front_image;?>" width="100%">
                    <?php }else{ ?>
                    <!-- <span>No File Chosen</span> -->
                 <?php } ?>
                  
                 </div>
               </div>
            </div>
            </div>
			   <div class="logo-content-flex col-lg-4 col-md-6 mb-3">
            <div class="logo-content-flex-inner">
               <div class="choose-your-file comon-width" onclick="">
                    <div class="form-group"> 
                      <input type="file" id="file-upload" class="file-upload" name="back_image" multiple required />
                       <label class="form-check-label" for="exampleCheck1">Upload Drivers License - Back*<i class="fa fa-camera" aria-hidden="true"></i></label>
                       </div>
                  </div>
                  <div class="no-file-choose comon-width" onclick="">
                   <div id="file-upload-filename" class="file-upload-filename logo_thumbnail">
                     <?php
                     $license_back_image = isset($data[0]->license_back_image) ? $data[0]->license_back_image : '';
                      if($license_back_image != ''){?>

                    <img src="<?php echo $license_back_image;?>" width="100%">
                    <?php }else{?>
                    <!-- <span>No File Chosen</span> -->
                 <?php } ?>
                 </div>
               </div>
            </div>
            </div>
         </div>
        
      </div>
         <!-- <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Upload Drivers License - Front*</label>
            <input type="file" class="form-control" id="name" name="front_image" required="">
            </div>
      </div> -->
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Emergency Contact Name<span>*</span></label>
            <input type="text" class="form-control" id="emergency_contact_name" name="emergency_contact_name" value="<?php echo isset($data[0]->emergency_contact_name) ? $data[0]->emergency_contact_name : '';?>" required="">
         </div>
		 <span class="invalid-feedback emergency-name-err" role="alert">
				<strong>Emergency Contact Name is required</strong>
		</span>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Emergency Contact Relation<span>*</span></label>
            <input type="text" class="form-control" id="emergency_contact_relation" name="emergency_contact_relation" value="<?php echo isset($data[0]->emergency_contact_relation) ? $data[0]->emergency_contact_relation : '';?>" required="">
         </div>
		 <span class="invalid-feedback emergency-relation-err" role="alert">
				<strong>Emergency Contact Relation is required</strong>
		</span>		 
      </div>
       <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Emergency Contact Ph<span>*</span></label>
            <input type="text" class="form-control" id="emergency_contact_phone" name="emergency_contact_phone" value="<?php echo isset($data[0]->emergency_contact_phone) ? $data[0]->emergency_contact_phone : '';?>" required="" maxlength="12">
         </div>
		 <span class="invalid-feedback emergency-contact-err" role="alert">
				<strong>Emergency Contact Ph is required</strong>
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
   $('.file-upload').change(function(){
	const file = this.files[0];
	console.log( $(this).parents(".logo-content-flex-inner"));
	//$(this).parents(".logo-content-flex col-lg-4 col-md-6 mb-3").find(".file-upload-filename").html("<span class='tewstst'>"+file.name+"</span>");
	//$('#file-upload-filename span').text(file.name);
	var imageSrc='';
	console.log(file);
	 if (file) {
		let reader = new FileReader(); 
		reader.readAsDataURL(this.files[0]);
		
		let divurl= $(this).parents(".logo-content-flex-inner").find(".file-upload-filename");
		   reader.onload = function(){
			  imageSrc = reader.result;
			  console.log(imageSrc);
			  divurl.html("<img src='"+imageSrc+"' width='100%'>");
		   }		
	 }         
   });
   
$("#guest_registsry").submit(function(e){  
    e.preventDefault();
	var contact_phone = $('#contact_phone').val();
	var street_address  = $('#street_address').val();
	var unit     = $('#unit').val();
	var city  = $('#city').val();
	var province   = $('#province').val();
	var postal   = $('#postal').val();
	
	var emergency_contact_name   = $('#emergency_contact_name').val();
	var emergency_contact_relation   = $('#emergency_contact_relation').val();
	var emergency_contact_phone   = $('#emergency_contact_phone').val();
	
	var validation_error = true;
	
	if(contact_phone === ''){        	   		
		validation_error = false;
		$('.phn-err').show();
		$('.phn-err').text('Phone is required').show();
	} else if(isNaN(contact_phone)){ 
		validation_error = false;
		$('.phn-err').text('only numeric value allow').show();
	}else {
		$('.phn-err').text('phone is required').hide();
	}
	
	if(street_address === ''){        	   		
		validation_error = false;
		$('.street-err').show();
	}
	if(city === ''){        	   		
		validation_error = false;
		$('.city-err').show();
	}
	if(province === ''){        	   		
		validation_error = false;
		$('.province-err').show();
	}
	if(postal === ''){        	   		
		validation_error = false;
		$('.postal-err').show();
	}else if(isNaN(postal)){ 
		validation_error = false;
		$('.postal-err').text('only numeric value allow').show();
	}else {
		$('.postal-err').text('postal is required').hide();
	}
	
	
	if(emergency_contact_name === ''){        	   		
		validation_error = false;
		$('.emergency-name-err').show();
	}
	if(emergency_contact_relation === ''){        	   		
		validation_error = false;
		$('.emergency-relation-err').show();
	}
	if(emergency_contact_phone === ''){        	   		
		validation_error = false;
		$('.emergency-contact-err').show();
	} else if(isNaN(emergency_contact_phone)){ 
		validation_error = false;
		$('.emergency-contact-err').text('only numeric value allow').show();
	}else {
		$('.emergency-contact-err').text('Emergency Contact Ph is required').hide();
	}
	
	if(validation_error == true){     	  
    var form = $('#guest_registsry')[0]; 
    var formValues = new FormData(form);
    $.ajax({
           type:'POST',
           url:"{{ route('guest_registry.form') }}",
            data:formValues, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){
               if(data.status == 200){
                  $('.guest').text('Data Updated Successfully');
                  $('.guest').css('display','block');
                  $('html, body').stop().animate({
                   scrollTop: $("#guest_registsry").offset().top
                  }, 600);
				   setTimeout(function(){ 					
					window.location.href = '/dashboard';
				   }, 3000);
                  //window.location.href = '/dashboard?id='+$("#user_id").val()+'&updated_data="guest"';
                  
               }else{
                  $('.change_pass').css('display','none');
               }
           }                        
        });
	}		
       e.preventDefault();
        return false;   
    });
	
</script>