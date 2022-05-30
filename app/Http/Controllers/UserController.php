<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use DB;
class UserController extends Controller
{
	public function assign_role(Request $request){
		echo 'test';exit();
	}
	public function email_match(Request $request){
		$email   = isset($_POST['matchvalue']) ? $_POST['matchvalue'] : "";
		$data    =  DB::table('users')->where('email',$email)->get();
		if(!empty($data[0])){
			$result = array(
				'status' => 200,
				'msg'    => 'The email has already been taken.',
				);
		}else{
			$result = array(
				'status' => 404,
				'msg'    => 'Error',
				);
		}
		return $result;
	}
	public function change_password(Request $request){
		$current_password     = $_POST['current_password'];
		$new_password         = $_POST['new_password'];
		$confirm_new_password = $_POST['new_confirm_password'];
		$old_password = Hash::check($current_password, auth()->user()->password);
		
		
		if($old_password != 1){
			$msg = 'Old password not matched';
			$data = array(
				'status' => 'error',
				'msg'   => $msg,
			);
			return $data;
		}
		
		if(empty($new_password)){
			
			$msg = "New Password shouldn't be blank.";
			$data = array(
				'status' => 'error',
				'msg'   => $msg,
			);
			return $data;
		}
		$validator = ($new_password == $confirm_new_password);
		
		
		if(!$validator)
		{
			$msg = "Password and confirm password doesn't match";
			$data = array(
				'status' => 'error',
				'msg'   => $msg,
			);
			return $data;
		}
		
		User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
		$data = array(
			'status' => 200,
			'msg'   => 'Password changed Successfully',
		);
		return $data;
		
}

