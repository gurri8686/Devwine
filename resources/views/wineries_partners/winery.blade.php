@include('includes.header')
<!-- <section class="grey-bg-sec">
   <div class="container-fluid p-0">
      <div class="row m-0">
         <div class="col-md-12 my-4">
            <div class="big-text">
               <h2 class="big-heading-b">Excursion partners</h2>
               <p class="short-heading">INFORMATION</p>
            </div>
         </div>
      </div>
      <div class="excursion-partner-sec w-100">
         <div class="container">
            <div class="row w-100">
               <div class="col-lg-6">
                  <div class="zoom-img-bg">
                     <img src="https://devsite.winecountryweekends.ca/images/bg-back.jpg" alt="bg-back" class="img-fluid">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="guided-niagara">
                     <h2 class="text-white">Guided Niagara Gorge Tour</h2>
                     <p class="text-white">Yes, you can explore the glen on your own, which is quite fun.  I’ve done it countless times myself but people tend to be social and any experience worth having is better shared. </p>
                     <p class="text-white"><span style="font-size: 15px;">We’ll meet atop the glen and go over some basic hiking rules or protocols in the interests of safety.  You’ll be presented with a hiking kit/swag bag and after reviewing the contents of your kit we will venture down into the glen and our trek will begin.  Come hike the Glen with Dave</span><br></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->

<section class="sec-partners">
   <div class="container">
      <div class="row">
         <div class="col-md-12 my-5">
            <div class="big-text">
               <h2 class="big-heading-b">Winery partners</h2>
               <p class="short-heading">INFORMATION</p>
            </div>
         </div>
 <?php
 $vendor_id = isset($_GET['id']) ? $_GET['id'] : '';
//$vendor = DB::table('Vendors_Account')->where('vendor_type', 'Accomodation')->where('ID', $vendor_id)->select('*')->get();
$vendor = DB::table('Vendors_Account')->where('vendor_type', 'Winery')->select('*')->get();
$count = 0;
//echo "<pre>"; print_r($vendor);die;
foreach($vendor as $key => $value){
   $count++;
?>
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
               <li><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="yellow-color">Inquiries</button></li>
               @include('includes.inquires_popup.popup')
</ul>
         </div>
      </div>
   <?php } ?>
<!--           <div class="row m-0 border-bottom py-3">
      <div class="col-lg-10 text-right">
            <ul class="content-right">
               <li>Jaswinder test [<span class="yellow-color">Entire Home</span>]</li>
               <li><span class="yellow-color">Bedrooms 500</span>,<span class="yellow-color">Washrooms 500</span>,<span class="yellow-color">Sleeps 500</span></li>
               <li>patiala,Punjab, ON 140701</li>
               <li>Ph# 9592460439</li>
               <li><span class="yellow-color">$$$</span></li>
               <li><a href="#" class="yellow-color">Inquiries</a></li>
</ul>
         </div>
            <div class="col-lg-2">
            <div class="img-box">
               <img src="https://devsite.winecountryweekends.ca/images/horse.jpg" class="custom-logo" alt="Wine Country Weekends">
            </div>
         </div>
      </div> -->
            <!--  <div class="row m-0 border-bottom py-3">
                     <div class="col-lg-2">
            <div class="img-box">
               <img src="https://devsite.winecountryweekends.ca/images/horse.jpg" class="custom-logo" alt="Wine Country Weekends">
            </div>
         </div>
      <div class="col-lg-10 text-right">
            <ul class="">
               <li>Jaswinder test [<span class="yellow-color">Entire Home</span>]</li>
               <li><span class="yellow-color">Bedrooms 500</span>,<span class="yellow-color">Washrooms 500</span>,<span class="yellow-color">Sleeps 500</span></li>
               <li>patiala,Punjab, ON 140701</li>
               <li>Ph# 9592460439</li>
               <li><span class="yellow-color">$$$</span></li>
               <li><a href="#" class="yellow-color">Inquiries</a></li>
</ul>
         </div>
         
      </div> -->
   </div>
</section>

