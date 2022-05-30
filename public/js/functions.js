jQuery(document).ready(function(){
	/* When click on change profile pic */	
	jQuery('#change-profile-pic').on('click', function(e){
        jQuery('#profile_pic_modal').modal({show:true});        
    });	

	jQuery('#profile-pic').on('change', function()	{
		var input = event.srcElement;
		var fileName = input.files[0].name;
		var tmppath = URL.createObjectURL(event.target.files[0]);
		jQuery("#preview-profile-pic").html('');
		jQuery("#preview-profile-pic").html('Uploading....');
		jQuery("#cropimage").ajaxForm(
			{
				target: '#preview-profile-pic',
				success:    function() { 
					jQuery('img#photo').imgAreaSelect({
//					aspectRatio: '1:1',
					onSelectEnd: getSizes,
				});
				jQuery('#image_name').val(jQuery('#photo').attr('file-name'));
			}
		}).submit();
	});

	/* handle functionality when click crop button  */
	jQuery('#save_crop').on('click', function(e){
    e.preventDefault();
    params = {
            targetUrl: AjaxPath,
            action: 'save',
            x_axis: jQuery('#hdn-x1-axis').val(),
            y_axis : jQuery('#hdn-y1-axis').val(),
            x2_axis: jQuery('#hdn-x2-axis').val(),
            y2_axis : jQuery('#hdn-y2-axis').val(),
            thumb_width : jQuery('#hdn-thumb-width').val(),
            thumb_height:jQuery('#hdn-thumb-height').val(),
            fileSaveID:jQuery('#fileSaveID').val(),
            vendorID:jQuery('#vendorCropID').val()
        };
        saveCropImage(params);
    });
    /* handle functionality when click crop button  */
	jQuery('#save_without_crop').on('click', function(e){
    e.preventDefault();
    params = {
            targetUrl: AjaxPath,
            action: 'save_without_crop',
            x_axis: jQuery('#hdn-x1-axis').val(),
            y_axis : jQuery('#hdn-y1-axis').val(),
            x2_axis: jQuery('#hdn-x2-axis').val(),
            y2_axis : jQuery('#hdn-y2-axis').val(),
            thumb_width : jQuery('#hdn-thumb-width').val(),
            thumb_height:jQuery('#hdn-thumb-height').val(),
            fileSaveID:jQuery('#fileSaveID').val(),
            vendorID:jQuery('#vendorCropID').val()
        };
        saveCropImage(params);
    });

    

    /* Function to get images size */
    function getSizes(img, obj){
        var x_axis = obj.x1;
        var x2_axis = obj.x2;
        var y_axis = obj.y1;
        var y2_axis = obj.y2;
        var thumb_width = obj.width;
        var thumb_height = obj.height;
        if(thumb_width > 0) {
			jQuery('#hdn-x1-axis').val(x_axis);
			jQuery('#hdn-y1-axis').val(y_axis);
			jQuery('#hdn-x2-axis').val(x2_axis);
			jQuery('#hdn-y2-axis').val(y2_axis);
			jQuery('#hdn-thumb-width').val(thumb_width);
			jQuery('#hdn-thumb-height').val(thumb_height);
        } else {
            alert("Please select portion..!");
		}
    }

    /* Function to save crop images */
    function saveCropImage(params) {
		jQuery.ajax({
			url: params['targetUrl'],
			cache: false,
			dataType: "html",
			data: {
				action: params['action'],
				id: jQuery('#hdn-profile-id').val(),
				t: 'ajax',
				w1:params['thumb_width'],
				x1:params['x_axis'],
				h1:params['thumb_height'],
				y1:params['y_axis'],
				x2:params['x2_axis'],
				y2:params['y2_axis'],
				fileSaveID:jQuery('#fileSaveID').val(),
				image_name :jQuery('#image_name').val(),
				vendorID:jQuery('#vendorCropID').val()
			},
			type: 'Post',
		   	success: function (response) {
		   		console.log(response);
				//	jQuery('#profile_pic_modal').modal('hide');
					jQuery("#exampleModal").modal("hide");
					jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-border2,.imgareaselect-outer").css('display', 'none');
					fileSaveID = jQuery("#fileSaveID").val();
					jQuery("."+fileSaveID+" img").attr('src', response);
					jQuery("#preview-profile-pic").html('');
					jQuery("#profile-pic").val('');
					jQuery('img#photo').imgAreaSelect({remove:true});
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert('status Code:' + xhr.status + 'Error Message :' + thrownError);
			}
		});
    }
});
function openCropPopup(fileSaveID,vendorID,fieldName){
	jQuery("#fileSaveID").val(fileSaveID);
	jQuery("#vendorCropID").val(vendorID);
	jQuery(".titleforCropFile").html(fieldName)
	jQuery("#opencroButton").click();
}