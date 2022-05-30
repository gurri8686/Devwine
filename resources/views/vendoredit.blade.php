@include('includes.header')
<title> Wine Country Weekends Vendor Dashboard</title>
<style>
.tabs-data .active {
    background-color: #ffc10775!important;
}
.col-4.tabs-data button {
    color: black;
}
.content li {
    color: gray;
}  
</style>         
</head>
<body>
       <section class="dashbord-sec">
<div class="container">
   <div class="col-sm-12">
      <div class="row">
         <div class="col-3 tabs-data" >
            <div class=" align-items-start" style="background-color: #fff;">
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  
                 <p class="dashboard-title">Vendor Dashboard</p>
                  <?php 
               $id      = isset($_GET['id']) ? $_GET['id'] : "";
               $filter  = isset($_GET['filter']) ? $_GET['filter'] : "";
               $sort    = isset($_GET['sort']) ? $_GET['sort'] : "";
               $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
               if($id !=""){
               ?>
               <button class="nav-link active"   type="button" data-bs-toggle="pill" role="tab" data-bs-target="#v-pills-search"><a href="/search/?id=<?php echo $id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>" class="font-link" style="text-decoration:none;color: black;">Search</a></button>
                  <button class="nav-link" id="v-pills-messages-tab active show" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Accomodation Vendor Form</button>
               <?php
                }else{
               ?>
               <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Accomodation Vendor Form</button>
               <?php
                }
               ?>
                  <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Excursion Vendor Form</button>
                  <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings-2" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Winery Vendor Form </button>
                   <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings-3" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Licensed Vendor Form </button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings-4" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Non-Licensed Vendor Form</button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings-2" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Event Calendar </button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings-2" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Souvnier Shop </button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings-2" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ad Server </button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings-2" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">We Are All Essential </button>
               </div>
            </div>
         </div>
         <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent" style="background-color: #fff;min-height: 446px;padding-left:15px;padding-right:15px;">
               <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <div class ="row">
                     <h2 style="font-weight:bold;font-size: 16px;">User Profile</h2>
                     <!-- <p style="padding-bottom: 27px;">Upload a "Profile Image" and qualify to leave public reviews of vendor products and services.</p> -->
                     <div class="col-12">
                        <div class="col-8">
                           <div class="row user_profile">
                              <label>Given Name:</label><br>
                              <label>Surname /Last Name:</label><br>
                              <label>eMail / Username:</label>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="icon" style="">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                 <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                 <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/>
                              </svg>
                              <label>Profile Image</label>
                           </div>
                        </div>
                     </div>
                     <div class="row user_profile">
                        <h2>Guest Registry</h2>
                        <p>Completing the <span style="font-weight:bold;">Guest Registry</span> section of your profile details to satisfy security protocols and enable you to self-check in. Booking directly with vendor partners also becomes an option and thus saving on third-party fees.
                        </p>
                        <label>Contact Ph#:</label><br>
                        <label>Home Street Address:</label><br>
                        <label>Unit/Suite#:</label><br>
                        <label>Home City/Town:</label><br>
                        <label>Home Province/State:</label><br>
                        <label>Home Postal Code/Zip:</label><br>
                        <label>See Identification:</label>
                        <div class="mb-3" style="display: flex;">
                           <div style="border: 1px solid #e4e4e4;background: #f7f7f7;max-height: 50%;width: 50%;position: relative;padding: 66px;text-align: center;">Image Front
                           </div>
                           <div style="border: 1px solid #e4e4e4;background: #f7f7f7;max-height: 50%;width: 50%;position: relative;padding: 66px;text-align: center;">Back Image
                           </div>
                        </div>
                        <h2>See Emergency Contact:</h2>
                        <label>Emergency Contact Name:</label><br>
                        <label>Emergency Contact Relation:</label><br>
                        <label>Emergency Contact Phone:</label><br>
                        <div class="row">
                           <h2>Travel Itinerary & Local Delievery</h2>
                           <p>The submission of travel details will help facilitate free next day local delivery of online <span style="font-weight:bold;">Souvenir Shop</span> purchases.</p>
                           <label>Travel/ Check-In Date(Arrival):</label><br>
                           <label>Travel/ Check-Out Date(Departure):</label><br>
                           <label>Local Accomodation:</label><br>
                           <label>Accomodation Type:</label><br>
                           <label>Host's Name:</label><br>
                           <label>Contact Ph#:</label><br>
                           <label>Niagara Region Street Address:</label><br>
                           <label>Unit/Suite#:</label><br>
                           <label>Niagara Region City/Town:</label><br>
                           <label>Province:</label><br>
                           <label>Niagara Region Postal Code:</label><br>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="tab-pane fade active show" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                  <div class ="accomodation_vendor justify-content-start">
                     
                     <?php
                     $id      = isset($_GET['id']) ? $_GET['id'] : "";
                     $filter  = isset($_GET['filter']) ? $_GET['filter'] : "";
                     $sort    = isset($_GET['sort']) ? $_GET['sort'] : "";
                     $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
                     $id      = isset($_GET['id']) ? $_GET['id'] : "";
                        if($id !=""){
                        $admin_data = $query = DB::table('Vendors_Account')->where('ID',$id)->select('*')->get();
                        foreach($admin_data as $key => $value){

                        ?>
                        <form id="form1">
                        <input type="hidden" name="id" id="vendorID" value="<?php echo $id;?>">
                        <?php
                        if($value->vendor_type =='Accomodation'){
                         ?>
                       @include('includes.admin_forms.accomodation')
                        <?php 
                        }
                        ?>
                     </form>
                     <?php
                        if($value->vendor_type =='Accomodation'){
                         ?>
                     @include('includes.cropper/crop')
                       <?php 
                        }
                        ?>

                        <?php 
                        if($value->vendor_type =='Excursion'){
                         ?>
                         @include('includes.admin_forms.excursion')
                      <?php } ?>
                       <?php 
                        if($value->vendor_type =='Winery'){
                         ?>
                         @include('includes.admin_forms.winery')
                      <?php } ?>
                         <?php 
                        if($value->vendor_type =='License'){
                         ?>
                         @include('includes.admin_forms.license')
                      <?php } ?>
                       <?php 
                        if($value->vendor_type =='Non-License'){
                         ?>
                         @include('includes.admin_forms.non_license')
                      <?php } ?>
                        </div>
                     <?php
                        } 
                        }
                     ?>
               
         </div>
      </div>
                    
                     <div class="tab-pane" id="v-pills-settings" role="tabpanel">   
                        <?php 
                        if($id == ''){
                           ?>
                      @include('includes.admin_forms.excursion')
                   <?php } ?>
                   </div>
                     <div class="tab-pane" id="v-pills-settings-2" role="tabpanel">
                         <?php 
                        if($id == ''){
                           ?>
                       @include('includes.admin_forms.winery')
                       <?php } ?>
                     </div>
                      <div class="tab-pane" id="v-pills-settings-3" role="tabpanel">
                         <?php 
                        if($id == ''){
                           ?>
                       @include('includes.admin_forms.license')
                        <?php } ?>
                     </div>
                      <div class="tab-pane" id="v-pills-settings-4" role="tabpanel">
                        <?php 
                        if($id == ''){
                           ?>
                       @include('includes.admin_forms.non_license')
                        <?php } ?>
                     </div>



               </div>
            </div>
         </div>
      </div>
   </div>
