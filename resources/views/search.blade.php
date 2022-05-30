@include('includes.header')
<title>Search Page</title>
<?php 
$filter = isset($_GET['filter']) ? $_GET['filter'] : "";
$id = isset($_GET['id']) ? $_GET['id'] : "";
$sort = isset($_GET['sort']) ? $_GET['sort'] : "";
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
?>
<div class="container-fluid">
   <form id="searchform" action="/vendor">
      <input type="hidden" name="id" id="vendorID">
      <input type="hidden" name="total" id="total">
      <input type="hidden"  id="tokenforserachform" value="{{csrf_token()}}" />  
      <div class="search-bar-box row">
         <div class="bar-box col-lg-2 col-sm-6 mb-3">
            <div class ="search-btn">
               <div class="search">
                  <input type="text" class="form-control totalresults" value="" name="total"  > 
                  <button  class="btn btn-primary wine-btn" disabled>Results</button>
               </div>
            </div>
         </div>
         <div class="bar-box col-lg-3 col-sm-6 mb-3">
            <select class="form-control" name="filter" id="filter">
               <option value=""></option>
               <option value="All">All</option>
               <option value="User">Registered Users</option>
               <option value="Accomodation">Accomodations</option>
               <option value="Excursion">Excursions</option>
               <option value="Winery">Wineries</option>
               <option value="License">License</option>
               <option value="Non-License">Non-License</option>
            </select>
         </div>
         <div class="bar-box col-lg-3 col-sm-6 mb-3">
            <select class="form-control" name="sort" id="sort">
               <option label=""></option>
               <!--- ALL Selection based Filter---->
               <!--- Registered Users Selection based Filter---->
               <option value="User" class="User">Home City/Town</option>
               <option value="User" class="User">Home Province/State</option>
               <option value="User" class="User">Home Country</option>
               <optgroup label="Accommodation" class="User">
                  User Status</option>
                  <option value="UserStatus||Published Listing" class="User">Published Listing</option>
                  <option value="UserStatus||ProfileUpgrade" class="User">ProfileUpgrade</option>
                  <option value="UserStatus||Suspend" class="User">Suspended</option>
               </optgroup>
               <!--- Accommodation  Selection based Filter---->
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
               <!--- Excursion  Selection based Filter---->
               <optgroup label="Excursion Sub-Type" class="Excursion">
                  <option value="accomodation_sub_type||Arts/Culture" class="Excursion">- Arts/Culture</option>
                  <option value="accomodation_sub_type||Night Life" class="Excursion">- Night Life</option>
                  <option value="accomodation_sub_type||Sport & Adventure" class="Excursion">- Sport & Adventure</option>
                  <option value="accomodation_sub_type||Thrill Seeking" class="Excursion">- Thrill Seeking</option>
               </optgroup>
               <!--- Wineries  Selection based Filter---->
               <optgroup label="Wineries Sub-Type" class="Winery">
                  <option value="accomodation_sub_type||Destination" class="Winery">- Destination</option>
                  <option value="accomodation_sub_type||Vineyard" class="Winery">- Vineyard</option>
                  <option value="accomodation_sub_type||Cellar" class="Winery">- Cellar</option>
                  <option value="accomodation_sub_type||Farm" class="Winery">- Farm</option>
                  <option value="accomodation_sub_type||Micro / Urban" class="Winery">- Micro / Urban</option>
               </optgroup>
               <optgroup label="Tasting Type" class="Winery">
                  <option value="winery_tasting_type" class="Winery">Basic Tasting</option>
                  <option value="winery_tasting_type" class="Winery">Premium Tasting</option>
               </optgroup>
               <!--- Licensees  Selection based Filter---->
               <optgroup label="Licensees Sub Type" class="License">
                  <option value="accomodation_sub_type||Restaurant" class="License">- Restaurant</option>
                  <option value="accomodation_sub_type||Bar / Pub" class="License">- Bar / Pub</option>
                  <option value="accomodation_sub_type||Lounge" class="License">- Lounge</option>
                  <option value="accomodation_sub_type||Theatre / Venue" class="License">- Theatre / Venue</option>
               </optgroup>
               <!--- Non-License  Selection based Filter---->
               <optgroup label="Non-Licensees" class="Non-License">
                  <option value="accomodation_sub_type||Cafe" class="Non-License">- Cafe</option>
                  <option value="accomodation_sub_type||Diner" class="Non-License">- Diner</option>
                  <option value="accomodation_sub_type||Eatery" class="Non-License">- Eatery</option>
                  <option value="accomodation_sub_type||Public Health" class="Non-License">- Public Health</option>
                  <option value="accomodation_sub_type||Personal Care & Fitness" class="Non-License">- Personal Care & Fitness</option>
                  <option value="accomodation_sub_type||Farms & Grocers" class="Non-License">- Farms & Grocers</option>
                  <option value="accomodation_sub_type||General" class="Non-License">- General</option>
               </optgroup>
               <!--- Common Selection based Filter expect Regitered Users---->
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
          <div class="bar-box reset-btn-div col-lg-1 col-sm-2">
             <input type="reset" value="Reset" class="reset-btn btn wine-btn">
          </div>
        
      </div>
   </form>
   <div class="responsive-table">
      <table class="table bg-white table-bordered">
         <thead>
            <tr>
               <th scope="col">Page Link</th>
               <th scope="col">Account Type</th>
               <th scope="col">Name</th>
               <th scope="col">Street Address</th>
               <!-- <th scope="col">Unit</th>   -->
               <th scope="col">City/Town</th>
               <th scope="col">Province/State</th>
               <th scope="col">Country</th>
               <th scope="col">Sub-Region</th>
               <th scope="col">Email</th>
               <th scope="col" style="width: 200px;">Phone</th>
            </tr>
         </thead>
         <tbody  id="searchsdata">
         </tbody>
      </table>
   </div>
   	      
