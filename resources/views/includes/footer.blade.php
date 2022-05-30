<footer class="bg-light text-center text-lg-start footer-content">
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
  <!-- Copyright -->
  <div class="text-center p-3 copyright-content">
    Copyright © 2021 Wine Country Weekends Wine Country Weekends | Powered by Wine Country Weekends
    </div>
  <!-- Copyright -->
</footer>
<style>
	label.cabinet{
	display: block;
	cursor: pointer;
}

label.cabinet input.file{
	position: relative;
	height: 100%;
	width: auto;
	opacity: 0;
	-moz-opacity: 0;
  filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
  margin-top:-30px;
}

#upload-demo{
	width: 250px;
	height: 250px;
  padding-bottom:25px;
}
/*figure figcaption {
    position: absolute;
    bottom: 0;
    color: #fff;
    width: 100%;
    padding-left: 9px;
    padding-bottom: 5px;
    text-shadow: 0 0 10px #000;
}*/
.cr-slider-wrap{
	    position: relative;
    bottom: 307px;
    left: 98px;
}
.cr-boundary{
	position: relative;
    bottom: 143px;
    left: 91px;
}
	</style>
	<script src="https://foliotek.github.io/Croppie/croppie.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// $('.').click(function(e){
		// 	alert('test');
		// 	var id = $(this).attr('data-id');
		// 	$( "#exampleModal" ).modal( "show");
		// 	$( "#exampleModal #vendor_id" ).val(id);

		// });
		// basla
$(".gambar").attr("src", "http://www.nedir.org/deniz/gunes.jpg").css('height', '500');
						var $uploadCrop,
						tempFilename,
						rawImg,
						imageId;
						function readFile(input) {
				 			if (input.files && input.files[0]) {
				              var reader = new FileReader();
					            reader.onload = function (e) {
									$('.upload-demo').addClass('ready');
									$('#cropImagePop').modal('show');
						            rawImg = e.target.result;
					            }
					            reader.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Üzgünüm - browseriniz bu işlemi desteklemiyor: FileReader API");
						    }
						}

						$uploadCrop = $('#upload-demo').croppie({
							viewport: {
								width: 150,
								height: 200,
							},
							enforceBoundary: false,
							enableExif: true
						});
						$('#cropImagePop').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop.croppie('bind', {
				        		url: rawImg
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img').on('change', function () { imageId = $(this).data('id'); tempFilename = $(this).val();
																										 $('#cancelCropBtn').data('id', imageId); readFile(this); });
						$('#cropImageBtn').on('click', function (ev) {
							$uploadCrop.croppie('result', {
								type: 'base64',
								format: 'jpeg',
								size: {width: 150, height: 200}
							}).then(function (resp) {
								$('#item-img-output').attr('src', resp);
								$('#cropImagePop').modal('hide');
							});
						});
				// bitti
		$(".btn-clicked").click(function(){
			var status_id = $(this).attr('href');
			
			$('.nav-pills li').removeClass('active');

			$('.nav-pills li a[href="'+status_id+'"]').trigger("click");
			//setTimeout(function(){ 
				$('.nav-pills li a[href="'+status_id+'"]').parent('li').addClass('active'); 
			//}, 2000);
			
			
           });
           });
		   
		   /* submit enquiry */
	// 	   $("#enquiry_form").click(function(ee){ alert('form-submitted');
	// 		var form = $('#enquiry_form')[0]; 
	// 		var formValues1 = new FormData(form);
	// 		console.log('form-submitted');
	// 		//console.log(form);
	// 		$.ajax({
	// 			   type:'GET',
	// 			   url:"/accomodation_inqueries",
	// 				contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
	// 				processData: false, 
	// 				success:function(data){ 
	// 					if(data.status == 200){				
	// 						alert('Your enquiry submitted! We will back to you soon.');
	// 						$("#exampleModal").modal('hide');
	// 					}else if(data.status == 400){
	// 						alert(data.msg);
	// 					}
	// 					window.location.href = "/faq-listing";
	// 			   }                        
	// 			});    
	// 			ee.preventDefault();  
	// 			return false;   
	// 		});
	// 	   /* submit enquiry end */
	// });
</script>
<script type="text/javascript">
		jQuery('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
		})
		</script>
		<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script type="text/javascript">
// var input = document.getElementById( 'file-upload' );
// console.log(input)
// var infoArea = document.getElementById( 'file-upload-filename' );

// input.addEventListener( 'change', showFileName );

// function showFileName( event ) {
  
//   // the change event gives us the input it occurred in 
//   var input = event.srcElement;
  
//   // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
//   var fileName = input.files[0].name;
  
//   // use fileName however fits your app best, i.e. add it into a div
//   //infoArea.textContent = 'File name: ' + fileName;
// }
</script>
<script type="text/javascript">
	$(".navbar-toggler").click(function(){
  $(".navbar-collapse").toggleClass("menu-slide");
});

</script>
<script>
    $(".form-control").focusout(function(){
  
  if($(this).val()!=''){
  	$(this).css("background-color", "#E8F0FD");
  }
  else{
  		$(this).css("background-color", "");
  }
});
</script>
<script type="text/javascript">
	
</script>
</body></html>