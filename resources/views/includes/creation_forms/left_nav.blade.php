 <ul  class="nav nav-pills">
                <li class="dashbord-heading">
             <?php
                $id = isset($_GET['id']) ? $_GET['id'] : "";
                if ($id !=''){
            ?>
               <li class="">
               <a href="#sysadmin_tab" data-toggle="tab" id="sysadmin">Vendor Dashboard</a>
               </li>
           <?php }else{?>
            <li class="active">
               <a href="#sysadmin_tab" data-toggle="tab" id="sysadmin">Vendor Dashboard</a>
               </li>
           <?php }?>
               </li>
            <?php
            $id = isset($_GET['id']) ? $_GET['id'] : "";
            $filter = isset($_GET['filter']) ? $_GET['filter'] : "";
            $sort = isset($_GET['sort']) ? $_GET['sort'] : "";
            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";

            if ($id !='')
            {
            ?>
                <li class="active">
               <a href="/search/?id=<?php echo $id; ?>&filter=<?php echo $filter;?>&sort=<?php echo $sort;?>&keyword=<?php echo $keyword;?>" id="search_" href="/search" id="">Search</a>
               </li>
            <?php
            }else{
            ?>
         <li class="">
               <a  href="/search" id="">Search</a>
               </li>
         <?php
         }
         ?>
         <?php
if ($_SERVER['REQUEST_URI'] == '/vendor?id=' . $id)
{
?>
               <li class="active">
               <a  href="#accommodation_tab" data-toggle="tab" id="accommodation">Accomodation Vendor Form</a>
               </li>
                <?php
}
else
{
?>
         <li class="">
         <a  href="#accommodation_tab" data-toggle="tab" id="accommodation">Accomodation Vendor Form</a>
         </li>
			<?php
			}
			?>
               <li class="">
               	<a href="#excursion_tab" id="excursion" data-toggle="tab">Excursion Vendor Form</a>
               </li>
               <li class="">
               	<a href="#winery_tab" id="winery" data-toggle="tab">Winery Vendor Form</a>
               </li>
               <li class="">
               	<a href="#license_tab" id="license" data-toggle="tab">Licensed Vendor Form</a>
               </li>
               <li class="">
               	<a href="#non-license_tab" id="non-license" data-toggle="tab">Non-Licensed Vendor Form</a>
               </li>
               <li class="">
               	<a href="#event_tab" id="event" data-toggle="tab">Event Calendar</a>
               </li>
               <li class="">
               	<a href="#souvnier_tab" id="souvnier" data-toggle="tab">Souvnier Shop</a>
               </li>
                <li class="">
                	<a href="#ad_tab" id="ad-server" data-toggle="tab">Ad Server</a>
               </li>
                <li class="">
                	<a href="#essential_tab" id="essential" data-toggle="tab">We Are All Essential</a>
               </li>
               </ul>