
<div class ="row accomodation_vendor">
   <div class="simple-yellow-btn">
                     <a href="https://devsite.winecountryweekends.ca/vendor?id=<?php echo $_GET['id']; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>"class="yellow-btn">Back</a>
                     </div>
   <h2 class="main-heading-H1">Excursion Vendor Admin Form</h2>
   <form  id="excursion_data">
      
      <div class="form-box" id="orm-bo">
         <div class="row">
            <div class="col-md-12">
               <h4 class="form-heading">Vendor Contact</h4>
            </div>
            <div class="form-group col-md-6">
               <label>Contact Given Name(s)</label>
               <input type="text" class="form-control" id="name" name="excursion_given_name" placeholder="" value="<?php echo $value->given_name;?>">
            </div>
            <div class="form-group col-md-6">
               <label>Contact's Last/Surname</label>
               <input type="text" class="form-control" id="lastname" name="excursion_contact_lastname" placeholder="" value="<?php echo $value->sur_name;?>">
            </div>
            <input type="hidden" name="id" id="vendorID" value="<?php echo $id;?>">
            <div class="form-group col-md-6">
               <label>Contact's eMail</label>
               <input type="email" class="form-control" id="name" name="excursion_contact_email" placeholder="" value="<?php echo $value->vendors_email;?>">
            </div>
            <div class="form-group col-md-6">
               <label>Contact's Title</label>
               <input type="text" class="form-control" id="name" name="excursion_contact_title" placeholder="<?php echo $value->vendor_title;?>" value="" required="">
            </div>
            <div class="form-group col-md-6">
               <label>Contact's Postion</label>
               <input type="text" class="form-control" id="name" name="excursion_contact_position" placeholder="" value="<?php echo $value->verndor_position;?>" required="">
            </div>
            <div class="form-group col-md-6">
               <label>Contact's Phone</label>
               <input type="text" class="form-control" id="name" name="excursion_contact_number" placeholder="" value="<?php echo $value->phone_number;?>" required="">
            </div>
         </div>
      </div>
      <div class="row" id="buisness">
         <div class="col-md-12">
            <h4 class="form-heading">BUISNESS/VENDOR DETAILS</h4>
         </div>
         <div class="form-group col-md-6">
            <label for="" class="form-label">Business/Vendor Name: <span>*</span></label>
            <input type="text" class="form-control" id="" name="excursion_buisness_vendor_name" value="<?php echo $value->buisness_vendor_name;?>" aria-describedby="" required>
         </div>
         <div class="form-group col-md-6">
            <label for="" class="form-label">Street Address: <span>*</span></label>
            <input type="text" class="form-control" id="" name="excursion_street_address" value="<?php echo $value->buisnessstreet_address;?>" required>
         </div>
         <div class="form-group col-md-6">
            <label for="" class="form-label">Unit/Suite#:</label>
            <input type="text" class="form-control" id="" name="excursion_unit" value="<?php echo $value->buisness_vendor_unit;?>">
         </div>
      <div class="mb-3 form-check custom-checkbox-made col-md-12 mt-2">
                              <input type="checkbox" class="form-check-input" id="exampleCheck2" name="exampleCheck1" value="">
                              <label class="form-check-label" for="exampleCheck2">check this box to hide street address</label>
                           </div>
         <div class="form-group col-md-6">
            <label for="" class="form-label">City/Town: <span>*</span></label>
            <input type="text" class="form-control" id="" name="excursion_vendor_city" value="<?php echo $value->buisness_vendor_city;?>" required>
         </div>
         <div class="form-group col-md-6">
            <label for="" class="form-label">Province/State: <span>*</span></label>
            <input type="text" class="form-control" id="" name="excursion_state" value="<?php echo $value->buisness_vendor_state;?>" required>
         </div>
         <div class="form-group col-md-6">
            <label for="" class="form-label">Postal/Zip: <span>*</span> </label>
            <input type="text" class="form-control" id="" value="<?php echo $value->buisness_vendor_postal;?>" name="excursion_vendor_postal" required>
         </div>
         <div class="form-group col-md-6">
            <label for="" class="form-label">Country: <span>*</span> </label>
            <input type="text" class="form-control" id="" name="excursion_vendor_country" value="<?php echo $value->buisness_vendor_country;?>" required>
         </div>
      </div>
      <div class="col-md-12 mt-3" id="sub_region">
         <h4 class="form-heading"> Sub-Region<span>*</span></h4>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="excursion_sub_region" id="flexRadioDefault1" value="Niagara Falls" {{ ($value->accomodation_sub_region =="Niagara Falls") ? "checked" : "" }}>
         <label class="form-check-label" for="flexRadioDefault1">
         Niagara Falls 
         </label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="excursion_sub_region" id="flexRadioDefault1" value="Niagara Escarpment / Twenty Valley" {{ ($value->accomodation_sub_region =="Niagara Escarpment / Twenty Valley") ? "checked" : "" }}>
         <label class="form-check-label" for="flexRadioDefault1">
         Niagara Escarpment / Twenty Valley
         </label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="excursion_sub_region" id="flexRadioDefault1" value="Niagara-on-the-Lake" {{ ($value->accomodation_sub_region =="Niagara-on-the-Lake") ? "checked" : "" }}>
         <label class="form-check-label" for="flexRadioDefault1">
         Niagara-on-the-Lake
         </label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="excursion_sub_region" id="flexRadioDefault1" value="Fort Erie / Niagara’s South Coast" {{ ($value->accomodation_sub_region =="Niagara’s South Coast") ? "checked" : "" }}>
         <label class="form-check-label" for="flexRadioDefault1">
         <label class="form-check-label" for=""> Fort Erie / Niagara’s South Coast</label>
      </div>
      <div class="mb-3">
         <label for="" class="form-label">Business/Vendor Phone: <span>*</span> </label>
         <input type="text" class="form-control" id="" name="excursion_vendor_phone" value="<?php echo $value->buisness_vendor_phone;?>" required>
      </div>
