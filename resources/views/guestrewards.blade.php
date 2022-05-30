<head>
   <style>
      #password-error{
         color: red;
      }
   </style>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
@include('includes.header')
<section class="guest-rewards py-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h2 class="big-heading-b">GUEST REWARDS</h2>
            <div class="checkboxes-section">
               <p class="mb-3">You won’t be able to experience all wine country has to offer in a single weekend or even over the course of an entire week so join our Guest Rewards program and indulge yourself whenever time permits.  Guest rewards may include discounts, special offers, contests and giveaways.</p>
               <h2 class="small-heading-s">Benefits include:</h2>
               <ul>
                  <li>One complimentary excursion activity when booking a minimum three (3) night’s accommodation.  Subject to availability.  Not applicable in conjunction with any other offer.</li>
                  <li>One-time local (Niagara region only) pick-up &amp; drop-off car service for members with accommodations booked at any partnering vendor location.  Subject to availability.  Four [4] guest maximum.</li>
                  <li>$10 online Souvenir Shop credit with every getaway booked (minimum of two [2] nights), $35 credit with every weeklong retreat booked (minimum of six [6] nights).</li>
                  <li>Members will enjoy free next day local delivery (Niagara region only) for online Souvenir Shop purchases</li>
                  <li>Members are also eligible to participate in affiliate programs, contests, promotions (i.e. Support Local) and periodic giveaways.</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="card text-black border-0" style="border-radius: 25px;">
               <div class="card-body p-md-5 border-0">
                  <div class="row justify-content-center">
                     <div class="col-lg-7">
                        <div class="form_data">
                           <div class="gust-reward-div">
                           <h1>JOIN GUEST REWARDS PROGRAM</h1>
                           <br>
                           <form method="POST" action="{{ route('register') }}" id="guest_reg">
                              @csrf
                              <div class="row mb-3">
                                 <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->
                                 <div class="col-lg-6">
                                    <input type="hidden" name="new_user" value="new_user">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="First Name" >
                                    <div class="alert alert-danger firstname msg" style="display:none;"></div>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                              <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->
                                 <div class="col-lg-6">
                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}"  autocomplete="lastname" placeholder="Last Name" >
                                    <div class="alert alert-danger lastname msg" style="display:none;"></div>
                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                              </div>
                              <div class="row mb-3">
                                 <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->
                                 <div class="col-lg-12">
                                    <input id="email" type="email" class="form-control matchedit @error('email') is-invalid @enderror" placeholder="Email Address" name="email" onchange="postinput()" value="{{ old('email') }}"  autocomplete="email">
                                    <div class="alert alert-danger email msg" style="display:none;"></div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                              </div>
                              <div class="row mb-3">
                                 <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->
                                 <div class="col-lg-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"  autocomplete="new-password">
                                    <div class="alert alert-danger password msg" style="display:none;"></div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                              
                                 <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> -->
                                 <div class="col-lg-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"  autocomplete="new-password">
                                 </div>
                              </div>
                              <div class="row mb-0">
                                 <div class="col-md-12">
                                    <!--  <button type="submit" class="btn btn-primary">
                                       {{ __('Register') }}
                                       </button> -->
                                   <!--  <ul class="btn-links-box justify-content-center">
                                       <li><a id="stepone" class="wine-btn">Continue</a>
                                    </ul> -->
                                    <div class="btn-box-bx btn-links-box text-right mt-3 text-center">
                                       <button type ="button" id="stepone" class=" rounded-pill wine-btn">Continue</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<input type="hidden" name="back_button" id="back_button_val" value="0">
