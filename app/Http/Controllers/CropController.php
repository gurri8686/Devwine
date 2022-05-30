<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Storage;
use DB;
class CropController extends Controller {

	

	public function index(Request $request) {
		$post = isset($_POST) ? $_POST: array();
		switch($post['action']) {
			case 'save' :
//			 $this->saveProfilePic();
			 $this->saveProfilePicTmp();
			break;
			case 'save_without_crop' :
			 $this->save_without_crop();			 
			break;
			default:
			 $this->changeProfilePic($request);
		}
		
	}	
	public function changeProfilePic(Request $request) {

		$post = isset($_POST) ? $_POST: array();
		$max_width = "1500"; 
		$path = 'images/';
		

		$valid_formats = array("jpg", "png", "gif", "jpeg");
		$name = $_FILES['profile-pic']['name'];
		$size = $_FILES['profile-pic']['size'];
		$maxsize    = 5000000;

		if(strlen($name)) {
			list($txt, $ext) = explode(".", $name);
			if(in_array($ext,$valid_formats)) {
				if($size < (1024*1024)) {
					$actual_image_name = time() .'.'.$ext;
					$thumbnailFilePath = public_path().'/images/thumbnails';
					$filePath = $path .'/'.$actual_image_name;
					$tmp = $_FILES['profile-pic']['tmp_name'];
					$new_image_name = $_POST['fileSaveID'] .'_'.$_POST['vendorID'] .'.'.$ext;
					$img = Image::make($tmp);
					 $img->resize(110, 110, function ($const) {
					 $const->aspectRatio();
					 })->save($thumbnailFilePath . '/' . $new_image_name);

					if(move_uploaded_file($tmp, $filePath)) {
						$width = $this->getWidth($filePath);
						$height = $this->getHeight($filePath);
						//Scale the image if it is greater than the width set above
						if ($width > $max_width){
							$scale = $max_width/$width;
							$uploaded = $this->resizeImage($filePath,$width,$height,$scale, $ext);
						} else {
							$scale = 1;
							$uploaded = $this->resizeImage($filePath,$width,$height,$scale, $ext);
						}				      
       										
						echo "<img id='photo' file-name='".$actual_image_name."' class='' src='".$filePath.'?'.time()."' class='preview'/>";
					}
					else
					echo "failed";
				}
				else
				echo "Image file size max 5 MB"; 
			}
			else
			echo "Invalid file format.."; 
		}
		else
		echo "Please select image..!";
		exit;
	}
	/* Function to handle save profile pic */
	public function save_without_crop(){
		$imagePath = 'images/'.$_POST['image_name'];		
		list($txt, $ext) = explode(".", $_POST['image_name']);
		$new_image_name = $_POST['fileSaveID'] .'_'.$_POST['vendorID'] .'.'.$ext;
		$newimagePath = 'images/'.$new_image_name;


		rename(public_path().'/'.$imagePath, public_path().'/'.$newimagePath);
		if($_POST['fileSaveID'] != ''){
			$id = $_POST['vendorID'];
			$query =  DB::table('Vendors_Account')->where('ID',$id)->update([$_POST['fileSaveID'] => $newimagePath]);	
		}	
		echo $newimagePath.'?'.time();
		exit(0);   	
	}
		
	/* Function to update image */
	public  function saveProfilePicTmp() {
		$post = isset($_POST) ? $_POST: array();
		$userId = isset($post['id']) ? intval($post['id']) : 0;
		$path ='\\images';
		$t_width = 1500; // Maximum thumbnail width
		$t_height = 1500;    // Maximum thumbnail height
	
		if(isset($_POST['t']) and $_POST['t'] == "ajax") {
			extract($_POST);		
			$imagePath = 'images/'.$_POST['image_name'];

			list($txt, $ext) = explode(".", $_POST['image_name']);
			$new_image_name = $_POST['fileSaveID'] .'_'.$_POST['vendorID'] .'.'.$ext;

			$newimagePath = 'images/'.$new_image_name;

			$ratio = ($t_width/$w1); 
			$nw = ceil($w1 * $ratio);
			$nh = ceil($h1 * $ratio);
			$nimg = imagecreatetruecolor($nw,$nh);
			$im_src = imagecreatefromjpeg($imagePath);
			imagecopyresampled($nimg,$im_src,0,0,$x1,$y1,$nw,$nh,$w1,$h1);
			imagejpeg($nimg,$imagePath,90);	

			rename(public_path().'/'.$imagePath, public_path().'/'.$newimagePath);
			if($_POST['fileSaveID'] != ''){
				$id = $_POST['vendorID'];
				$query =  DB::table('Vendors_Account')->where('ID',$id)->update([$_POST['fileSaveID'] => $newimagePath]);	
			}		
		}
		echo $newimagePath.'?'.time();
		exit(0);    
	}    
	/* Function  to resize image */
	public function resizeImage($image,$width,$height,$scale, $ext) {
		$newImageWidth = ceil($width * $scale);
		$newImageHeight = ceil($height * $scale);
		$newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
		switch ($ext) {
	        case 'jpg':
	        case 'jpeg':
	            $source = imagecreatefromjpeg($image);
	            break;
	        case 'gif':
	            $source = imagecreatefromgif($image);
	            break;
	        case 'png':
	            $source = imagecreatefrompng($image);
	            break;
	        default:
	            $source = false;
	            break;
	    }	
		imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
		imagejpeg($newImage,$image,90);
		chmod($image, 0777);
		return $image;
	}
	/*  Function to get image height. */
	public function getHeight($image) {
	    $sizes = getimagesize($image);
	    $height = $sizes[1];
	    return $height;
	}
	/* Function to get image width */
	public function getWidth($image) {
	    $sizes = getimagesize($image);
	    $width = $sizes[0];
	    return $width;
	}
}  