		public function guest_registry(Request $request){
				$id = $_POST['id'];


       $contact_phone 				= isset($_POST['contact_phone']) ? $_POST['contact_phone'] : "";
       $street_address 				= isset($_POST['street_address']) ? $_POST['street_address'] : "";
       $unit 			            = isset($_POST['unit']) ? $_POST['unit'] : "";
       $city                  = isset($_POST['city']) ? $_POST['city'] : "";
       $province                  = isset($_POST['province']) ? $_POST['province'] : "";
       $postal                = isset($_POST['postal']) ? $_POST['postal'] : "";
       $emergency_contact_name  = isset($_POST['emergency_contact_name']) ? $_POST['emergency_contact_name'] : "";
       $emergency_contact_relation  = isset($_POST['emergency_contact_relation']) ? $_POST['emergency_contact_relation'] : "";
       $emergency_contact_phone  = isset($_POST['emergency_contact_phone']) ? $_POST['emergency_contact_phone'] : "";

       if($front_image = $request->hasFile('front_image')){
        $front_image = $request->file('front_image') ;
        $front_image_name = $front_image->getClientOriginalName();
       
        $destinationPath = public_path().'/images/guest_registry/license_front/';
        $front_image->move($destinationPath,$front_image_name);
        $front_image_name = "/images/guest_registry/license_front/".$front_image_name;
      }
      if($back_image = $request->hasFile('back_image')){
        $back_image = $request->file('back_image') ;
        $back_image_name = $back_image->getClientOriginalName();
       
        $destinationPath = public_path().'/images/guest_registry/license_back/';
        $back_image->move($destinationPath,$back_image_name);
        $back_image_name = "/images/guest_registry/license_back/".$back_image_name;
      }
      $front_image_name = isset($front_image_name) ? $front_image_name : "";
      $back_image_name = isset($back_image_name) ? $back_image_name : "";

      $user_exists = DB::table('guest_registry')->where('user_id',$id)->get()->toArray();

				if(isset($user_exists[0])){
					$result = DB::table('guest_registry')->where('user_id',$id)->update(['contact_phone' => $contact_phone, 'street_address' => $street_address, 'unit' => $unit, 'city' => $city ,'postal' => $postal,'license_front_image' => $front_image_name,'license_back_image' => $back_image_name,'emergency_contact_name' => $emergency_contact_name,'emergency_contact_relation' => $emergency_contact_relation,'emergency_contact_phone' => $emergency_contact_phone,'province' => $province]);
				}else{
     		 $result = DB::insert('insert into guest_registry (contact_phone,street_address,unit,city,postal,license_front_image,license_back_image,emergency_contact_name,emergency_contact_relation,emergency_contact_phone,user_id,province) values (?, ?,?,?,?,?,?,?,?,?,?,?)', array( $contact_phone,$street_address,$unit,$city,$postal,$front_image_name,$back_image_name,$emergency_contact_name,$emergency_contact_relation,$emergency_contact_phone,$id,$province));
    	 }

      if($result == '1'){
				$data = array(
					'status' => 200,
					'msg'   => 'Data Inserted Succesfully',
				);
     }else{
      $data = array(
					'status' => 404,
					'msg'   => '',
				);
     }
     return $data;


		}
		public function local_delievery(Request $request){
			$id = $_POST['id'];
			$check_in_date        = isset($_POST['check_in_date']) ? $_POST['check_in_date'] : '';
			$check_out_date        = isset($_POST['check_out_date']) ? $_POST['check_out_date'] : '';
			$street_address       = isset($_POST['street_address']) ? $_POST['street_address'] : '';
			$local_accomodation   = isset($_POST['local_accomodation']) ? $_POST['local_accomodation'] : '';
			$accomodation_type    = isset($_POST['accomodation_type']) ? $_POST['accomodation_type'] : '';
			$hosts_name           = isset($_POST['hosts_name']) ? $_POST['hosts_name'] : '';
			$contact_phone        = isset($_POST['contact_phone']) ? $_POST['contact_phone'] : '';
			$local_street_address = isset($_POST['local_street_address']) ? $_POST['local_street_address'] : '';
			$unit                 = isset($_POST['unit']) ? $_POST['unit'] : '';
			$city                 = isset($_POST['city']) ? $_POST['city'] : '';
			$province             = isset($_POST['province']) ? $_POST['province'] : '';
			$postal_code          = isset($_POST['postal_code']) ? $_POST['postal_code'] : '';

			$user_exists = DB::table('local_delievery')->where('user_id',$id)->get()->toArray();

			if(isset($user_exists[0])){
					$result = DB::table('local_delievery')->where('user_id',$id)->update(['street_address' => $street_address, 'local_accomodation' => $local_accomodation, 'accomodation_type' => $accomodation_type, 'hosts_name' => $hosts_name,'contact_phone' => $contact_phone,'local_street_address' => $local_street_address,'unit' => $unit,'city' => $city,'province' => $province,'postal_code' => $postal_code,'check_in_date' => $check_in_date,'check_out_date' => $check_out_date]);
				}else{
     		 $result = DB::insert('insert into local_delievery (street_address,local_accomodation,accomodation_type,hosts_name,contact_phone,local_street_address,unit,city,province,postal_code,user_id,check_in_date,check_out_date) values (?, ?,?,?,?,?,?,?,?,?,?,?,?)', array( $street_address,$local_accomodation,$accomodation_type,$hosts_name,$contact_phone,$local_street_address,$unit,$city,$province,$postal_code,$id,$check_in_date,$check_out_date));
    	 }

    	if($result == '1'){
				$data = array(
					'status' => 200,
					'msg'   => 'Data Inserted Succesfully',
				);
      }else{
       $data = array(
			 		'status' => 404,
					'msg'   => '',
		  		);
      }
      return $data;

		}	

	public function account_credentials(Request $request){
       	 $id 			        = $_POST['id'];
       $first_name 				= isset($_POST['first_name']) ? $_POST['first_name'] : "";
       $last_name 				= isset($_POST['last_name']) ? $_POST['last_name'] : "";
       $display_name 			= isset($_POST['display_name']) ? $_POST['display_name'] : "";
       $email             = isset($_POST['email']) ? $_POST['email'] : "";
       if($profile_image = $request->hasFile('profile_image')){
        $profile_image = $request->file('profile_image') ;
        $profile_image_name = $profile_image->getClientOriginalName();
       
        $destinationPath = public_path().'/images/profile_images';
        $profile_image->move($destinationPath,$profile_image_name);
        $profile_image_name = "/images/profile_images/".$profile_image_name;
      }
		$profile_image_name = isset($profile_image_name) ? $profile_image_name : '';

     $result = DB::table('users')->where('id',$id)->update(['name' => $first_name, 'lastname' => $last_name, 'email' => $email, 'name' => $display_name ,'user_profile_image' => $profile_image_name]);
     if($result == '1'){
				$data = array(
					'status' => 200,
					'msg'   => 'Data Updated Succesfully',
				);
     }else{
      $data = array(
					'status' => 404,
					'msg'   => '',
				);
     }
     return $data;
    }
		 public function register_data(){
			
			$firstname        = $_POST['firstname'];
			$last_name        = $_POST['last_name'];
			$email            = $_POST['email'];
			$password         = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];
     $result = DB::insert('insert into user_accounts (given_name,email,password) values (?,?,?)', array($firstname.$last_name,$email,$password));
	 
