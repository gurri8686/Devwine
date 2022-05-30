@include('includes.header')
<title> Wine Country Weekends System Admin Dashboard</title>
<link rel="stylesheet" href="{{ asset('/css/flexslider.css') }}" type="text/css" media="screen" />
<style>

.col-4.tabs-data button {
    color: black;
}
.content li {
    color: gray;
}  
.dashboard-title{
  text-align: center;
}

#slider .flex-viewport {
    height: 100%;
}

</style>         
</head>
<body>
<section class="dashbord-sec">
<div class="container">
   <div  class="col-sm-12">
      <div class="row system_admin">
         <div class="col-3 tabs-data" >
            <?php
            $id = isset($_GET['id']) ? $_GET['id'] : "";
            $filter = isset($_GET['filter']) ? $_GET['filter'] : "";
            $sort = isset($_GET['sort']) ? $_GET['sort'] : "";
            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
            $total = isset($_GET['total']) ? $_GET['total'] : "";
            ?>
            <div class=" align-items-start" style="background-color: #fff;">
               @include('includes/creation_forms.left_nav')
    </div>
 </div>
         <div class="col-9">
          
          <div class="tab-content clearfix" id="v-pills-tabContent">
            <?php

             if ($id ==''){?>
          	<div class="tab-pane active" id="sysadmin_tab" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          		@include('includes/creation_forms.sysadmin')
          	</div>
          <?php }else if($id !=""){ ?>
                    <div class="tab-pane active" id="sysadmin_tab" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    </div>
            <?php 
            }
            ?>
			<?php
            // echo $_SERVER['REQUEST_URI'];
				$id = isset($_GET['id']) ? $_GET['id'] : "";
				$search_page = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "";
				if ($id != '')
				{
				    $vendors_data = $query = DB::table('Vendors_Account')->where('ID', $id)->select('*')
				    ->get();
                    $next = DB::table('Vendors_Account')->where('id', '>', $id)->orderBy('id')->first();
                    $previous = DB::table('Vendors_Account')->where('id', '<', $id)->orderBy('id','desc')->first();
				    foreach ($vendors_data as $key => $value)
				    {
                        if($total > 1){
    					$prev_id = isset($previous->ID) ? $previous->ID : 0;
    					$next_id = isset($next->ID) ? $next->ID : 0;
                    }else{
                        $prev_id = 0;
                        $next_id = 0;
                    }
			     ?>
                        <div class="tab-pane active" id="search" role="tabpanel">
                            <?php 
                            if($value->vendor_type == 'Accomodation'){
                            ?>
                            @include('includes/creation_forms/profile_pages.accomodation')
                        <?php 
                            }
                        ?>

                        <?php 
                            if($value->vendor_type == 'Excursion'){
                            ?>
                             @include('includes/creation_forms/profile_pages.excursion')
                            <?php 
                            }
                        ?>
                         <?php 
                            if($value->vendor_type == 'Winery'){
                            ?>
                            @include('includes/creation_forms/profile_pages.winery')
                             <?php 
                            }
                        ?>
                        <?php 
                        if($value->vendor_type == 'License'){
                        ?>
                            @include('includes/creation_forms/profile_pages.license')
                        <?php 
                        }
                        ?>
                        <?php 
                        if($value->vendor_type == 'Non-License'){
                        ?>
                            @include('includes/creation_forms/profile_pages.non_license')
                        <?php 
                        }
                        ?>
                        </div>
                    <?php
                    }
                }
                else
                { ?>
                   <!-- Tab data for Accomodation Vendor Creation Form -->
                   <div class="tab-pane" id="accommodation_tab" role="tabpanel">
                      @include('includes/creation_forms.accomodation')
                      </div>
                      <?php
                } ?>
                   <!-- Tab data for Excursion Vendor Creation Form-->                   
                    <div class="tab-pane" id="excursion_tab" role="tabpanel">
                        @include('includes/creation_forms.excursion')
                    </div>                

              <!-- Tab Content of Winery Vendor Creation Form -->
            <div class="tab-pane" id="winery_tab" role="tabpanel">
                 @include('includes/creation_forms.winery')
           </div>
             <!-- Tab Content of License Vendor Creation Form -->
            <div class="tab-pane" id="license_tab" role="tabpanel">
                 @include('includes/creation_forms.license')
          </div>
            <!-- Non-License Vendor Creation Form-->
             <div class="tab-pane" id="non-license_tab" role="tabpanel">
              @include('includes/creation_forms.non_license')
             </div>
             <div class="tab-pane" id="event_tab" role="tabpanel">
                <?php 
               if($id==''){
                ?>
               <p>test3</p>
                <?php
                }
                ?>
             </div>
              <div class="tab-pane" id="souvnier_tab" role="tabpanel">
                <?php 
               if($id==''){
                ?>
               <p>test4</p>
               <?php
                }
                ?>
             </div>
             <div class="tab-pane" id="ad_tab" role="tabpanel">
                <?php 
               if($id==''){
                ?>
               <p>test5</p>
                <?php
                }
                ?>
             </div>
            <div class="tab-pane" id="essential_tab" role="tabpanel">
                <?php 

               if($id==''){
                ?>
               <p>test6</p>
               <?php
                }
                $t_id = isset($_GET['t_id']) ? $_GET['t_id'] : '';

                ?>
             </div>
   </div>
   </div>
   </div>
 </section>
 
 @include('includes.footer') 
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js
"></script>

