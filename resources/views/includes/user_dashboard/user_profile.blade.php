<?php
 $user_id =  isset(auth()->user()->id) ? auth()->user()->id : '';
 $username = isset(auth()->user()->name) ? auth()->user()->name : '';
 $lastname = isset(auth()->user()->lastname) ? auth()->user()->lastname : '';
 $email = isset(auth()->user()->email) ? auth()->user()->email : '';
 $data = DB::table('guest_registry')->where('user_id',$user_id)->get()->toArray();
?>
<div class="user-main-div">
   <div class="user-content-div">
      <div class="profile-custom">
         <p class="my-3"><b>User Profiles </b>are initiated when users/patrons register as participants in our <b>Guest Rewards</b> Program</p>
         <div class="row">
            <div class="col-lg-6">
               <ul class="profile-ul">
                  <li class="profile-ul-heading mt-3"><b>User Profile </b></li>
                  <li><span class="link-color">Common/First Name</span>:<b> <?php echo $username;?></b></li>
                  <li><span class="link-color">Surname/Last Name</span>: <b><?php echo $lastname;?></b></li>
                  <li><span class="link-color">eMail/Username</span>: <b><?php echo $email;?></b></li>
               </ul>
            </div>
            <div class="col-lg-6">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="profile-pic-view d-flex align-items-center justify-content-center p-2 border">
                        <?php 
                        $profile_image = isset(auth()->user()->user_profile_image) ? auth()->user()->user_profile_image : '';
                        if($profile_image != ''){
                        ?>
                        <img src="<?php echo $profile_image;?>" style="width:100%;">
                        <?php 
                        }else{
                        ?>
                        <span>Profile<br> Image</span>
                        <?php 
                           }
                         ?>
                     </div>
                  </div>
                  <?php 
                  if($profile_image){
                     ?>
                  <div class="col-lg-6">
                     <div class="verified-check d-flex flex-column justify-content-center text-center"><img src="https://devsite.winecountryweekends.ca/images/check.png" class="custom-logo" alt="verified-check"><span class="text-dark">Submit Review<br>
                        Verified</span>
                     </div>
                  </div>
               <?php } ?>
               </div>
            </div>
            <div class="col-lg-12 mt-3 mb-3">
               <p>Completing the <b>Guest Registry</b> section of your profile will provide details to satisfy our security protocols and allow you to book accommodations directly with our vendor partners saving on third-party fees.</p>
               <ul class="profile-ul">
                  <li class="profile-ul-heading mt-3"><b>Guest Registry</b></li>
                  <li><span class="link-color"> Home Street Address:</span> <b><?php echo isset($data[0]->street_address) ? $data[0]->street_address : '';?></b></li>
                  <li><span class="link-color">Unit/Suite#:</span><?php echo isset($data[0]->unit) ? $data[0]->unit : '';?></li>
                  <li><span class="link-color"> Home City/Town:</span> <b><?php echo isset($data[0]->city) ? $data[0]->city : '';?></b> </li>
                  <li><span class="link-color"> Home Province/State:</span> <b><?php echo isset($data[0]->province) ? $data[0]->province : '';?></b></li>
                  <li><span class="link-color"> Home Postal Code/Zip:</span> <b><?php echo isset($data[0]->postal) ? $data[0]->postal : '';?></b></li>
               </ul>
            </div>
            <div class="col-lg-4">
               <div class="profile-pic-view d-flex align-items-center justify-content-center p-2 border">
                  <?php 
                  $license_front_image = isset($data[0]->license_front_image) ? $data[0]->license_front_image : '';
                  if($license_front_image != ''){
                  ?>
                  <img src="<?php echo $license_front_image;?>" style="width: 100%;">
                  <?php 
                  }else{
                  ?>
                  <span>Image<br> Front</span>
                   <?php 
                  } 
                  ?>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="profile-pic-view d-flex align-items-center justify-content-center p-2 border">
                  <?php 
                  $license_back_image = isset($data[0]->license_back_image) ? $data[0]->license_back_image : '';
                  if($license_back_image != ''){
                  ?>
                  <img src="<?php echo $license_back_image;?>" style="width: 100%;">
                  <?php 
                  }else{
                  ?>
                  <span>Image<br>Back</span>
                  <?php 
               } ?>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="verified-check d-flex flex-column justify-content-center text-center"><img src="https://devsite.winecountryweekends.ca/images/check.png" class="custom-logo" alt="verified-check"><span class="text-dark">Direct Booking<br>
                  Verified</span>
               </div>
            </div>
            <div class="col-lg-12">
               <ul class="profile-ul add-side-padding">
                  <li class="p-0 mt-3"><span class="link-color"><i>See Emergency Contact</i></span></li>
                  <li><span class="link-color">Emergency Contact Name: </span><b><?php echo isset($data[0]->emergency_contact_name) ? $data[0]->emergency_contact_name : '';?></b></li>
                  <li><span class="link-color">Emergency Contact Relation: </span><b><?php echo isset($data[0]->emergency_contact_relation) ? $data[0]->emergency_contact_relation : '';?></b></li>
                  <li><span class="link-color"> Emergency Contact Phone: </span><b><?php echo isset($data[0]->emergency_contact_phone) ? $data[0]->emergency_contact_phone : '';?></b></li>
               </ul>
               <p class="mt-3 mb-3">The submission of travel details will help facilitate free next day local delivery of online<b> Souvenir Shop</b> purchases.</p>
            </div>
            <!-- PHP code for getting the data of travel from local_delievery table -->
            <?php
            $local_delievery = DB::table('local_delievery')->where('user_id',$user_id)->get()->toArray();
            ?>
            <div class="col-lg-8">
               <ul class="profile-ul">
                  <li class="profile-ul-heading mt-3"><b> Travel Itinerary & Local Delivery</b></li>
                  <li><span class="link-color"> Travel/Check-In Date (Arrival):</span> <b><?php echo isset($local_delievery[0]->check_in_date) ? $local_delievery[0]->check_in_date :'';?></b> </li>
                  <li><span class="link-color"> Travel/Check-Out Date (Departure):</span> <b><?php echo isset($local_delievery[0]->check_out_date) ? $local_delievery[0]->check_out_date :'';?></b></li>
                  <li><span class="link-color"> Local Accommodation (Optional): </span> <b><?php echo isset($local_delievery[0]->local_accomodation) ? $local_delievery[0]->local_accomodation : '';?></b></li>
                  <li><span class="link-color"> Accommodation Type (Optional):</span> <b><?php echo isset($local_delievery[0]->accomodation_type) ? $local_delievery[0]->accomodation_type : '';?></b></li>
                     <li><span class="link-color"> Hosts Name (Optional):</span> <b><?php echo isset($local_delievery[0]->hosts_name) ? $local_delievery[0]->hosts_name : '';?></b></li>
                  <li><span class="link-color"> Contact Ph# (Optional):</span> <b><?php echo isset($local_delievery[0]->contact_phone) ? $local_delievery[0]->contact_phone : '';?> </b></li>
                  <li><span class="link-color"> Local Street Address: </span> <b><?php echo isset($local_delievery[0]->local_street_address) ? $local_delievery[0]->local_street_address : '';?></b></li>
                  <li><span class="link-color">  Unit/Suite# </span> <b><?php echo isset($local_delievery[0]->unit) ? $local_delievery[0]->unit : '';?></b></li>
                  <li><span class="link-color"> City/Town: </span> <b><?php echo isset($local_delievery[0]->city) ? $local_delievery[0]->city : '';?></b></li>
                  <li><span class="link-color">  Province/State:</span> <b><?php echo isset($local_delievery[0]->province) ? $local_delievery[0]->province : '';?>.</b></li>
                  <li><span class="link-color">Postal Code/Zip:</span> <b><?php echo isset($local_delievery[0]->postal_code) ? $local_delievery[0]->postal_code : '';?></b></li>
               </ul>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center">
            	 <div class="verified-check d-flex flex-column justify-content-center text-center"><img src="https://devsite.winecountryweekends.ca/images/check.png" class="custom-logo" alt="verified-check"><span class="text-dark">Local Booking<br>
                  Verified</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
