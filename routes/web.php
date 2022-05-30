<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/terms-and-conditions', function () {
    return view('terms_and_conditions');
});

Route::get('/vendor', function () {
    return view('vendors');
});
Route::get('/dashboard', function () {
    if(Auth::check()){
    return view('/includes/user_dashboard/dashboard');
    }else{
        return redirect('/login');
    }
});
Route::get('/vendor/?id=', function () {
    return view('vendors');
});


Route::get('/vendor_profile/?id=&edit', function () {
    return view('vendoredit');
});
Route::get('/register-form', function () {
    return view('register_form');
});
Route::get('/guest-rewards', function () {
    return view('guestrewards');
});
  
Route::get('/admin/index', function () {
    return view('admin/index');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/manage_users', function () {
    $userdata = DB::table('users')->select('*')->get();
    return view('includes/manage_users/manage_user', ['userdata' => $userdata]);
});
Route::get('/vendor_profile', function () {
    return view('vendoredit');
});
Route::get('/vendor_creation', function () {
    return view('vendor_creation');
});
Route::get('/excursion_vendor', function () {
    return view('excursion_vendor');
});
Route::get('/vendor_form_links', function () {
    return view('vendor_form_links');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/add-faq', function () {    
	return view('/includes/admin_forms/add_faq');
});

Route::get('/add-faq/?id=', function () {
    return view('/includes/admin_forms/add_faq');
});

Route::get('/faq-listing', function () {    
	return view('/includes/admin_forms/faq_listing');
});
Route::get('/excursion-partners', function () {    
    return view('/excursion_partners/excursion');
});
Route::get('/accomodation-partners', function () {    
    return view('/accomodation_partners/accomodation');
});
Route::get('/winery-partners', function () {    
    return view('/wineries_partners/winery');
});
Route::post('/register_form', [UserController::class,'register'])->name('regiter.form');
Route::post('/excursion_register_form',[UserController::class,'excursion'])->name('excursion.form');    
Route::post('/accomodation_form',[UserController::class,'accomodation'])->name('accomodation.form');
Route::post('/vendor_register_form',[UserController::class,'register_data'])->name('register_data.form');     
Route::post('/search_data_form',[UserController::class,'search_data'])->name('search_data.form');     
Route::post('/review_submit',[UserController::class,'review'])->name('review_submit.form');
Route::post('/email_match',[UserController::class,'email_match'])->name('email_match.form');
Route::post('/change_password',[UserController::class,'change_password'])->name('change_password.form');
Route::post('/guest_registry',[UserController::class,'guest_registry'])->name('guest_registry.form');
Route::post('/local_delievery',[UserController::class,'local_delievery'])->name('local_delievery.form');

Route::post('/vendoraccomodation',[VendorController::class,'vendoraccomodationregister'])->name('vendoraccomodationregister.form'); 
Route::post('/update_accomodation_form', [VendorController::class,'update_accomodation_form'])->name('update_accomodation_form.form');
Route::post('/update_excursion_form', [VendorController::class,'update_excursion_form'])->name('update_excursion_form.form');
Route::post('/update_winery_form', [VendorController::class,'update_winery_form'])->name('update_winery_form.form');
Route::post('/update_license_form', [VendorController::class,'update_license_form'])->name('update_license_form.form');
Route::post('/update_non_license_form', [VendorController::class,'update_non_license_form'])->name('update_non_license_form.form');
Route::post('/accomodation_form_insert',[VendorController::class,'accomodation'])->name('accomodation_form.form');  
Route::post('/excursion_form_insert',[VendorController::class,'excursion'])->name('excurison_form.form');
  
Route::post('/winery_form_insert',[VendorController::class,'winery'])->name('winery_form.form');  
Route::post('/license_form_insert',[VendorController::class,'license'])->name('license_form.form');  
Route::post('/non_license_form_insert',[VendorController::class,'nonlicense'])->name('nonlicense.form');  

Route::post('/crop_image','App\Http\Controllers\CropController@index');
Route::post('/accomodation_inqueries','App\Http\Controllers\VendorController@accomodation_inqueries');
Route::post('/account_credentials',[UserController::class,'account_credentials'])->name('account_credentials.form');  
Route::post('/faq_submit',[VendorController::class,'faq_submit'])->name('faq_submit.form'); 
Route::post('/faq_delete',[VendorController::class,'faq_delete'])->name('faq_delete.form'); 
Route::post('/assign_role',[UserController::class,'assign_role'])->name('assign_role.form'); 
 
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