</div>
@include('includes.footer')
</body>
<script type="text/javascript">
   $(document).ready(function(){

      <?php 
         if($filter != ''){ ?>
            $("#filter").val('<?php echo $filter;?>');
            setTimeout(function() { 
               $("#filter").trigger('change');
            }, 500);   
        <?php }
      ?>
      <?php 
         if($sort != ''){ ?>
            $("#sort").val('<?php echo $sort;?>');
        <?php }
      ?>
      <?php 
         if($keyword != ''){ ?>
            $("input[name=keyword]").val('<?php echo $keyword;?>');
        <?php }
      ?>

      <?php 
         if($filter != '' || $sort !='' || $keyword !='' || $id !=''){ ?>
            // console.log('test');
            setTimeout(function() { 
              $("#searchajax").trigger("click")
          }, 1000);
            
        <?php }
      ?>

   	$("#filter").change(function(){
   			$("#sort option,#sort optgroup").hide()
   			$("#sort ."+$(this).val()).show()
   	})
   
   $("#searchajax").click(function(e){
   	 e.preventDefault();
   	$("#searchsdata").html("loading...");
   	var id = '';
   	var filter  = $("#filter").val();
   	var sort = $("#sort").val();
   	var keyword 		= $("input[name=keyword]").val();
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
   
   				  		if(data[i]['province'] == null){
   				  		var province = '-';
   				  	}else{
   				  		var province = data[i]['province'];
   				  	}
   				  	if(data[i]['vendor_type'] == null){
   				  		var vendor_type = '-';
   				  	}else{
   				  		var vendor_type = data[i]['vendor_type'];
   				  	}
   				  		if(data[i]['given_name'] == null){
   				  		var given_name = '-';
   				  	}else{
   				  		var given_name = data[i]['given_name'];
   				  	}
   				  	if(data[i]['street_address'] == null){
   				  		var street_address = '-';
   				  	}else{
   				  		var street_address = data[i]['street_address'];
   				  	}
   				  	if(data[i]['city'] == null){
   				  		var city = '-';
   				  	}else{
   				  		var city = data[i]['city'];
   				  	}
   				  	if(data[i]['country'] == null){
   				  		var country = 'Canada';
   				  	}else{
   				  		var country = data[i]['country'];
   				  	}
   				  	if(data[i]['subregion'] == null){
   				  		var sub_region = '-';
   				  	}else{
   				  		var sub_region = data[i]['subregion'];
   				  	}
   				  	if(data[i]['email'] == null){
   				  		var email = '-';
   				  	}else{
   				  		var email = data[i]['email'];
   				  	}
   				  	if(data[i]['phone'] == null){
   				  		var phone = '-';
   				  	}else{
   				  		var phone = data[i]['phone'];
   				  	}
   
   					  tablehtml = tablehtml + " <tr> <td><a  onclick='submitProfilePage("+data[i].id+","+data.length+" )' class='profile-link'>Profile</a></td> <td>"+vendor_type+"</td> <td>"+given_name+"</td> <td>"+street_address+"</td> <td>"+city+"</td>  <td>"+province+"</td><td>"+country+"</td><td>"+sub_region+"</td><td>"+email+"</td><td>"+phone+"</td></tr>";
   				}
   				  $("#searchsdata").html('');
   				  
   				  $("#searchsdata").html(tablehtml);       
              }                        
           });
   	});
   	});

   function submitProfilePage(id,total){
      $("#vendorID").val(id);
      $("#total").val(total);
      $("#searchform").submit();
   }
</script>