
<div class="tab-inner-bg">
     <h1 class="main-heading-H1">Winery Vendor Profile</h1>
     <ul class="prev-next-btns">
        <?php
            if ($prev_id != 0){
        ?>
       <li style="text-align: left;">
        <button type="button" class="prev">
            <span><<</span><a href='/vendor?id=<?php echo $prev_id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>'>Previous</a>
        </button>
       </li>
        <?php
         }
        ?>
        <?php
            if ($next_id != 0){
        ?>
        <li style="text-align: right;">
            <button type="button" class="prev"><a href='/vendor?id=<?php echo $next_id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>'>Next</a><span>>></span></button>
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
             </div>
           </div>
         </div>
       </div>
       <div class="exit-btn-box">
         <a href="/vendor_profile/?id=<?php echo $id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>#orm-bo">Edit<span>>></span></a>
       </div>
     </div>
     <div class="short-box-main">
       <div class="short-box">
          <img src="<?php echo $value->galleryslide1;?>" width="100%">
       </div>

       <div class="short-box">
          <img src="<?php echo $value->galleryslide2;?>" width="100%">
       </div>
       <div class="short-box">
          <img src="<?php echo $value->galleryslide3;?>" width="100%">
       </div>
       <div class="short-box">
          <img src="<?php echo $value->galleryslide4;?>" width="100%">
       </div>
       <div class="short-box">
          <img src="<?php echo $value->galleryslide5;?>" width="100%">
       </div>
       <div class="short-box">
          <img src="<?php echo $value->galleryslide6;?>" width="100%">
       </div>
     </div>
      <h4 class="form-heading">Buisness Vendor Details</h4>
      <div class="bussion-detail-bx">
       <ul class="vernder-address">
           <li>
            <span>Buisness Vendor/Name:</span><?php echo $value->buisness_vendor_name; ?>
           </li>
           <li>
            <span>Street Address:</span><?php echo $value->buisnessstreet_address; ?>
           </li>
            <li>
            <span>Unit/Suite#:</span><?php echo $value->buisness_vendor_unit; ?>
           </li>
           <li>
            <input type="checkbox" name=""> <span>check this box to hide street address </span>
           </li>
          
           <li>
            <span>City/Town:</span><?php echo $value->buisness_vendor_city; ?>
           </li>
           <li class="">
            <span>Province/State:</span><?php echo $value->buisness_vendor_state; ?>
           </li>
           <li class="">
            <span>Postal Code/Zip:</span><?php echo $value->buisness_vendor_postal; ?>
           </li>
           <li>
            <span>Country:</span><?php echo $value->buisness_vendor_country; ?>
           </li>
           <li>
            <span>Sub-Region:</span><?php echo $value->accomodation_sub_region; ?></li>
           <li><span>Buisness/Vendor Phone:</span><?php echo $value->buisness_vendor_phone; ?></li>
          </ul>
        <!--<div class="logic-bx align-center-bx">
             <div class="logic-img-box"></div>
           </div> -->
              <div class="logic-bx">
             <div class="logic-img-box">
                 <img src="<?php echo $value->logo_thumbnail;?>" width="100%">
             </div>
            <span>Logo/Graphic:</span>
           </div>
           <div class="description-text">
              <span>Description:</span><br><?php echo $value->description;?>
           </div>
           <div class="exit-btn-box">
            <a href="/vendor_profile/?id=<?php echo $id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>#buisness">Edit<span>>></span></a>
            </div>

     </div>
      <div class="bussion-detail">
         <br>
      <h4 class="form-heading">Winery Type</h4>
      <div class="bussion-detail-bx">
       <ul class="vernder-address">
           <li><span>Winery Type:</span><?php echo $value->accomodation_sub_type;?></li>
           <li><span>Tasting Options:</span><?php echo $value->winery_tasting_type;?></li>
           <li><span>Group Orientation:</span><?php echo $value->group_orientation;?></li>
           <li><span>Current Rate:</span><?php echo $value->current_booking_rate;?></li>
           <li><span>Seasonal Rates:</span></li>
           <li><span>Spring</span><?php echo $value->spring_rate;?></li>
           <li><span>Summer</span><?php echo $value->summer_rate;?></li>
           <li><span>Fall</span><?php echo $value->fall_rate;?></li>
           <li><span>Winter</span><?php echo $value->winter_rate;?></li>
           </ul>
        
            <div class="exit-btn-box">
            <a href="/vendor_profile/?id=<?php echo $id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>#sub_type">Edit<span>>></span></a>
            </div>
     </div>
     <br>
     <div class="digital-social-media" id="digital">
     
          <div class="sysadmin-only">
          <h4 class="form-heading">SysAdmin Only</h4>
          <ul class="vernder-address">
           <li><span>Price Point Rating</span><span class="font-green"><?php echo $value->price_point_rating;?></span></li>
           <li><span>Account Status</span><?php echo $value->accom_account_status;?></li>
          </ul>
          <div class="exit-btn-box">
            <a href="/vendor_profile/?id=<?php echo $id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>#admin">Edit<span>>></span></a>
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