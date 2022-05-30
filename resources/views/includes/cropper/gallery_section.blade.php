      <div class="logo-graphic-sec">
        <div class="row">
           <div class="logo-content-flex col-lg-4 col-md-6 mb-3">
            <div class="logo-content-flex-inner">
               <div class="choose-your-file comon-width" onclick="openCropPopup('logo_thumbnail','<?php echo $_GET["id"];?>','Logo/Graphic Thumbnail')">
                    <div class="form-group"> 
                      <input type="" id="file-upload" class="file-upload" name="logo" multiple required />
                       <label class="form-check-label" for="exampleCheck1">Logo/Graphic Thumbnail <i class="fa fa-camera" aria-hidden="true"></i></label>
                       </div>
                  </div>
                  <div class="no-file-choose comon-width" onclick="openCropPopup('logo_thumbnail','<?php echo $_GET["id"];?>','Logo/Graphic Thumbnail')">
                   <div id="file-upload-filename" class="file-upload-filename logo_thumbnail">
                   <?php if($value->logo_thumbnail != ''){?>

                   <img src="<?php echo $value->logo_thumbnail;?>" width="100%">
                    <?php }else{?>
                    <!-- <span>No File Chosen</span> -->
                 <?php } ?>
                 </div>
               </div>
            </div>
            </div>
         </div>
      <input type="hidden" name="logo_thumbnail" value="<?php echo $value->logo_thumbnail; ?>">
    <div class="logo-graphic-sec row">
      <div class="logo-content-flex col-lg-4 col-md-6 mb-3">
      <div class="logo-content-flex-inner">
         <input type="hidden" name="savedGallerSlide1" value="<?php echo $value->galleryslide1;?>">
         <div class="no-file-choose comon-width" onclick="openCropPopup('galleryslide1','<?php echo $_GET["id"];?>','Gallery Slide#1')">
           <div id="file-upload-filename" class="file-upload-filename galleryslide1">
             <?php if($value->galleryslide1 != '' ){?>
             <img src="<?php echo $value->galleryslide1;?>" width="100%">
            <?php 
            }else{
            ?>
              <!-- <span>No File Chosen</span> -->
              <img src="" width="100%" style="display:none;">
           <?php } ?>
           </div>
      <div class="choose-your-file comon-width">
         <div class="form-group">
         <input type="" id="file-upload" class="file-upload" name="streamingslide1" multiple required />
         <label class="form-check-label" for="exampleCheck1">Gallery Slide#1 <i class="fa fa-camera" aria-hidden="true"></i></label>
         </div>
      </div>
   </div>
      <div class="streamly-link comon-width">
         <div class="form-group">
            <input type="text" class="form-control" id="country" name="streaming_link1" placeholder="" value="<?php echo $value->streaminglink1;?>" required="">
              <label class="text-muted">Streaming Link</label>
          </div>
      </div>
   </div>
   </div>
   <div class="logo-content-flex col-lg-4 col-md-6 mb-3">
      <div class="logo-content-flex-inner">
         <input type="hidden" name="savedGallerSlide2" value="<?php echo $value->galleryslide2;?>">
         <div class="no-file-choose comon-width" onclick="openCropPopup('galleryslide2','<?php echo $_GET["id"];?>','Gallery Slide#2')">
         <div id="file-upload-filename" class="file-upload-filename galleryslide2">
         <?php if($value->galleryslide2 != '' ){?>
         <img src="<?php echo $value->galleryslide2;?>" width="100%">
         <?php 
         }else{
         ?>
         <!-- <span>No File Chosen</span> -->
         <?php } ?>
         </div>
         <div class="choose-your-file comon-width">
            <div class="form-group">
            <input type="" id="file-upload" class="file-upload" name="streamingslide2" multiple required />
             <label class="form-check-label" for="exampleCheck1">Gallery Slide#2 <i class="fa fa-camera" aria-hidden="true"></i></label>
            </div>
         </div>
         </div>
      <div class="streamly-link comon-width">
         <div class="form-group">
         <input type="text" class="form-control" id="country" name="streaming_link2" placeholder="" value="<?php echo $value->streaminglink2;?>" required="">
           <label class="text-muted">Streaming Link</label>
         </div>
      </div>
      </div>
   </div>
             <div class="logo-content-flex col-lg-4 col-md-6 mb-3">
      <div class="logo-content-flex-inner">
         <input type="hidden" name="savedGallerSlide3" value="<?php echo $value->galleryslide3;?>">
         <div class="no-file-choose comon-width" onclick="openCropPopup('galleryslide3','<?php echo $_GET["id"];?>','Gallery Slide#3')">
             <div id="file-upload-filename" class="file-upload-filename galleryslide3" >
              <?php if($value->galleryslide3 != '' ){?>
               <img src="<?php echo $value->galleryslide3;?>" width="100%">
              <?php } else{?>
              <!-- <span>No File Chosen</span> -->
              <?php } ?>
              </div>
      <div class="choose-your-file comon-width">
         <div class="form-group">
         <!-- test -->
         <input type="" id="file-upload" class="file-upload" name="streamingslide3" multiple required />
         <label class="form-check-label" for="exampleCheck1">Gallery Slide#3 <i class="fa fa-camera" aria-hidden="true"></i></label>
         </div>
      </div>
      </div>
      <div class="streamly-link comon-width">
         <div class="form-group">
         <input type="text" class="form-control" id="country" name="streaming_link3" placeholder="" value="<?php echo $value->streaminglink3;?>" required="">
         <label class="text-muted">Streaming Link</label>
         </div>
      </div>
   </div>
 </div>
   <div class="logo-content-flex col-lg-4 col-md-6 mb-3">
      <div class="logo-content-flex-inner">
      <input type="hidden" name="savedGallerSlide4" value="<?php echo $value->galleryslide4;?>">
      <div class="no-file-choose comon-width" onclick="openCropPopup('galleryslide4','<?php echo $_GET["id"];?>','Gallery Slide#4')">
          <div id="file-upload-filename" class="file-upload-filename galleryslide4">
           <?php if($value->galleryslide4 != '' ){?>
            <img src="<?php echo $value->galleryslide4;?>" width="100%">
           <?php } else{?>
           <!-- <span>No File Chosen</span> -->
           <?php } ?>
           </div>
              <div class="choose-your-file comon-width">
           <div class="form-group">
            <!-- test -->
               <input type="" id="file-upload" class="file-upload" name="streamingslide4" multiple required />
                <label class="form-check-label" for="exampleCheck1">Gallery Slide#4 <i class="fa fa-camera" aria-hidden="true"></i></label>
            <!-- test -->
      <!-- <input type="file" class="form-control"name="streamingslide1"  id="name" placeholder="" value="">
      <label class="form-check-label" for="exampleCheck1">Gallery Slide#1 <i class="fa fa-camera" aria-hidden="true"></i></label> -->
      </div>

      </div>
      </div>
      <div class="streamly-link comon-width">
         <div class="form-group">
            <input type="text" class="form-control" id="country" name="streaming_link4" placeholder="" class="file-upload" value="<?php echo $value->streaminglink4;?>" required="">
              <label class="text-muted">Streaming Link</label>
          </div>
      </div>
      </div>
   </div>
