 <?php $name = Auth::user()->name; ?>
<div class="user-main-div">
<div class="user-content-div">
	<div class="submit-review-custom">
   <h4 class="form-heading">Review Submission</h4>
   <?php $userId = Auth::id();  			
		$user_data = $query = DB::table('Vendor_Review')->where('user_id', $userId)->orderBy('id')->first();
		
		if(empty($user_data)){
		
   ?>
   <div class="form-box row">
	<form id="review_form">
	<input type="hidden" name="user_id" value="{{auth()->user()->id}}">
	<input type="hidden" name="review_action" value="insert">
		<div class="col-lg-6">
		 <div class="form-group">
			<label class="form-label">Vendor Name</label>
			<input type="text" class="form-control" id="name" name="buisness_vendor_name" required="">
		 </div>
		</div>
		<div class="col-lg-6">
		 <div class="form-group">
			<label class="form-label">Vendor Location</label>
			<input type="text" class="form-control" id="location" name="buisness_vendor_location" required="">
		 </div>
		</div>
		<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Comment</label>
			<textarea class="form-control" name="review_description" rows="5" id="review_description"></textarea>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="btn-box-bx text-right mt-3 text-center">
				<button type="submit" id="" class="btn wine-btn">Save</button>
			</div>
		</div>
	</form>
   </div>
	<?php }else { 
		$vendor_name = $user_data->vendor_name;
		$vendor_location = $user_data->vendor_location;
		$vendor_comment = $user_data->vendor_comment;
	?>
	 <div class="review-main-div">
	   <div class="user-content-div">
		  <p class="mb-2">Hello <span class="link-color">
			 {{$name}}
			 </span>,
		  </p>
		  <p class="mb-2">You alreday submitted review.</p>
		  <p class="mb-2"><b>Your Review :</b> <?php echo $user_data->vendor_comment; ?></p>
		  <p class="mb-2">You can edit your review here.</p>
	   </div>
	   <div class="col-lg-12">
		<div class="btn-box-bx text-right mt-3 text-center edit-btn">
			<button type="button" id="edit_review" class="btn wine-btn">Edit review</button>
		</div>			
		</div>
		<div class="form-box row edit-review-div" style="display:none">
	<form id="review_form">
	<input type="hidden" name="user_id" value="{{auth()->user()->id}}">
	<input type="hidden" name="review_action" value="update">
		<div class="col-lg-6">
		 <div class="form-group">
			<label class="form-label">Vendor Name</label>
			<input type="text" class="form-control" id="name" name="buisness_vendor_name" value="<?php echo $vendor_name ?>" required="">
		 </div>
		</div>
		<div class="col-lg-6">
		 <div class="form-group">
			<label class="form-label">Vendor Location</label>
			<input type="text" class="form-control" id="location" name="buisness_vendor_location" value="<?php echo $vendor_location ?>" required="">
		 </div>
		</div>
		<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Comment</label>
			<textarea class="form-control" name="review_description" rows="5" id="review_description"><?php echo $vendor_comment ?></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="btn-box-bx text-right mt-3 text-center">
					<button type="submit" id="" class="btn wine-btn">Update</button>
				</div>
			</div>
			<div class="col-lg-6 text-right">
				<div class="btn-box-bx text-right mt-3 text-center pull-right">
					<button type="button" id="" class="btn wine-btn cancel-review">Cancel</button>
				</div>
			</div>
		</div>
	</form>
   </div>
	</div>
	<?php } ?>
</div>
</div>
</div>


<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js
"></script>
<script type="text/javascript">
  $(document).ready(function() {  		
	$("#edit_review").on("click", function(){ 
		$('.edit-review-div').show();
		//$('.edit-btn').hide();
		
	})
	$(".cancel-review").on("click", function(){ 
		$('.edit-review-div').hide();
		//$('.edit-btn').show();
		
	});   
	$("#review_form").submit(function(ee){     
    var form = $('#review_form')[0]; 
    var formValues1 = new FormData(form);
	console.log('form-submitted');
    $.ajax({
           type:'POST',
           url:"{{ route('review_submit.form') }}",
            data:formValues1, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){ 
				if(data == 'inserted'){					
					alert('Review inserted successfully');
				}else if(data == 'updated'){
					alert('Review updated successfully');
				}else{
					alert('somthing went wrong! Please try later');
				}
				window.location.reload();
           }                        
        });    
        ee.preventDefault();  
        return false;   
    });
	
  });
  </script>