<div class ="row accomodation_vendor">
   <div class="simple-yellow-btn">
                     <a href="https://devsite.winecountryweekends.ca/vendor?id=<?php echo $_GET['id']; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>"class="yellow-btn">Back</a>
                     </div>
<div class="col-md-12">
    
   <h2 class="main-heading-H1">Non License Vendor Admin Form</h2>
   <form class="" id="non_license_data">
     
   	 <!-- Contact Details -->
      <div class="form-box" id="orm-box">
         <div class="row">
            <div class="col-md-12">
               <h4 class="form-heading">Vendor Contact</h4>
            </div>
            <div class="form-group col-md-6">
               <label>Contact Given Name(s)</label>
               <input type="text" class="form-control" id="name" name="contact_name" value="<?php echo $value->given_name;?>">
            </div>
            <input type="hidden" name="id" id="vendorID" value="<?php echo $id;?>">
            <div class="form-group col-md-6">
               <label>Contact's Last/Surname</label>
               <input type="text" class="form-control" id="lastname" name="contact_lastname" value="<?php echo $value->sur_name;?>">
            </div>
            <div class="form-group col-md-6">
               <label>Contact's eMail</label>
               <input type="email" class="form-control" id="name" name="contact_email" value="<?php echo $value->vendors_email;?>">
            </div>
            <div class="form-group col-md-6">
               <label>Contact Title</label>
               <input type="text" class="form-control" id="name" name="contact_title" value="<?php echo $value->vendor_title;?>" required="">
            </div>
            <div class="form-group col-md-6">
               <label>Contact Postion</label>
               <input type="text" class="form-control" id="name" name="contact_position" value="<?php echo $value->verndor_position;?>" required="">
            </div>
            <div class="form-group col-md-6">
               <label>Contact's Phone</label>
               <input type="text" class="form-control" id="name" name="contact_number" value="<?php echo $value->phone_number;?>">
            </div>
         </div>
      </div>
      <h2 class="form-heading">BUISNESS/VENDOR DETAILS</h2>
</div>
<div class="form-group col-md-6" id="buisness">
<label class="form-label">Buisness/Vendor Name<span>*</span></label>
<input type="text" class="form-control" id="" name="buisness_vendor_name" value="<?php echo $value->buisness_vendor_name;?>" required>
</div>
<div class="form-group col-md-6">
<label class="form-label">Street Address<span>*</span></label>
<input type="text" class="form-control" id="" name="street_Address" value="<?php echo $value->buisnessstreet_address;?>" required>
</div>
<div class="form-group col-md-6">
<label>Unit/Suite#</label>
<input type="text" class="form-control" name="unit" id="" value="<?php echo $value->buisness_vendor_unit;?>">
</div>
<div class="mb-3 form-check custom-checkbox-made col-md-12 mt-2">
<input type="checkbox" class="form-check-input" id="exampleCheck4" name="exampleCheck1" value="">
<label class="form-check-label" for="exampleCheck4">Check This Box To Publish Street Address</label>
</div>
<div class="form-group col-md-6">
<label class="form-label">City/Town<span>*</span></label>
<input type="text" class="form-control" name="city" id="" value="<?php echo $value->buisness_vendor_city;?>" required>
</div>
<div class="form-group col-md-6">
<label class="form-label">Province/State<span>*</span></label>
<input type="text" class="form-control" name="province" id="" value="<?php echo $value->buisness_vendor_state;?>" required>
</div>
<div class="form-group col-md-6">
<label class="form-label">Postal/Zip<span>*</span></label>
<input type="text" class="form-control" name="postal" id="" value="<?php echo $value->buisness_vendor_postal;?>" required>
</div>
<div class="form-group col-md-6">
<label class="form-label">Country<span>*</span></label>
<input type="text" class="form-control" id="" name="country" value="<?php echo $value->buisness_vendor_country;?>" required>
</div>
 <h4 class="form-heading"> Sub-Region<span>*</span></h4>
<div class="ul-list" id="sub_region">
<div class="mb-3 form-check custom-checkbox-made">
<input type="radio" class="form-check-input" name="non_license_sub_region" id="exampleCheck1" value="Niagara Falls" {{ ($value->accomodation_sub_region =="Niagara Falls") ? "checked" : "" }}>
<label>Niagara Falls</label>
</div>
<div class="mb-3 form-check custom-checkbox-made">
<input type="radio" class="form-check-input" name="non_license_sub_region" id="exampleCheck1" value="Niagara-on-the-Lake" {{ ($value->accomodation_sub_region =="Niagara-on-the-Lake") ? "checked" : "" }}>
<label>Niagara-on-the-Lake</label>
</div>
<div class="mb-3 form-check custom-checkbox-made">
<input type="radio" class="form-check-input" name="non_license_sub_region" id="exampleCheck1" value="Niagara Escarpment/ Twenty Valley" {{ ($value->accomodation_sub_region =="Niagara Escarpment/ Twenty Valley") ? "checked" : "" }}>
<label>Niagara Escarpment/ Twenty Valley</label>
</div>
<div class="mb-3 form-check custom-checkbox-made">
<input type="radio" class="form-check-input" name="non_license_sub_region" id="exampleCheck1" value="Fort Erie/ Niagara South Coast" {{ ($value->accomodation_sub_region =="Fort Erie/ Niagara South Coast") ? "checked" : "" }}>
<label>Fort Erie/ Niagara South Coast</label>
</div>
</div>
<div class="form-group col-md-6">
   <label class="form-label">Buisness/Vendor Phone <span>*</span></label>
