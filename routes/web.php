<?php

use App\Http\Controllers\admin\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SubMenuController;
use App\Http\Controllers\User\UserjobsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostjobsController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\AppliedjobsController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Employer\EmployerController;
use App\Http\Controllers\Employer\EmployerApplicationController;
// use App\Http\Controllers\Employer\PostjobsController as EmployerPostjobsController;
use App\Http\Controllers\Employer\PostjobsController as EmployerPostjobsController;
// use App\Http\Controllers\Employer\ApplicationController as EmployerApplicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/user/{id}/showsinglejob', [IndexController::class, 'Showuserjob'])->name('showsinglejobs');
//  Route::get('/user/{id}/{slug}', [IndexController::class, 'Showalljob'])->name('showalljobs');
 Route::get('/user/alljob', [IndexController::class, 'Showalljob'])->name('showalljobs');
 Route::get('/user/{id}/categorywisejob', [IndexController::class, 'Categorywisejob'])->name('categorywisealljob');
Route::get('/user/allcategory', [IndexController::class, 'Showallcategory'])->name('showallcategoryjobs');
 Route::get('/user/{id}/singleblog', [IndexController::class, 'Showsingleblogs'])->name('showsingleblog');
 Route::get('/user/allemployer', [IndexController::class, 'Showallemployer'])->name('showallemployers');
 Route::get('/user/{id}/employer-details', [IndexController::class, 'Emdetails'])->name('employer-details');
 Route::get('/user/allblog', [IndexController::class, 'Allblogs'])->name('allblog');
 Route::get('/user/contact', [IndexController::class, 'AddContact'])->name('addcontact');
 Route::post('/user/storecontact', [IndexController::class, 'StoreContact'])->name('storecontact');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ====================================== Admin Routes =====================================
Route::group(['prefix'=>'admin','middleware' =>['admin','auth']], function(){
    // Route::get('dashboard',[AdminController::class,'index'])->name('admin.board');
    // Route::get('dashboard',[AdminController::class,'index'])->name('admin.board');

    Route::controller(DashboardController::class)->group(function(){
        Route::get('/admin/dashboard', 'Index')->name('admin.dashboard');
        Route::post('/admin/CreateProfile','CreateProfile')->name('createprofile');
        Route::get('/profile','ReadProfile')->name('profile');
        

    });

    Route::controller(MenuController::class)->group(function(){
        Route::get('/admin/all-menu', 'Index')->name('allmenu');
        Route::get('/admin/add-menu', 'AddMenu')->name('addmenu');
        Route::post('/admin/store-menu', 'Store')->name('storemenu');
        Route::get('/admin/{id}/edit', 'Edit')->name('menuedit');
        Route::post('/admin/{id}/update', 'Update')->name('updatemenu');

        Route::delete('/admin/menu/{id}', 'Destroy')->name('delete');

    });

    Route::controller(SubMenuController::class)->group(function(){
        Route::get('/admin/all-submenu', 'Index')->name('allsubmenu');
        Route::get('/admin/add-submenu', 'AddSubMenu')->name('addsubmenu');
        Route::post('/admin/store-submenu', 'StoreSubMenu')->name('storesubmenu');
        Route::get('/admin/submenu/{id}/edit', 'Subedit')->name('submenuedit');
        Route::post('/admin/submenu/{id}/update', 'Subupdate')->name('updatesubmenu');

        Route::delete('/admin/submenu/{id}', 'Subdestroy')->name('Subdelete');

    });


    Route::controller(CategoryController::class)->group(function(){
        Route::get('/admin/all-category', 'Index')->name('allcategory');
        Route::get('/admin/add-category', 'Addcategory')->name('addcategory');
        Route::post('/admin/store-category', 'Storecategory')->name('storecat');
        Route::get('/admin/{id}/edit-category', 'Editcat')->name('editcat');
        Route::post('/admin/{id}/update-category', 'CatUpdate')->name('updatecat');

        Route::delete('/admin/category/{id}', 'DelDestroy')->name('deletecat');

    });


    Route::controller(PostjobsController::class)->group(function(){
        Route::get('/admin/all-postjob', 'Index')->name('allpostjobs');
        Route::get('/admin/add-postjob', 'AddPostjobs')->name('addpostjob');
        Route::post('/admin/store-jobpost', 'Storeadminjobpost')->name('storeadminpost');
        Route::get('/admin/{id}/show-jobpost', 'Showjobpost')->name('showpost');
        Route::get('/admin/{id}/edit-jobpost', 'EditPostJob')->name('editjobpost');
        Route::post('/admin/{id}/update-postjob', 'PostjobUpdate')->name('updatepostjob');

        Route::post('/admin/{id}/approve-postjob', 'PostjobApprove')->name('approvepostjob');
        Route::get('/admin/approve-allapprove', 'AllApprove')->name('allapprove');

        Route::delete('/admin/jobpost/{id}', 'PostDestroy')->name('deljobpost');

    });

    Route::controller(BlogController::class)->group(function(){
        Route::get('/admin/all-blog', 'Index')->name('allblog');
        Route::get('/admin/add-blog', 'AddBlog')->name('addblogs');
        Route::post('/admin/store-blog', 'Storeblog')->name('storeblog');
        // Route::get('/superadmin/{id}/show-jobpost', 'Showjobpost')->name('showpost');
        Route::get('/admin/{id}/edit-blogs', 'Editblog')->name('editblogs');
        Route::post('/admin/{id}/update-blog', 'BlogUpdate')->name('updateblogs');

        // Route::post('/superadmin/{id}/approve-postjob', 'PostjobApprove')->name('approvepostjob');
        // Route::get('/superadmin/approve-allapprove', 'AllApprove')->name('allapprove');

        Route::delete('/admin/blogs/{id}', 'BlogDestroy')->name('delblogs');

    });

    Route::controller(ApplicationController::class)->group(function(){
        Route::get('/admin/all-application', 'Index')->name('allapplication');
        // Route::get('/admin/add-blog', 'AddBlog')->name('addblogs');
        // Route::post('/admin/store-blog', 'Storeblog')->name('storeblog');
        // Route::get('/superadmin/{id}/show-jobpost', 'Showjobpost')->name('showpost');
        // Route::get('/admin/{id}/edit-blogs', 'Editblog')->name('editblogs');
        // Route::post('/admin/{id}/update-blog', 'BlogUpdate')->name('updateblogs');

        // Route::post('/superadmin/{id}/approve-postjob', 'PostjobApprove')->name('approvepostjob');
        // Route::get('/superadmin/approve-allapprove', 'AllApprove')->name('allapprove');

        // Route::delete('/admin/blogs/{id}', 'BlogDestroy')->name('delblogs');

    });

    Route::controller(ContactController::class)->group(function(){
        Route::get('/admin/all-message', 'Index')->name('allmessage');
        Route::delete('/admin/{id}/message', 'ContactDestroy')->name('delcontact');
        Route::get('/admin/{id}/show-contact', 'Showcontact')->name('showcontact');
 

    });
    
});

