<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>


</head>
@include('includes.header')
<div class="container-fluid"  style="background-color:#eee;">
<div class="container ">
<section class="">
<div class ="row">
<h2 style="text-align: center;font-weight: bold;font-size: 45px;">Guest Rewards</h2>
<p style="font-size: 19px;padding-top: 19px;">
You won't be able to experience all wine country has to offer in a single weekend or even over the course of an entire week so join our Guest Rewards program
and indulge yourself whenever time permits. Guest Rewards may include discount,special offers,contests and giveaways.</p>
        <label style="font-weight: bold;font-size: 22px;padding-left: 25px;padding-top: 12px;">Benefits Include:</label>
		<ul>
			<li>
			   <p>One complimentary excursion activity when booking a minimum three (3) night's accomodation. Subject to availability. Not applicable in conjuction with my other offer.</p>
			</li>
			<li>
				<p>One-time local(Niagara region only) pick-up & drop-off car service for members with accomodation booked at any  partnering vendor location.Subject to availability. Four[4] guests maximum.</p>
			</li>
			<li>
				<p>$10 online Souuvenir Shop credit with gateway booked (minimum of two[2] nights). $25 credit with every weeklong retreat booked (minimum of six[6] nights).</p>
			</li>
			<li>
				<p>Members will enjoy free next day local delivery(Niagara region only) for online  Souvenir Shop purchases.</p>
			</li>
			<li>
				 <p>Members are also eligible to participate in affilate programs,contests, promotions(i.e Support Local) and periodic giveaways.</p>
			</li>                         
		</ul>
		<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
		    <button class="btn" id="guest_register"> <a href="/register-now">Register Now</a></button>
		</div>  
	</div>       
  </section>
</div>
</div>
 
@include('includes.footer')
<script>
jQuery(document).ready(function() {
 jQuery("#regForm").validate({
		rules: {
                    firstName: "required",
                    lastName: "required",
                    email: "required",
                    password: "required",
                    confirmPassword: "required",
                },
                messages: {
                    firstName: "First name is required",
                    lastName: "Last name is required",
                    email: "Email is required",
                    phone: "Phone number is required",
                    password: "Password is required",
                    confirmPassword: "Confirm password is required",
                }
   }); 
});
</script>