<input type="text" class="form-control" id="" name ="phone" value="<?php echo $value->buisness_vendor_phone;?>" required>
</div>
@include('includes.cropper/gallery_section')
<!--  -->
<h4 class="form-heading">NON LICENSE DETAILS</h4>
<h5 class="form-sub-heading">Non-Licensee Type<span>*</span></h5>
<div class="ul-list" id="sub_type">
<div class="form-check custom-checkbox-made">
<input type="radio" class="form-check-input" name="non_license_type" id="exampleCheck1" value="Café" {{ ($value->accomodation_sub_type =="Café") ? "checked" : "" }}>
<label>Café</label>
</div>
 <div class="mb-3 form-check custom-checkbox-made">
<input type="radio" class="form-check-input" name="non_license_type" id="exampleCheck1" value="Diner" {{ ($value->accomodation_sub_type =="Diner") ? "checked" : "" }}>
<label>Diner</label>
</div>
<div class="form-check custom-checkbox-made">
<input type="radio" class="form-check-input" name="non_license_type" id="exampleCheck1" value="Eatery" {{ ($value->accomodation_sub_type =="Eatery") ? "checked" : "" }}>
<label>Eatery</label>
</div>
<div class="mb-3 form-check custom-checkbox-made">
<input type="radio" class="form-check-input" name="non_license_type" id="exampleCheck1" value="Public Health" {{ ($value->accomodation_sub_type =="Public Health") ? "checked" : "" }}>
<label>Public Health</label>
</div>
<div class="mb-3 form-check custom-checkbox-made">
<input type="radio" class="form-check-input" name="non_license_type" id="exampleCheck1" value="Farms & Grocers" {{ ($value->accomodation_sub_type =="Farms & Grocers") ? "checked" : "" }}>
<label>Farms & Grocers</label>
</div>
<div class="form-check custom-checkbox-made">
<input type="radio" class="form-check-input" name="non_license_type" id="exampleCheck1" value="Personal Care & Fitness" {{ ($value->accomodation_sub_type =="Personal Care & Fitness") ? "checked" : "" }}>
<label>Personal Care & Fitness</label>
</div>

<div class="form-check custom-checkbox-made">
<input type="radio" class="form-check-input" name="non_license_type" id="exampleCheck1" value="General" {{ ($value->accomodation_sub_type =="General") ? "checked" : "" }}>
<label>General</label>
</div>
</div>
<div class="ul-list">
  <h4 class="form-heading"> Group Orientation:</h4>
  <div class="mb-3 form-check custom-checkbox-made">
<label class="form-label"></label>
<input type="radio" class="form-check-input" name="group_orientation" id="group_orientation" value="Private" {{ ($value->group_orientation =="Private") ? "checked" : "" }}>
      <label>Private / Individual</label>
   </div>
   <div class="mb-3 form-check custom-checkbox-made">
      <input type="radio" class="form-check-input" name="group_orientation" id="group_orientation" value="Open" {{ ($value->group_orientation =="Open") ? "checked" : "" }}>
      <label>Open / Social</label>
   </div>
</div>
<div class="row">
  <div class="form-group col-md-12">
      <div class="menu_pdf_upload">
      <label>Menu PDF:</label>
      <input type="file" id="test" name="menu_pdf" accept=".pdf,.doc" class="w-100">
   </div>
   </div>
           <!--  <div class="form-group mb-3 col-md-6">
               <label class="form-label">Total Square Footage:</label>
               <input type="text" class="form-control" id="" name="non_license_square_footage" placeholder="" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Bedrooms: <span>*</span></label>
               <input type="text" class="form-control" id="" name="non_license_bedrooms" placeholder="" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Washrooms: <span>*</span></label>
               <input type="text" class="form-control" id="" name="non_license_washrooms" placeholder="" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Sleeps: <span>*</span></label>
               <input type="text" class="form-control" id="" name="non_license_sleeps" placeholder="" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Current Rate</label>
               <input type="text" class="form-control" id="city" name="non_license_currentrate" placeholder="" value="" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Spring - Seasonal Rate</label>
               <input type="text" class="form-control" id="city" name="non_license_spring" placeholder="" value="" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Summer - Seasonal Rate</label>
               <input type="text" class="form-control" id="city" name="non_license_summer" placeholder="" value="" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Winter - Seasonal Rate</label>
               <input type="text" class="form-control" id="city" name="non_license_winter" placeholder="" value="" required>
            </div>
         </div> -->
