<div class="row accomodation_vendor">
   <form method="" id="accomodation_form">
      <input type="hidden" name="AlreadyExistFlag" id="AlreadyExistFlag" value="0">
      <h2 class="main-heading-H1">Accommodation Vendor Creation Form</h2>
      <p class="short-heading">All mandatorty(<span style="color: red;">*</span>) fields must be completed to initiate a vendor account and preliminary profile.</p>
      <div class="form-box row">
         <div class="col-md-12">
         <h4 class="form-heading">BUISNESS/VENDOR DETAILS</h4>
         </div>
         <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Business/Vendor Name<span>*</span></label>
            <input type="text" class="form-control" id="name" name="buisness_vendor_name" required="">
         </div>
         </div>
          <div class="col-md-6"></div>
         <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Street Address<span>*</span></label>
            <input type="text" class="form-control" id="name" name="street_address" value="" required="">
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Unit/Suite#</label>
            <input type="text" class="form-control" id="name" name="unit" placeholder="" value="">
         </div>
      </div>
      <div class="col-md-12">
         <div class="mb-3 form-check custom-checkbox-made">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1" value="">
            <label class="form-check-label" for="exampleCheck1">check this box to hide street address</label>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">City/Town<span>*</span></label>
            <input type="text" class="form-control" id="city" name="city" placeholder="" value="" required="">
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Province/State<span>*</span></label>
            <input type="text" class="form-control form-input-field form-interests-input-field" id="state" name="state" placeholder="" value="" required="">
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Postal/Zip<span>*</span></label>
            <input type="text" class="form-control" id="postal" name="postal" placeholder="" value="" required="">
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label class="form-label">Country<span>*</span></label>
            <input type="text" class="form-control form-input-field form-interests-input-field" id="country" name="country" placeholder="" value="" required="">
         </div>
      </div>
      </div>
      <div class="form-box">
         <h4 class="form-heading">Sub-Region</h4>
         <div class="ul-list">
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="accomodation_sub_region" id="exampleCheck1" value="Niagara Falls">
               <label>Niagara Falls</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="accomodation_sub_region" id="exampleCheck1" value="Niagara Escarpment/ Twenty Valley">
               <label>Niagara Escarpment/ Twenty Valley</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="accomodation_sub_region" id="exampleCheck1" value="Niagara-on-the-Lake">
               <label>Niagara-on-the-Lake</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="accomodation_sub_region" id="exampleCheck1" value="Fort Erie/ Niagara South Coast">
               <label>Fort Erie/ Niagara South Coast</label>
            </div>
         </div>
      </div>
      <div class="mb-3">
         <label for="" class="form-label">Business/Vendor Phone:</label>
         <input type="text" class="form-control" id="" name="vendor_phone" value="" required="">
      </div>
      <div class="form-group">
         <label class="form-label">Description:<span>*</span></label>
         <input type="text" class="form-control" id="description" name="accom_description" value="" >
      </div>
      <!--  <div class="logo-graphic-sec">
         <div class="logo-content-flex">
           <div class="choose-your-file comon-width">
                       <div class="form-group">
                 <input type="file" class="form-control"name="logo"  id="file" placeholder="" value="">
                 <label class="form-check-label" for="exampleCheck1">Logo/Graphic Thumbnail <i class="fa fa-camera" aria-hidden="true"></i></label>
                 </div>
                  </div>
                  <div class="no-file-choose comon-width">
                     <span>No File Chosen</span>
                  </div>
         </div>
         </div> -->
      <!-- Accomodation Details -->
      <div class="form-box">
         <br>
         <h4 class="form-heading">ACCOMMODATION DETAILS</h4>
         <h5 class="form-sub-heading">Accommodation Sub-Type:<span>*</span></h5>
         <div class="ul-list four-colum-list">
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="accomodationtype" id="exampleCheck2" value="Hotel">
               <label class="form-label">Hotel</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="accomodationtype" id="exampleCheck3" value="Inn">
               <label class="form-label">Inn</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" class="form-check-input" name="accomodationtype" id="exampleCheck4" value="Vacation Property (Entire Home)">
               <label class="form-label">Vacation Property (Entire Home) </label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" name="accomodationtype" class="form-check-input" id="exampleCheck5" value="Service Apartment">
               <label class="form-label">Service Apartment</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" name="accomodationtype" class="form-check-input" id="exampleCheck6" value="Motel">
               <label class="form-label">Motel</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" name="accomodationtype" class="form-check-input" id="exampleCheck7" value="B&amp;B">
               <label class="form-label">B&amp;B</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" name="accomodationtype" class="form-check-input" id="exampleCheck8" value="Vacation Property (Guest House)">
               <label class="form-label">Vacation Property (Guest House)</label>
            </div>
            <div class="mb-3 form-check custom-checkbox-made">
               <input type="radio" name="accomodationtype" class="form-check-input" id="exampleCheck9" value="Furnished Room">
               <label class="form-label">Furnished Room </label>
            </div>
         </div>
      </div>
      <div class="row">
      <div class="form-group col-md-6">
         <h5 class="form-sub-heading">Total Square Footage :</h5>
         <input type="text" class="form-control" id="city" name="accom_squarefootage" placeholder="" value="">
      </div>
      <div class="form-group col-md-6">
          <label class="form-label">Bedrooms<span>*</span></label>
          <input type="text" class="form-control" id="city" name="accom_bedrooms" placeholder="" value="" required="">
      </div>
     
      <div class="form-group col-md-6">
          <label class="form-label">Washrooms<span>*</span></label>
         <input type="text" class="form-control" id="city" name="accom_washrooms" placeholder="" value="" required="">
      </div>
     
      <div class="form-group col-md-6">
          <label class="form-label">Sleeps<span>*</span></label>
         <input type="text" class="form-control" id="sleeps" name="sleeps" placeholder="" value="" required="">
      </div>
      <div class="btn-box-bx text-right mt-3 text-center">
         <button type="submit" id="submit_form" class="btn wine-btn">Save & Continue</button>
      </div>
   </div>
   </form>
</div>