// ====================================== Employer Routes =====================================
Route::group(['prefix'=>'employer','middleware' =>['employer','auth']], function(){
    // Route::get('dashboard',[EmployerController::class,'index'])->name('employer.dashboard');
   


    Route::controller(EmployerController::class)->group(function(){
        Route::get('/employer/dashboard', 'Index')->name('employer.dashboard');
        Route::post('/employer/CreateProfile','EmCreateProfile')->name('emcreateprofile');
        Route::get('/employer/profile','ReadProfile')->name('emprofile');
        

    });


    Route::controller(EmployerPostjobsController::class)->group(function(){
        Route::get('/all-postsjob', 'Index')->name('allempostjobs');
        Route::get('/employer/add-postjob', 'AddPostjobs')->name('addempostjob');
        Route::post('/employer/store-jobpost', 'Storejobpost')->name('storepost');
        Route::get('/employer/{id}/show-jobpost', 'Showjobpost')->name('showempost');
        Route::get('/employer/{id}/edit-jobpost', 'EditPostJob')->name('editjobpost');
        Route::post('/employer/{id}/update-postjob', 'PostjobUpdate')->name('updatepostjob');

        // Route::post('/employer/{id}/approve-postjob', 'PostjobApprove')->name('approvepostjob');
        Route::get('/employer/approve-allemapprove', 'AllEmApprove')->name('allemapprove');

        Route::delete('/employer/jobpost/{id}', 'PostEmDestroy')->name('delemjobpost');

    });

    Route::controller(EmployerApplicationController::class)->group(function(){
        Route::get('/all-applicationjob', 'Showapplication')->name('allapplica');
        Route::get('/employer/all-shortlist', 'Shortlistjobs')->name('allshortlistjob');
        Route::post('/employer/{id}/store-shortlist', 'StoreShortlist')->name('storeshortlist');
        Route::post('/employer/{id}/cancel-application', 'Cancelapplication')->name('cancelapplication');
        Route::post('/employer/{id}/cancel-shortlist', 'CancelShortlist')->name('cancelshortlist');
        Route::get('/employer/{id}/show-user-details', 'Userdetails')->name('showuserdetails');
        // Route::get('/employer/{id}/show-jobpost', 'Showjobpost')->name('showempost');
        // Route::get('/employer/{id}/edit-jobpost', 'EditPostJob')->name('editjobpost');
        // Route::post('/employer/{id}/update-postjob', 'PostjobUpdate')->name('updatepostjob');

        // Route::post('/employer/{id}/approve-postjob', 'PostjobApprove')->name('approvepostjob');
        // Route::get('/employer/approve-allapprove', 'AllApprove')->name('allemapprove');

        // Route::delete('/employer/jobpost/{id}', 'PostDestroy')->name('deljobpost');

    });


});

// ====================================== User Routes =====================================
Route::group(['prefix'=>'user','middleware' =>['user','auth']], function(){
    // Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');

    Route::controller(UserController::class)->group(function(){
        Route::get('dashboard', 'index')->name('user.dashboard');
        Route::post('/user/CreateProfile','UserCreateProfile')->name('usercreateprofile');
        Route::get('/user/profile','ReadProfile')->name('userprofile');
        

    });

    Route::controller(UserjobsController::class)->group(function(){
        // Route::get('/all-pendingjob', 'Index')->name('allpendingjobs');
        // Route::post('/applied-postjob', 'Storeapplied')->name('stoteapply');
        // Route::post('/user/CreateProfile','UserCreateProfile')->name('usercreateprofile');
        // Route::get('/user/profile','ReadProfile')->name('userprofile');
        

    });

    Route::controller(AppliedjobsController::class)->group(function(){
        Route::get('/user/all-pending', 'Index')->name('allpending');
        Route::post('/applied-postjob', 'Storeapplied')->name('stoteapply');
        Route::delete('/appllidjob/{id}/all-applied', 'AppliedDestroy')->name('deleteappliedjob');
        Route::delete('/user/{id}/all-approve', 'AllApproveDestroy')->name('deleteapprovejob');
        Route::get('/user/{id}/show-job', 'Showjob')->name('showjob');
        Route::get('/user/all-userapprove', 'UserApprove')->name('alluserapprove');
       
        

    });
 

});
