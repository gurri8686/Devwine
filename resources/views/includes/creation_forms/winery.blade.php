<div class="row accomodation_vendor">
   <h2 class="main-heading-H1">Winery Vendor Creation Form</h2>
   <p class="short-heading">All mandatorty(<span style="color: red;">*</span>) fields must be completed to initiate a vendor account and preliminary profile.</p>
   <form method="" id="winery_form" class="row">
      <div class="col-md-12"><h4 class="form-heading">BUISNESS/VENDOR DETAILS</h4></div>
      <div class="form-group col-md-6">
         <label for="" class="form-label">Business/Vendor Name<span>*</span></label>
         <input type="text" class="form-control" id="" name="winery_buisness_vendor_name" aria-describedby="" required="">
      </div>
       <div class="col-md-6"></div>
      <div class="form-group col-md-6">
         <label for="" class="form-label">Street Address<span>*</span></label>
         <input type="text" class="form-control" id="" name="winery_street_address" required="">
      </div>
      <div class="form-group col-md-6">
         <label for="" class="form-label">Unit/Suite#</label>
         <input type="text" class="form-control" id="" name="winery_unit">
      </div>
     
      <div class="mb-3 form-check custom-checkbox-made col-md-12 mt-3">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1" value="">
                              <label class="form-check-label" for="exampleCheck1">check this box to hide street address</label>
                           </div>
      <div class="form-group col-md-6">
         <label for="" class="form-label">City/Town<span>*</span></label>
         <input type="text" class="form-control" id="" name="winery_vendor_city" required="">
      </div>
      <div class="form-group col-md-6">
      <label for="" class="form-label">Province/State<span>*</span></label>
      <input type="text" class="form-control" id="" name="winery_state" required="">
      </div>
      <div class="form-group col-md-6">
      <label for="" class="form-label">Postal / Zip<span>*</span> </label>
      <input type="text" class="form-control" id="" name="winery_vendor_postal" required="">
   </div>
      <div class="form-group col-md-6">
         <label for="" class="form-label">Country<span>*</span> </label>
         <input type="text" class="form-control" id="" name="winery_vendor_country" required="">
      </div>
      <h4 class="form-heading">Sub-Region<span>*</span></h4>
      <div class="ul-list">
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_region" id="exampleCheck1" value="Niagara Falls">
                              <label>Niagara Falls</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_region" id="exampleCheck1" value="Niagara-on-the-Lake">
                              <label>Niagara-on-the-Lake</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_region" id="exampleCheck1" value="Niagara Escarpment/ Twenty Valley">
                              <label>Niagara Escarpment/ Twenty Valley</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_region" id="exampleCheck1" value="Fort Erie/ Niagara South Coast">
                              <label>Fort Erie/ Niagara South Coast</label>
                           </div>
                           </div>
      <div class="mb-3">
         <label for="" class="form-label">Business/Vendor Phone: </label>
         <input type="text" class="form-control" id="" name="winery_vendor_phone" required="">
      </div>
      <!-- <div class="logo-graphic-sec">
         <div class="logo-content-flex">
           <div class="choose-your-file comon-width">
                       <div class="form-group">
                 <input type="file" class="form-control" name="logo" id="file" placeholder="" value="">
                 <label class="form-check-label" for="exampleCheck1">Logo/Graphic Thumbnail <i class="fa fa-camera" aria-hidden="true"></i></label>
                 </div>
                  </div>
                  <div class="no-file-choose comon-width">
                     <span>No File Chosen</span>
                  </div>
         </div>
         </div> -->
          <div class="mb-3 form-group">
            <label for="Image" class="form-label">Description<span>*</span></label>     
            <textarea class="form-control" name="description" rows="5" id="description"></textarea>
         </div>
      <h2 class="form-heading">Winery Details</h2>
      <h5 class="form-sub-heading">Winery Sub-Type:<span>*</span></h5>
      <div class="">
     <div class="ul-list">
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_type" id="exampleCheck1" value="Destination">
                              <label>Destination</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_type" id="exampleCheck1" value="Vineyard">
                              <label>Vineyard</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_type" id="exampleCheck1" value="Cellar">
                              <label>Cellar</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_type" id="exampleCheck1" value="Farm">
                              <label>Farm</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="radio" class="form-check-input" name="winery_sub_type" id="exampleCheck1" value="Micro / Urban">
                              <label>Micro / Urban</label>
                           </div>
                           </div>
                           <h5 class="form-sub-heading">Tasting Options</h5>
                           <div class="ul-list">
                              
                              <div class="mb-3 form-check custom-checkbox-made">
                              <input type="checkbox" class="form-check-input" name="winery_tasting_type" id="exampleCheck1" value="None Available">
                              <label>None Available</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="checkbox" class="form-check-input" name="winery_tasting_type" id="exampleCheck1" value="Basic Tasting">
                              <label>Basic Tasting</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="checkbox" class="form-check-input" name="winery_tasting_type" id="exampleCheck1" value="Tasting w/Pairings">
                              <label>Tasting w/Pairings</label>
                           </div>
                           <div class="mb-3 form-check custom-checkbox-made">
                              <input type="checkbox" class="form-check-input" name="winery_tasting_type" id="exampleCheck1" value="Premium Experience">
                              <label>Premium Experience</label>
                           </div>
                           <!-- change readio to check btns -->
                             
                           </div>
        
    </div>




         <div class="row">
         <!-- <div class="form-group col-md-6">
         <label>Total Square Footage</label>
         <input type="text" class="form-control" id="" name="winery_squarefootage" placeholder="" required="">
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Bedrooms<span>*</span></label>
            <input type="text" class="form-control" id="" name="winery_bedrooms" placeholder="" required="">
         </div>
       <div class="form-group col-md-6">
             <label class="form-label">Washrooms<span>*</span></label>
            <input type="text" class="form-control" id="" name="winery_washrooms" placeholder="" required="">
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Sleeps<span>*</span></label>
            <input type="text" class="form-control" id="" name="winery_sleeps" placeholder="" required="">
         </div> -->
         <div class="col-md-12">
            <div class="btn-box-bx text-right mt-3 text-center">
         <button type="submit" id="" class="btn wine-btn">Save & Continue</button>
      </div>
         </div>
      </div>
      
   </form>
</div>