</section>



<div class="clearfix"></div>

<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script type="text/javascript">
   CKEDITOR.replace('description');
$(document).ready(function() {  

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

});

  // Update data of accomodation form
  $("#update_accomodation_data").click(function(){
   var desc = CKEDITOR.instances['description'].getData();
  
   console.log(desc);
    var form1 = $('#form1')[0];

    var formValues1 = new FormData(form1);
        formValues1.append('description',desc);

    $.ajax({
           type:'POST',
           url:"{{ route('update_accomodation_form.form') }}",
           data:formValues1,
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
              processData: false, 
           success:function(data){
           //location.reload();

           window.location.href = '/vendor?id='+$("#vendorID").val()+'&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>';
            //window.history.back();
          console.log(data);
          return false;
          tablehtml = "";
          $('.totalresults').val(data.length);  
          $("#searchsdata").html('');
         $("#searchsdata").html(tablehtml);       
           }                        
        });
  });
 // Update data of excursion form
  $("#update_excursion_data").click(function(){
   var desc = CKEDITOR.instances['description'].getData();
  
   // console.log(desc);
    var form1 = $('#excursion_data')[0];

    var formValues1 = new FormData(form1);
    console.log(formValues1);
        formValues1.append('description',desc);

    $.ajax({
           type:'POST',
           url:"{{ route('update_excursion_form.form') }}",
           data:formValues1,
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
              processData: false, 
           success:function(data){
           //location.reload();
            window.location.href = '/vendor?id='+$("#vendorID").val()+'&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>';

           
            //window.history.back();
          console.log(data);
          return false;
          tablehtml = "";
          $('.totalresults').val(data.length);  
          $("#searchsdata").html('');
         $("#searchsdata").html(tablehtml);       
           }                        
        });
  });

   // Update data of winery form
  $("#winery_update").click(function(){
   var desc = CKEDITOR.instances['description'].getData();
  
   // console.log(desc);
    var form1 = $('#winery_data')[0];

    var formValues1 = new FormData(form1);
    console.log(formValues1);
        formValues1.append('description',desc);

    $.ajax({
           type:'POST',
           url:"{{ route('update_winery_form.form') }}",
           data:formValues1,
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
              processData: false, 
           success:function(data){
           //location.reload();
            window.location.href = '/vendor?id='+$("#vendorID").val()+'&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>';

           
            //window.history.back();
          console.log(data);
          return false;
          tablehtml = "";
          $('.totalresults').val(data.length);  
          $("#searchsdata").html('');
         $("#searchsdata").html(tablehtml);       
           }                        
        });
  });

   // Update data of license form
  $("#update_license_data").click(function(){
   // var desc = CKEDITOR.instances['description'].getData();
  
   // console.log(desc);
    var form1 = $('#license_form')[0];

    var formValues1 = new FormData(form1);
    console.log(formValues1);
        // formValues1.append('description',desc);

    $.ajax({
           type:'POST',
           url:"{{ route('update_license_form.form') }}",
           data:formValues1,
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
              processData: false, 
           success:function(data){
           //location.reload();
         window.location.href = '/vendor?id='+$("#vendorID").val()+'&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>';
           
            //window.history.back();
          console.log(data);
          return false;
          tablehtml = "";
          $('.totalresults').val(data.length);  
          $("#searchsdata").html('');
         $("#searchsdata").html(tablehtml);       
           }                        
        });
  });

  // Update data of non-license form
  $("#update_non_license_data").click(function(){
   // var desc = CKEDITOR.instances['description'].getData();
  
   // console.log(desc);
    var form1 = $('#non_license_data')[0];

    var formValues1 = new FormData(form1);
    console.log(formValues1);
        // formValues1.append('description',desc);

    $.ajax({
           type:'POST',
           url:"{{ route('update_non_license_form.form') }}",
           data:formValues1,
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
              processData: false, 
           success:function(data){
           //location.reload();
           window.location.href = '/vendor?id='+$("#vendorID").val()+'&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>';
           
            //window.history.back();
          console.log(data);
          return false;
          tablehtml = "";
          $('.totalresults').val(data.length);  
          $("#searchsdata").html('');
         $("#searchsdata").html(tablehtml);       
           }                        
        });
  });


function preview() {
	frame.src = URL.createObjectURL(event.target.files[0]);
}
function clearImage() {
	document.getElementById('formFile').value = null;
	frame.src = "";
}
$('html,body').animate({
  scrollTop: $(window.location.hash).offset().top
});
</script>
</body>
 @include('includes.footer') 