<section class="steptwo py-5" style="display: none;">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            
            <div class="user-detail-box">
               <h2 class="big-heading-b text-center mb-5">USER REGISTRATION</h2>
               <p class="heading-p text-center mb-4">Please read the following and complete the accompanying skill testing question to qualify for prizes and periodic giveaways.</p>
               <div class="row">
                  <div class="col-lg-10 m-auto">
                     <div class="form_data p-5 text-left">
                        <p>The <b>WCW Guest Rewards</b> programs and affiliate contests are administered by the <b>Wine Country Weekends</b> team (hereafter contests & promotions organizers). Participants must be 19 years of age or older and must not reside in the province of Quebec.</p>
                        <p>Initiating a user account will enable patrons to access a variety of online utilities, programs and facilitate the booking of getaway packages and/or excursions. Personally identifying information collected will be used to enhance the online and in-person experience of patrons and guests.</p>
                        <p>Contests & promotions organizers reserves the right to cancel or suspend any program or contest, modify the rules, particularly if there is some factor that interferes with the proper administration of the contest. Additionally, contests & promotions organizers can substitute all or part of a prize, including for cash equal to the stated value of the prize in the rules, if all or part of the prize becomes unavailable for any reason.</p>
                        <p>The participant also agrees to receiving periodic email notifications and is free to opt out of any future notifications at any time.</p>
                        <div class="mb-3 form-check custom-checkbox-made col-md-12 mt-3">
                           
                           <input type="checkbox" class="form-check-input" id="agreeterms" name="terms">
                           <label class="form-check-label" for="exampleCheck1">I Agree with <a href="/terms-and-conditions" target="_blank">Terms&Condtions</a></label>
                        </div>
                        <div class="alert alert-danger terms msg" style="display: none;"></div>
                        <p>Please recognize the correct order of operations and complete the following skill testing question to qualify for prizes and periodic giveaways.</p>
                        <div class="pluse-minus-div text-center">
                           
                           <p id="question"><input id="ans" type="text"></p>
                           <div class="alert alert-danger captcha msg" style="display: none;"></div>
                           <div id="message">Please verify.</div>
                           <div id="success">Validation complete :)</div>
                           <div id="fail">Validation failed :(</div>       
                        </div>
                       <div class="co">
					   <div class="btn-box-bx btn-links-box text-right mt-3 text-center">
                                       <button type ="button" id="back_button" class="wine-btn rounded-pill">Back</button>
                                    </div> <ul class="btn-links-box justify-content-center">
                           <li><button type="submit" id="steptwosubmit" class="wine-btn rounded-pill">Done</button></li>
                        </ul>
						
									</div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script type="text/javascript">

   $(document).ready(function(){
      $(".matchedit").on('change', function postinput(){
        var email = $(".matchedit").val(); // this.value
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

        $.ajax({ 
            url: "{{ route('email_match.form') }}",
            data: { matchvalue: email },
            type: 'post'
        }).done(function(responseData) {
            if(responseData['status'] == 200){
               $('.email').text(responseData['msg']);
               $('.email').css('display','block');
               $('#stepone').attr('disabled','true');
            }else if(!pattern.test(email)){
               $('.email').text('Please enter valid E-mail');
               $('.email').css('display','block');
            }else{
               $('.email').css('display','none');
               $('#stepone').removeAttr('disabled');
            }
        }).fail(function() {
            console.log('Failed');
        });
    });
      $('#password').on('blur', function(){
         var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
   if(this.value.length < 8){ // checks the password value length
       $(".password").text('Please input 8 characters for password');
       $(".password").css('display','block');
       $(this).focus(); // focuses the current field.
       return false; // stops the execution.
      }else if(!regularExpression.test(this.value)){
         $(".password").text('Please use special characters');
          $(".password").css('display','block');
          $('#stepone').attr('disabled','true');
      }else{
         $(".password").css('display','none');
         $('#stepone').removeAttr('disabled');
      }
});
      // Condition For Back Button
       $("#back_button").click(function(){
         $('#back_button_val').val('1');
         var back_btn_val = $('#back_button_val').val();
         if(back_btn_val = '1'){
            // alert('1');
         $(".guest-rewards").show();
         $(".steptwo").hide();
      }
       });
       // Condition on click on Done Button

       $("#steptwosubmit").click(function(){  
	   
            var ans = $('#ans').val();
           if ($('#agreeterms').is(':checked')) {
             $(".terms").text('');
             $('.terms').css('display','none');
             
           }else{
			   event.preventDefault();
			   alert('please check terms');
             $(".terms").text('Please accept terms & conditions');
             $('.terms').css('display','block');
           }
            if(ans === ''){
            $('button[type=submit]').attr('disabled','disabled');
                $(".captcha").text('Please Calculate Mathematics Expression');
                $('.captcha').css('display','block');
            }
   });


   var randomNum1;
   var randomNum2;
   var randomNum3;
   var randomNum4;

   //set the largeest number to display

   var maxNum = 20;
   var total;

   randomNum1 = Math.ceil(Math.random()*maxNum);
   randomNum2 = Math.ceil(Math.random()*maxNum);
   randomNum3 = Math.ceil(Math.random()*maxNum);
   randomNum4 = Math.ceil(Math.random()*maxNum);
   total =randomNum1 +(randomNum2*randomNum3) - randomNum4;
// console.log(random);

   $( "#question" ).prepend( randomNum1 + " + (" + randomNum2 + "x" + randomNum3 +") -"+ randomNum4 + "=" );

   // When users input the value

   $( "#ans").keyup(function() {

      var input = $(this).val();
      var slideSpeed = 200;

      $('#message').hide();

      if (input == total) {
         $('button[type=submit]').removeAttr('disabled');
         $('#success').slideDown(slideSpeed);
         $('#fail').slideUp(slideSpeed);
		 $('.captcha').css('display','none');

      }else{
         $('button[type=submit]').attr('disabled','disabled');
         $('#fail').slideDown(slideSpeed);
         $('#success').slideUp(slideSpeed);
		 $(".captcha").text('Please Calculate Mathematics Expression');
		 $('.captcha').css('display','block');

      }
   });

     $("#stepone").click(function(){
      var firstname = $('#name').val();
      var lastname  = $('#lastname').val();
      var email     = $('#email').val();
      var password  = $('#password').val();
      var confirm   = $('#password-confirm').val();
      var validation_error = true;
     $(".firstname,.lastname,.email,.password").text('');
     
      if(firstname === ''){        
   
         $(".firstname").text('Firstname is required');
         $('.firstname').css('display','block');
		validation_error = false;
      }

      if(lastname === ''){
         $(".lastname").text('Lastname is required');
         $('.lastname').css('display','block');
		 validation_error = false;
      }

      if(email === ''){
         $(".email").text('E-mail is required');
         $('.email').css('display','block');
		 validation_error = false;
      }else{
         //check email with ajax
         //return false //if duplicate error
      }

      if(password === ''){
         $(".password").text('Password is required');
         $('.password').css('display','block');
		 validation_error = false;
      }else if(password !== confirm){
         $(".password").text('The password confirmation does not match.');
         $('.password').css('display','block');
		 validation_error = false;
      }
	  if(validation_error == true){     
         $(".steptwo").show();
         $(".guest-rewards").hide();
      }
   
   });
});
</script>
@include('includes.footer')