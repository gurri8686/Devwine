<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Support\Facades\Mail;
use DB;
class VendorController extends Controller{              
	
	public function accomodation_inqueries(Request $request){  

    $user_data = Auth::user();
      if($user_data){
        $user_id = $user_data->id;
      }else{
         $user_id = null;
      }

    $check_in = isset($_POST['check_in']) ? $_POST['check_in'] : '';
    $check_out = isset($_POST['check_out']) ? $_POST['check_out'] : '';
    $visit_nature = isset($_POST['visit_nature']) ? $_POST['visit_nature'] : '';
    $guest_no = isset($_POST['guest_no']) ? $_POST['guest_no'] : 0;
    $accommodation_type = isset($_POST['accommodation_type']) ? $_POST['accommodation_type'] : '';
    $sub_region = isset($_POST['sub_region']) ? $_POST['sub_region'] : '';
	
	if(empty($check_in)){
		$result['status'] = '400';
        $result['msg']    = 'Check In date can not empty!';
		return $result;
	}
	if(empty($check_out)){
		$result['status'] = '400';
        $result['msg']    = 'Check Out date can not empty!';
		return $result;
	}
	if(empty($visit_nature)){
		$result['status'] = '400';
        $result['msg']    = 'Nature of visit can not empty!';
		return $result;
	}
	if(empty($guest_no)){
		$result['status'] = '400';
        $result['msg']    = 'No. of guest can not empty!';
		return $result;
	}
	if(empty($accommodation_type)){
		$result['status'] = '400';
        $result['msg']    = 'Accommodation Type can not empty!';
		return $result;
	}
	if(empty($sub_region)){
		$result['status'] = '400';
        $result['msg']    = 'Sub region can not empty!';
		return $result;
	}
     // Vendor Data for inquiry popup

  $vendor_id = isset($_POST['id']) ? $_POST['id'] : '';
  $vendor = DB::table('Vendors_Account')->where('ID', $vendor_id)->select('*')->get();
  $buisness_vendor_name   = isset($vendor[0]->buisness_vendor_name) ? $vendor[0]->buisness_vendor_name : '';
  $buisnessstreet_address = isset($vendor[0]->buisnessstreet_address) ? $vendor[0]->buisnessstreet_address : '';
  $buisness_vendor_city   = isset($vendor[0]->buisness_vendor_city) ? $vendor[0]->buisness_vendor_city : '';
  $buisness_sub_region    = isset($vendor[0]->accomodation_sub_region) ? $vendor[0]->accomodation_sub_region : '';
  $buisness_vendor_phone  = isset($vendor[0]->buisness_vendor_phone) ? $vendor[0]->buisness_vendor_phone : '';

	 $result1 = 1;	
     if($result1 == '1'){
        $result['status'] = '200';
        $result['msg']    = 'Data Added Successfully';   
        $data = array(
                       'given_name'             => $user_data->name, 
                       'last_name'              => $user_data->lastname,   
                      'email'                   => $user_data->email,
                      'category'                => 'Accommodation',
                      'check_out'               => $check_out,
                      'visit_nature'            => $visit_nature,
                      'guest_no'                => $guest_no,
                      'accom_type'              => $accommodation_type,
                      'sub_region'              => $sub_region,
                      'check_in'                => $check_in,
                      'check_out'               => $check_out,
                      'buisness_vendor_name'    => $buisness_vendor_name,
                      'buisnessstreet_address'  => $buisnessstreet_address,
                      'buisness_vendor_city'    => $buisness_vendor_city,
                      'buisness_sub_region'     => $buisness_sub_region,
                      'buisness_vendor_phone'   => $buisness_vendor_phone,
              );
        // Mail Send to System admin
        Mail::send(['html'=>'mail'], $data, function($message) {
       $message->to('jaswindermander5@gmail.com', 'Tutorials Point')->subject
          ('Accomodation Inquiry');
       $message->from('jaswindermander5@gmail.com','System Admin');
      });
      return redirect()->back()->with('message', 'Inquiry sent to system admin');
      }else{
      $result['status'] = '404';
      $result['msg']    = 'Unabe to insert data! Please try later.';
      }

      return $result;

  }	
	