<div class="logo-content-flex col-lg-4 col-md-6 mb-3">
   <div class="logo-content-flex-inner">
   <input type="hidden" name="savedGallerSlide5" value="<?php echo $value->galleryslide5;?>">
   <div class="no-file-choose comon-width" onclick="openCropPopup('galleryslide5','<?php echo $_GET["id"];?>','Gallery Slide#5')">
   <div id="file-upload-filename" class="file-upload-filename galleryslide5">
   <?php if($value->galleryslide5 != '' ){?>
   <img src="<?php echo $value->galleryslide5;?>" width="100%">
   <?php } else{ ?>
   <!-- <span>No File Chosen</span> -->
   <?php } ?>
   </div>
<div class="choose-your-file comon-width">
   <div class="form-group">
   <!-- test -->
      <input type="" id="file-upload" class="file-upload" name="streamingslide5" multiple required />
       <label class="form-check-label" for="exampleCheck1">Gallery Slide#5 <i class="fa fa-camera" aria-hidden="true"></i></label>
   </div>
   </div>
   </div>
   <div class="streamly-link comon-width">
   <div class="form-group">
   <input type="text" class="form-control" id="country" name="streaming_link5" placeholder="" value="<?php echo $value->streaminglink5;?>" required="">
     <label class="text-muted">Streaming Link</label>
   </div>
   </div>
   </div>
</div>
<div class="logo-content-flex col-lg-4 col-md-6 mb-3">
   <div class="logo-content-flex-inner">
   <input type="hidden" name="savedGallerSlide6" value="<?php echo $value->galleryslide6;?>">
   <div class="no-file-choose comon-width" onclick="openCropPopup('galleryslide6','<?php echo $_GET["id"];?>','Gallery Slide#6')">
    <div id="file-upload-filename" class="file-upload-filename galleryslide6">
    <?php if($value->galleryslide6 != '' ){?>
      <img src="<?php echo $value->galleryslide6;?>" width="100%">
     <?php } else{?>
     <!-- <span>No File Chosen</span> -->
     <?php } ?>
   </div>
   <div class="choose-your-file comon-width">
     <div class="form-group">
      <!-- test -->
      <input type="" id="file-upload" class="file-upload" name="streamingslide6" multiple required />
       <label class="form-check-label" for="exampleCheck1">Gallery Slide#6 <i class="fa fa-camera" aria-hidden="true"></i></label>
    </div>
   </div>
   </div>
   <div class="streamly-link comon-width">
   <div class="form-group">
      <input type="text" class="form-control" id="country" name="streaming_link6" placeholder="" value="<?php echo $value->streaminglink6;?>" required="">
        <label class="text-muted">Streaming Link</label>
    </div>
   </div>
   </div>
</div>
</div>
</div>