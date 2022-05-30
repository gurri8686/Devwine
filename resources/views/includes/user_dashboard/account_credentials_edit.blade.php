<?php
 $user_id =  isset(auth()->user()->id) ? auth()->user()->id : '';
 $username = isset(auth()->user()->name) ? auth()->user()->name : '';
 $lastname = isset(auth()->user()->lastname) ? auth()->user()->lastname : '';
 $email = isset(auth()->user()->email) ? auth()->user()->email : '';
?>
<div class="row accomodation_vendor">
<form method="" id="account_credentials" novalidate>
   
   <h2 class="main-heading-H1">Account Credentials</h2>
   <div class="form-box row">
      <div class="col-md-12">
         <h4 class="form-heading">Account Credentials</h4>
      </div>
      <input type="hidden" class="form-control" id="user_id" name="id" value="<?php echo $user_id;?>">
      <div class="alert alert-success account_cred" style="display:none;"></div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">First name<span>*</span></label>
            <input type="text" class="form-control" id="name" name="first_name" value="<?php echo $username;?>" required="">
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Last name <span>*</span></label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $lastname;?>" required="">
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Display name <span>*</span></label>
            <input type="text" class="form-control" id="display_name" name="display_name" value="<?php echo $username;?>" required="">
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Email address<span>*</span></label>
            <input type="mail" class="form-control" id="email" name="email" value="<?php echo $email;?>" required="">
         </div>
      </div>
      <div class="">
         <div class="form-group">
            <label class="form-label">Upload Profile Image</label>
            <div class="logo-graphic-sec">
            <div class="row">
           <div class="logo-content-flex col-lg-4 col-md-6 mb-3">
            <div class="logo-content-flex-inner">
               <div class="choose-your-file comon-width" onclick="">
                    <div class="form-group"> 
                      <input type="file" id="file-upload" class="file-upload" name="profile_image" multiple required />
                       <label class="form-check-label" for="exampleCheck1">Profile Image<i class="fa fa-camera" aria-hidden="true"></i></label>
                       </div>
                  </div>
                  <div class="no-file-choose comon-width" onclick="">
                   <div id="file-upload-filename" class="file-upload-filename logo_thumbnail">
                     <?php
                     $profile_image =  isset(auth()->user()->user_profile_image) ? auth()->user()->user_profile_image : '';
                     if($profile_image != ''){
                     ?>
                    <img src="<?php echo $profile_image;?>" width="100%">
                 <?php 
                  }else{
                  ?>
               <?php } ?>
                 </div>
               </div>
            </div>
            </div>
         </div>
      </div>
            <small>This will enable you to leave a review of services rendered</small>
            <label class="form-label">Password
               <button type="button" class="btn btn-primary" id="opencroButton" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Edit
            </button>
            </label>
         </div>
      </div>
   <div class="btn-box-bx text-center">
 <button type="submit" id="update_accomodation_data" class="btn wine-btn">Update</button>
 </div>
</form>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
         <div class="modal-content">
             <div class="modal-header d-display">         
                <h4 class="form-heading">Change Password</h4>
				
				<button type="button" class="btn btn-default close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
         </div> 
            @include('includes/user_dashboard.change_password')
      </div>
    </div>
  </div>
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
     $("#change_password").submit(function(ee){  
    var form = $('#change_password')[0]; 
    var formValues = new FormData(form);
    console.log(formValues);
    $.ajax({
           type:'POST',
           url:"{{ route('change_password.form') }}",
            data:formValues, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){
				console.log(data)
               if(data.status == 200){
                  $('.change_pass').text('Password Changed Succesfully');
                  $('.change_pass').css('display','block');
               }else{
				  $('#change_pass').removeClass("alert-success");
				  $('#change_pass').addClass("alert-danger");
				  $('.change_pass').text(data.msg).show();
                  //$('.change_pass').css('display','none');
               } 
           },
			error: function(data){
				console.log(data)
			}                          
        });    

        ee.preventDefault();  
        return false;   
    });  
    $("#account_credentials").submit(function(ee){  
    var form = $('#account_credentials')[0]; 
    var formValues = new FormData(form);
    console.log(formValues);
    $.ajax({
           type:'POST',
           url:"{{ route('account_credentials.form') }}",
            data:formValues, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){
               if(data.status == 200){
                  if(data.status == 200){
                  $('.account_cred').text('Data Updated Succesfully');
                  $('.account_cred').css('display','block');
                   $('html, body').stop().animate({
                   scrollTop: $("#guest_registsry").offset().top
                  }, 600);
                  window.location.href = '/dashboard?id='+$("#user_id").val()+'&updated_data="account"';
               }else{
                  $('.account_cred').css('display','none');
               }
               }
           }                        
        });    

        ee.preventDefault();  
        return false;   
    });  
</script>
