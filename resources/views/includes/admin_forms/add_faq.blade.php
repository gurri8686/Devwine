<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
@include('includes.header')
<section class="dashbord-sec my-4">
   <div class="container">
   <div class="row system_admin">
      
      <div class="user-main-div">
<div class="user-content-div">
	<div class="submit-review-custom">
		
		<div class="row">
		<div class="col-md-6">
			<div class="btn-box-bx text-right mt-3 text-left">
				<h4 class="form-heading">Add Frequently Asked Questions</h4>
			</div>
		</div>
		<div class="col-md-6">
			<div class="btn-box-bx text-right mt-3 pull-right">
				<button type="button" id="" class="btn wine-btn"><a href="/faq-listing" class="text-white text-un">Manage FAQ </a></button>
			</div>
		</div>
		</div>
		
		 <?php 	$action = "insert"; $id;
		 $id = isset($_GET['id']) ? $_GET['id'] : "";
			if(!empty($id)):		 
				$faq_data = $query = DB::table('vendor_faq')->where('id', $id)->orderBy('id')->first();
				$question_title = 	$faq_data->question_title;
				$question = 	$faq_data->question;
				$answer = 	$faq_data->answer;
				
				$action = "update";
			endif;				
		?>
   <div class="form-box row">
	<form id="faq_form">	
		<div class="row">
		<div class="col-lg-6">
		<input type="hidden" name="faq_action" value="<?php echo $action ?>">
		<input type="hidden" name="faq_id" value="<?php echo $id ?>">
		 <div class="form-group">		
			<label class="form-label">Question Title</label>
			<input type="text" class="form-control" id="question_title" name="question_title" value="<?php echo isset($question_title) ? $question_title : "";?>">
		 </div>
		</div>
		<div class="col-lg-6">
		 <div class="form-group">
			<label class="form-label">Question</label>
			<input type="text" class="form-control" id="question" name="question" required="" value="<?php echo isset($question) ? $question : "";?>">
		 </div>
		</div>
	</div>
		<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Answer</label>
			<textarea class="form-control" name="answer" rows="5" id="answer" required=""><?php echo isset($answer) ? $answer : "";?></textarea>
			</div>
		</div>
		<div class="row">
		<div class="col-md-6">
			<div class="btn-box-bx text-right mt-3 text-left">
				<button type="submit" id="" class="btn wine-btn">Save</button>
			</div>
		</div>
		<div class="col-md-6">
			<div class="btn-box-bx text-right mt-3 pull-right">
				<button type="button" id="" class="btn wine-btn"><a href="/faq-listing" class="text-white text-un">Cancel </a></button>
			</div>
		</div>
		</div>
	</form>
   </div>
</div>
</div>
</div>
  
   </div>
</section>
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js
   "></script>
<script type="text/javascript">
  $(document).ready(function() {  	 
	$("#faq_form").submit(function(ee){     
    var form = $('#faq_form')[0]; 
    var formValues1 = new FormData(form);
	console.log('form-submitted');
    //console.log(form);
    $.ajax({
           type:'POST',
           url:"{{ route('faq_submit.form') }}",
            data:formValues1, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){ 
				if(data == 'inserted'){					
					alert('New FAQ added successfully');
				}else if(data == 'updated'){
					alert('FAQ updated successfully');
				}
				window.location.href = "/faq-listing";
           }                        
        });    
        ee.preventDefault();  
        return false;   
    });
	
  });
  </script>   
@include('includes.footer')
