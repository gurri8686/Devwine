@include('includes.header')

<section class="sec-partners">
   <div class="container">
      @if(Auth::user())
      <div class="row">
         <form id="searchform" class="accom-partner" action="/vendor">
          <div class="bar-box col-lg-3 col-sm-6 mb-3">
            <select class="form-control" name="filter" id="filter">
               <option value=""></option>
                <optgroup label="Accommodation Sub-Type" class="Accomodation">
                  <option value="accomodation_sub_type||Hotel" class="Accomodation">- Hotel</option>
                  <option value="accomodation_sub_type||Motel" class="Accomodation">- Motel</option>
                  <option value="accomodation_sub_type||Inn" class="Accomodation">- Inn</option>
                  <option value="accomodation_sub_type||B&B" class="Accomodation">- B&B</option>
                  <option value="accomodation_sub_type||Vacation Property (Entire Home)" class="Accomodation">- Vacation Property (Entire Home)</option>
                  <option value="accomodation_sub_type||Vacation Property (Guest House)" class="Accomodation">- Vacation Property (Guest House)</option>
                  <option value="accomodation_sub_type||Service Apartment" class="Accomodation">- Serviced Apartment</option>
                  <option value="accomodation_sub_type||Furnished Room" class="Accomodation">- Furnished Room</option>
               </optgroup>
               <optgroup label="Bedrooms" class="Accomodation" style="">
                  <option value="bedrooms||2" class="Accomodation" style="">2</option>
                  <option value="bedrooms||3" class="Accomodation" style="">3</option>
                  <option value="bedrooms||4+" class="Accomodation" style="">4+</option>
               </optgroup>
               <optgroup label="Sleeps" class="Accomodation" style="">
                  <option value="sleeps||2" class="Accomodation" style="">2</option>
                  <option value="sleeps||4" class="Accomodation" style="">4</option>
                  <option value="sleeps||6" class="Accomodation" style="">6</option>
                  <option value="sleeps||8+" class="Accomodation" style="">8+</option>
               </optgroup>
               <optgroup label="Price Point Rating" class="All Accomodation Excursion Winery License Non-License">
                  <option value="price_point_rating||$ Least Expensive"  class="All Accomodation Excursion Winery License Non-License">- $, Least Expensive</option>
                  <option value="price_point_rating||$$ Moderately Low"  class="All Accomodation Excursion Winery License Non-License">- $$, moderately low</option>
                  <option value="price_point_rating||$$$ Moderately High" class="All Accomodation Excursion Winery License Non-License">- $$$, moderately high</option>
                  <option value="price_point_rating||$$$$ Most Expensive" class="All Accomodation Excursion Winery License Non-License">- $$$$, most expensive</option>
               </optgroup>
               <optgroup label="Sub-Region" class="All Accomodation Excursion Winery License Non-License">
                  <option value="accomodation_sub_region||Niagara Falls" class="All Accomodation Excursion Winery License Non-License">- Niagara Falls</option>
                  <option value="accomodation_sub_region||Niagara Escarpment / Twenty Valley" class="All Accomodation Excursion Winery License Non-License">- Niagara Escarpment / Twenty Valley</option>
                  <option value="accomodation_sub_region||Niagara-on-the-Lake" class="All Accomodation Excursion Winery License Non-License">- Niagara-on-the-Lake</option>
                  <option value="accomodation_sub_region||Niagara’s South Coast" class="All Accomodation Excursion Winery License Non-License">- Fort Erie / Niagara’s South Coast</option>
               </optgroup>
               <option value="Excursion">Price Point Rating</option>
               <option value="Winery">Sub-Region</option>
            </select>
         </div>
          <div class="bar-box col-lg-3 col-sm-6 mb-3">
            <div class ="search-btn">
               <div class="search"> <i class="fa fa-search"></i> 
                  <input type="text" class="form-control" name="keyword" value="" placeholder="Search"> 
                  <button  class="btn btn-primary wine-btn" id="searchajax" type="button">Search</button>
               </div>

            </div>
         </div>

      </form>
   @endif
         <div class="col-md-12 my-5">
            <div class="big-text">
               <h2 class="big-heading-b">Accomodation</h2>
               <p class="short-heading">INFORMATION</p>
            </div>
         </div>
      </div>
 <?php
 $vendor_id = isset($_GET['id']) ? $_GET['id'] : '';