<!-- 
      <div class="form-box" id="digital">
         <div class="row">
            <div class="col-md-12">
         <h4 class="form-heading">DIGITAL & SOCIAL MEDIA</h4>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Business / Vendor eMail<span>*</span></label>
            <input type="text" class="form-control" id="name" name="buisness_vendor_email" placeholder="" value="" required>
         </div>
         <div class="form-group col-md-6">
            <label>Website URL</label>
            <input type="text" class="form-control" id="name" name="website_url" placeholder="" value="">
         </div>
         </div>
      </div>
   <div class="form-box" id="digital">
   <div class="row">
   <div class="form-group col-md-6">
      <label>Facebook Handle</label>
      <input type="text" class="form-control" id="name" name="facebook" placeholder="" value="">
   </div>
   <div class="form-group col-md-6">
      <label>Instagram Handle</label>
      <input type="text" class="form-control" id="name" name="instagram" placeholder="" value="">
   </div>
   <div class="form-group col-md-6">
      <label>Twitter Handle</label>
      <input type="text" class="form-control" id="name" name="twitter" placeholder="" value="">
   </div>
   <div class="form-group col-md-6">
      <label>Youtube Handle</label>
      <input type="text" class="form-control" id="name" name="youtube" placeholder="" value="">
   </div>
   </div>
</div> -->
 <!-- Licensee Questionaree -->
                         <div class="form-box">
                        <h4 class="form-heading">Non Licensee Questionnaire</h4>
                        <p>-    Outline your business concept including any interesting back story (i.e. your inspiration, etc.)?</p>
                        <textarea class="form-control" name="Non_License_Ques_1" value = ""><?php echo $value->Accom_Ques_1;?></textarea><br>
                        <p>- Is there a dominant face(s) associated with your business and is there a story there ?</p>
                        <textarea class="form-control" name="Non_License_Ques_2"><?php echo $value->Accom_Ques_2;?></textarea><br>
                        <p>- Do you have a strategic (i.e. goal oriented) social media marketing strategy ?</p>
                        <textarea class="form-control" name="Non_License_Ques_3"><?php echo $value->Accom_Ques_3;?></textarea><br>
                        <p>- How do you otherwise drive sales?</p>
                        <textarea class="form-control" name="Non_License_Ques_4"><?php echo $value->Accom_Ques_4;?></textarea><br>
                        </div>

<div class="form-box" id="admin">
         <h4 class="form-heading">SYSTEM ADMIN ONLY</h4>
          <h5 class="form-sub-heading">Price Rating:</h5>
         <div class="ul-list">
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="non_license_price_point_rating" id="exampleCheck01" value="Least Expensive" {{ ($value->price_point_rating =="$ Least Expensive") ? "checked" : "" }}>
               <label for="exampleCheck01"><span class="dollar-sign">$</span> Least Expensive</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="non_license_price_point_rating" id="exampleCheck03" value="$$ Moderately Low" {{ ($value->price_point_rating =="$$ Moderately Low") ? "checked" : "" }}>
               <label for="exampleCheck03"><span class="dollar-sign">$$</span> Moderately Low</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="non_license_price_point_rating" id="exampleCheck04" value="$$$ Moderately High" {{ ($value->price_point_rating =="$$$ Moderately High") ? "checked" : "" }}>
               <label for="exampleCheck04"><span class="dollar-sign">$$$</span> Moderately High</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="non_license_price_point_rating" id="exampleCheck05" value="$$$$ Most Expensive" {{ ($value->price_point_rating =="$$$$ Most Expensive") ? "checked" : "" }}>
               <label for="exampleCheck05"><span class="dollar-sign">$$$$</span> Most Expensive</label>
            </div>
         </div>
         <h5 class="form-sub-heading">Account Status:</h5>
         <div class="ul-list">
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="non_license_account_status" id="exampleCheck21" value="Published" {{ ($value->accom_account_status =="Published Listing") ? "checked" : "" }}>
               <label for="exampleCheck21">Published Listing</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="non_license_account_status" id="exampleCheck22" value="ProfileUpgrade" {{ ($value->accom_account_status =="ProfileUpgrade") ? "checked" : "" }}>
               <label for="exampleCheck22">Profile Upgrade</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="non_license_account_status" id="exampleCheck23" value="Suspend" {{ ($value->accom_account_status =="Suspend") ? "checked" : "" }}>
               <label for="exampleCheck23">Suspend</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="non_license_account_status" id="exampleCheck24" value="Delete" {{ ($value->accom_account_status =="Delete") ? "checked" : "" }}>
               <label for="exampleCheck24">Delete</label>
            </div>
         </div>
      </div>
<div class="btns-vendor mt-3">
<button type="button" class="btn wine-btn" id="update_non_license_data">Save Changes</button>
</div>
</form>
@include('includes.cropper/crop')
</div>