		 return $result;
    
    } 
	
    public function excursion()
    {

     $excursion_company_name = $_POST['excursion_company_name'];
	  $excursion_company_phone = $_POST['excursion_company_phone'];
    $excursion_company_add	 = $_POST['excursion_company_address'];
    $excursion_contact_email = $_POST['excursion_contact_email'];
	  $excursion_website_url 	 = $_POST['excursion_website_url'];
	  
      $result = DB::insert('insert into vendors_account (given_name,vendors_email,phone_number,street address,website_url) values (?, ?,?,?,?)', array( $excursion_company_name,$excursion_company_phone,$excursion_company_add,$excursion_contact_email,$excursion_website_url));
      if($result = "1"){
        echo 'Data Inserted Successfully';
      }else{
        echo 'Error Occured';
      }

    }  
	public function search_data(){
		
		$filter  	=  !empty($_POST['filter'])    ?  $_POST['filter']    :  "";
		$sort 	=  !empty($_POST['sort'])   ?  $_POST['sort']   :  ""; 
		$keyword         	=  !empty($_POST['keyword'])   ?  $_POST['keyword']   :  "";
		$columnName   		= 	$columnValue = "";
			// DB::enableQueryLog();

		$arr = explode("||",$sort);
		if(sizeof($arr) == 2){
			$columnName   = $arr[0];
			$columnValue   = $arr[1];
		}
		$data = array();
		$query = DB::table('Vendors_Account');



$query->where('vendor_type', $filter)->select('*')->get();



		if(!empty($keyword)){
			$query->where('buisness_vendor_name', 'LIKE', "%".$keyword."%")->select('*')->get();
			$query->where(function($q) use($keyword) { 
				$q->where('vendor_type', 'LIKE', "%".$keyword."%")->orWhere('province', 'LIKE', "%".$keyword."%")->orWhere('vendor_type', 'LIKE', "%".$keyword."%")->orWhere('buisness_vendor_email', 'LIKE', "%".$keyword."%")->orWhere('buisnessstreet_address', 'LIKE', "%".$keyword."%")->orWhere('accomodation_sub_region', 'LIKE', "%".$keyword."%")->orWhere('buisness_vendor_name', 'LIKE', "%".$keyword."%");});
		}
		if(!empty($columnName)){
				if($columnName =='bedrooms' && $columnValue =='4+'){
					$query->where($columnName,'>=', 4);
				}elseif ($columnName =='sleeps' && $columnValue =='8+') {
					$query->where($columnName,'>=', 8);
				}
				else{				
					$query->where($columnName,$columnValue);
				}
		}
		
		$query = $query->get();
		// if(!empty($filter)){
		// 	$query = DB::table('Vendors_Account')->where('vendor_type',$filter)->select('*')->get();
		// }
		if($filter == 'All' || $filter == ''){
			$query = DB::table('Vendors_Account')->where('buisness_vendor_name', 'LIKE', "%".$keyword."%")->select('*')->get();
		}

		foreach($query as $key => $value){ 
		
			if($value->unit == ''){
				$unit_value= '-';
			}else{
				$unit_value = $value->unit;
			}

			$city 					= $value->buisness_vendor_city == ''   ? '-'  :  $value->buisness_vendor_city; 
			$email 					= $value->buisness_vendor_email == ''   ? '-'  :  $value->buisness_vendor_email; 
			$sub_region 		= $value->accomodation_sub_region == ''   ? '-'  :  $value->accomodation_sub_region;
			$province   		= $value->buisness_vendor_state == ''   ? '-'  :  $value->buisness_vendor_state;
			$Phone      		= $value->buisness_vendor_phone == ''   ? '-'  :  $value->buisness_vendor_phone;
			$country   		  = $value->buisness_vendor_country == ''   ? '-'  :  $value->buisness_vendor_country;
			$Street_address = $value->buisnessstreet_address == ''   ? '-'  :  $value->buisnessstreet_address;
			$Given_Name 		= $value->buisness_vendor_name == ''   ? '-'  :  $value->buisness_vendor_name;
			$accomodation_vendor_type 		= $value->vendor_type == ''   ? '-'  :  $value->vendor_type;

			if($filter == 'All'){
				$search_data = array(
					'id'					   => $value->ID,
					'vendor_type'    => $accomodation_vendor_type,
					'given_name'  	 => $Given_Name,
					'email' 		     => $email,
					'street_address' => $Street_address,
					'unit' 				   => $unit_value,
					'city' 				   => $city,
					'province'		   => $province,
					'country' 			 => $country,  
					'phone' 		     => $Phone,
					'subregion' 		 => $sub_region,
				);
				$data[] =  $search_data;

			}else if ($accomodation_vendor_type == 'Accomodation') {
				$search_data = array(
					'id'					   => $value->ID,
					'vendor_type'    => $accomodation_vendor_type,
					'given_name'  	 => $Given_Name,
					'email' 		     => $email,
					'street_address' => $Street_address,
					'unit' 				   => $unit_value,
					'city' 				   => $city,
					'province'		   => $province,
					'country' 			 => $country,  
					'phone' 		     => $Phone,
					'subregion' 		 => $sub_region,
				);
				$data[] =  $search_data;

			}else if ($accomodation_vendor_type == 'Excursion') {
				$search_data = array(
					'id'					   => $value->ID,
					'vendor_type'    => $accomodation_vendor_type,
					'given_name'  	 => $Given_Name,
					'email' 		     => $email,
					'street_address' => $Street_address,
					'unit' 				   => $unit_value,
					'city' 				   => $city,
					'province'		   => $province,
					'country' 			 => $country,  
					'phone' 		     => $Phone,
					'subregion' 		 => $sub_region,
				);
				$data[] =  $search_data;
			}
			else if ($accomodation_vendor_type == 'Winery') {
				$search_data = array(
					'id'					   => $value->ID,
					'vendor_type'    => $accomodation_vendor_type,
					'given_name'  	 => $Given_Name,
					'email' 		     => $email,
					'street_address' => $Street_address,
					'unit' 				   => $unit_value,
					'city' 				   => $city,
					'province'		   => $province,
					'country' 			 => $country,  
					'phone' 		     => $Phone,
					'subregion' 		 => $sub_region,
				);
				$data[] =  $search_data;
			}
			else if ($accomodation_vendor_type == 'License') {
				$search_data = array(
					'id'					   => $value->ID,
					'vendor_type'    => $accomodation_vendor_type,
					'given_name'  	 => $Given_Name,
					'email' 		     => $email,
					'street_address' => $Street_address,
					'unit' 				   => $unit_value,
					'city' 				   => $city,
					'province'		   => $province,
					'country' 			 => $country,  
					'phone' 		     => $Phone,
					'subregion' 		 => $sub_region,
				);
				$data[] =  $search_data;
			}
			else if ($accomodation_vendor_type == 'Non-License') {
				$search_data = array(
					'id'					   => $value->ID,
					'vendor_type'    => $accomodation_vendor_type,
					'given_name'  	 => $Given_Name,
					'email' 		     => $email,
					'street_address' => $Street_address,
					'unit' 				   => $unit_value,
					'city' 				   => $city,
					'province'		   => $province,
					'country' 			 => $country,  
					'phone' 		     => $Phone,
					'subregion' 		 => $sub_region,
				);
				$data[] =  $search_data;
			}
		
		
	}
		return $data;
	}
	function review(){
		
		 $review_action = $_POST['review_action'];
		 $user_id = $_POST['user_id']; 
		 $buisness_vendor_name = $_POST['buisness_vendor_name'];
		 $buisness_vendor_location = $_POST['buisness_vendor_location'];
		 $review_description	 = $_POST['review_description'];				
		
		if($review_action == 'insert'):
		$result = DB::insert('insert into Vendor_Review (user_id,vendor_name,vendor_location,vendor_comment) values (?,?,?,?)', array( $user_id,$buisness_vendor_name,$buisness_vendor_location,$review_description));	  
		if($result = "1"){
			echo 'inserted';
		}else{
			echo 'Error Occured';
		}	
		elseif($review_action == 'update'):				  			
		$result = DB::table('Vendor_Review')->where('user_id',$user_id)->update(['vendor_name' => $buisness_vendor_name, 'vendor_location' => $buisness_vendor_location, 'vendor_comment' => $review_description]);			 
		if($result = "1"){
			echo 'updated';
		}else{
			echo 'Error Occured';
		}
	
		endif;		
	  exit;
	}
}

?>