$vendor = DB::table('Vendors_Account')->where('vendor_type', 'Accomodation')->select('*')->get();
$count = 0;
foreach($vendor as $key => $value){
   $count++;
?>
<div class="container">
<div class="row">
         <div class="col-lg-6">
            <div class="sec-partners-content">
               <ul>
                  <li><b><?php echo $value->buisness_vendor_name;?></b><span class="yellow-color">[Entire Home]</span></li>
                  <li><span class="yellow-color">Bedrooms <?php echo $value->bedrooms;?>, Washrooms <?php echo $value->washrooms;?>, Sleeps <?php echo $value->sleeps;?></span></li>
                  <li><?php echo $value->buisness_vendor_city;?>, <?php echo $value->buisness_vendor_state;?> <?php echo $value->buisness_vendor_postal;?></li>
                  <li>Ph# <?php echo $value->buisness_vendor_phone;?></li>
                  <li><span class="yellow-color"><?php echo $value->price_point_rating;?></span></li>
               </ul>
               <p><?php echo $value->description;?></p>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="custom-slider">
               <div id="carouselExampleControls<?php echo $count;?>" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <?php if($value->streaminglink1 == ""){ ?>
                      <li id="slide1" data-class="image">
                        <?php if($value->galleryslide1 == ''){
                           ?>
                            <img src="/images/no-image-icon-23500.jpg" class="d-block w-100" alt="..." />
                        <?php }else{ ?>
                        
                        <img src="<?php echo $value->galleryslide1; ?>" class="d-block w-100" alt="..." />
                     <?php } ?>
                      </li>
                      <?php }else{ ?>
                        <li id="slide1" data-class="video">
                          <iframe id="slide1_video" class="slide1_video" width="420" height="315" src="<?php echo $value->streaminglink1; ?>?autoplay=0"> </iframe>
                        </li>
                    <?php } ?>
                     </div>
                     <div class="carousel-item">
                        <?php if($value->streaminglink2 == ""){ ?>
                      <li id="slide1" data-class="image">
                        <?php if($value->galleryslide2 == ''){
                           ?>
                            <img src="/images/no-image-icon-23500.jpg" class="d-block w-100" alt="..." />
                        <?php }else{ ?>
                        
                        <img src="<?php echo $value->galleryslide2; ?>" class="d-block w-100" alt="..." />
                     <?php } ?>
                      </li>
                      <?php }else{ ?>
                        <li id="slide1" data-class="video">
                          <iframe id="slide1_video" class="slide1_video" width="420" height="315" src="<?php echo $value->streaminglink2; ?>?autoplay=0"> </iframe>
                        </li>
                    <?php } ?>
                     </div>
                        <div class="carousel-item">
                       <?php if($value->streaminglink3 == ""){ ?>
                      <li id="slide1" data-class="image">
                        <?php if($value->galleryslide3 == ''){
                           ?>
                            <img src="/images/no-image-icon-23500.jpg" class="d-block w-100" alt="..." />
                        <?php }else{ ?>
                        
                        <img src="<?php echo $value->galleryslide3; ?>" class="d-block w-100" alt="..." />
                     <?php } ?>
                      </li>
                      <?php }else{ ?>
                        <li id="slide1" data-class="video">
                          <iframe id="slide1_video" class="slide1_video" width="420" height="315" src="<?php echo $value->streaminglink3; ?>?autoplay=0"> </iframe>
                        </li>
                    <?php } ?>
                     </div>
                        <div class="carousel-item">
                        <?php if($value->streaminglink4 == ""){ ?>
                      <li id="slide1" data-class="image">
                        <?php if($value->galleryslide4 == ''){
                           ?>
                            <img src="/images/no-image-icon-23500.jpg" class="d-block w-100" alt="..." />
                        <?php }else{ ?>
                        
                        <img src="<?php echo $value->galleryslide4; ?>" class="d-block w-100" alt="..." />
                     <?php } ?>
                      </li>
                      <?php }else{ ?>
                        <li id="slide1" data-class="video">
                          <iframe id="slide1_video" class="slide1_video" width="420" height="315" src="<?php echo $value->streaminglink4; ?>?autoplay=0"> </iframe>
                        </li>
                    <?php } ?>
                     </div>
                        <div class="carousel-item">
                       <?php if($value->streaminglink5 == ""){ ?>
                      <li id="slide1" data-class="image">
                        <?php if($value->galleryslide5 == ''){
                           ?>
                            <img src="/images/no-image-icon-23500.jpg" class="d-block w-100" alt="..." />
                        <?php }else{ ?>
                        
                        <img src="<?php echo $value->galleryslide5; ?>" class="d-block w-100" alt="..." />
                     <?php } ?>
                      </li>
                      <?php }else{ ?>
                        <li id="slide1" data-class="video">
                          <iframe id="slide1_video" class="slide1_video" width="420" height="315" src="<?php echo $value->streaminglink5; ?>?autoplay=0"> </iframe>
                        </li>
                    <?php } ?>
                     </div>
                        <div class="carousel-item">
                        <?php if($value->streaminglink6 == ""){ ?>
                      <li id="slide1" data-class="image">
                        <?php if($value->galleryslide6 == ''){
                           ?>
                            <img src="/images/no-image-icon-23500.jpg" class="d-block w-100" alt="..." />
                        <?php }else{ ?>
                        
                        <img src="<?php echo $value->galleryslide6; ?>" class="d-block w-100" alt="..." />
                     <?php } ?>
                      </li>
                      <?php }else{ ?>
                        <li id="slide1" data-class="video">
                          <iframe id="slide1_video" class="slide1_video" width="420" height="315" src="<?php echo $value->streaminglink6; ?>?autoplay=0"> </iframe>
                        </li>
                    <?php } ?>
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls<?php echo $count;?>" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls<?php echo $count;?>" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </button>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            
         	<a href="#" class="wine-btn">Book Now</a>
         </div>
      </div>
    </div>
   </div>
</section>

<section class="entire-home">
	<div class="container">
		<div class="row m-0 border-bottom py-3">
			<div class="col-lg-2">
				<div class="img-box">
                        <?php 
                         if($value->logo_thumbnail == ''){
                        ?>
                        <img src="/images/no-image-icon-23500.jpg" class="d-block w-100" alt="...">
                        <?php
                         }else{
                        ?>
					<img src="<?php echo $value->logo_thumbnail;?> " class="custom-logo" alt="Wine Country Weekends">
               <?php
                  }
               ?>
				</div>
			</div>
			<div class="col-lg-10">
				<ul>
					<li><?php echo $value->buisness_vendor_name;?> <!-- [<span class="yellow-color">Entire Home</span>] --></li>
					<li><span class="yellow-color">Bedrooms <?php echo $value->bedrooms;?></span>,<span class="yellow-color">Washrooms <?php echo $value->washrooms;?></span>,<span class="yellow-color">Sleeps <?php echo $value->sleeps;?></span></li>
					<li><?php echo $value->buisness_vendor_city;?>,<?php echo $value->buisness_vendor_state;?>, <?php echo $value->buisness_vendor_postal;?></li>

					<li>Ph# <?php echo $value->buisness_vendor_phone;?></li>
                    <?php if($value->price_point_rating == '$ Least Expensive'){
                  ?>
					<li><span class="yellow-color">$</span></li>
            <?php } ?>
					<li><button data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $value->ID}}" class="yellow-color partner-btn">Inquiries</button></li>
               @include('includes.inquires_popup.popup')
