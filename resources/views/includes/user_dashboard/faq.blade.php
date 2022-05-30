<div class="user-main-div">
   <div class="user-content-div">
      <div class="faq-section">
         <div class="row">
            <div class="col-md-12">
               <h4 class="form-heading">Frequently Asked Questions</h4>
            </div>
         </div>
         <div class="accordion accordion-flush" id="accordionFlushExample">
            <!-- Collapse (1) Start -->
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
            <div class="accordion-item">
               <h2 class="accordion-header" id="flush-heading<?php echo $x; ?>">
                  <button class="accordion-button collapsed flex-column bg-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $x; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $x; ?>">
				  <?php if(!empty($question_title)) {  ?>
                  <b class="d-block w-100 text-dark"><?php echo $question_title ?></b>
				  <?php } ?>
                  <b class="text-muted d-block w-100"><?php echo $question ?></b>
                  </button>
               </h2>
               <div id="flush-collapse<?php echo $x ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $x ?>" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><?php echo $answer ?></div>
               </div>
            </div>
            <?php $x++; } ?>
			<a href="/add-faq" class="wine-btn mt-3">Add New FAQ</a>
         </div>
      </div>
   </div>
</div>