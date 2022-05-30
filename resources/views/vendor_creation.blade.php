@include('includes.header')
<div class="container">
	<div class="col-sm-12 vendor_creation">
<form method="" id="form">
	<h2>Accommodation Vendor Creation From</h2>
  <div class="mb-3">
    <label for="" class="form-label">Business/Vendor Name: *</label>
    <input type="text" class="form-control" id="" name="buisness_vendor_name" aria-describedby="" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Street Address: *</label>
    <input type="text" class="form-control" id="" name="street_address" required>
  </div>
   <div class="mb-3">
    <label for="" class="form-label">Unit/Suite#:</label>
    <input type="text" class="form-control" id="" name="unit" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="" name="check">
    <label class="form-check-label" for="">check this box to hide street address</label>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">City/Town: *</label>
    <input type="text" class="form-control" id="" name="city" required>
  </div>
    <label for="" class="form-label">Province/State: *</label>
    <input type="text" class="form-control" id="" name="state" required>
    <label for="" class="form-label">Postal / Zip: * </label>
    <input type="text" class="form-control" id="" name="postal" required>
   <div class="mb-3">
    <label for="" class="form-label">Country: * </label>
    <input type="text" class="form-control" id="" name="country" required>
  </div>
  <div class ="" name="sub_region">
    <h5 class="form-sub-heading">Sub Region</h5>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" value="Niagara Falls">
  <label class="form-check-label" for="flexRadioDefault1">
    Niagara Falls
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" value="Niagara Escarpment / Twenty Valley">
  <label class="form-check-label" for="flexRadioDefault1">
    Niagara Escarpment / Twenty Valley
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" value="Niagara-on-the-Lake">
  <label class="form-check-label" for="flexRadioDefault1">
    Niagara-on-the-Lake
  </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    <label class="form-check-label" for=""> Fort Erie / Niagara’s South Coast</label>
  </div>
</div>
   <div class="mb-3">
    <label for="" class="form-label">Business/Vendor Phone: * </label>
    <input type="text" class="form-control" id="" name="vendor_phone" required>
  </div>
    <div class="mb-5 gallery_css">
              <label for="logo" class="form-label">Logo/Graphic Thumbnail</label>
                <input class="form-control" type="file" name="logo" id="imgInp">
            </div>
  <div class="mb-3 form-group">
       <textarea class="form-control" name="description" rows="5" id="description"></textarea>
       <label for="Image" class="form-label">Description</label>
    </div>
  <h4 class="form-heading">Accommodation Details</h4>
  <h5 class="form-sub-heading">Accommodation Sub-Type: *</h5>
  <div class="" name="acc_sub_type">
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Hotel">
  <label class="form-check-label" for="flexRadioDefault1">
    <label class="form-check-label" for="">Hotel</label>
  </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Motel">
  <label class="form-check-label" for="flexRadioDefault1">
    <label class="form-check-label" for="">Motel</label>
  </div>
 <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Inn">
  <label class="form-check-label" for="flexRadioDefault1">
    <label class="form-check-label" for="">Inn</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="B&B">
  <label class="form-check-label" for="flexRadioDefault1">
    <label class="form-check-label" for="">B&B</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Vacation Property (Entire Home)">
  <label class="form-check-label" for="flexRadioDefault1">
    <label class="form-check-label" for="">Vacation Property (Entire Home)</label>
  </div>
   <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Vacation Property (Guest House)">
  <label class="form-check-label" for="flexRadioDefault1">
    <label class="form-check-label" for="">Vacation Property (Guest House)</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Serviced Apartment">
  <label class="form-check-label" for="flexRadioDefault1">
    <label class="form-check-label" for="">Serviced Apartment</label>
  </div>
   <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Furnished Room">
  <label class="form-check-label" for="flexRadioDefault1">
    <label class="form-check-label" for="">Furnished Room</label>
  </div>
</div>
  <div class="mb-3">
    <label for="" class="form-label">Total Square Footage:</label>
    <input type="text" class="form-control" id="" name="square_footage">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Bedrooms: *</label>
    <input type="text" class="form-control" id="" name="bedrooms">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Washrooms: *</label>
    <input type="text" class="form-control" id="" name="washrooms">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sleeps: *</label>
    <input type="text" class="form-control" id="" name="sleeps">
  </div>
  <button type="submit" class="btn btn-primary" id="submit_form">Submit</button>
  <button type="submit" class="btn btn-primary" id="submit_form">Save & Continue</button>
</form>
</div>
</div>
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  
  $('#logo').change(function(){
      const file = this.files[0];
      const filename = file['name'];
      
      if (file) {
        let reader = new FileReader();
        console.log(reader);
      }
      
  });
  CKEDITOR.replace('description');
  $("#submit_form").click(function(ee){  
    ee.preventDefault();   
    var filename = $('input[name="logo"]').val();
    console.log(filename);
    // return false;
  var form = $('#form')[0]; 
  console.log(form);// You need to use standard javascript object here
  var formValues = new FormData(form);
        // var formValues= $("#accomodation_vendor").serialize();
        
     $.ajax({
           type:'POST',
           url:"{{ route('accomodation_form.form') }}",
           data:formValues, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
              processData: false, 
           success:function(data){
            location.reload();
          console.log(data);
          // alert('Success'); 
          tablehtml = "";
          $('.totalresults').val(data.length);  
          $("#searchsdata").html('');
         $("#searchsdata").html(tablehtml);       
           }                        
        });
    //alert();  
    return false;
    
  });      
});
  </script>