<div class="tab-inner-bg">
     <h1 class="main-heading-H1">Accomodation Vendor Profile</h1>
     <ul class="prev-next-btns">
        <?php
        if ($prev_id != 0){
        ?>
       <li style="text-align: left;">
        <button type="button" class="prev" id="previous">
            <span><<</span><a href='/vendor?id=<?php echo $prev_id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>&total=<?php echo $total;?>'>Previous</a>
        </button>
       </li>
       
        <?php
         }
        ?>
        <?php
            if ($next_id != 0){
        ?>
        <li style="text-align: right;">
            <button type="button" class="prev" id="next"><a href='/vendor?id=<?php echo $next_id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>&total=<?php echo $total;?>'>Next</a><span>>></span></button>
        </li>
        <?php 
        } 
        ?>
             </ul>
     <div class="vender-contact">
       <div class="vernder-info">
         <h4 class="form-heading">Vendor Contact</h4>
         <ul class="vernder-">
           <li><span>Contact's Given Name(s):</span><?php echo $value->given_name;?></li>
           <li><span>Contact's Surname/Last Name:</span><?php echo $value->sur_name;?></li>
           <li><span>Contact's eMail:</span><?php echo $value->vendors_email;?></li>
           <li><span>Contact's Title:</span><?php echo $value->vendor_title;?></li>
           <li><span>Contact's Position:</span><?php echo $value->verndor_position;?></li>
           <li><span>Contact's Phone:</span><?php echo $value->phone_number;?></li>
         </ul>
       </div>
       <div class="vernder-box">
         <div class="main-grey-noraml">
           <div class="proper-grey">
             <div class="white-aria">
                <div id="slider" class="flexslider" style="border: none;height: 100%;">
                  <ul class="slides">
                    
                    <?php if($value->streaminglink1 == ""){

                     ?>
                      <li id="slide1" data-class="image">
                        <img src="<?php echo $value->galleryslide1; ?>" />
                      </li>
                      <?php }else{
                        $streaming_link1 = str_replace("watch?v=","embed/",$value->streaminglink1);
                       ?>
                        <li id="slide1" data-class="video">
                          <iframe id="slide1_video" class="slide1_video" width="420" height="315" src="<?php echo $streaming_link1; ?>?autoplay=0"> </iframe>
                        </li>
                        </li>
                    <?php } ?> 
                    
                    <?php if($value->streaminglink2 == ""){ ?>
                        <li id="slide2" data-class="image">
                          <img src="<?php echo $value->galleryslide2; ?>" />
                        </li>
                        <?php }else{
                        $streaming_link2 = str_replace("watch?v=","embed/",$value->streaminglink2); ?>
                          <li id="slide2" data-class="video">                            
							<iframe id="slide2_video" class="slide2_video" width="420" height="315" src="<?php echo $streaming_link2; ?>?autoplay=0"> </iframe>
                          </li>
                    <?php } ?> 
                    
                    <?php if($value->streaminglink3 == ""){ ?>
                      <li id="slide3" data-class="image">
                          <img src="<?php echo $value->galleryslide3; ?>" />
                      </li>
                      <?php }else{
                      $streaming_link3 = str_replace("watch?v=","embed/",$value->streaminglink3);
                       ?>
                        <li id="slide3" data-class="video">                          
						  <iframe id="slide3_video" class="slide3_video" width="420" height="315" src="<?php echo $streaming_link3; ?>?autoplay=0"> </iframe>
                        </li>
                    <?php } ?> 
                    
                    
                    <?php if($value->streaminglink4 == ""){ ?>
                      <li id="slide4" data-class="image">
                        <img src="<?php echo $value->galleryslide4; ?>" />
                      </li>
                      <?php }else{
                        $streaming_link4 = str_replace("watch?v=","embed/",$value->streaminglink4);
                       ?>
                        <li id="slide4" data-class="video">                          
						  <iframe width="420" height="315" id="slide4_video" class="slide4_video" src="<?php echo $streaming_link4; ?>?autoplay=1"> </iframe>
                        </li>
                    <?php } ?> 
                   
                    
                    <?php if($value->streaminglink5 == ""){ ?>
                      <li id="slide5" data-class="image">
                        <img src="<?php echo $value->galleryslide5; ?>" />
                      </li>
                      <?php }else{
                        $streaming_link5 = str_replace("watch?v=","embed/",$value->streaminglink5);
                       ?>
                        <li id="slide5" data-class="video">
                         <iframe width="420" height="315" id="slide5_video" class="slide5_video" src="<?php echo $streaming_link5; ?>?autoplay=1"> </iframe>
                        </li>
                      <?php } ?> 

                      <?php if($value->streaminglink6 == ""){ ?>
                        <li id="slide6" data-class="image">
                          <img src="<?php echo $value->galleryslide6; ?>" />
                        </li>
                        <?php }else{
                          $streaming_link6 = str_replace("watch?v=","embed/",$value->streaminglink6);
                         ?>
                          <li id="slide6" data-class="video">
                            <iframe width="420" height="315" id="slide6_video" class="slide6_video" src="<?php echo $streaming_link6; ?>?autoplay=1"> </iframe>
                          </li>
                      <?php } ?>
                   
                  </ul>
                </div>
             </div>
           </div>
         </div>
       </div>
       <div class="exit-btn-box">
         <a href="/vendor_profile/?id=<?php echo $id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>#orm-bo">Edit<span>&gt;&gt;</span></a>
       </div>
     </div>
      <div id="carousel" class="short-box-main">
        <ul class="slides">
          <li class="short-box">
            <?php if($value->streaminglink1 == ""){ ?>
              <img src="<?php echo $value->galleryslide1; ?>" width="100%">
            <?php }else{ ?>
              <?php if($value->galleryslide1 != ""){ ?>
                <img src="<?php echo $value->galleryslide1; ?>" width="100%">
              <?php }else{ ?>
                <img src="{{ asset('/images/dummy_video_img.jpg') }}" width="100%">
              <?php } ?>
            <?php } ?>
          </li>
          <li class="short-box">
            <?php if($value->streaminglink2 == ""){ ?>
              <img src="<?php echo $value->galleryslide2; ?>" width="100%">
            <?php }else{ ?>
              <?php if($value->galleryslide2 != ""){ ?>
                <img src="<?php echo $value->galleryslide2; ?>" width="100%">
              <?php }else{ ?>
                <img src="{{ asset('/images/dummy_video_img.jpg') }}" width="100%">
              <?php } ?>
            <?php } ?>
          </li>
          <li class="short-box">
            <?php if($value->streaminglink3 == ""){ ?>
              <img src="<?php echo $value->galleryslide3; ?>" width="100%">
            <?php }else{ ?>
              <?php if($value->galleryslide3 != ""){ ?>
                <img src="<?php echo $value->galleryslide3; ?>" width="100%">
              <?php }else{ ?>
                <img src="{{ asset('/images/dummy_video_img.jpg') }}" width="100%">
              <?php } ?>
            <?php } ?>
          </li>
          <li class="short-box">
            <?php if($value->streaminglink4 == ""){ ?>
              <img src="<?php echo $value->galleryslide4; ?>" width="100%">
            <?php }else{ ?>
              <?php if($value->galleryslide4 != ""){ ?>
                <img src="<?php echo $value->galleryslide4; ?>" width="100%">
              <?php }else{ ?>
                <img src="{{ asset('/images/dummy_video_img.jpg') }}" width="100%">
              <?php } ?>
            <?php } ?>
          </li>
          <li class="short-box">
            <?php if($value->streaminglink5 == ""){ ?>
              <img src="<?php echo $value->galleryslide5; ?>" width="100%">
            <?php }else{ ?>
              <?php if($value->galleryslide5 != ""){ ?>
                <img src="<?php echo $value->galleryslide5; ?>" width="100%">
              <?php }else{ ?>
                <img src="{{ asset('/images/dummy_video_img.jpg') }}" width="100%">
              <?php } ?>
            <?php } ?>
          </li>
          <li class="short-box">
            <?php if($value->streaminglink6 == ""){ ?>
              <img src="<?php echo $value->galleryslide6; ?>" width="100%">
            <?php }else{ ?>
              <?php if($value->streaminglink6 != ""){ ?>
                <img src="<?php echo $value->streaminglink6; ?>" width="100%">
              <?php }else{ ?>
                <img src="{{ asset('/images/dummy_video_img.jpg') }}" width="100%">
              <?php } ?>
            <?php } ?>
          </li>
        </ul>
     </div>
      <h4 class="form-heading">Buisness Vendor Details</h4>
      <div class="bussion-detail-bx">
       <ul class="vernder-address">
           <li>
           	<span>Buisness Vendor/Name:</span><?php echo $value->buisness_vendor_name;?> </li>
           <li>
           	<span>Street Address:</span><?php echo $value->buisnessstreet_address;?></li>
            <li>
            <span>Unit/Suite#:</span><?php echo $value->buisness_vendor_unit;?></li>
           <li>
           	<input type="checkbox" name=""> <span>check this box to hide street address </span>
           </li>
          
           <li>
           	<span>City/Town:</span><?php echo $value->buisness_vendor_city;?></li>
           <li class="">
           	<span>Province/State:</span><?php echo $value->buisness_vendor_state;?> </li>
           <li class="">
           	<span>Postal Code/Zip:</span><?php echo $value->buisness_vendor_postal;?></li>
           <li>
           	<span>Country:</span><?php echo $value->buisness_vendor_country;?></li>
           <li>
           	<span>Sub-Region:</span><?php echo $value->accomodation_sub_region;?></li>
           <li><span>Buisness/Vendor Phone:</span><?php echo $value->buisness_vendor_phone;?></li>
          </ul>
        <!--<div class="logic-bx align-center-bx">
             <div class="logic-img-box"></div>
           </div> -->
             <div class="logic-bx">
             <div class="logic-img-box">
                 <img src="<?php echo $value->logo_thumbnail; ?>" width="100%">
             </div>
            <span>Logo/Graphic:</span>
           </div>
           <div class="description-text">
              <span>Description:</span><br><p><?php echo $value->description;?></p>
           </div>
           <div class="exit-btn-box">
            <a href="/vendor_profile/?id=<?php echo $id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>#buisness">Edit<span>&gt;&gt;</span></a>
            </div>

     </div>
      <div class="bussion-detail">
         <br>
      <h4 class="form-heading">Accomodation Type</h4>
    
      <div class="bussion-detail-bx">
       <ul class="vernder-address">
           <li><span>Total Square Footage:</span><?php echo $value->total_square_feet;?></li>
           <li><span>Bedrooms:</span><?php echo $value->bedrooms;?></li>
           <li><span>Washrooms: </span><?php echo $value->washrooms;?></li>
           <li><span>Sleeps:</span><?php echo $value->sleeps;?></li>
           <!-- <li><span>Current Booking Rate:</span><span class="font-green">$/night</span></li> -->
           <li><span>Seasonal Rates:</span></li>
           <li class="spaceleft"><span>Spring:</span>$<?php echo $value->spring_rate;?>/night</li>
           <li class="spaceleft"><span>Summer:</span>$<?php echo $value->summer_rate;?>/night</li>
           <li class="spaceleft"><span>Fall:</span>$<?php echo $value->accom_autumn;?>/night</li>
           <li class="spaceleft"><span>Winter:</span>$<?php echo $value->winter_rate;?>/night</li>
           </ul>
         
            <div class="exit-btn-box">
            <a href="/vendor_profile/?id=<?php echo $id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>#sub_type">Edit<span>&gt;&gt;</span></a>
            </div>
     </div>
     <br>
     <div class="digital-social-media" id="digital">
      <h4 class="form-heading">Digital &amp; Social Media</h4>
      <div class="digital-social-box">
            <ul class="vernder-address">
           <li><span>Buisness Vendor eMail:</span><span class="blue-url"></span></li>
           <li><span>Website Url:</span><span class="blue-url"></span></li>
           <li><span>Social Media Handles: </span></li>
           <li class="spaceleft"><span>Facebook:</span></li>
           <li class="spaceleft"><span>Instagram:</span></li>
           <li class="spaceleft"><span>Twitter:</span></li>
           <li class="spaceleft"><span>Youtube:</span></li>
          </ul>
          <div class="exit-btn-box">
            <a href="/vendor_profile/?id=<?php echo $id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>#digital">Edit<span>&gt;&gt;</span></a>
            </div>
          </div>
          <div class="sysadmin-only">
          <h4 class="form-heading">SysAdmin Only</h4>
          <ul class="vernder-address">
           <li><span>Price Point Rating</span><span class="font-green">$$$ Moderately High</span></li>
           <li><span>Account Status</span></li>
          </ul>
          <div class="exit-btn-box">
            <a href="/vendor_profile/?id=<?php echo $id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>#admin">Edit<span>&gt;&gt;</span></a>
            </div>
          </div>
     <div class="return-bnt">
        <form action="/search">

         <input type ="hidden" name="filter" value="<?php echo $filter;?>">

        <input type ="hidden" name="sort" value="<?php echo $sort;?>">
        <input type ="hidden" name="keyword" value="<?php echo $keyword;?>">
       <button type="submit" class="btn wine-btn" id="search_form">Return to Table</button>
        </form>
     </div>
   </div>
         </div>
          </div>