</ul>
			</div>
		</div>
   <?php } ?>
   	</div>

</section>
<script type="text/javascript">
   $('li .partner-btn').click(function(e){
         var id = $(this).attr('data-id');
         $( "#exampleModal" ).modal( "show");
         $( "#exampleModal #vendor_id" ).val(id);

      });
$("#searchajax").click(function(e){
       e.preventDefault();
      $("#searchsdata").html("loading...");
      var id = '';
      var filter  = $("#filter").val();
      var sort = $("#sort").val();
      var keyword       = $("input[name=keyword]").val();
      var total       = $("input[name=total]").val();
      if(filter !== ''){
      }
      $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('#tokenforserchform').val()
                     }
                 });    
      $.ajax({
              type:'POST',
              url:"{{ route('search_data.form') }}",
              data:{'id':id,'filter':filter, 'sort':sort, 'keyword':keyword},
              success:function(data){
                 tablehtml = "";
                 $('.totalresults').val(data.length);  
                 for (i = 0; i < data.length; i++) {  
                     $('.totalresults').val(data.length); 
                      // var province = '';
   
                    
                    tablehtml = tablehtml + " <tr> <td><a  onclick='submitProfilePage("+data[i].id+","+data.length+" )' class='profile-link'>Profile</a></td> <td>"+vendor_type+"</td> <td>"+given_name+"</td> <td>"+street_address+"</td> <td>"+city+"</td>  <td>"+province+"</td><td>"+country+"</td><td>"+sub_region+"</td><td>"+email+"</td><td>"+phone+"</td></tr>";
               }
                 $("#searchsdata").html('');
                 
                 $("#searchsdata").html(tablehtml);       
              }                        
           });
      });
   </script>

