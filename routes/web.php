<?php
use App\SubCtegory;

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
    return view('index');
});

Route::get('/about','PagesController@about');
Route::get('/login','PagesController@login');
Route::get('/member_register','PagesController@member');
Route::get('/employee_register','PagesController@employee');
Route::any('/logout','PagesController@index');

//return Auth::logout();

//admin
Route::get('/category/{id}',function($id){
    return DB::table('tbl_emp_reg')->where('emp_reg_job',$id)->get();
    // SubCtegory::where("category_id",$id)->get();
});
Route::any('/subcategory','SubcategoryController@subCategory');
Route::get('/listruser','AdminsController@listruser');
Route::any('/category','CategoryController@addCategory');
Route::any('/saveCategory','CategoryController@saveCategory');
 Route::any('/addsubcategoryy','SubcategoryController@addsubCategory');
Route::any('/saveSubcategoryy','SubcategoryController@savesubCategory');
Route::any('/adnewsadmin','NewsAdsController@createe');
Route::get('/listremp','AdminsController@listremp');
Route::get('/listremp','AdminsController@listremp');
Route::any('/viewmem','HousememberController@viewmem');

// Route::any('/chittyuser', function () {
//     return view('admin.admin_chitty_listuser');
// });
Route::get('/adnewsadview', function () {
    return view('admin.admin_newsads_view');
});
Route::get('/adminbookviewemp', function () {
    return view('admin.admin_empbook');
});
Route::get('/adnotiview', function () {
    return view('admin.admin_notiview');
});


Route::get('/notification', function () {
    return view('admin.admin_notification');
});

Route::any('/viewmembers', function () {
    return view('admin.admin_viewmembers');
});
Route::get('/chittyadd', function () {
    return view('admin.admin_chitty_add');
});
Route::get('/chittylist', function () {
    return view('admin.admin_chitty_list');
});
    Route::get('/adminaddchitty','ChittyController@store');

Route::get('/', function () {
    return view('index'); 
    Route::get('/listruser','AdminsController@listruser');

    return view('index');
});
Route::any('/complaintresponse', function () {
    return view('admin.admin_complaint_response');
});
Route::get('/adadnews', function () {
    return view('admin.admin_newsads_add');
});
Route::get('/adminchittyresult', function () {
    return view('admin.admin_chitty_resultview');
});
Route::get('/empbooking', function () {
    return view('user.reguser_empbook');
});
//  Route::get('/adminchittycashtransfer', function () {
//     return view('admin.admin_chitty_cash_transfer');
// });
Route::any('/empbook','EmpController@empbook');
Route::any('/chittyapaid','ChittyController@chittyapaid');
Route::any('/adminchittycashtransfer','ChittyController@getid');
Route::post('/newsads','NewsadsController@create');
Route::any('/Approve/{id}','AprovesController@approvereguser');
Route::any('/Approveru/{id}','AprovesController@deleteruser');
Route::any('/Approvee/{id}','AprovesController@approveemp');
Route::any('/Approveemp/{id}','AprovesController@deleteemp');
Route::any('/complaintupdate','ComplaintController@complaintupdate');
Route::any('/notiadd','NotificationController@create');
Route::any('/notiadds','NotificationController@createe');
//user
Route::any('/update/{id}','AdminsController@showUpdateuser');
Route::any('/updates/{id}','AdminsController@showUpdatreguser');
Route::get('/profile','AdminsController@showProfile');
Route::get('/profileuser','AdminsController@showProfileuser');
Route::get('/chittyjoinnnn','ChittyController@join');
Route::any('/chittypaid','ChittyController@chittypayment');
Route::any('/register_complaint','ComplaintController@store');
Route::get('/lot','ChittyController@lot');
Route::any('/adnewsuser','NewsAdsController@create');
Route::any('/hmemberdet','HousememberController@create');
Route::any('/chittyuser','ChittyController@chittyadminlist');
Route::any('/notificationall','NotificationController@notificationall');

Route::get('/notfication', function () {
    return view('admin.admin_chittynoti');
});

Route::any('/chittyportal','ChittyController@chittymaxmember');
Route::any('/emp_search_get','EmpController@emp_search_get');
Route::any('/viewproduct','ProductController@show');
Route::get('/chat', 'ChatController@index')->name('chat');
Route::get('/message', 'MessageController@index')->name('message');
Route::post('/message', 'MessageController@store')->name('message.store');

// Route::get('/chittyportal', function () {
//     return view('user.reguser_chitty_portal');
// });
Route::any('/saveproduct','ProductController@saveProduct');


Route::get('/shopnow', function () {
    return view('user.reguser_shopnow');
});
Route::get('/uploadproduct', function () {
    return view('user.reguser_shop_productadd');
});


Route::get('/adnews', function () {
    return view('user.reguser_add_news');
});
Route::get('/hmemberview', function () {
    return view('user.reguser_housemembers');
});


Route::get('/hmember', function () {
    return view('user.reguser_homemembers_details');
});

Route::get('/adnewsuserview', function () {
    return view('user.adsnews_nw');
});


Route::get('/chittypaymentfro', function () {
    return view('user.reguser_payment_front');
});
// Route::get('/chittyuadd', function () {
//         return view('user.reguser_chitty_add');
  
// });
Route::get('/chittystatus', function () {
    return view('user.reguser_chitty_status');
});
Route::get('/empbookstatus', function () {
    return view('user.reguser_empbookstatus');
});



// Route::any('/chittystatusview', function () {
//     return view('user.reguser_chitty_statusview');
// });


Route::get('/chittyuadd/{chitty_id}', [
    'as' => 'chittyuadd', 'uses' => 'ChittyController@view_chitty'
]);
Route::get('/complaint', function () {
    return view('user.reguser_add_complaint');
});
Route::get('/chittyjoin/{chitty_id}', function () {
    return view('user.reguser_chitty_add');

});
Route::post('/chittystatusview','ChittyController@chittystatus');
Route::post('/chittyjo','ChittyController@chittyjo');
Route::any('/chittydetco','ChittyController@chittydetid');
Route::any('/chittypayment','ChittyController@chittyid');
Route::get('/chittydet', function () {
    return view('user.reguser_chitty_join');

});


Route::get('/complaintuserresponse', function () {
    return view('user.reguser_view_complaintresponse');
});

Route::get('/chittyresult', function () {
    return view('user.reguser_chitty_result');
});

Route::get('/modal', function () {
    return view('user.modal');

});


    

   


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

















Route::get('/test', 'HomeController@test');
Route::get('dashboard', function () {
    return view('dashboard');
 });
 
 
 //Employee
 Route::get('/bookingnotification', function () {
    return view('emp.emp_booking View');
});
Route::any('/empngnotification','NotificationController@notificationall'); 
Route::any('/ChittyNotification','NotificationController@notificationchitty'); 
Route::any('/All','NotificationController@notificationany'); 
Route::any('/myChittyNotification','NotificationController@mynotificationchitty');

Route::any('/confirm/{id}','AprovesController@approvebooking');