	public function accomodation(Request $request)
    {
      $user_data = Auth::user();
      if($user_data){
        $user_id = $user_data->id;
      }else{
         $user_id = null;
      }
      if($file = $request->hasFile('logo')) {
                    
        $file = $request->file('logo') ;
        $logo = $file->getClientOriginalName();

        $destinationPath = public_path().'/images';
        $file->move($destinationPath,$logo);
        $logo_data = "/images/".$logo;
      }

      if($file = $request->hasFile('streamingslide1')) {
                    
        $file = $request->file('streamingslide1') ;
        $fileName = $file->getClientOriginalName();

        $destinationPath = public_path().'/images';
        $file->move($destinationPath,$fileName);
        $streamingslide1 = "/images/".$fileName;
      }
      if($file1 = $request->hasFile('streamingslide2')){
        $file1 = $request->file('streamingslide2') ;
        $fileName1 = $file1->getClientOriginalName();

        $destinationPath1 = public_path().'/images';
        $file1->move($destinationPath1,$fileName1);
        $streamingslide2 = "/images/".$fileName1;
      }

      if($file3 = $request->hasFile('streamingslide3')){
        $file3 = $request->file('streamingslide3') ;
        $fileName3 = $file3->getClientOriginalName();

        $destinationPath3 = public_path().'/images';
        $file3->move($destinationPath3,$fileName3);
        $streamingslide3 = "/images/".$fileName3;
      }

      if($file4 = $request->hasFile('streamingslide4')){
        $file4 = $request->file('streamingslide4') ;
        $fileName4 = $file4->getClientOriginalName();

        $destinationPath4 = public_path().'/images';
        $file4->move($destinationPath4,$fileName4);
        $streamingslide4 = "/images/".$fileName4;
      }

      if($file5 = $request->hasFile('streamingslide5')){
        $file5 = $request->file('streamingslide5') ;
        $fileName5 = $file5->getClientOriginalName();

        $destinationPath5 = public_path().'/images';
        $file5->move($destinationPath5,$fileName5);
        $streamingslide5 = "/images/".$fileName5;
      }
      if($file6 = $request->hasFile('streamingslide6')){
        $file6 = $request->file('streamingslide6') ;
        $fileName6 = $file6->getClientOriginalName();

        $destinationPath6 = public_path().'/images';
        $file6->move($destinationPath6,$fileName6);
        $streamingslide6 = "/images/".$fileName6;
      }

      $streamingslide1      = isset($streamingslide1) ? $streamingslide1 : "";
      $streamingslide2      = isset($streamingslide2) ? $streamingslide2 : "";
      $streamingslide3      = isset($streamingslide3) ? $streamingslide3 : "";
      $streamingslide4      = isset($streamingslide4) ? $streamingslide4 : "";
      $streamingslide5      = isset($streamingslide5) ? $streamingslide5 : "";
      $streamingslide6      = isset($streamingslide6) ? $streamingslide6 : "";
      $logo_data            = isset($logo_data) ? $logo_data : "";

      $contact_name         = isset($_POST['name']) ? $_POST['name'] : "";
      $contact_last_name    = isset($_POST['lastname']) ? $_POST['lastname'] : "";
      $contact_email        = isset($_POST['email']) ? $_POST['email'] : "";
      $contact_title        = isset($_POST['contact_title']) ? $_POST['contact_title'] : "";
      $contact_position     = isset($_POST['position']) ? $_POST['position'] : "";
      $contact_number       = isset($_POST['contact_number']) ? $_POST['contact_number'] : "";

    $buisness_vendor_name   = isset($_POST['buisness_vendor_name']) ? $_POST['buisness_vendor_name'] : "";
    $buisness_vendor_email  = isset($_POST['buisness_vendor_email']) ? $_POST['buisness_vendor_email'] : "";
	  $street_address         = isset($_POST['street_address']) ? $_POST['street_address'] : "";
    $unit       		        = isset($_POST['unit']) ? $_POST['unit'] : "";
	  $city           	      = isset($_POST['city']) ? $_POST['city'] : "";  
	  // $state                   =     isset($_POST['state']) ? $_POST['state'] : "";
	  $state                  =     isset($_POST['state']) ? $_POST['state'] : "";
	  $postal             		=     isset($_POST['postal']) ? $_POST['postal'] : "";
	  $country          			=     isset($_POST['country']) ? $_POST['country'] : "";
	  $vendor_phone      			=     isset($_POST['vendor_phone']) ? $_POST['vendor_phone'] : "";
    $accom_description      = isset($_POST['accom_description']) ? $_POST['accom_description'] : "";
    $accom_squarefootage    = isset($_POST['accom_squarefootage']) ? $_POST['accom_squarefootage'] : "";
    $accom_bedrooms         = isset($_POST['accom_bedrooms']) ? $_POST['accom_bedrooms'] : "";
    $accom_washrooms        = isset($_POST['accom_washrooms']) ? $_POST['accom_washrooms'] : "";
    $accom_currentrate      = isset($_POST['accom_currentrate']) ? $_POST['accom_currentrate'] : "";
    $accom_spring           = isset($_POST['accom_spring']) ? $_POST['accom_spring'] : "";
    $accom_summer           = isset($_POST['accom_summer']) ? $_POST['accom_summer'] : "";
    $accom_autumn           = isset($_POST['accom_autumn']) ? $_POST['accom_autumn'] : "";
    $accom_winter           = isset($_POST['winter_rate']) ? $_POST['winter_rate'] : "";
    $streaminglink1         =  isset($_POST['streaminglink1']) ? $_POST['streaminglink1'] : "";
    $streaminglink2         =  isset($_POST['streaminglink2']) ? $_POST['streaminglink2'] : "";
    $streaminglink3         =  isset($_POST['streaminglink3']) ? $_POST['streaminglink3'] : "";
    $streaminglink4         =  isset($_POST['streaminglink4']) ? $_POST['streaminglink4'] : "";
    $streaminglink5         =  isset($_POST['streaminglink5'])? $_POST['streaminglink5'] : "";
    $streaminglink6         =  isset($_POST['streaminglink6']) ? $_POST['streaminglink6'] : "";
    $sub_region             = isset($_POST['accomodation_sub_region']) ? $_POST['accomodation_sub_region'] : "";  
    $accomodationtype       = isset($_POST['accomodationtype']) ? $_POST['accomodationtype'] : "";  
    $accom_website_url      = isset($_POST['accom_website_url']) ? $_POST['accom_website_url'] : "";  
    $accom_facebook         = isset($_POST['accom_facebook']) ? $_POST['accom_facebook'] : "";  
    $accom_instagram        = isset($_POST['accom_instagram']) ? $_POST['accom_instagram'] : "";  
    $accom_twitter          = isset($_POST['accom_twitter']) ? $_POST['accom_twitter'] : "";  
    $accom_youtube          = isset($_POST['accom_youtube']) ? $_POST['accom_youtube'] : "";  
    $price_point_rating     = isset($_POST['accom_price_point_rating']) ? $_POST['accom_price_point_rating'] : ""; 
    $accom_account_status   = isset($_POST['accom_account_status']) ? $_POST['accom_account_status'] : "";  
      $sleeps = '';
	  $accomodation_sub_type  = isset($_POST['flexRadioDefault']) ? $_POST['flexRadioDefault'] : "";
	  $sub_region  = isset($_POST['flexRadioDefault1']) ? $_POST['flexRadioDefault1'] : "";
    $AlreadyExistFlag = isset($_POST["AlreadyExistFlag"]) ? $_POST["AlreadyExistFlag"] : "";

	   $vendor = DB::table('Vendors_Account')->where('buisness_vendor_name', $buisness_vendor_name)->select('*')->get();

     $data = array();
      foreach($vendor as $key => $value){
        $data['buisness_vendor_name'] = $value->buisness_vendor_name; 
      }

      if(isset($data['buisness_vendor_name']) && $AlreadyExistFlag == 0){
        $result['status'] = '400';
        $result['msg'] = 'A vendor account with this name and address already exists in the directory.  Do you wish to continue?';
      }else{
        $result = DB::insert('insert into Vendors_Account (buisness_vendor_name,buisnessstreet_address,buisness_vendor_unit,buisness_vendor_city,buisness_vendor_state,buisness_vendor_postal,buisness_vendor_country,buisness_vendor_phone,total_square_feet,bedrooms,washrooms,sleeps,logo_thumbnail,accomodation_sub_type,accomodation_sub_region,galleryslide1,galleryslide2,galleryslide3,galleryslide4,galleryslide5,galleryslide6,current_booking_rate,price_point_rating,spring_rate,summer_rate,winter_rate,accom_autumn,given_name,sur_name,vendors_email,vendor_title,verndor_position,phone_number,streaminglink1,streaminglink2,streaminglink3,streaminglink4,streaminglink5,streaminglink6,description,buisness_vendor_email,accom_website_url,accom_facebook,accom_instagram,accom_twitter,accom_youtube,accom_account_status,user_id) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array($buisness_vendor_name,$street_address,$unit,$city,$state,$postal,$country,$vendor_phone,$accom_squarefootage,$accom_bedrooms,$accom_washrooms,$sleeps,$logo_data,$accomodation_sub_type,$sub_region,$streamingslide1,$streamingslide2,$streamingslide3,$streamingslide4,$streamingslide5,$streamingslide6,$accom_currentrate,$price_point_rating,$accom_spring,$accom_summer,$accom_winter,$accom_autumn,$contact_name,$contact_last_name,$contact_email,$contact_title,$contact_position,$contact_number,$streaminglink1,$streaminglink2,$streaminglink3,$streaminglink4,$streaminglink5,$streaminglink6,$accom_description,$buisness_vendor_email,$accom_website_url,$accom_facebook,$accom_instagram,$accom_twitter,$accom_youtube,$accom_account_status,$user_id ));
      //   // Insert the data into search table
    }
       $query = DB::insert('insert into search (Given_Name,Street_address,Unit,Province,Country,Phone,Vendor_Type,city,Subregion) values (?,?,?,?,?,?,?,?,?)',array($buisness_vendor_name,$street_address,$unit,$state,$country,$vendor_phone,'Accomodation',$city,$sub_region));
        return $result;
      if($result = '1'){
        // $result['status'] = '200';
        echo 'Data Inserted Successfully';
        // return view('vendor_creation');

      }


    }   
    // Function for update the accomodation vendor admin form
    	public function update_accomodation_form(Request $request)
    {
      $id = $_POST['id'];
       $streaminglink1           =  isset($_POST['streaming_link1']) ? $_POST['streaming_link1'] : "";
     $streaminglink2             =  isset($_POST['streaming_link2']) ? $_POST['streaming_link2'] : "";
     $streaminglink3             =  isset($_POST['streaming_link3']) ? $_POST['streaming_link3'] : "";
     $streaminglink4             =  isset($_POST['streaming_link4']) ? $_POST['streaming_link4'] : "";
     $streaminglink5             =  isset($_POST['streaming_link5'])? $_POST['streaming_link5'] : "";
     $streaminglink6             =  isset($_POST['streaming_link6']) ? $_POST['streaming_link6'] : "";

    	$name 								  = isset($_POST['name']) ? $_POST['name'] : "";
    	$lastname 						  = isset($_POST['lastname']) ? $_POST['lastname'] : "";
    	$email 								  = isset($_POST['email']) ? $_POST['email'] : "";
    	$title 							  	= isset($_POST['contact_title']) ? $_POST['contact_title'] : "";
    	$position 						  = isset($_POST['position']) ? $_POST['position'] : "";
    	$contact_number				  = isset($_POST['contact_number']) ? $_POST['contact_number'] : "";
    	$buisness_vendor_name   = isset($_POST['buisness_vendor_name']) ? $_POST['buisness_vendor_name'] : "";
    	$street_address         = isset($_POST['street_address']) ? $_POST['street_address'] : "";
    	$unit                   = isset($_POST['unit']) ? $_POST['unit'] : "";
    	$city                   = isset($_POST['city']) ? $_POST['city'] : ""; 
    	$state                  = isset($_POST['state']) ? $_POST['state'] : ""; 
    	$postal                 = isset($_POST['postal']) ? $_POST['postal'] : ""; 
    	$country                = isset($_POST['country']) ? $_POST['country'] : "";  	
    	$vendor_phone           = isset($_POST['vendor_phone']) ? $_POST['vendor_phone'] : "";  	
    	$description            = isset($_POST['description']) ? $_POST['description'] : "";
      $current_rate           = isset($_POST['accom_currentrate']) ? $_POST['accom_currentrate'] : "";
    	$square_footage         = isset($_POST['square_footage']) ? $_POST['square_footage'] : "";  	
    	$bedrooms       		  	= isset($_POST['bedrooms']) ? $_POST['bedrooms'] : "";  	
    	$washrooms       			  = isset($_POST['washrooms']) ? $_POST['washrooms'] : "";  	
    	$sleeps       		  	  = isset($_POST['sleeps']) ? $_POST['sleeps'] : "";  
    	$sub_region       		  = isset($_POST['accomodation_sub_region']) ? $_POST['accomodation_sub_region'] : "";  
    	$accomodationtype       = isset($_POST['accomodationtype']) ? $_POST['accomodationtype'] : "";  
      $website_url            = isset($_POST['website_url']) ? $_POST['website_url'] : "";  
      $buisness_vendor_email  = isset($_POST['buisness_vendor_email']) ? $_POST['buisness_vendor_email'] : "";  
    	$spring_rate    		    = isset($_POST['spring_rate']) ? $_POST['spring_rate'] : "";  
    	$summer_rate            = isset($_POST['summer_rate']) ? $_POST['summer_rate'] : "";  
    	$fall_rate              = isset($_POST['fall_rate']) ? $_POST['fall_rate'] : "";  
    	$winter_rate            = isset($_POST['winter_rate']) ? $_POST['winter_rate'] : ""; 
      $accom_autumn           = isset($_POST['accom_autumn']) ? $_POST['accom_autumn'] : ""; 
      $price_point_rating     = isset($_POST['price_point_rating']) ? $_POST['price_point_rating'] : "";  
      $facebook               = isset($_POST['facebook']) ? $_POST['facebook'] : "";  
      $instagram              = isset($_POST['instagram']) ? $_POST['instagram'] : "";  
      $twitter                = isset($_POST['twitter']) ? $_POST['twitter'] : "";  
      $youtube                = isset($_POST['youtube']) ? $_POST['youtube'] : "";  
      $account_status         = isset($_POST['account_status']) ? $_POST['account_status'] : "";   

      // Accomodation Questionaree
      $Accom_Ques_1     = isset($_POST['Accom_Ques_1']) ? $_POST['Accom_Ques_1'] : "";
      $Accom_Ques_2     = isset($_POST['Accom_Ques_2']) ? $_POST['Accom_Ques_2'] : "";
      $Accom_Ques_3     = isset($_POST['Accom_Ques_3']) ? $_POST['Accom_Ques_3'] : "";
      $Accom_Ques_4     = isset($_POST['Accom_Ques_4']) ? $_POST['Accom_Ques_4'] : "";
      $Accom_Ques_5     = isset($_POST['Accom_Ques_5']) ? $_POST['Accom_Ques_5'] : "";
      $Accom_Ques_6     = isset($_POST['Accom_Ques_6']) ? $_POST['Accom_Ques_6'] : "";



    	$query =  DB::table('Vendors_Account')->where('ID',$id)->update(['given_name' => $name, 'sur_name' => $lastname, 'vendors_email' => $email, 'vendor_title' => $title, 'verndor_position' => $position, 'phone_number' => $contact_number, 'buisness_vendor_name' => $buisness_vendor_name,'buisnessstreet_address' => $street_address, 'buisness_vendor_unit' => $unit,'buisness_vendor_city' => $city,'buisness_vendor_state' => $state,'buisness_vendor_postal' => $postal,'buisness_vendor_country' => $country,'buisness_vendor_phone' => $vendor_phone,'accomodation_sub_type' => $accomodationtype ,'accomodation_sub_region' => $sub_region,'total_square_feet' => $square_footage,'bedrooms' => $bedrooms,'washrooms' => $washrooms,'sleeps' => $sleeps,'spring_rate' =>$spring_rate,'summer_rate' =>$summer_rate,'winter_rate' => $winter_rate,'fall_rate' => $fall_rate,'streaminglink1' =>$streaminglink1 ,'streaminglink2' =>$streaminglink2,'streaminglink3' =>$streaminglink3,'streaminglink4' =>$streaminglink4,'streaminglink5' =>$streaminglink5,'streaminglink6' => $streaminglink6,'accom_account_status' => $account_status,'price_point_rating' => $price_point_rating,'Accom_Ques_1' => $Accom_Ques_1,'Accom_Ques_2' => $Accom_Ques_2,'Accom_Ques_3' => $Accom_Ques_3,'Accom_Ques_4' => $Accom_Ques_4,'Accom_Ques_5' => $Accom_Ques_5,'Accom_Ques_6' => $Accom_Ques_6,'current_booking_rate' =>$current_rate,'description' => $description,'accom_website_url' => $website_url,'buisness_vendor_email' => $buisness_vendor_email,'accom_facebook' => $facebook,'accom_instagram' => $instagram,'accom_twitter' => $twitter,'accom_youtube' => $youtube,'accom_autumn' => $accom_autumn ]);
  
    	if($query =='1'){
    		echo 'Data Updated Successfully';
    		// return view('vendors');	
    	}
    	
    } 

    // Function for update the excursion admin vendor form
    public function update_excursion_form(Request $request)
    {

      $id = $_POST['id'];
      $streaminglink1             =  isset($_POST['streaming_link1']) ? $_POST['streaming_link1'] : "";
     $streaminglink2             =  isset($_POST['streaming_link2']) ? $_POST['streaming_link2'] : "";
     $streaminglink3             =  isset($_POST['streaming_link3']) ? $_POST['streaming_link3'] : "";
     $streaminglink4             =  isset($_POST['streaming_link4']) ? $_POST['streaming_link4'] : "";
     $streaminglink5             =  isset($_POST['streaming_link5'])? $_POST['streaming_link5'] : "";
     $streaminglink6             =  isset($_POST['streaming_link6']) ? $_POST['streaming_link6'] : "";

      $name                   = isset($_POST['excursion_given_name']) ? $_POST['excursion_given_name'] : "";
      $lastname               = isset($_POST['excursion_contact_lastname']) ? $_POST['excursion_contact_lastname'] : "";
      $email                  = isset($_POST['excursion_contact_email']) ? $_POST['excursion_contact_email'] : "";
      $title                  = isset($_POST['excursion_contact_title']) ? $_POST['excursion_contact_title'] : "";
      $position               = isset($_POST['excursion_contact_position']) ? $_POST['excursion_contact_position'] : "";
      $contact_number         = isset($_POST['excursion_contact_number']) ? $_POST['excursion_contact_number'] : "";
      $buisness_vendor_name   = isset($_POST['excursion_buisness_vendor_name']) ? $_POST['excursion_buisness_vendor_name'] : "";
      $street_address         = isset($_POST['excursion_street_address']) ? $_POST['excursion_street_address'] : "";
      $unit                   = isset($_POST['excursion_unit']) ? $_POST['excursion_unit'] : "";
      $city                   = isset($_POST['excursion_vendor_city']) ? $_POST['excursion_vendor_city'] : ""; 
      $state                  = isset($_POST['excursion_state']) ? $_POST['excursion_state'] : ""; 
      $postal                 = isset($_POST['excursion_vendor_postal']) ? $_POST['excursion_vendor_postal'] : ""; 
      $country                = isset($_POST['excursion_vendor_country']) ? $_POST['excursion_vendor_country'] : "";    
      $vendor_phone           = isset($_POST['excursion_vendor_phone']) ? $_POST['excursion_vendor_phone'] : "";    
      $description            = isset($_POST['description']) ? $_POST['description'] : "";
      $current_rate           = isset($_POST['excursion_currentrate']) ? $_POST['excursion_currentrate'] : "";
      $square_footage         = isset($_POST['excursion_square_footage']) ? $_POST['excursion_square_footage'] : "";    
      $bedrooms               = isset($_POST['excursion_bedrooms']) ? $_POST['excursion_bedrooms'] : "";    
      $washrooms              = isset($_POST['excursion_washrooms']) ? $_POST['excursion_washrooms'] : "";    
      $sleeps                 = isset($_POST['excursion_sleeps']) ? $_POST['excursion_sleeps'] : "";  
      $sub_region             = isset($_POST['excursion_sub_region']) ? $_POST['excursion_sub_region'] : "";  
      $accomodationtype       = isset($_POST['excursion_sub_type']) ? $_POST['excursion_sub_type'] : "";  
      $experience_type       = isset($_POST['experience_type']) ? $_POST['experience_type'] : "";  
      $group_orientation       = isset($_POST['group_orientation']) ? $_POST['group_orientation'] : "";  
      $website_url            = isset($_POST['website_url']) ? $_POST['website_url'] : "";  
      $buisness_vendor_email  = isset($_POST['buisness_vendor_email']) ? $_POST['buisness_vendor_email'] : "";  
      $spring_rate            = isset($_POST['excursion_spring']) ? $_POST['excursion_spring'] : "";  
      $summer_rate            = isset($_POST['excursion_summer']) ? $_POST['excursion_summer'] : "";  
      $fall_rate              = isset($_POST['fall_rate']) ? $_POST['fall_rate'] : "";  
      $winter_rate            = isset($_POST['excursion_winter']) ? $_POST['excursion_winter'] : ""; 
      $accom_autumn           = isset($_POST['accom_autumn']) ? $_POST['accom_autumn'] : ""; 
      $price_point_rating     = isset($_POST['excursion_price_point_rating']) ? $_POST['excursion_price_point_rating'] : "";  
      $facebook               = isset($_POST['facebook']) ? $_POST['facebook'] : "";  
      $instagram              = isset($_POST['instagram']) ? $_POST['instagram'] : "";  
      $twitter                = isset($_POST['twitter']) ? $_POST['twitter'] : "";  
      $youtube                = isset($_POST['youtube']) ? $_POST['youtube'] : "";  
      $account_status         = isset($_POST['excursion_account_status']) ? $_POST['excursion_account_status'] : "";   

      // Accomodation Questionaree
      $Excu_Ques_1     = isset($_POST['Excu_Ques_1']) ? $_POST['Excu_Ques_1'] : "";
      $Excu_Ques_2     = isset($_POST['Excu_Ques_2']) ? $_POST['Excu_Ques_2'] : "";
      $Excu_Ques_3     = isset($_POST['Excu_Ques_3']) ? $_POST['Excu_Ques_3'] : "";
      $Excu_Ques_4     = isset($_POST['Excu_Ques_4']) ? $_POST['Excu_Ques_4'] : "";
      $Excu_Ques_5     = isset($_POST['Excu_Ques_5']) ? $_POST['Excu_Ques_5'] : "";
      $Excu_Ques_6     = isset($_POST['Excu_Ques_6']) ? $_POST['Excu_Ques_6'] : "";

      $Excu_Ques_7     = isset($_POST['Excu_Ques_7']) ? $_POST['Excu_Ques_7'] : "";
      $Excu_Ques_8     = isset($_POST['Excu_Ques_8']) ? $_POST['Excu_Ques_8'] : "";



      $query =  DB::table('Vendors_Account')->where('ID',$id)->update(['given_name' => $name, 'sur_name' => $lastname, 'vendors_email' => $email, 'vendor_title' => $title, 'verndor_position' => $position, 'phone_number' => $contact_number, 'buisness_vendor_name' => $buisness_vendor_name,'buisnessstreet_address' => $street_address, 'buisness_vendor_unit' => $unit,'buisness_vendor_city' => $city,'buisness_vendor_state' => $state,'buisness_vendor_postal' => $postal,'buisness_vendor_country' => $country,'buisness_vendor_phone' => $vendor_phone,'accomodation_sub_type' => $accomodationtype ,'accomodation_sub_region' => $sub_region,'total_square_feet' => $square_footage,'bedrooms' => $bedrooms,'washrooms' => $washrooms,'sleeps' => $sleeps,'spring_rate' =>$spring_rate,'summer_rate' =>$summer_rate,'winter_rate' => $winter_rate,'fall_rate' => $fall_rate,'streaminglink1' =>$streaminglink1 ,'streaminglink2' =>$streaminglink2,'streaminglink3' =>$streaminglink3,'streaminglink4' =>$streaminglink4,'streaminglink5' =>$streaminglink5,'streaminglink6' => $streaminglink6,'accom_account_status' => $account_status,'price_point_rating' => $price_point_rating,'Accom_Ques_1' => $Excu_Ques_1,'Accom_Ques_2' => $Excu_Ques_2,'Accom_Ques_3' => $Excu_Ques_3,'Accom_Ques_4' => $Excu_Ques_4,'Accom_Ques_5' => $Excu_Ques_5,'Accom_Ques_6' => $Excu_Ques_6,'current_booking_rate' =>$current_rate,'description' => $description,'accom_website_url' => $website_url,'buisness_vendor_email' => $buisness_vendor_email,'accom_facebook' => $facebook,'accom_instagram' => $instagram,'accom_twitter' => $twitter,'accom_youtube' => $youtube,'accom_autumn' => $accom_autumn,'experience_type' => $experience_type,'group_orientation' => $group_orientation]);
  
      if($query =='1'){
        echo 'Data Updated Successfully';
        // return view('vendors');  
      }
      
    } 

     // Function for update the winery admin vendor form
    public function update_winery_form(Request $request)
    {

      $id = $_POST['id'];

      $name                   = isset($_POST['winery_contact_name']) ? $_POST['winery_contact_name'] : "";
      $lastname               = isset($_POST['winery_contact_lastname']) ? $_POST['winery_contact_lastname'] : "";
      $email                  = isset($_POST['winery_contact_email']) ? $_POST['winery_contact_email'] : "";
      $title                  = isset($_POST['winery_contact_contact_title']) ? $_POST['winery_contact_title'] : "";
      $position               = isset($_POST['winery_contact_position']) ? $_POST['winery_contact_position'] : "";
      $contact_number         = isset($_POST['winery_contact_number']) ? $_POST['winery_contact_number'] : "";
      $buisness_vendor_name   = isset($_POST['winery_buisness_vendor_name']) ? $_POST['winery_buisness_vendor_name'] : "";
      $street_address         = isset($_POST['winery_buisness_vendor_street_add']) ? $_POST['winery_buisness_vendor_street_add'] : "";
      $unit                   = isset($_POST['winery_buisness_vendor_unit']) ? $_POST['winery_buisness_vendor_unit'] : "";
      $city                   = isset($_POST['winery_buisness_vendor_city']) ? $_POST['winery_buisness_vendor_city'] : ""; 
      $state                  = isset($_POST['winery_buisness_vendor_province']) ? $_POST['winery_buisness_vendor_province'] : ""; 
      $postal                 = isset($_POST['winery_buisness_vendor_postal']) ? $_POST['winery_buisness_vendor_postal'] : ""; 
      $country                = isset($_POST['winery_buisness_vendor_country']) ? $_POST['winery_buisness_vendor_country'] : "";    
      $vendor_phone           = isset($_POST['winery_buisness_phone']) ? $_POST['winery_buisness_phone'] : "";    
      $description            = isset($_POST['description']) ? $_POST['description'] : "";
      $current_rate           = isset($_POST['current_rate']) ? $_POST['current_rate'] : "";
      $square_footage         = isset($_POST['winery_squarefootage']) ? $_POST['winery_squarefootage'] : "";    
      $bedrooms               = isset($_POST['winery_bedrooms']) ? $_POST['winery_bedrooms'] : "";    
      $washrooms              = isset($_POST['winery_washrooms']) ? $_POST['winery_washrooms'] : "";    
      $sleeps                 = isset($_POST['winery_sleeps']) ? $_POST['winery_sleeps'] : "";  
      $sub_region             = isset($_POST['excursion_sub_region']) ? $_POST['excursion_sub_region'] : "";  
      $accomodationtype       = isset($_POST['winery_sub_type']) ? $_POST['winery_sub_type'] : "";  
      $winery_tasting_type       = isset($_POST['tasting_type']) ? $_POST['tasting_type'] : "";  
      $group_orientation       = isset($_POST['group_orientation']) ? $_POST['group_orientation'] : "";  
      $website_url            = isset($_POST['website_url']) ? $_POST['website_url'] : "";  
      $buisness_vendor_email  = isset($_POST['buisness_vendor_email']) ? $_POST['buisness_vendor_email'] : "";  
      $spring_rate            = isset($_POST['winery_spring']) ? $_POST['winery_spring'] : "";  
      $summer_rate            = isset($_POST['winery_summer']) ? $_POST['winery_summer'] : "";  
      $fall_rate              = isset($_POST['fall_rate']) ? $_POST['fall_rate'] : "";  
      $winter_rate            = isset($_POST['winery_winter']) ? $_POST['winery_winter'] : ""; 
      $accom_autumn           = isset($_POST['winery_autumn']) ? $_POST['winery_autumn'] : ""; 
      $price_point_rating     = isset($_POST['winery_price_point_rating']) ? $_POST['winery_price_point_rating'] : "";  
      $facebook               = isset($_POST['facebook']) ? $_POST['facebook'] : "";  
      $instagram              = isset($_POST['instagram']) ? $_POST['instagram'] : "";  
      $twitter                = isset($_POST['twitter']) ? $_POST['twitter'] : "";  
      $youtube                = isset($_POST['youtube']) ? $_POST['youtube'] : "";  
      $account_status         = isset($_POST['winery_account_status']) ? $_POST['winery_account_status'] : "";   

      // Accomodation Questionaree
      $Winery_Ques_1     = isset($_POST['Winery_Ques_1']) ? $_POST['Winery_Ques_1'] : "";
      $Winery_Ques_2     = isset($_POST['Winery_Ques_2']) ? $_POST['Winery_Ques_2'] : "";
      $Winery_Ques_3     = isset($_POST['Winery_Ques_3']) ? $_POST['Winery_Ques_3'] : "";
      $Winery_Ques_4     = isset($_POST['Winery_Ques_4']) ? $_POST['Winery_Ques_4'] : "";
      $Winery_Ques_5     = isset($_POST['Winery_Ques_5']) ? $_POST['Winery_Ques_5'] : "";
      $Winery_Ques_6     = isset($_POST['Winery_Ques_6']) ? $_POST['Winery_Ques_6'] : "";

      $Winery_Ques_7     = isset($_POST['Winery_Ques_7']) ? $_POST['Winery_Ques_7'] : "";
      $Winery_Ques_8     = isset($_POST['Winery_Ques_8']) ? $_POST['Winery_Ques_8'] : "";
      $Winery_Ques_9     = isset($_POST['Winery_Ques_9']) ? $_POST['Winery_Ques_9'] : "";
       $streaminglink1             =  isset($_POST['streaming_link1']) ? $_POST['streaming_link1'] : "";
     $streaminglink2             =  isset($_POST['streaming_link2']) ? $_POST['streaming_link2'] : "";
     $streaminglink3             =  isset($_POST['streaming_link3']) ? $_POST['streaming_link3'] : "";
     $streaminglink4             =  isset($_POST['streaming_link4']) ? $_POST['streaming_link4'] : "";
     $streaminglink5             =  isset($_POST['streaming_link5'])? $_POST['streaming_link5'] : "";
     $streaminglink6             =  isset($_POST['streaming_link6']) ? $_POST['streaming_link6'] : "";




      $query =  DB::table('Vendors_Account')->where('ID',$id)->update(['given_name' => $name, 'sur_name' => $lastname, 'vendors_email' => $email, 'vendor_title' => $title, 'verndor_position' => $position, 'phone_number' => $contact_number, 'buisness_vendor_name' => $buisness_vendor_name,'buisnessstreet_address' => $street_address, 'buisness_vendor_unit' => $unit,'buisness_vendor_city' => $city,'buisness_vendor_state' => $state,'buisness_vendor_postal' => $postal,'buisness_vendor_country' => $country,'buisness_vendor_phone' => $vendor_phone,'accomodation_sub_type' => $accomodationtype ,'accomodation_sub_region' => $sub_region,'total_square_feet' => $square_footage,'bedrooms' => $bedrooms,'washrooms' => $washrooms,'sleeps' => $sleeps,'spring_rate' =>$spring_rate,'summer_rate' =>$summer_rate,'winter_rate' => $winter_rate,'fall_rate' => $fall_rate,'streaminglink1' =>$streaminglink1 ,'streaminglink2' =>$streaminglink2,'streaminglink3' =>$streaminglink3,'streaminglink4' =>$streaminglink4,'streaminglink5' =>$streaminglink5,'streaminglink6' => $streaminglink6,'accom_account_status' => $account_status,'price_point_rating' => $price_point_rating,'Accom_Ques_1' => $Winery_Ques_1,'Accom_Ques_2' => $Winery_Ques_2,'Accom_Ques_3' => $Winery_Ques_3,'Accom_Ques_4' => $Winery_Ques_4,'Accom_Ques_5' => $Winery_Ques_5,'Accom_Ques_6' => $Winery_Ques_6,'Question_7' => $Winery_Ques_7,'Question_8' => $Winery_Ques_8,'Question_9' => $Winery_Ques_9,'current_booking_rate' =>$current_rate,'description' => $description,'accom_website_url' => $website_url,'buisness_vendor_email' => $buisness_vendor_email,'accom_facebook' => $facebook,'accom_instagram' => $instagram,'accom_twitter' => $twitter,'accom_youtube' => $youtube,'accom_autumn' => $accom_autumn ,'group_orientation' => $group_orientation,'winery_tasting_type' =>$winery_tasting_type]);
  
      if($query =='1'){
        echo 'Data Updated Successfully';
        // return view('vendors');  
      }
      
    } 

    // Function for update the license admin vendor form
    public function update_license_form(Request $request)
    {
      $id = $_POST['id'];
      if($menu_pdf = $request->hasFile('menu_pdf')){
        $menu_pdf = $request->file('menu_pdf') ;
        $menu_pdf_name = $menu_pdf->getClientOriginalName();

        $destinationPath7 = public_path().'/menu_pdf/license';
        $menu_pdf->move($destinationPath7,$menu_pdf_name);
        $menu_pdf_name = "/menu_pdf/license".$menu_pdf_name;
      }
      $logo_n               = isset($logo_n) ? $logo_n: "";
      $menu_pdf_name        = isset($menu_pdf_name) ? $menu_pdf_name: "";
      $streamingslide6      = isset($streamingslide6) ? $streamingslide6 : "";
      $streamingslide1      = isset($streamingslide1) ? $streamingslide1 : "";      
      $streamingslide2      = isset($streamingslide2) ? $streamingslide2 : "";
      $streamingslide3      = isset($streamingslide3) ? $streamingslide3 : "";
      $streamingslide4      = isset($streamingslide4) ? $streamingslide4 : "";
      $streamingslide5      = isset($streamingslide5) ? $streamingslide5 : "";


      if($streamingslide1 == ''){
          $streamingslide1 = $_POST['savedGallerSlide1'];
      } 
       if($streamingslide2 == ''){
          $streamingslide2 = $_POST['savedGallerSlide2'];
      }
       if($streamingslide3 == ''){
          $streamingslide3 = $_POST['savedGallerSlide3'];
      }
       if($streamingslide4 == ''){
          $streamingslide4 = $_POST['savedGallerSlide4'];
      }
       if($streamingslide5 == ''){
          $streamingslide5 = $_POST['savedGallerSlide5'];
      }
       if($streamingslide6 == ''){
          $streamingslide6 = $_POST['savedGallerSlide6'];
      }


     $streaminglink1             =  isset($_POST['streaming_link1']) ? $_POST['streaming_link1'] : "";
     $streaminglink2             =  isset($_POST['streaming_link2']) ? $_POST['streaming_link2'] : "";
     $streaminglink3             =  isset($_POST['streaming_link3']) ? $_POST['streaming_link3'] : "";
     $streaminglink4             =  isset($_POST['streaming_link4']) ? $_POST['streaming_link4'] : "";
     $streaminglink5             =  isset($_POST['streaming_link5'])? $_POST['streaming_link5'] : "";
     $streaminglink6             =  isset($_POST['streaming_link6']) ? $_POST['streaming_link6'] : "";

      $name                   = isset($_POST['contact_name']) ? $_POST['contact_name'] : "";
      $lastname               = isset($_POST['contact_lastname']) ? $_POST['contact_lastname'] : "";
      $email                  = isset($_POST['contact_email']) ? $_POST['contact_email'] : "";
      $title                  = isset($_POST['contact_title']) ? $_POST['contact_title'] : "";
      $position               = isset($_POST['contact_position']) ? $_POST['contact_position'] : "";
      $contact_number         = isset($_POST['contact_number']) ? $_POST['contact_number'] : "";
      $buisness_vendor_name   = isset($_POST['buisness_vendor_name']) ? $_POST['buisness_vendor_name'] : "";
      $street_address         = isset($_POST['buisness_street_address']) ? $_POST['buisness_street_address'] : "";
      $unit                   = isset($_POST['unit']) ? $_POST['unit'] : "";
      $city                   = isset($_POST['city']) ? $_POST['city'] : ""; 
      $state                  = isset($_POST['province']) ? $_POST['province'] : ""; 
      $postal                 = isset($_POST['postal']) ? $_POST['postal'] : ""; 
      $country                = isset($_POST['country']) ? $_POST['country'] : "";    
      $vendor_phone           = isset($_POST['phone']) ? $_POST['phone'] : "";    
      $description            = isset($_POST['description']) ? $_POST['description'] : "";
      $square_footage         = isset($_POST['license_square_footage']) ? $_POST['license_square_footage'] : "";    
      $bedrooms               = isset($_POST['license_bedrooms']) ? $_POST['license_bedrooms'] : "";    
      $washrooms              = isset($_POST['license_washrooms']) ? $_POST['license_washrooms'] : "";    
      $sleeps                 = isset($_POST['license_sleeps']) ? $_POST['license_sleeps'] : "";  
      $sub_region             = isset($_POST['license_sub_region']) ? $_POST['license_sub_region'] : "";  
      $accomodationtype       = isset($_POST['license_type']) ? $_POST['license_type'] : "";  
      $group_orientation       = isset($_POST['group_orientation']) ? $_POST['group_orientation'] : "";  
      $website_url            = isset($_POST['website_url']) ? $_POST['website_url'] : "";  
      $buisness_vendor_email  = isset($_POST['buisness_vendor_email']) ? $_POST['buisness_vendor_email'] : "";  
      $spring_rate            = isset($_POST['winery_spring']) ? $_POST['winery_spring'] : "";  
      $summer_rate            = isset($_POST['winery_summer']) ? $_POST['winery_summer'] : "";  
      $fall_rate              = isset($_POST['fall_rate']) ? $_POST['fall_rate'] : "";  
      $winter_rate            = isset($_POST['winery_winter']) ? $_POST['winery_winter'] : ""; 
      $accom_autumn           = isset($_POST['winery_autumn']) ? $_POST['winery_autumn'] : ""; 
      $price_point_rating     = isset($_POST['price_point_rating']) ? $_POST['price_point_rating'] : "";  
      $facebook               = isset($_POST['facebook']) ? $_POST['facebook'] : "";  
      $instagram              = isset($_POST['instagram']) ? $_POST['instagram'] : "";  
      $twitter                = isset($_POST['twitter']) ? $_POST['twitter'] : "";  
      $youtube                = isset($_POST['youtube']) ? $_POST['youtube'] : "";  
      $account_status         = isset($_POST['account_status']) ? $_POST['account_status'] : "";   

      // Accomodation Questionaree
      $License_Ques_1     = isset($_POST['License_Ques_1']) ? $_POST['License_Ques_1'] : "";
      $License_Ques_2     = isset($_POST['License_Ques_2']) ? $_POST['License_Ques_2'] : "";
      $License_Ques_3     = isset($_POST['License_Ques_3']) ? $_POST['License_Ques_3'] : "";
      $License_Ques_4     = isset($_POST['License_Ques_4']) ? $_POST['License_Ques_4'] : "";



      $query =  DB::table('Vendors_Account')->where('ID',$id)->update(['given_name' => $name, 'sur_name' => $lastname, 'vendors_email' => $email, 'vendor_title' => $title, 'verndor_position' => $position, 'phone_number' => $contact_number, 'buisness_vendor_name' => $buisness_vendor_name,'buisnessstreet_address' => $street_address, 'buisness_vendor_unit' => $unit,'buisness_vendor_city' => $city,'buisness_vendor_state' => $state,'buisness_vendor_postal' => $postal,'buisness_vendor_country' => $country,'buisness_vendor_phone' => $vendor_phone,'accomodation_sub_type' => $accomodationtype ,'accomodation_sub_region' => $sub_region,'total_square_feet' => $square_footage,'bedrooms' => $bedrooms,'washrooms' => $washrooms,'sleeps' => $sleeps,'spring_rate' =>$spring_rate,'summer_rate' =>$summer_rate,'winter_rate' => $winter_rate,'fall_rate' => $fall_rate,'streaminglink1' =>$streaminglink1 ,'streaminglink2' =>$streaminglink2,'streaminglink3' =>$streaminglink3,'streaminglink4' =>$streaminglink4,'streaminglink5' =>$streaminglink5,'streaminglink6' => $streaminglink6,'accom_account_status' => $account_status,'price_point_rating' => $price_point_rating,'Accom_Ques_1' => $License_Ques_1,'Accom_Ques_2' => $License_Ques_2,'Accom_Ques_3' => $License_Ques_3,'Accom_Ques_4' => $License_Ques_4,'description' => $description,'accom_website_url' => $website_url,'buisness_vendor_email' => $buisness_vendor_email,'accom_facebook' => $facebook,'accom_instagram' => $instagram,'accom_twitter' => $twitter,'accom_youtube' => $youtube,'accom_autumn' => $accom_autumn,'group_orientation' => $group_orientation,'license_menu_pdf' => $menu_pdf ]);
  
      if($query =='1'){
        echo 'Data Updated Successfully';
        // return view('vendors');  
      }
      
    } 

    // Function for update the non_license admin vendor form
    public function update_non_license_form(Request $request)
    {
      $id = $_POST['id'];

      if($menu_pdf = $request->hasFile('menu_pdf')){
        $menu_pdf = $request->file('menu_pdf') ;
        $menu_pdf_name = $menu_pdf->getClientOriginalName();

        $destinationPath7 = public_path().'/menu_pdf/license/';
        $menu_pdf->move($destinationPath7,$menu_pdf_name);
        $menu_pdf_name = "/menu_pdf/non-license/".$menu_pdf_name;
      }

      $logo_n                 = isset($logo_n) ? $logo_n: "";
      $menu_pdf_name                 = isset($menu_pdf_name) ? $menu_pdf_name: "";
      $streamingslide6      = isset($streamingslide6) ? $streamingslide6 : "";
      $streamingslide1      = isset($streamingslide1) ? $streamingslide1 : "";      
      $streamingslide2      = isset($streamingslide2) ? $streamingslide2 : "";
      $streamingslide3      = isset($streamingslide3) ? $streamingslide3 : "";
      $streamingslide4      = isset($streamingslide4) ? $streamingslide4 : "";
      $streamingslide5      = isset($streamingslide5) ? $streamingslide5 : "";


      if($streamingslide1 == ''){
          $streamingslide1 = $_POST['savedGallerSlide1'];
      } 
       if($streamingslide2 == ''){
          $streamingslide2 = $_POST['savedGallerSlide2'];
      }
       if($streamingslide3 == ''){
          $streamingslide3 = $_POST['savedGallerSlide3'];
      }
       if($streamingslide4 == ''){
          $streamingslide4 = $_POST['savedGallerSlide4'];
      }
       if($streamingslide5 == ''){
          $streamingslide5 = $_POST['savedGallerSlide5'];
      }
       if($streamingslide6 == ''){
          $streamingslide6 = $_POST['savedGallerSlide6'];
      }


     $streaminglink1             =  isset($_POST['streaming_link1']) ? $_POST['streaming_link1'] : "";
     $streaminglink2             =  isset($_POST['streaming_link2']) ? $_POST['streaming_link2'] : "";
     $streaminglink3             =  isset($_POST['streaming_link3']) ? $_POST['streaming_link3'] : "";
     $streaminglink4             =  isset($_POST['streaming_link4']) ? $_POST['streaming_link4'] : "";
     $streaminglink5             =  isset($_POST['streaming_link5'])? $_POST['streaming_link5'] : "";
     $streaminglink6             =  isset($_POST['streaming_link6']) ? $_POST['streaming_link6'] : "";

      $name                   = isset($_POST['contact_name']) ? $_POST['contact_name'] : "";
      $lastname               = isset($_POST['contact_lastname']) ? $_POST['contact_lastname'] : "";
      $email                  = isset($_POST['contact_email']) ? $_POST['contact_email'] : "";
      $title                  = isset($_POST['contact_title']) ? $_POST['contact_title'] : "";
      $position               = isset($_POST['contact_position']) ? $_POST['contact_position'] : "";
      $contact_number         = isset($_POST['contact_number']) ? $_POST['contact_number'] : "";
      $buisness_vendor_name   = isset($_POST['buisness_vendor_name']) ? $_POST['buisness_vendor_name'] : "";
      $street_address         = isset($_POST['street_Address']) ? $_POST['street_Address'] : "";
      $unit                   = isset($_POST['unit']) ? $_POST['unit'] : "";
      $city                   = isset($_POST['city']) ? $_POST['city'] : ""; 
      $state                  = isset($_POST['province']) ? $_POST['province'] : ""; 
      $postal                 = isset($_POST['postal']) ? $_POST['postal'] : ""; 
      $country                = isset($_POST['country']) ? $_POST['country'] : "";    
      $vendor_phone           = isset($_POST['phone']) ? $_POST['phone'] : "";    
      $description            = isset($_POST['description']) ? $_POST['description'] : "";
      $current_rate           = isset($_POST['excursion_currentrate']) ? $_POST['excursion_currentrate'] : "";
      $square_footage         = isset($_POST['non_license_square_footage']) ? $_POST['non_license_square_footage'] : "";    
      $bedrooms               = isset($_POST['non_license_bedrooms']) ? $_POST['non_license_bedrooms'] : "";    
      $washrooms              = isset($_POST['non_license_washrooms']) ? $_POST['non_license_washrooms'] : "";    
      $sleeps                 = isset($_POST['non_license_sleeps']) ? $_POST['non_license_sleeps'] : "";  
      $sub_region             = isset($_POST['non_license_sub_region']) ? $_POST['non_license_sub_region'] : "";  
      $accomodationtype       = isset($_POST['non_license_type']) ? $_POST['non_license_type'] : "";  
      $group_orientation       = isset($_POST['group_orientation']) ? $_POST['group_orientation'] : "";  
      $website_url            = isset($_POST['website_url']) ? $_POST['website_url'] : "";  
      $buisness_vendor_email  = isset($_POST['buisness_vendor_email']) ? $_POST['buisness_vendor_email'] : "";  
      $spring_rate            = isset($_POST['non_license_spring']) ? $_POST['non_license_spring'] : "";  
      $summer_rate            = isset($_POST['non_license_summer']) ? $_POST['non_license_summer'] : "";  
      $fall_rate              = isset($_POST['fall_rate']) ? $_POST['fall_rate'] : "";  
      $winter_rate            = isset($_POST['non_license_winter']) ? $_POST['non_license_winter'] : ""; 
      $accom_autumn           = isset($_POST['non_license_autumn']) ? $_POST['non_license_autumn'] : ""; 
      $price_point_rating     = isset($_POST['non_license_price_point_rating']) ? $_POST['non_license_price_point_rating'] : "";  
      $facebook               = isset($_POST['facebook']) ? $_POST['facebook'] : "";  
      $instagram              = isset($_POST['instagram']) ? $_POST['instagram'] : "";  
      $twitter                = isset($_POST['twitter']) ? $_POST['twitter'] : "";  
      $youtube                = isset($_POST['youtube']) ? $_POST['youtube'] : "";  
      $account_status         = isset($_POST['non_license_account_status']) ? $_POST['non_license_account_status'] : "";   

      // Accomodation Questionaree
      $Non_License_Ques_1     = isset($_POST['Non_License_Ques_1']) ? $_POST['Non_License_Ques_1'] : "";
      $Non_License_Ques_2     = isset($_POST['Non_License_Ques_2']) ? $_POST['Non_License_Ques_2'] : "";
      $Non_License_Ques_3     = isset($_POST['Non_License_Ques_3']) ? $_POST['Non_License_Ques_3'] : "";
      $Non_License_Ques_4     = isset($_POST['Non_License_Ques_4']) ? $_POST['Non_License_Ques_4'] : "";



      $query =  DB::table('Vendors_Account')->where('ID',$id)->update(['given_name' => $name, 'sur_name' => $lastname, 'vendors_email' => $email, 'vendor_title' => $title, 'verndor_position' => $position, 'phone_number' => $contact_number, 'buisness_vendor_name' => $buisness_vendor_name,'buisnessstreet_address' => $street_address, 'buisness_vendor_unit' => $unit,'buisness_vendor_city' => $city,'buisness_vendor_state' => $state,'buisness_vendor_postal' => $postal,'buisness_vendor_country' => $country,'buisness_vendor_phone' => $vendor_phone,'accomodation_sub_type' => $accomodationtype ,'accomodation_sub_region' => $sub_region,'total_square_feet' => $square_footage,'bedrooms' => $bedrooms,'washrooms' => $washrooms,'sleeps' => $sleeps,'spring_rate' =>$spring_rate,'summer_rate' =>$summer_rate,'winter_rate' => $winter_rate,'fall_rate' => $fall_rate,'streaminglink1' =>$streaminglink1 ,'streaminglink2' =>$streaminglink2,'streaminglink3' =>$streaminglink3,'streaminglink4' =>$streaminglink4,'streaminglink5' =>$streaminglink5,'streaminglink6' => $streaminglink6,'accom_account_status' => $account_status,'price_point_rating' => $price_point_rating,'Accom_Ques_1' => $Non_License_Ques_1,'Accom_Ques_2' => $Non_License_Ques_2,'Accom_Ques_3' => $Non_License_Ques_3,'Accom_Ques_4' => $Non_License_Ques_4,'current_booking_rate' =>$current_rate,'description' => $description,'accom_website_url' => $website_url,'buisness_vendor_email' => $buisness_vendor_email,'accom_facebook' => $facebook,'accom_instagram' => $instagram,'accom_twitter' => $twitter,'accom_youtube' => $youtube,'accom_autumn' => $accom_autumn,'non_license_pdf' => $menu_pdf_name,'group_orientation' => $group_orientation ]);
  
      if($query =='1'){
        echo 'Data Updated Successfully';
      }
      
    } 

	
		public function excursion(Request $request)
    {
      $user_data = Auth::user();
      if($user_data){
        $user_id = $user_data->id;
      }else{
         $user_id = null;
      }
    	$excursion_buisness_vendor_name = isset($_POST['excursion_buisness_vendor_name']) ? $_POST['excursion_buisness_vendor_name'] : "";
    	$excursion_street_address = isset($_POST['excursion_street_address']) ? $_POST['excursion_street_address'] : "";
    	$excursion_unit = isset($_POST['excursion_unit']) ? $_POST['excursion_unit'] : "";
    	$excursion_vendor_city = isset($_POST['excursion_vendor_city']) ? $_POST['excursion_vendor_city'] : "";
    	$excursion_state = isset($_POST['excursion_state']) ? $_POST['excursion_state'] : "";
    	$excursion_vendor_postal = isset($_POST['excursion_vendor_postal']) ? $_POST['excursion_vendor_postal'] : "";
    	$excursion_vendor_country = isset($_POST['excursion_vendor_country']) ? $_POST['excursion_vendor_country'] : "";
    	$description  = isset($_POST['excursion_description']) ? $_POST['excursion_description'] : "";
    	$excursion_vendor_phone = isset($_POST['excursion_vendor_phone']) ? $_POST['excursion_vendor_phone'] : "";
    	$excursion_description = isset($_POST['excursion_description']) ? $_POST['excursion_description'] : "";
    	$excursion_square_footage = isset($_POST['excursion_square_footage']) ? $_POST['excursion_square_footage'] : "";
    	$excursion_bedrooms = isset($_POST['excursion_bedrooms']) ? $_POST['excursion_bedrooms'] : "";
    	$excursion_washrooms = isset($_POST['excursion_washrooms']) ? $_POST['excursion_washrooms'] : "";
    	$excursion_sleeps = isset($_POST['excursion_sleeps']) ? $_POST['excursion_sleeps'] : "";
    	$excurison_accommodaton_type = isset($_POST['excursion_sub_type']) ? $_POST['excursion_sub_type'] : "";
    	$sub_region = isset($_POST['excursion_sub_region']) ? $_POST['excursion_sub_region'] : "";

    	 $result = DB::insert('insert into Vendors_Account (	buisness_vendor_name,buisnessstreet_address,buisness_vendor_unit,buisness_vendor_city,buisness_vendor_state,buisness_vendor_postal,buisness_vendor_country,buisness_vendor_phone,accomodation_sub_region,description,total_square_feet,bedrooms,washrooms,sleeps,vendor_type,user_id) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array($excursion_buisness_vendor_name,$excursion_street_address,$excursion_unit,$excursion_vendor_city,$excursion_state,$excursion_vendor_postal,$excursion_vendor_country,$excursion_vendor_phone,$sub_region,$description,$excursion_square_footage,$excursion_bedrooms,$excursion_washrooms,$excursion_sleeps,'Excursion',$user_id));

    	 if($result = "1"){
        echo 'Data Inserted Successfully';
      }else{
        echo 'Error Occured';
      }
    }
    // Function for Winery Vendor Insertion

    public function winery(){

       $user_data = Auth::user();
      if($user_data){
        $user_id = $user_data->id;
      }else{
         $user_id = null;
      }
      $winery_buisness_vendor_name       = isset($_POST['winery_buisness_vendor_name']) ? $_POST['winery_buisness_vendor_name'] : "";
      $winery_buisness_vendor_street_add = isset($_POST['winery_street_address']) ? $_POST['winery_street_address'] : "";
      $winery_buisness_vendor_unit       = isset($_POST['winery_unit']) ? $_POST['winery_unit'] : "";
      $winery_buisness_vendor_city = isset($_POST['winery_vendor_city']) ? $_POST['winery_vendor_city'] : "";
      $winery_buisness_vendor_province   = isset($_POST['winery_state']) ? $_POST['winery_state'] : "";
      $winery_buisness_vendor_postal     = isset($_POST['winery_vendor_postal']) ? $_POST['winery_vendor_postal'] : "";
      $winery_buisness_vendor_country    = isset($_POST['winery_vendor_country']) ? $_POST['winery_vendor_country'] : "";

      $description           = isset($_POST['description']) ? $_POST['description'] : "";
      $winery_sub_region     = isset($_POST['winery_sub_region']) ? $_POST['winery_sub_region'] : "";
      $winery_buisness_phone = isset($_POST['winery_vendor_phone']) ? $_POST['winery_vendor_phone'] : "";
      $winery_sub_type       = isset($_POST['winery_sub_type']) ? $_POST['winery_sub_type'] : "";
      $winery_tasting_type   = isset($_POST['winery_tasting_type']) ? $_POST['winery_tasting_type'] : "";
      $winery_squarefootage  = isset($_POST['winery_squarefootage']) ? $_POST['winery_squarefootage'] : "";
      $winery_bedrooms       = isset($_POST['winery_bedrooms']) ? $_POST['winery_bedrooms'] : "";
      $winery_washrooms      = isset($_POST['winery_washrooms']) ? $_POST['winery_washrooms'] : "";
      $winery_sleeps         = isset($_POST['winery_sleeps']) ? $_POST['winery_sleeps'] : "";

      $result = DB::insert('insert into Vendors_Account (  buisness_vendor_name,buisnessstreet_address,buisness_vendor_unit,buisness_vendor_city,buisness_vendor_state,buisness_vendor_postal,buisness_vendor_country,buisness_vendor_phone,accomodation_sub_region,description,total_square_feet,bedrooms,washrooms,sleeps,vendor_type,user_id,accomodation_sub_type,winery_tasting_type) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array($winery_buisness_vendor_name,$winery_buisness_vendor_street_add,$winery_buisness_vendor_unit,$winery_buisness_vendor_city,$winery_buisness_vendor_province,$winery_buisness_vendor_postal,$winery_buisness_vendor_country,$winery_buisness_phone,$winery_sub_region,$description,$winery_squarefootage,$winery_bedrooms,$winery_washrooms,$winery_sleeps,'Winery',$user_id,$winery_sub_type,$winery_tasting_type));

      if($result = "1"){
        echo 'Data Inserted Successfully';
      }else{
        echo 'Error Occured';
      }
    }

  public function license(){
    $buisness_vendor_name           = isset($_POST['license_buisness_vendor_name']) ? $_POST['license_buisness_vendor_name'] : "";
    $buisness_street_address        = isset($_POST['license_street_address']) ? $_POST['license_street_address'] : "";
    $buisness_unit                  = isset($_POST['license_unit']) ? $_POST['license_unit'] : "";
    $buisness_city                  = isset($_POST['license_vendor_city']) ? $_POST['license_vendor_city'] : "";
    $buisness_province              = isset($_POST['license_state']) ? $_POST['license_state'] : "";
    $buisness_postal                = isset($_POST['license_vendor_postal']) ? $_POST['license_vendor_postal'] : "";
    $buisness_country               = isset($_POST['license_vendor_country']) ? $_POST['license_vendor_country'] : "";
    $buisness_sub_region            = isset($_POST['license_sub_region']) ? $_POST['license_sub_region'] : "";
    $buisness_phone                 = isset($_POST['license_vendor_phone']) ? $_POST['license_vendor_phone'] : "";
    $buisness_license_sub_type      = isset($_POST['license_sub_type']) ? $_POST['license_sub_type'] : "";
    $description      = isset($_POST['description']) ? $_POST['description'] : "";
    $buisness_license_squarefootage = isset($_POST['license_square_footage']) ? $_POST['license_square_footage'] : "";
    $buisness_license_bedrooms      = isset($_POST['license_bedrooms']) ? $_POST['license_bedrooms'] : "";
    $buisness_license_washrooms     = isset($_POST['license_washrooms']) ? $_POST['license_washrooms'] : "";
    $buisness_license_sleeps        = isset($_POST['license_sleeps']) ? $_POST['license_sleeps'] : "";

    $result = DB::insert('insert into Vendors_Account (  buisness_vendor_name,buisnessstreet_address,buisness_vendor_unit,buisness_vendor_city,buisness_vendor_state,buisness_vendor_postal,buisness_vendor_country,buisness_vendor_phone,accomodation_sub_region,description,total_square_feet,bedrooms,washrooms,sleeps,vendor_type) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array($buisness_vendor_name,$buisness_street_address,$buisness_unit,$buisness_city,$buisness_province,$buisness_postal,$buisness_country,$buisness_sub_region,$buisness_phone,$description,$buisness_license_squarefootage,$buisness_license_bedrooms,$buisness_license_washrooms,$buisness_license_sleeps,'License'));

      if($result = "1"){
        echo 'Data Inserted Successfully';
      }else{
        echo 'Error Occured';
      }

  }

  public function nonlicense(){
    
    $buisness_vendor_name           = isset($_POST['buisness_vendor_name']) ? $_POST['buisness_vendor_name'] : "";
    $buisness_street_address        = isset($_POST['street_address']) ? $_POST['street_address'] : "";
    $buisness_unit                  = isset($_POST['unit']) ? $_POST['unit'] : "";
    $buisness_city                  = isset($_POST['vendor_city']) ? $_POST['vendor_city'] : "";
    $buisness_province              = isset($_POST['state']) ? $_POST['state'] : "";
    $buisness_postal                = isset($_POST['vendor_postal']) ? $_POST['vendor_postal'] : "";
    $buisness_country               = isset($_POST['vendor_country']) ? $_POST['vendor_country'] : "";
    $buisness_sub_region            = isset($_POST['sub_region']) ? $_POST['sub_region'] : "";
    $buisness_phone                 = isset($_POST['vendor_phone']) ? $_POST['vendor_phone'] : "";
    $buisness_license_sub_type      = isset($_POST['non_license_type']) ? $_POST['non_license_type'] : "";
    $non_lic_squarefootage          = isset($_POST['non_lic_squarefootage']) ? $_POST['non_lic_squarefootage'] : "";
    $non_lic_bedrooms               = isset($_POST['non_lic_bedrooms']) ? $_POST['non_lic_bedrooms'] : "";
    $non_lic_washrooms              = isset($_POST['non_lic_washrooms']) ? $_POST['non_lic_washrooms'] : "";
    $non_lic_sleeps                 = isset($_POST['non_lic_sleeps']) ? $_POST['non_lic_sleeps'] : "";
    $description                    = isset($_POST['excursion_description']) ? $_POST['excursion_description'] : "";

    $result = DB::insert('insert into Vendors_Account (  buisness_vendor_name,buisnessstreet_address,buisness_vendor_unit,buisness_vendor_city,buisness_vendor_state,buisness_vendor_postal,buisness_vendor_country,buisness_vendor_phone,accomodation_sub_region,description,total_square_feet,bedrooms,washrooms,sleeps,vendor_type) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array($buisness_vendor_name,$buisness_street_address,$buisness_unit,$buisness_city,$buisness_province,$buisness_postal,$buisness_country,$buisness_sub_region,$buisness_phone,$description,$non_lic_squarefootage,$non_lic_bedrooms,$non_lic_washrooms,$non_lic_sleeps,'Non-License'));

      if($result = "1"){
        echo 'Data Inserted Successfully';
      }else{
        echo 'Error Occured';
      }

  }
  
  
  function faq_submit(){

	$faq_action = $_POST['faq_action']; 
	$id = $_POST['faq_id']; 
	$question_title = $_POST['question_title']; 
	$question = $_POST['question']; 
	$answer	 = $_POST['answer']; 

	if($faq_action == 'insert'):
		$result = DB::insert('insert into vendor_faq (question_title,question,answer) values (?,?,?)', array($question_title,$question,$answer));	  
		if($result = "1"){
			echo 'inserted';
		}else{
			echo 'Error Occured';
		}
	elseif($faq_action == 'update'):				  			
		$result = DB::table('vendor_faq')->where('id',$id)->update(['question_title' => $question_title, 'question' => $question, 'answer' => $answer]);			 
		if($result = "1"){
			echo 'updated';
		}else{
			echo 'Error Occured';
		}
	endif;
	exit;
	
	}
	
	function faq_delete(){ 
		$id = $_POST['faq_id']; 	
		$result = DB::table('vendor_faq')->where('id', $id)->delete();
		if($result = "1"){
			echo 'deleted';
		}else{
			echo 'Error Occured';
		}
	}
  
}
?>