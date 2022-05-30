<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
@include('includes.header')
<section class="dashbord-sec">
   <div class="container">
   <div class="row system_admin">
      <div class="col-3 tabs-data">
         <button class="sidebar-toggle" style="display: none;"><i class="fa fa-bars" aria-hidden="true"></i></button>
         <div class=" align-items-start" style="background-color: #fff;">
            <ul class="nav nav-pills">
               <?php 
               $id = isset($_GET['id']) ? $_GET['id'] : '';
               if($id == ''){
                  ?>
               <li class="active">
                  <a href="#user_dashboard_tab" data-toggle="tab" id="user_dashboard">User Dashboard</a>
               </li>
               <?php 
            }else{
               ?>
               <li class="">
                  <a href="#user_dashboard_tab" data-toggle="tab" id="user_dashboard">User Dashboard</a>
               </li>
               <?php 
               }
               if($id != ''){
               ?>
               <li class="active">
                  <a href="#user_profile_tab" data-toggle="tab" id="user_profile">Profile</a>
               </li>
               <?php 
              }else{
               ?>
                <li class="">
                  <a href="#user_profile_tab" data-toggle="tab" id="user_profile">Profile</a>
               </li>
               <?php
              }?>

               <li class="">
                  <a href="#accountcredentials_tab" data-toggle="tab" id="accountcredentials">Account Credentials [Edit]</a>
               </li>
               <li>
                  <a href="#guest_registry_tab" id="guest_registry" data-toggle="tab">Guest Registry (Edit)</a>
               </li>
               <li>
                  <a href="#guest_registry_tab2" id="winery" data-toggle="tab">Local Delievery (Edit) </a>
               </li>
               <li>
                  <a href="#guest_registry_tab3" id="license" data-toggle="tab">Order Tracking </a>
               </li>
               <li>
                  <a href="#guest_registry_tab4" id="non-license" data-toggle="tab">Support Local</a>
               </li>
               <li>
                  <a href="#guest_registry_tab5" id="event" data-toggle="tab">Submit Review </a>
               </li>
               <li>
                  <a href="#guest_registry_tab6" id="souvnier" data-toggle="tab">FAQ</a>
               </li>
               <li>
                  <a href="#guest_registry_tab7" data-toggle="tab">Vendor Dashboard</a>
               </li>
               <li>
                  <a href="#guest_registry_tab8" id="essential" data-toggle="tab">System Adminstrators</a>
               </li>
               <li>
               <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
               </li>
            </ul>
         </div>
      </div>
      <div class="col-9">
         <div class="tab-content clearfix" id="v-pills-tabContent">
            <!-- 1st tab start -->
            <?php 
               if($id == ''){
               ?>
            <div class="tab-pane active" id="user_dashboard_tab" role="tabpanel"aria-labelledby="v-pills-profile-tab">
               @include('includes/user_dashboard.user_dashboard')
            </div>
             <?php 
               }
               if($id != ''){
               ?>
            <div class="tab-pane active" id="user_profile_tab" role="tabpanel">
               @include('includes/user_dashboard.user_profile')
            </div>
         <?php 
            }else{
          ?>
           <div class="tab-pane" id="user_profile_tab" role="tabpanel">
               @include('includes/user_dashboard.user_profile')
            </div>
       <?php
        }
       ?>
            <!-- 1st tab end -->
            <!-- 2 tab strat -->
            <div class="tab-pane" id="accountcredentials_tab" role="tabpanel">
               @include('includes/user_dashboard.account_credentials_edit')
            </div>
         </div>
         <!-- 2st tab end -->
         <!-- 3rd tab strat -->
         <div class="tab-pane" id="guest_registry_tab" role="tabpanel">
            @include('includes/user_dashboard.guest_registry')
         </div>
         <!-- 3rd tab end -->
         <!-- 4rd tab strat -->
         <div class="tab-pane" id="guest_registry_tab2" role="tabpanel">
            @include('includes/user_dashboard.local_delievery')
         </div>
         <!-- 4rd tab end -->
         <!-- 5rd tab strat -->
         <div class="tab-pane" id="guest_registry_tab3" role="tabpanel">
            @include('includes/user_dashboard.order_tracking')
         </div>
         <!-- 5rd tab end -->
         <!-- 6rd tab strat -->
         <div class="tab-pane" id="guest_registry_tab4" role="tabpanel">
            @include('includes/user_dashboard.support_local')
         </div>
         <!-- 6rd tab end -->
         <!-- 7rd tab strat -->
         <div class="tab-pane" id="guest_registry_tab5" role="tabpanel">
            @include('includes/user_dashboard.submit_review')
         </div>
         <!-- 7rd tab end -->
         <!-- 8rd tab strat -->
         <div class="tab-pane" id="guest_registry_tab6" role="tabpanel">
               @include('includes/user_dashboard.faq')
         </div>
         <!-- 8rd tab end -->
         <!-- 9rd tab strat -->
         <div class="tab-pane" id="guest_registry_tab7" role="tabpanel">
            <h1 style="font-size:40px;">9 9 9 9 9 9 9</h1>
         </div>
         <!-- 9rd tab end -->
      </div>
   </div>
</section>
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js
   "></script>
@include('includes.footer')