
<div class="simple-yellow-btn">
                     <a href="https://devsite.winecountryweekends.ca/vendor?id=<?php echo $_GET['id']; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>"class="yellow-btn">Back</a>
                     </div><h2 class="main-heading-H1">Accommodation Vendor Admin Form</h2>
 <div class="form-box" id="orm-bo">
                           <div class="row">
                              <div class="col-md-12">
                           <h4 class="form-heading">vendor contact</h4>
                           </div>
                           <div class="form-group col-md-6">
                              <label>Contact's Given Name(s)</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $value->given_name;?>">
                           </div>
                           <div class="form-group col-md-6">
                              <label>Contact's Last/Surname</label>
                              <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" value="<?php echo $value->sur_name;?>">
                           </div>
                           <div class="form-group col-md-6">
                              <label>Contact's Email</label>
                              <input type="email" class="form-control" id="name" name="email" placeholder="" value="<?php echo $value->vendors_email;?>">
                           </div>
                           <div class="form-group col-md-6">
                              <label>Contact's Title</label>
                              <input type="text" class="form-control" id="name" name="contact_title" placeholder="" value="<?php echo $value->vendor_title;?>" required>
                           </div>
                           <div class="form-group col-md-6">
                              <label>Contact's Postion</label>
                              <input type="text" class="form-control" id="name" name="position" placeholder="" value="<?php echo $value->verndor_position;?>" required>
                           </div>
                           <div class="form-group col-md-6">
                              <label>Contact's Number</label>
                              <input type="text" class="form-control" id="name" name="contact_number" placeholder="" value="<?php echo $value->phone_number;?>" required>
                           </div>
                           <!-- <div class="form-group">
                              <input type="text" class="form-control" id="name" name="" placeholder="Phone's Ext" value="" required>
                           </div> -->
                        </div>
                        </div>
                        <div class="form-box" id="buisness">
                           <div class="row">
                              <div class="col-md-12">
                           <h4 class="form-heading">BUISNESS/VENDOR DETAILS</h4>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label">Buisness/Vendor Name<span>*</span></label>
                              <input type="text" class="form-control" id="name" name="buisness_vendor_name" placeholder="" value="<?php echo $value->buisness_vendor_name;?>" required>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label">Street Address<span>*</span></label>
                              <input type="text" class="form-control" id="name" name="street_address" placeholder="5903 Prospect St." value="<?php echo $value->buisnessstreet_address;?>" required>
                           </div>
                           <div class="form-group col-md-6">
                              <label>Unit/Suite#</label>
                              <input type="text" class="form-control" id="name" name="unit" placeholder="" value="<?php echo $value->buisness_vendor_unit;?>">
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made col-md-12">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1" value="">
                              <label class="form-check-label" for="exampleCheck1">check this box to hide street address</label>
                           </div>
                            <div class="form-group col-md-6">
                              <label class="form-label">City/Town<span>*</span></label>
                              <input type="text" class="form-control" id="city" name="city" placeholder="" value="<?php echo $value->buisness_vendor_city;?>" required>
                           </div>
                            <div class="form-group col-md-6">
                              <label class="form-label">Province/State<span>*</span></label>
                              <input type="text" class="form-control" id="state" name="state" placeholder="" value="<?php echo $value->buisness_vendor_state;?>" required>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label">Postal/Zip<span>*</span></label>
                              <input type="text" class="form-control" id="postal" name="postal" placeholder="" value="<?php echo $value->buisness_vendor_postal;?>" required>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label">Country<span>*</span></label>
                              <input type="text" class="form-control" id="country" name="country" placeholder="" value="<?php echo $value->buisness_vendor_country; ?>" required>
                           </div>
                        </div>
                        </div>
                         <div class="form-box" id="sub_region">
                            <h4 class="form-heading"> Sub-Region<span>*</span></h4>
                           <div class="ul-list">
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="accomodation_sub_region" id="exampleCheck1" value="Niagara Falls" {{ ($value->accomodation_sub_region =="Niagara Falls") ? "checked" : "" }}>
                              <label>Niagara Falls</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="accomodation_sub_region" id="exampleCheck1" value="Niagara-on-the-Lake" {{ ($value->accomodation_sub_region =="Niagara-on-the-Lake") ? "checked" : "" }}>
                              <label>Niagara-on-the-Lake</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="accomodation_sub_region" id="exampleCheck1" value="Niagara Escarpment/ Twenty Valley" {{ ($value->accomodation_sub_region =="Niagara Escarpment/ Twenty Valley") ? "checked" : "" }}>
                              <label>Niagara Escarpment/ Twenty Valley</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="accomodation_sub_region" id="exampleCheck1" value="Fort Erie/ Niagara South Coast" {{ ($value->accomodation_sub_region =="Fort Erie/ Niagara South Coast") ? "checked" : "" }}>
                              <label>Fort Erie/ Niagara South Coast</label>
                           </div>
                           </div>
                           <div class="form-group">
                              <label class="form-label">Business/Vendor Phone<span>*</span></label>
                               <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="" value="<?php echo $value->buisness_vendor_phone;?>" required>
                              </div>
                              @include('includes.cropper/gallery_section')
                     <div class="form-group">
                     <label class="form-label">Description<span>*</span></label>
                     <textarea id="description" name="description" required><?php echo $value->description;?></textarea>
                     </div>
                               <div class="form-box">
                           <h4 class="form-heading">Accommodation Details</h4>
                           <h5 class="form-sub-heading">Accommodation Type:</h5>
                            <div class="ul-list">
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="accomodationtype" id="exampleCheck200" value="Hotel"  {{ ($value->accomodation_sub_type =="Hotel") ? "checked" : "" }}>
                              <label for="exampleCheck200">Hotel</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="accomodationtype" id="exampleCheck201" value="Inn" {{ ($value->accomodation_sub_type =="Inn") ? "checked" : "" }}>
                              <label for="exampleCheck201">Inn</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="accomodationtype" id="exampleCheck202" value="Vacation Property (Entire Home)" {{ ($value->accomodation_sub_type =="Vacation Property (Entire Home)") ? "checked" : "" }}>
                              <label for="exampleCheck202">Vacation Property (Entire Home) </label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" name="accomodationtype" class="form-check-input" id="exampleCheck203" value="Service Apartment" {{ ($value->accomodation_sub_type =="Service Apartment") ? "checked" : "" }}>
                              <label for="exampleCheck203">Service Apartment</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" name="accomodationtype" class="form-check-input" id="exampleCheck204" value="Motel" {{ ($value->accomodation_sub_type =="Motel") ? "checked" : "" }}>
                              <label for="exampleCheck204">Motel</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" name="accomodationtype" class="form-check-input" id="exampleCheck205" value="B&B" {{ ($value->accomodation_sub_type =="B&B") ? "checked" : "" }}>
                              <label for="exampleCheck205">B&B</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" name="accomodationtype" class="form-check-input" id="exampleCheck206" value="Vacation Property (Guest House)" {{ ($value->accomodation_sub_type =="Vacation Property (Guest House)") ? "checked" : "" }}>
                              <label for="exampleCheck206">Vacation Property (Guest House)</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" name="accomodationtype" class="form-check-input" id="exampleCheck207" value="Furnished Room" {{ ($value->accomodation_sub_type =="Furnished Room") ? "checked" : "" }}>
                              <label for="exampleCheck207">Furnished Room </label>
                           </div>
                           </div>
                        </div>
                         <!-- last-copy line -->
                        <div class="form-box" id="sub_type">
                           <div class="row">
                           <div class="form-group col-md-6">
                              <label>Square Footage</label>
                              <input type="text" class="form-control" name="square_footage" id="name" placeholder=" " value="<?php echo $value->total_square_feet;?>">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label">Bedrooms<span>*</span></label>
                              <input type="text" class="form-control" name="bedrooms"  id="bedrooms" placeholder="" value="<?php echo $value->bedrooms;?>" required>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label">Washrooms<span>*</span></label>
                              <input type="text" class="form-control"name="washrooms"  id="washrooms" placeholder="" value="<?php echo $value->washrooms;?>" required>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label">Sleeps<span>*</span></label>
                              <input type="text" class="form-control"name="sleeps"  id="sleeps" placeholder="" value="<?php echo $value->sleeps;?>" required>
                           </div>
                           </div>
                        </div>
                         <div class="row">
                        <div class="form-group">
                           <div class="row">
                           <div class="form-group col-md-6">
                              <label>Current Rate</label>
                              <input type="text" class="form-control" id="accom_currentrate" name="accom_currentrate" placeholder="" value="<?php echo $value->current_booking_rate;?>">
                           </div>
                           <div class="form-group col-md-6">
                              <label>Spring- Seasonal Rate</label>
                              <input type="text" class="form-control" id="spring_rate" name="spring_rate" placeholder="" value="<?php echo $value->spring_rate;?>">
                           </div>
                           <div class="form-group col-md-6">
                              <label>Summer - Seasonal Rate</label>
                              <input type="text" class="form-control" id="summer_rate" value="<?php echo $value->summer_rate;?>" name="summer_rate" placeholder="">
                           </div>
                      
                           <div class="form-group col-md-6">
                              <label>Autumn - Seasonal Rate</label>
                              <input type="text" class="form-control" id="accom_autumn" name="accom_autumn" value="<?php echo $value->accom_autumn;?>"placeholder="" value="">
                           </div>
                                <div class="form-group col-md-6">
                                 <label>Winter - Seasonal Rate</label>
                              <input type="text" class="form-control" value="<?php echo $value->winter_rate;?>" id="winter_rate" name="winter_rate" placeholder="">
                           </div>
                        </div>
                        </div>
                     </div>
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
                        </div>
                        <!-- Accomodation Questionaree -->
                         <div class="form-box">
                        <h4 class="form-heading">Accommodation Questionnaire</h4>
                        <p>- Do you offer any ancillary service or amenity as an un-promoted enhancement (i.e. undersell, over deliver)?</p>
                        <textarea class="form-control" name="Accom_Ques_1" value = ""><?php echo $value->Accom_Ques_1;?></textarea><br>
                        <p>- Do you offer any product / service upgrades or other significant stand alone offerings?</p>
                        <textarea class="form-control" name="Accom_Ques_2"><?php echo $value->Accom_Ques_2;?></textarea><br>
                        <p>- Who is your target consumer and what will compel them to choose your offering (describe in detail)?</p>
                        <textarea class="form-control" name="Accom_Ques_3"><?php echo $value->Accom_Ques_3;?></textarea><br>
                        <p>- How do you facilitate sales or booking transactions (i.e. your own portal or a 3rd party utility)?</p>
                        <textarea class="form-control" name="Accom_Ques_4"><?php echo $value->Accom_Ques_4;?></textarea><br>
                        <p>- How do you drive sales?</p>
                        <textarea class="form-control" name="Accom_Ques_5"><?php echo $value->Accom_Ques_5;?></textarea><br>
                        <p>- Describe your social media or overall marketing strategy?</p>
                        <textarea class="form-control" name="Accom_Ques_6"><?php echo $value->Accom_Ques_6;?></textarea><br>
                        </div>
                          <div class="form-box" id="admin">
                           <h4 class="form-heading">SYSTEM ADMIN ONLY</h4>
                           <h5 class="form-sub-heading">Price Rating:</h5>
                           <div class="ul-list">
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="price_point_rating" id="exampleCheck01" value="$ Least Expensive" {{ ($value->price_point_rating =="$ Least Expensive") ? "checked" : "" }}>
                              <label for="exampleCheck01"><span class="dollar-sign">$</span> Least Expensive</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="price_point_rating" id="exampleCheck03" value="$$ Moderately Low" {{ ($value->price_point_rating =="$$ Moderately Low") ? "checked" : "" }}>
                              <label for="exampleCheck03"><span class="dollar-sign">$$</span> Moderately Low</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="price_point_rating" id="exampleCheck04" value="$$$ Moderately High" {{ ($value->price_point_rating =="$$$ Moderately High") ? "checked" : "" }}>
                              <label for="exampleCheck04"><span class="dollar-sign">$$$</span> Moderately High</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="price_point_rating" id="exampleCheck05" value="$$$$ Most Expensive" {{ ($value->price_point_rating =="$$$$ Most Expensive") ? "checked" : "" }}>
                              <label for="exampleCheck05"><span class="dollar-sign">$$$$</span> Most Expensive</label>
                           </div>
                             </div>
                           <h5 class="form-sub-heading">Account Status:</h5>
                            <div class="ul-list">
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="account_status" id="exampleCheck21" value="Published Listing" {{ ($value->accom_account_status =="Published Listing") ? "checked" : "" }}>
                              <label for="exampleCheck21">Published Listing</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="account_status" id="exampleCheck22" value="ProfileUpgrade" {{ ($value->accom_account_status =="ProfileUpgrade") ? "checked" : "" }}>
                              <label for="exampleCheck22">Profile Upgrade</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="account_status" id="exampleCheck23" value="Suspend" {{ ($value->accom_account_status =="Suspend") ? "checked" : "" }}>
                              <label for="exampleCheck23">Suspend</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="account_status" id="exampleCheck24" value="Delete" {{ ($value->accom_account_status =="Delete") ? "checked" : "" }}>
                              <label for="exampleCheck24">Delete</label>
                           </div>
                            </div>
                        </div>
                         <div class="btn-box-bx text-center">
                           <button type="button" id="update_accomodation_data" class="btn wine-btn">Save Changes</button>
                        </div>
                         