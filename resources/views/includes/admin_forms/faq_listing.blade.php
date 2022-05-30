<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
@include('includes.header')
<section class="dashbord-sec">
   <div class="container">
   <div class="row system_admin">
      
      <div class="user-main-div">
<div class="user-content-div">
	<div class="submit-review-custom">
		<div class="col-md-12 d-flex justify-content-between align-items-center">
               <h4 class="form-heading">Frequently Asked Questions Listing</h4>
               <h4 class=""><a href="/dashboard" class="form-heading text-un">User Dashboard </a></h4>
        </div>
   <div class="form-box row">
   <div class="faq-listing-main">
	<table>		
		<thead>
			<tr>
				<th>Sno.</th>
				<th>FAQ Title</th>
				<th>FAQ Question</th>
				<th>FAQ Answer</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>				
		   <?php 
			$vendors_data = $query = DB::table('vendor_faq')->select('*')->get();
			$x =1;
			foreach ($vendors_data as $key => $value)
			{
				$id = 	$value->id;
				$question_title = 	$value->question_title;
				$question = 	$value->question;
				$answer = 	$value->answer;
			?>			
			<tr>
			<td><?php echo $x ?></td>	
			<td><b><?php echo $question_title ?></b></td>	
			<td><?php echo $question ?></td>	
			<td><?php echo $answer ?></td>
			<td> <a id="id" href="/add-faq?id=<?php echo $id?>" class="edit-row">Edit </a></td>			
			<td> <a id="id" href="JavaScript:void(0);" class="delete-row" onclick='deleteItem(<?php echo $id ?>)'> Delete </a></td>
			</tr>
			<?php $x++;
			}                     
			?>	
		
	</table>
	<a href="/add-faq" class="wine-btn mt-3">Add New FAQ</a>
	</div>
	
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
  function deleteItem(id) {
		if (confirm("Are you sure?")) {
				$.ajax({
				type:'POST',
				url:"{{ route('faq_delete.form') }}",
				data:  {'faq_id': id },  
				success:function(data){ 				
				alert('FAQ deleted successfully');
				window.location.href = "/faq-listing";
				}                        
			});    
		}
		return false;
	}
  </script>
   
@include('includes.footer')
