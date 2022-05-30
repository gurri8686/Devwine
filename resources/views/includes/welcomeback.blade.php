<?php  $name = isset(Auth::user()->name) ? Auth::user()->name : '';
 ?>
<div class="user-main-div">
   <div class="user-content-div">
      <p class="mb-2">Hello <span class="link-color">
         {{$name}}
         </span>,
      </p>
      <p class="mb-2">Welcome back. If you would like to initiate a vendor account, select the appropriate vendor category below and complete the accompanying form.</p>
      <p class="mb-2">If you do choose to initiate a vendor account you will be assigned as the default contact person and given administrative access.</p>
      <p class="mb-2"><b>All vendor accounts are checked and verified before being published on the appropriate vendor page.</b></p>
     <!--  <ul class="btn-links-box">
         <li><a href="#accommodation_tab" data-toggle="tab" id="accommodation" class="wine-btn">Accommodotions</a></li>
         <li><a href="#excursion_tab" id="excursion" data-toggle="tab" class="wine-btn">Excursions </a></li>
         <li><a href="#winery_tab" id="winery" data-toggle="tab" class="wine-btn">Wineries</a></li>
      </ul> -->
   </div>
</div>
