<?php
$register = isset($_GET['register']) ? $_GET['register'] : "0";
?>
<div class="user-main-div">
   <div class="user-content-div">
      <?php
      if($register){ 
      ?>
      @include('includes.congratulation')
      <?php 
         }else{
         ?>
		@include('includes.welcomeback')
       <?php 
         }
         ?>
      <ul class="btn-links-box">
         <li><a href="/vendor/?t_id=accommodation"  id="accommodation" class="wine-btn">Accommodotions</a></li>
         <li><a href="/vendor/?t_id=excursion" id="excursion"  class="wine-btn">Excursions </a></li>
         <li><a href="/vendor/?t_id=winery" id="winery"  class="wine-btn">Wineries</a></li>
      </ul>
   </div>
</div>