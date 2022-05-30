
<div class ="row accomodation_vendor">
<div class="simple-yellow-btn">
                     <a href="https://devsite.winecountryweekends.ca/vendor?id=<?php echo $_GET['id']; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>"class="yellow-btn">Back</a>
                     </div>
   <h2 class="main-heading-H1">Winery Vendor Admin Form</h2>
   <form class="" id="winery_data">
      
      <!-- Contact Details -->
      <div class="form-box" id="orm-box">
         <div class="row">
            <div class="col-md-12">
               <h4 class="form-heading">Vendor contact</h4>
            </div>
            <input type="hidden" name="id" id="vendorID" value="<?php echo $id;?>">
            <div class="form-group col-md-6">
               <label>Contact Given Name(s)</label>
               <input type="text" class="form-control" id="name" name="winery_contact_name" placeholder="" value="<?php echo $value->given_name;?>">
            </div>
            <div class="form-group col-md-6">
               <label>Contact's Last/Surname</label>
               <input type="text" class="form-control" id="lastname" name="winery_contact_lastname" placeholder="" value="<?php echo $value->sur_name;?>">
            </div>
            <div class="form-group col-md-6">
               <label>Contact's eMail</label>
               <input type="email" class="form-control" id="name" name="winery_contact_email" placeholder="" value="<?php echo $value->vendors_email;?>">
            </div>
            <div class="form-group col-md-6">
               <label>Contact Title</label>
               <input type="text" class="form-control" id="name" name="winery_contact_title" placeholder="" value="<?php echo $value->vendor_title;?>" required>
            </div>
            <div class="form-group col-md-6">
               <label>Contact Postion</label>
               <input type="text" class="form-control" id="name" name="winery_contact_position" placeholder="" value="<?php echo $value->verndor_position;?>" required="">
            </div>
            <div class="form-group col-md-6">
               <label>Contact's Phone</label>
               <input type="text" class="form-control" id="name" name="winery_contact_number" placeholder="" value="<?php echo $value->phone_number;?>" required="">
            </div>
         </div>
      </div>
      <!-- Buisness Details --> 
      <div class="row" id="buisness">
         <div class="col-md-12">
            <h4 class="form-heading">BUISNESS/VENDOR DETAILS</h4>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Buisness/Vendor Name<span>*</span></label>
            <input type="text" class="form-control" id="" name="winery_buisness_vendor_name" placeholder="" value="<?php echo $value->buisness_vendor_name;?>" required>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Street Address<span>*</span></label>
            <input type="text" class="form-control" id="" name="winery_buisness_vendor_street_add"  value="<?php echo $value->buisnessstreet_address;?>" required>
         </div>
         <div class="form-group col-md-6">
            <label>Unit/Suite#</label>
            <input type="text" class="form-control" id="" name="winery_buisness_vendor_unit" value="<?php echo $value->buisness_vendor_unit;?>" placeholder="">
         </div>
       
         <div class="mb-3 form-check custom-checkbox-made col-md-12 mt-2">
                              <input type="checkbox" class="form-check-input" id="exampleCheck4" name="exampleCheck1" value="">
                              <label class="form-check-label" for="exampleCheck4">Check This Box To Publish Street Address</label>
                           </div>
         <div class="form-group col-md-6">
            <label class="form-label">City/Town<span>*</span></label>
            <input type="text" class="form-control" id="" name="winery_buisness_vendor_city" value="<?php echo $value->buisness_vendor_city;?>" placeholder="" required>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Province/State<span>*</span></label>
            <input type="text" class="form-control" id="" name="winery_buisness_vendor_province" value="<?php echo $value->buisness_vendor_state;?>" placeholder="" required>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Postal/Zip<span>*</span></label>
            <input type="text" class="form-control" id="" name="winery_buisness_vendor_postal" value="<?php echo $value->buisness_vendor_postal;?>" placeholder="" required>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Country<span>*</span></label>
            <input type="text" class="form-control" id="" name="winery_buisness_vendor_country" value="<?php echo $value->buisness_vendor_country;?>" placeholder="" required>
         </div>
      </div>
      <h5 class="form-sub-heading">Sub-Region<span>*</span></h5>
      <div class="ul-list" id="sub_region">
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_region" id="exampleCheck1" value="Niagara Falls" {{ ($value->accomodation_sub_region =="Niagara Falls") ? "checked" : "" }}>
                              <label>Niagara Falls</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_region" id="exampleCheck1" value="Niagara-on-the-Lake" {{ ($value->accomodation_sub_region =="Niagara-on-the-Lake") ? "checked" : "" }}>
                              <label>Niagara-on-the-Lake</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_region" id="exampleCheck1" value="Niagara Escarpment/ Twenty Valley" {{ ($value->accomodation_sub_region =="Niagara Escarpment/ Twenty Valley") ? "checked" : "" }}>
                              <label>Niagara Escarpment/ Twenty Valley</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_region" id="exampleCheck1" value="Fort Erie/ Niagara South Coast" {{ ($value->accomodation_sub_region =="Fort Erie/ Niagara South Coast") ? "checked" : "" }}>
                              <label>Fort Erie/ Niagara South Coast</label>
                           </div>
                           </div>
      <div class="mb-3 form-group">
         <label class="form-label">Buisness/Vendor Phone<span>*</span></label>
         <input type="text" class="form-control" id="" name ="winery_buisness_phone" value="<?php echo $value->buisness_vendor_phone;?>" placeholder="" required>
      </div>
      @include('includes.cropper/gallery_section')
      <div class="form-group">
      <label class="form-label">Description<span>*</span></label>
      <textarea id="description" name="description" required><?php echo $value->description;?></textarea>
      </div>
      <h4 class="form-heading">Winery Details</h4>
      <!-- Winery Sub Type -->
      <h5 class="form-sub-heading">Winery Type<span>*</span></h5>
      <div class="ul-list" id="sub_type">
         <div class="mb-3 form-check custom-checkbox-made">
            <input class="form-check-input" type="radio" value="Destination" id="flexCheckDefault" name="winery_sub_type" {{ ($value->accomodation_sub_type =="Destination") ? "checked" : "" }}>
            <label class="form-check-label" for="flexCheckDefault">
            Destination
            </label>
         </div>
         <div class="mb-3 form-check custom-checkbox-made">
            <input class="form-check-input" type="radio" value="Vineyard" id="flexCheckChecked" name="winery_sub_type" {{ ($value->accomodation_sub_type =="Vineyard") ? "checked" : "" }}>
            <label class="form-check-label" for="flexCheckChecked">
            Vineyard
            </label>
         </div>
         <div class="mb-3 form-check custom-checkbox-made">
            <input class="form-check-input" type="radio" value="Cellar" id="flexCheckChecked" name="winery_sub_type" {{ ($value->accomodation_sub_type =="Cellar") ? "checked" : "" }}>
            <label class="form-check-label" for="flexCheckChecked">
            Cellar
            </label>
         </div>
         <div class="mb-3 form-check custom-checkbox-made">
            <input class="form-check-input" type="radio" value="Farm" id="flexCheckChecked" name="winery_sub_type" {{ ($value->accomodation_sub_type =="Farm") ? "checked" : "" }}>
            <label class="form-check-label" for="flexCheckChecked">
            Farm
            </label>
         </div>
         <div class="mb-3 form-check custom-checkbox-made">
            <input class="form-check-input" type="radio" value="Micro / Urban" id="flexCheckChecked" name="winery_sub_type" {{ ($value->accomodation_sub_type =="Micro / Urban") ? "checked" : "" }}>
            <label class="form-check-label" for="flexCheckChecked">
            Micro / Urban
            </label>
         </div>
      </div>
      <!-- Tasting Options -->
      <h5 class="form-sub-heading">Tasting Type</h5>
      <div class="ul-list" >
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="checkbox" class="form-check-input" name="tasting_type" id="exampleCheck1" value="None" {{ ($value->winery_tasting_type =="None") ? "checked" : "" }}>
                              <label>None</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="checkbox" class="form-check-input" name="tasting_type" id="exampleCheck1" value="Basic Testing" {{ ($value->winery_tasting_type =="Basic Testing") ? "checked" : "" }}>
                              <label>Basic Testing</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="checkbox" class="form-check-input" name="tasting_type" id="exampleCheck1" value="Tasting w/ Pairings" {{ ($value->winery_tasting_type =="Tasting w/ Pairings") ? "checked" : "" }}>
                              <label>Tasting w/ Pairings</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="checkbox" class="form-check-input" name="tasting_type" id="exampleCheck1" value="Premium Experience" {{ ($value->winery_tasting_type =="Premium Experience") ? "checked" : "" }}>
                              <label>Premium Experience</label>
                           </div>
                           </div>
                            <h5 class="form-sub-heading">Group Orientation</h5>
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
                  </div><br>
      <div class="row">
       <!--   <div class="form-group col-md-6">
            <label>Square Footage</label>
            <input type="text" class="form-control" name="winery_squarefootage" id="winery_squarefootage" placeholder="" required>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Bedrooms<span>*</span></label>
            <input type="text" class="form-control"  name="winery_bedrooms" id="winery_bedrooms" placeholder="" required>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Washrooms<span>*</span></label>
            <input type="text" class="form-control"  name="winery_washrooms" id="winery_washrooms" placeholder="" required>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Sleeps<span>*</span></label>
            <input type="text" class="form-control"  name="winery_sleeps" id="winery_sleeps" placeholder="" required>
         </div> -->
         <div class="form-group col-md-6">
            <label>Current Booking Rate:</label>
            <input type="text" class="form-control"  name="current_rate" id="current_rate" value="<?php echo $value->current_booking_rate;?>"  placeholder="" required>
         </div>
         <div class="form-group col-md-6">
            <label>Spring - Seasonal Rate</label>
            <input type="text" class="form-control" id="city" name="winery_spring" placeholder="" value="<?php echo $value->spring_rate;?>" required>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Summer - Seasonal Rate</label>
            <input type="text" class="form-control" id="city" name="winery_summer" placeholder="" value="<?php echo $value->summer_rate;?>" required>
         </div>
         <div class="form-group col-md-6">
            <label>Fall - Seasonal Rate</label>
            <input type="text" class="form-control" id="city" name="fall_rate" placeholder="" value="<?php echo $value->fall_rate;?>" required>
         </div>
         <div class="form-group col-md-6">
            <label>Winter - Seasonal Rate</label>
            <input type="text" class="form-control" id="city" name="winery_winter" placeholder="" value="<?php echo $value->winter_rate;?>" required>
         </div>
      </div>

       <!-- Winery Questionaree -->
                         <div class="form-box">
                        <h4 class="form-heading">Winery Questionnaire</h4>
                        <p>-  Give a brief history of your winery including any interesting back story (i.e. ownership changes, etc.) ?</p>
                        <textarea class="form-control" name="Winery_Ques_1" value =""><?php echo $value->Accom_Ques_1;?></textarea><br>
                        <p>-  Is there a dominant face(s) associated with your winery and is there a story there?</p>
                        <textarea class="form-control" name="Winery_Ques_2"> <?php echo $value->Accom_Ques_2;?></textarea><br>
                        <p>-  Do you grow your own grapes and what is the percentage breakdown of each varietal ?</p>
                        <textarea class="form-control" name="Winery_Ques_3"><?php echo $value->Accom_Ques_3;?></textarea><br>
                        <p>-  What is your current wine portfolio and do you have any special offerings ?</p>
                        <textarea class="form-control" name="Winery_Ques_4"><?php echo $value->Accom_Ques_4;?></textarea><br>
                        <p>-  Are wine tastings and tours an important part of your business model ?</p>
                        <textarea class="form-control" name="Winery_Ques_5"><?php echo $value->Accom_Ques_5;?></textarea><br>
                        <p>-  Do you retail any of your wines through a member or wine club program ?</p> 
                        <textarea class="form-control" name="Winery_Ques_6"><?php echo $value->Accom_Ques_6;?></textarea><br>
                        <p>-  Do you retail any of your wines through the LCBO or other third party licensees ?</p> 
                        <textarea class="form-control" name="Winery_Ques_7"><?php echo $value->Question_7;?></textarea><br>
                        <p>-  Is your winery available as an event venue, if yes what type of events do you typically host ?</p> 
                        <textarea class="form-control" name="Winery_Ques_8"><?php echo $value->Question_8;?></textarea><br>
                        <p>-  Do you have a strategic (i.e. goal oriented) social media marketing strategy ?</p> 
                        <textarea class="form-control" name="Winery_Ques_9"><?php echo $value->Question_9;?></textarea><br> 
                        </div>

      <!-- Digital Media -->
      <!-- <div class="row">
         <div class="col-md-12">
            <label><b>DIGITAL &amp; SOCIAL MEDIA</b></label>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Buisness/Vendor eMail<span>*</span></label>
            <input type="text" class="form-control" id="city" name="buisness_vendor_email" placeholder="" value="" required="">
         </div>
         <div class="form-group col-md-6">
            <label>Website URL</label>
            <input type="text" class="form-control" id="city" name="buisness_vendor_website" placeholder="" value="">
         </div>
         <div class="form-group col-md-6">
            <label>Facebook Handle</label>
            <input type="text" class="form-control" id="city" name="buisness_vendor_facebook" placeholder="" value="">
         </div>
         <div class="form-group col-md-6">
            <label>Instagram Handle</label>
            <input type="text" class="form-control" id="city" name="buisness_vendor_instagram" placeholder="" value="">
         </div>
         <div class="form-group col-md-6">
            <label>Twitter Handle</label>
            <input type="text" class="form-control" id="city" name="buisness_vendor_twitter" placeholder="" value="">
         </div>
         <div class="form-group col-md-6">
            <label>Youtube Handle</label>
            <input type="text" class="form-control" id="city" name="buisness_vendor_youtube" placeholder="" value="">
         </div>
      </div> -->
      <!-- System Admin Only -->
      <div class="form-box" id="admin">
         <h4 class="form-heading">SYSTEM ADMIN ONLY</h4>
         <h5 class="form-sub-heading">Price Rating</h5>
         <div class="ul-list">
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="winery_price_point_rating" id="exampleCheck01" value="$ Least Expensive" {{ ($value->price_point_rating =="$ Least Expensive") ? "checked" : "" }}>
               <label for="exampleCheck01"><span class="dollar-sign">$</span> Least Expensive</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="winery_price_point_rating" id="exampleCheck03" value="$$ Moderately Low" {{ ($value->price_point_rating =="$$ Moderately Low") ? "checked" : "" }}>
               <label for="exampleCheck03"><span class="dollar-sign">$$</span> Moderately Low</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="winery_price_point_rating" id="exampleCheck04" value="$$$ Moderately High" {{ ($value->price_point_rating =="$$$ Moderately High") ? "checked" : "" }}>
               <label for="exampleCheck04"><span class="dollar-sign">$$$</span> Moderately High</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="winery_price_point_rating" id="exampleCheck05" value="$$$$ Most Expensive" {{ ($value->price_point_rating =="$$$$ Most Expensive") ? "checked" : "" }}>
               <label for="exampleCheck05"><span class="dollar-sign">$$$$</span> Most Expensive</label>
            </div>
         </div>
         <h5 class="form-sub-heading">Account Status</h5>
         <div class="ul-list">
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="winery_account_status" id="exampleCheck21" value="Published Listing" {{ ($value->accom_account_status =="Published Listing") ? "checked" : "" }}>
               <label for="exampleCheck21">Published Listing</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="winery_account_status" id="exampleCheck22" value="Profile Upgrade" {{ ($value->accom_account_status =="Profile Upgrade") ? "checked" : "" }}>
               <label for="exampleCheck22">Profile Upgrade</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="winery_account_status" id="exampleCheck23" value="Suspend" {{ ($value->accom_account_status =="Suspend") ? "checked" : "" }}>
               <label for="exampleCheck23">Suspend</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="winery_account_status" id="exampleCheck24" value="Delete" {{ ($value->accom_account_status =="Delete") ? "checked" : "" }}>
               <label for="exampleCheck24">Delete</label>
            </div>
         </div>
      </div>
      <div class="btns-vendor">
         <button type="button" class="btn wine-btn" id="winery_update">Save changes</button>
      </div>
   </form>
   @include('includes.cropper/crop')
</div>