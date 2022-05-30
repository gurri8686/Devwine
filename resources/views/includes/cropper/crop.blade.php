<script type="text/javascript">var AjaxPath = "/crop_image";</script>
<script src="{{ asset('/dist_files/jquery.imgareaselect.js') }}" type="text/javascript"></script>
<script src="{{ asset('/dist_files/jquery.form.js') }}"></script>
<link rel="stylesheet" href="{{ asset('/dist_files/imgareaselect.css') }}">
<script src="{{ asset('/js/functions.js') }}" type="text/javascript"></script>
	
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="opencroButton" data-bs-toggle="modal" data-bs-target="#exampleModal" style="display: none;">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
			<div class="modal-content">
				 <div class="modal-header">			
				    <h4 class="form-heading">Change <span class="titleforCropFile"></span></h4>
				</div> 
				<form class="container" id="cropimage" method="post" enctype="multipart/form-data" action="/crop_image"> 
			
					<input type="file" name="profile-pic" id="profile-pic" value=""  />
					<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
					<input type="hidden" name="hdn-x1-axis" id="hdn-x1-axis" value="" />
					<input type="hidden" name="hdn-y1-axis" id="hdn-y1-axis" value="" />
					<input type="hidden" name="hdn-x2-axis" value="" id="hdn-x2-axis" />
					<input type="hidden" name="hdn-y2-axis" value="" id="hdn-y2-axis" />
					<input type="hidden" name="hdn-thumb-width" id="hdn-thumb-width" value="" />
					<input type="hidden" name="hdn-thumb-height" id="hdn-thumb-height" value="" />
					<input type="hidden" name="action" value="" id="action" />
					<input type="hidden" name="image_name" value="" id="image_name" />
					<input type="hidden" name="fileSaveID" value="" id="fileSaveID" />
					<input type="hidden" name="vendorID" value="" id="vendorCropID" />
					<div id='preview-profile-pic'></div>
					<div id="thumbs" style="padding:5px; width:600px"></div>
		 		</form> 
				<div class="modal-footer">
					<button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
					<button type="button" id="save_crop" class="btn btn-primary">Crop & Save</button>
					<button type="button" id="save_without_crop" class="btn btn-primary">Save Without Crop</button>
				</div>
					
      </div>
    </div>
  </div>
</div>

<style type="text/css">
	img#photo {
    max-width: 100%;
 }
 span.titleforCropFile {
    font-size: inherit;
    color: inherit;
}
input#profile-pic {
    margin-top: 20px;
}
div#preview-profile-pic {
    margin-top: 10px;
    /* text-align: center; */
    width: 100%;
}
</style>
<script type="text/javascript">
	$(function () {
        
         $(".close").click(function () {
            $("#exampleModal").modal("hide");
            
        });
         $('#exampleModal').on('hidden.bs.modal', function () {
				  // do something…
				   $('img#photo').imgAreaSelect({remove:true});
				   $('img').imgAreaSelect({remove:true});
				   jQuery("#preview-profile-pic").html('');
					jQuery("#profile-pic").val('');
					
				})
    });
</script>