<!-- FlexSlider -->
<script defer src="{{ asset('/js/jquery.flexslider.js') }}"></script>

<script type="text/javascript">
//   $(function(){
//     SyntaxHighlighter.all();
//   });
$(window).on('load', function(){

//$('.nav-pills li a[href="'+arguments+'_tab"]').trigger("click");
    $('#carousel').flexslider({
      animation: "slide",
      controlNav: false,
      directionNav:false,
      animationLoop: true,
      slideshow: true,
      itemWidth: 126.55,
      itemMargin: 6,
      asNavFor: '#slider'
    });

    $('#slider').flexslider({
      animation: "slide",
      controlNav: false,
      directionNav:false,
      animationLoop: true,
      slideshow: true,
      video: true,
      slideshowSpeed: "3000",
      sync: "#carousel",
      start: function(slider){
        $('body').removeClass('loading');
      },
      before: function(){
        //reload video
        $('video').each(function() {
            $(this).get(0).load();
        });
      },
      after: function(){
        // sets active_id to the active slide
        var active_class = $('.flex-active-slide').attr('data-class');
        //if the active slide is the video slide...  
        if( active_class == "video"){
            
            var active_id = $('.flex-active-slide').attr('id');
			
			
            var iframe;
            if( active_id == "slide1"){            				 
				 	var iframe = document.getElementById("slide1_video");
					$('.short-box').click(function(){ 
						console.log(iframe);			 
					  var url = iframe.getAttribute('src');
					  iframe.setAttribute('src', '');
					  iframe.setAttribute('src', url);
					});
				}

            if( active_id == "slide2"){                
				var iframe = document.getElementById("slide2_video");
				$('.short-box').click(function(){ 
						console.log(iframe);			 
					  var url = iframe.getAttribute('src');
					  iframe.setAttribute('src', '');
					  iframe.setAttribute('src', url);
				});
            }

           if( active_id == "slide3"){                
				var iframe = document.getElementById("slide3_video");
				$('.short-box').click(function(){ 
						console.log(iframe);			 
					  var url = iframe.getAttribute('src');
					  iframe.setAttribute('src', '');
					  iframe.setAttribute('src', url);
				});
            } 

            if( active_id == "slide4"){               
				var iframe = document.getElementById("slide4_video");
				$('.short-box').click(function(){ 
						console.log(iframe);			 
					  var url = iframe.getAttribute('src');
					  iframe.setAttribute('src', '');
					  iframe.setAttribute('src', url);
				});
            }

            if( active_id == "slide5"){              
					var iframe = document.getElementById("slide5_video");
					$('.short-box').click(function(){ 
					var url = iframe.getAttribute('src');
					  iframe.setAttribute('src', '');
					  iframe.setAttribute('src', url);
				});
            }

            if( active_id == "slide6"){
                /* play the video and pause the slider
                slide6_video.play();
                $('.flexslider').flexslider("pause");
                when the video has ended, go to the next slide and play the slider
                slide6_video.onended = function(){
                    $('.flexslider').flexslider("next");
                    $('.flexslider').flexslider("play");
                } */
				var iframe = document.getElementById("slide5_video");
				$('.short-box').click(function(){ 
						console.log(iframe);			 
					  var url = iframe.getAttribute('src');
					  iframe.setAttribute('src', '');
					  iframe.setAttribute('src', url);
				});
            }
			
			
          
          
        }
    },
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {  
    var url = window.location.href;
    var arguments = "<?php echo $t_id;?>";
    console.log(arguments);
    if(arguments != ''){
    $('.nav-pills li').removeClass('active');
    $('.tab-pane').removeClass('active');
    $('#'+ arguments).parent('li').addClass('active');
    $('#'+ arguments+'_tab').addClass('active');
}
      $('#file').change(function(){
          const file = this.files[0];
          const filename = file['logo'];
          
          if (file) {
            let reader = new FileReader();
            console.log(filename);
          }
          
      });

  CKEDITOR.replace('description');
  // Accomodation Vendor Ajax 
  $("#accomodation_form").submit(function(ee){
    var desc = CKEDITOR.instances['description'].getData();
    var form = $('#accomodation_form')[0]; 
    var formValues = new FormData(form);
    formValues.append('description',desc);
    
    $.ajax({
           type:'POST',
           url:"{{ route('accomodation_form.form') }}",
            data:formValues, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){

                if(data.status !=undefined){
                   conf = confirm("A vendor account with this name and address already exists in the directory.  Do you wish to continue?");    
                    if(conf){
                        $("#AlreadyExistFlag").val(1)
                        var form = $('#form')[0]; 
                        var formValues = new FormData(form);
                        $.ajax({
                           type:'POST',
                           url:"{{ route('accomodation_form.form') }}",
                            data:formValues, 
                            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                            processData: false, 
                            success:function(data){
                         }
                        });         
                        window.location.reload();
                    }else{
                        $("#AlreadyExistFlag").val(0) 
                    }
                } 
           }                        
        });    

        ee.preventDefault();  
        return false;   
    });   

     // Excursion Vendor Form Ajax

     $("#submit_form1").submit(function(ee){  
    // var desc = CKEDITOR.instances['description'].getData();
    var form = $('#submit_form1')[0]; 
    var formValues1 = new FormData(form);
    // formValues1.append('description',desc);
    console.log(form);
    $.ajax({
           type:'POST',
           url:"{{ route('excurison_form.form') }}",
            data:formValues1, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){
            window.location.reload();
           }                        
        });    

        ee.preventDefault();  
        return false;   
    });  

     // Winery Vendor Ajax

     $("#winery_form").submit(function(ee){  
    // var desc = CKEDITOR.instances['description'].getData();
    var form = $('#winery_form')[0]; 
    var formValues1 = new FormData(form);
    // formValues1.append('description',desc);
    console.log(form);
    $.ajax({
           type:'POST',
           url:"{{ route('winery_form.form') }}",
            data:formValues1, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){
            window.location.reload();
           }                        
        });    

        ee.preventDefault();  
        return false;   
    });  

     // License Vendor Ajax

     $("#license_form").submit(function(ee){  
    // var desc = CKEDITOR.instances['description'].getData();
    var form = $('#license_form')[0]; 
    var formValues1 = new FormData(form);
    // formValues1.append('description',desc);
    $.ajax({
           type:'POST',
           url:"{{ route('license_form.form') }}",
            data:formValues1, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){
            window.location.reload();
           }                        
        });    

        ee.preventDefault();  
        return false;   
    });  

// Non License Form Ajax
     $("#non_license_form").submit(function(ee){  
    // var desc = CKEDITOR.instances['description'].getData();
    var form = $('#non_license_form')[0]; 
    var formValues1 = new FormData(form);
    // formValues1.append('description',desc);
    $.ajax({
           type:'POST',
           url:"{{ route('nonlicense.form') }}",
            data:formValues1, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){
            window.location.reload();
           }                        
        });    

        ee.preventDefault();  
        return false;   
    }); 
  
});
  </script>
</body>