@include('includes.cropper/gallery_section')
      
      <h2 class="form-heading">Excursion Details</h2>
      <h5 class="form-sub-heading">Excursion Sub-Type: <span>*</span></h5>
      <div class="ul-list" name="excursion_acc_sub_type" id="sub_type">
         <div class="mb-3 form-check custom-checkbox-made">
            <input class="form-check-input" type="radio" name="excursion_sub_type" id="flexRadioDefault1" value="Arts/Culture" {{ ($value->accomodation_sub_type =="Arts/Culture") ? "checked" : "" }}>
            <label class="form-check-label" for="flexRadioDefault1"></label>
            <label class="form-check-label" for="">Arts/Culture</label>
         </div>
         <div class="mb-3 form-check custom-checkbox-made">
            <input class="form-check-input" type="radio" name="excursion_sub_type" id="flexRadioDefault1" value="Night Life" {{ ($value->accomodation_sub_type =="Night Life") ? "checked" : "" }}>
            <label class="form-check-label" for="flexRadioDefault1"></label>
            <label class="form-check-label" for="">Night Life</label>
         </div>
         <div class="mb-3 form-check custom-checkbox-made">
            <input class="form-check-input" type="radio" name="excursion_sub_type" id="flexRadioDefault1" value="Sport & Adventure" {{ ($value->accomodation_sub_type =="Sport & Adventure") ? "checked" : "" }}>
            <label class="form-check-label" for="flexRadioDefault1"></label>
            <label class="form-check-label" for="">Sport & Adventure</label>
         </div>
         <div class="mb-3 form-check custom-checkbox-made">
            <input class="form-check-input" type="radio" name="excursion_sub_type" id="flexRadioDefault1" value="Thrill Seeking" {{ ($value->accomodation_sub_type =="Thrill Seeking") ? "checked" : "" }}>
            <label class="form-check-label" for="flexRadioDefault1"></label>
            <label class="form-check-label" for="">Thrill Seeking</label>
         </div>
         <div class="mb-3 form-check custom-checkbox-made">
            <input type="radio" class="form-check-input" name="excursion_sub_type" id="exampleCheck1" value="Culinary" {{ ($value->accomodation_sub_type =="Culinary") ? "checked" : "" }}>
            <label>Culinary</label>
         </div>
         <br>
      </div>
         <h5 class="form-sub-heading">Experience Type: <span>*</span></h5>
         <div class="ul-list">
            
            <div class="mb-3 form-check custom-checkbox-made">
            <input class="form-check-input" type="radio" name="experience_type" id="flexRadioDefault1" value="Basic Experience" {{ ($value->experience_type =="Basic Experience") ? "checked" : "" }}>
            <label class="form-check-label" for="">Basic Experience</label>
         </div>
         
            <div class="mb-3 form-check custom-checkbox-made">
            <input class="form-check-input" type="radio" name="experience_type" id="flexRadioDefault1" value="Premium Experience" {{ ($value->experience_type =="Premium Experience") ? "checked" : "" }}>
            <label class="form-check-label" for="">Premium Experience</label>
         </div>

         </div>
           <h5 class="form-sub-heading">Group Orientation:</h5>
         <div class="ul-list">

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
         <div class="mb-3 form-group">
         <label for="Image" class="form-label">Description<span>*</span></label>
         <textarea class="form-control" name="description" rows="5" id="description"><?php echo $value->description;?></textarea>
         </div>
         <div class="row">
            <!-- <div class="form-group mb-3 col-md-6">
               <label class="form-label">Total Square Footage:</label>
               <input type="text" class="form-control" id="" name="excursion_square_footage" placeholder="" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Bedrooms: <span>*</span></label>
               <input type="text" class="form-control" id="" name="excursion_bedrooms" placeholder="" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Washrooms: <span>*</span></label>
               <input type="text" class="form-control" id="" name="excursion_washrooms" placeholder="" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Sleeps: <span>*</span></label>
               <input type="text" class="form-control" id="" name="excursion_sleeps" placeholder="" required>
            </div> -->
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Current Booking Rate</label>
               <input type="text" class="form-control" id="city" name="excursion_currentrate" placeholder="" value="<?php echo $value->current_booking_rate;?>" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Spring - Seasonal Rate</label>
               <input type="text" class="form-control" id="city" name="excursion_spring" placeholder="" value="<?php echo $value->spring_rate;?>" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Summer - Seasonal Rate</label>
               <input type="text" class="form-control" id="city" name="excursion_summer" placeholder="" value="<?php echo $value->summer_rate;?>" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Fall - Seasonal Rate</label>
               <input type="text" class="form-control" id="city" name="excursion_summer" placeholder="" value="<?php echo $value->fall_rate;?>" required>
            </div>
            <div class="form-group mb-3 col-md-6">
               <label class="form-label">Winter - Seasonal Rate</label>
               <input type="text" class="form-control" id="city" name="excursion_winter" placeholder="" value="<?php echo $value->winter_rate;?>" required>
            </div>
         </div>

       <!-- Excursion Questionaree -->
                         <div class="form-box">
                        <h4 class="form-heading">Excursion Questionnaire</h4>
                        <p>-  What is the nature of your excursion (i.e. what can participants expect) ?</p>
                        <textarea class="form-control" name="Excu_Ques_1" value = ""></textarea><br>
                        <p>-  Are you or your excursion hosts certified or otherwise possess special training or skill sets ?</p>
                        <textarea class="form-control" name="Excu_Ques_2"></textarea><br>
                        <p>-  Do you offer any ancillary service or amenity as an un-promoted enhancement (i.e. undersell over-deliver) ?</p>
                        <textarea class="form-control" name="Excu_Ques_3"></textarea><br>
                        <p>-  Do you offer any product/service upgrades or other standalone offerings ?</p>
                        <textarea class="form-control" name="Excu_Ques_4"><?php echo $value->Accom_Ques_4;?></textarea><br>
                        <p>-  Who is your target consumer and what will compel them to purchase your service(s) ?</p>
                        <textarea class="form-control" name="Excu_Ques_5"></textarea><br>
                        <p>-  How do you facilitate booking transactions (i.e. your own portal or a 3rd party utility) ?</p>
                        <textarea class="form-control" name="Excu_Ques_6"></textarea><br>
                        <p>-  Do you have a strategic (i.e. goal oriented) social media marketing strategy ?</p>
                        <textarea class="form-control" name="Excu_Ques_7"></textarea><br>
                        <p>-  How do you otherwise drive sales ?</p>
                        <textarea class="form-control" name="Excu_Ques_8"></textarea><br>
                        </div>
         <div class="form-box" id="admin">
            <h4 class="form-heading">SYSTEM ADMIN ONLY</h4>
            <h5 class="form-sub-heading">Price Rating:</h5>
            <div class="ul-list">
               <div class="mb-3 form-check custom-checkbox-made">
                  <input type="radio" class="form-check-input" name="excursion_price_point_rating" id="exampleCheck01" value="$ Least Expensive" {{ ($value->price_point_rating =="$ Least Expensive") ? "checked" : "" }}>
                  <label for="exampleCheck01"><span class="dollar-sign">$</span> Least Expensive</label>
               </div>
               <div class="mb-3 form-check custom-checkbox-made">
                  <input type="radio" class="form-check-input" name="excursion_price_point_rating" id="exampleCheck03" value="$$ Moderately Low" {{ ($value->price_point_rating =="$$ Moderately Low") ? "checked" : "" }}>
                  <label for="exampleCheck03"><span class="dollar-sign">$$</span> Moderately Low</label>
               </div>
               <div class="mb-3 form-check custom-checkbox-made">
                  <input type="radio" class="form-check-input" name="excursion_price_point_rating" id="exampleCheck04" value="$$$ Moderately High" {{ ($value->price_point_rating =="$$$ Moderately High") ? "checked" : "" }}>
                  <label for="exampleCheck04"><span class="dollar-sign">$$$</span> Moderately High</label>
               </div>
               <div class="mb-3 form-check custom-checkbox-made">
                  <input type="radio" class="form-check-input" name="excursion_price_point_rating" id="exampleCheck05" value="$$$$ Most Expensive" {{ ($value->price_point_rating =="$$$$ Most Expensive") ? "checked" : "" }}>
                  <label for="exampleCheck05"><span class="dollar-sign">$$$$</span> Most Expensive</label>
               </div>
            </div>
            <h5 class="form-sub-heading">Account Status:</h5>
            <div class="ul-list">
               <div class="mb-3 form-check custom-checkbox-made">
                  <input type="radio" class="form-check-input" name="excursion_account_status" id="exampleCheck21" value="Published Listing" {{ ($value->accom_account_status =="Published Listing") ? "checked" : "" }}>
                  <label for="exampleCheck21">Published Listing</label>
               </div>
               <div class="mb-3 form-check custom-checkbox-made">
                  <input type="radio" class="form-check-input" name="excursion_account_status" id="exampleCheck22" value="ProfileUpgrade" {{ ($value->accom_account_status =="ProfileUpgrade") ? "checked" : "" }}>
                  <label for="exampleCheck22">Profile Upgrade</label>
               </div>
               <div class="mb-3 form-check custom-checkbox-made">
                  <input type="radio" class="form-check-input" name="excursion_account_status" id="exampleCheck23" value="Suspend" {{ ($value->accom_account_status =="Suspend") ? "checked" : "" }}>
                  <label for="exampleCheck23">Suspend</label>
               </div>
               <div class="mb-3 form-check custom-checkbox-made">
                  <input type="radio" class="form-check-input" name="excursion_account_status" id="exampleCheck24" value="Delete" {{ ($value->accom_account_status =="Delete") ? "checked" : "" }}>
                  <label for="exampleCheck24">Delete</label>
               </div>
            </div>
         </div>
      <button type="button" class="btn wine-btn" id="update_excursion_data">Save Changes</button>
   </form>
   @include('includes.cropper/crop')
</div>