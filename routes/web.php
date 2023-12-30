<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/', function () {
    return view('website.pages.contactus');
});



Route::get('/', ['as' => '/', 'uses' => 'App\Http\Controllers\Website\IndexController@index']);
Route::get('/aboutus', ['as' => 'aboutus', 'uses' => 'App\Http\Controllers\Website\IndexController@aboutus']);
Route::get('/contactus', ['as' => 'contact-us', 'uses' => 'App\Http\Controllers\Website\IndexController@contactus']);
Route::get('/resources-insights', ['as' => 'resources-insights', 'uses' => 'App\Http\Controllers\Website\IndexController@resources']);
Route::POST('/list-our-solutions-ajax', ['as' => 'list-our-solutions-ajax', 'uses' => 'App\Http\Controllers\Website\IndexController@listOurSolutionsAjax']);

Route::get('/services', ['as' => 'services', 'uses' => 'App\Http\Controllers\Website\IndexController@services']);

Route::get('/details', ['as' => 'details', 'uses' => 'App\Http\Controllers\Website\IndexController@resouceInsightsDetails']);

Route::get('/media', ['as' => 'media', 'uses' => 'App\Http\Controllers\Website\IndexController@media']);




Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', ['as' => '/dashboard', 'uses' => 'App\Http\Controllers\Admin\Dashboard\DashboardController@index']);

    Route::get('/edit-user-profile', ['as' => 'edit-user-profile', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@editUsersProfile']);

    Route::post('/update-user-profile', ['as' => 'update-user-profile', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@updateProfile']);

    Route::post('/website-contact', ['as' => 'website-contact', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@updateProfile']);


    Route::get('/list-resource', ['as' => 'list-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@index']);
    Route::get('/add-resource', ['as' => 'add-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@add']);
    Route::post('/add-resource', ['as' => 'add-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@store']);
    Route::get('/edit-resource/{edit_id}', ['as' => 'edit-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@edit']);
    Route::post('/update-resource', ['as' => 'update-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@update']);
    Route::post('/show-resource', ['as' => 'show-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@show']);
    Route::post('/delete-resource', ['as' => 'delete-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@destroy']);
    Route::post('/update-one-resource', ['as' => 'update-one-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@updateOne']);

    Route::get('/list-solution', ['as' => 'list-solution', 'uses' => 'App\Http\Controllers\Admin\Master\SolutionController@index']);
    Route::get('/add-solution', ['as' => 'add-solution', 'uses' => 'App\Http\Controllers\Admin\Master\SolutionController@add']);
    Route::post('/add-solution', ['as' => 'add-solution', 'uses' => 'App\Http\Controllers\Admin\Master\SolutionController@store']);
    Route::get('/edit-solution/{edit_id}', ['as' => 'edit-solution', 'uses' => 'App\Http\Controllers\Admin\Master\SolutionController@edit']);
    Route::post('/update-solution', ['as' => 'update-solution', 'uses' => 'App\Http\Controllers\Admin\Master\SolutionController@update']);
    Route::post('/show-solution', ['as' => 'show-solution', 'uses' => 'App\Http\Controllers\Admin\Master\SolutionController@show']);
    Route::post('/delete-solution', ['as' => 'delete-solution', 'uses' => 'App\Http\Controllers\Admin\Master\SolutionController@destroy']);
    Route::post('/update-one-solution', ['as' => 'update-one-solution', 'uses' => 'App\Http\Controllers\Admin\Master\SolutionController@updateOne']);
    
// ==============Slider============
    Route::get('/list-slide', ['as' => 'list-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@index']);
    Route::get('/add-slide', ['as' => 'add-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@add']);
    Route::post('/add-slide', ['as' => 'add-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@store']);
    Route::get('/edit-slide/{edit_id}', ['as' => 'edit-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@edit']);
    Route::post('/update-slide', ['as' => 'update-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@update']);
    Route::post('/show-slide', ['as' => 'show-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@show']);
    Route::post('/delete-slide', ['as' => 'delete-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@destroy']);
    Route::post('/update-active-slide', ['as' => 'update-active-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@updateOne']);
    


    Route::get('/list-service-details', ['as' => 'list-service-details', 'uses' => 'App\Http\Controllers\Admin\Master\ServiceDetailsController@index']);
    Route::get('/add-service-details', ['as' => 'add-service-details', 'uses' => 'App\Http\Controllers\Admin\Master\ServiceDetailsController@add']);
    Route::post('/add-service-details', ['as' => 'add-service-details', 'uses' => 'App\Http\Controllers\Admin\Master\ServiceDetailsController@store']);
    Route::get('/edit-service-details/{edit_id}', ['as' => 'edit-service-details', 'uses' => 'App\Http\Controllers\Admin\Master\ServiceDetailsController@edit']);
    Route::post('/update-service-details', ['as' => 'update-service-details', 'uses' => 'App\Http\Controllers\Admin\Master\ServiceDetailsController@update']);
    Route::post('/show-service-details', ['as' => 'show-service-details', 'uses' => 'App\Http\Controllers\Admin\HMasterServiceDetailsController@show']);
    Route::post('/delete-service-details', ['as' => 'delete-service-details', 'uses' => 'App\Http\Controllers\Admin\Master\ServiceDetailsController@destroy']);
    Route::post('/update-active-service-details', ['as' => 'update-active-service-details', 'uses' => 'App\Http\Controllers\Admin\Master\ServiceDetailsController@updateOne']);




    Route::get('/list-our-solutions', ['as' => 'list-our-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\OurSolutionsController@index']);
    Route::get('/add-our-solutions', ['as' => 'add-our-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\OurSolutionsController@add']);
    Route::post('/add-our-solutions', ['as' => 'add-our-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\OurSolutionsController@store']);
    Route::get('/edit-our-solutions/{edit_id}', ['as' => 'edit-our-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\OurSolutionsController@edit']);
    Route::post('/update-our-solutions', ['as' => 'update-our-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\OurSolutionsController@update']);
    Route::post('/show-our-solutions', ['as' => 'show-our-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\OurSolutionsController@show']);
    Route::post('/delete-our-solutions', ['as' => 'delete-our-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\OurSolutionsController@destroy']);
    Route::post('/update-active-our-solutions', ['as' => 'update-active-our-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\OurSolutionsController@updateOne']);



    Route::get('/list-services', ['as' => 'list-services', 'uses' => 'App\Http\Controllers\Admin\Master\ServicesMasterController@index']);
    Route::get('/add-services', ['as' => 'add-services', 'uses' => 'App\Http\Controllers\Admin\Master\ServicesMasterController@add']);
    Route::post('/add-services', ['as' => 'add-services', 'uses' => 'App\Http\Controllers\Admin\Master\ServicesMasterController@store']);
    Route::get('/edit-services/{edit_id}', ['as' => 'edit-services', 'uses' => 'App\Http\Controllers\Admin\Master\ServicesMasterController@edit']);
    Route::post('/update-services', ['as' => 'update-services', 'uses' => 'App\Http\Controllers\Admin\Master\ServicesMasterController@update']);
    Route::post('/show-services', ['as' => 'show-services', 'uses' => 'App\Http\Controllers\Admin\Master\ServicesMasterController@show']);
    Route::post('/delete-services', ['as' => 'delete-services', 'uses' => 'App\Http\Controllers\Admin\Master\ServicesMasterController@destroy']);
    Route::post('/update-active-services', ['as' => 'update-active-services', 'uses' => 'App\Http\Controllers\Admin\Master\ServicesMasterController@updateOne']);



    Route::get('/list-resources', ['as' => 'list-resources', 'uses' => 'App\Http\Controllers\Admin\Home\ResourceController@index']);
    Route::get('/add-resources', ['as' => 'add-resources', 'uses' => 'App\Http\Controllers\Admin\Home\ResourceController@add']);
    Route::post('/add-resources', ['as' => 'add-resources', 'uses' => 'App\Http\Controllers\Admin\Home\ResourceController@store']);
    Route::get('/edit-resources/{edit_id}', ['as' => 'edit-resources', 'uses' => 'App\Http\Controllers\Admin\Home\ResourceController@edit']);
    Route::post('/update-resources', ['as' => 'update-resources', 'uses' => 'App\Http\Controllers\Admin\Home\ResourceController@update']);
    Route::post('/show-resources', ['as' => 'show-resources', 'uses' => 'App\Http\Controllers\Admin\Home\ResourceController@show']);
    Route::post('/delete-resources', ['as' => 'delete-resources', 'uses' => 'App\Http\Controllers\Admin\Home\ResourceController@destroy']);
    Route::post('/update-active-resources', ['as' => 'update-active-resources', 'uses' => 'App\Http\Controllers\Admin\Home\ResourceController@updateOne']);


//Satish
    Route::get('/list-resource-and-insights', ['as' => 'list-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@index']);
    Route::get('/add-resource-and-insights', ['as' => 'add-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@add']);
    Route::post('/add-resource-and-insights', ['as' => 'add-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@store']);
    Route::get('/edit-resource-and-insights/{edit_id}', ['as' => 'edit-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@edit']);
    Route::post('/update-resource-and-insights', ['as' => 'update-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@update']);
    Route::post('/show-resource-and-insights', ['as' => 'show-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@show']);
    Route::post('/delete-resource-and-insights', ['as' => 'delete-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@destroy']);
    Route::post('/update-active-resource-and-insights', ['as' => 'update-active-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@updateOne']);
//Satish


    Route::get('/list-additional-solutions', ['as' => 'list-additional-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\AdditionalSolutionsController@index']);
    Route::get('/add-additional-solutions', ['as' => 'add-additional-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\AdditionalSolutionsController@add']);
    Route::post('/add-additional-solutions', ['as' => 'add-additional-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\AdditionalSolutionsController@store']);
    Route::get('/edit-additional-solutions/{edit_id}', ['as' => 'edit-additional-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\AdditionalSolutionsController@edit']);
    Route::post('/update-additional-solutions', ['as' => 'update-additional-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\AdditionalSolutionsController@update']);
    Route::post('/show-additional-solutions', ['as' => 'show-additional-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\AdditionalSolutionsController@show']);
    Route::post('/delete-additional-solutions', ['as' => 'delete-additional-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\AdditionalSolutionsController@destroy']);
    Route::post('/update-active-additional-solutions', ['as' => 'update-active-additional-solutions', 'uses' => 'App\Http\Controllers\Admin\Home\AdditionalSolutionsController@updateOne']);


    // ============Marquee=============
    Route::get('/list-marquee-tab', ['as' => 'list-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@index']);
    Route::get('/add-marquee-tab', ['as' => 'add-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@add']);
    Route::post('/add-marquee-tab', ['as' => 'add-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@store']);
    Route::get('/edit-marquee-tab/{edit_id}', ['as' => 'edit-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@edit']);
    Route::post('/update-marquee-tab', ['as' => 'update-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@update']);
    Route::post('/show-marquee-tab', ['as' => 'show-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@show']);
    Route::post('/delete-marquee-tab', ['as' => 'delete-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@destroy']);
    Route::post('/update-one-marquee-tab', ['as' => 'update-one-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@updateOne']);

    // ============marquee=============
    Route::get('/list-marquee', ['as' => 'list-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@index']);
    Route::get('/add-marquee', ['as' => 'add-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@add']);
    Route::post('/add-marquee', ['as' => 'add-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@store']);
    Route::get('/edit-marquee/{edit_id}', ['as' => 'edit-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@edit']);
    Route::post('/update-marquee', ['as' => 'update-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@update']);
    Route::post('/show-marquee', ['as' => 'show-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@show']);
    Route::post('/delete-marquee', ['as' => 'delete-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@destroy']);
    Route::post('/update-one_marquee', ['as' => 'update-one_marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@updateOne']);

     // =============upcoming courses============
     Route::get('/list-upcoming-courses', ['as' => 'list-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@index']);
     Route::get('/add-upcoming-courses', ['as' => 'add-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@add']);
     Route::post('/add-upcoming-courses', ['as' => 'add-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@store']);
     Route::get('/edit-upcoming-courses/{edit_id}', ['as' => 'edit-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@edit']);
     Route::post('/update-upcoming-courses', ['as' => 'update-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@update']);
     Route::post('/show-upcoming-courses', ['as' => 'show-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@show']);
     Route::post('/delete-upcoming-courses', ['as' => 'delete-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@destroy']);
     Route::post('/update-active-upcoming-courses', ['as' => 'update-active-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@updateOne']);
     

    // ==============Gallery============
    Route::get('/list-gallery', ['as' => 'list-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@index']);
    Route::get('/add-gallery', ['as' => 'add-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@add']);
    Route::post('/add-gallery', ['as' => 'add-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@store']);
    Route::get('/edit-gallery/{edit_id}', ['as' => 'edit-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@edit']);
    Route::post('/update-gallery', ['as' => 'update-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@update']);
    Route::post('/show-gallery', ['as' => 'show-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@show']);
    Route::post('/delete-gallery', ['as' => 'delete-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@destroy']);
    Route::post('/update-active-gallery', ['as' => 'update-active-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@updateOne']);
    

    Route::get('/list-ourresult', ['as' => 'list-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@index']);
    Route::get('/add-ourresult', ['as' => 'add-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@add']);
    Route::post('/add-ourresult', ['as' => 'add-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@store']);
    Route::get('/edit-ourresult/{edit_id}', ['as' => 'edit-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@edit']);
    Route::post('/update-ourresult', ['as' => 'update-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@update']);
    Route::post('/show-ourresult', ['as' => 'show-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@show']);
    Route::post('/delete-ourresult', ['as' => 'delete-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@destroy']);
    Route::post('/update-one-ourresult', ['as' => 'update-one-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@updateOne']);

    // Admission=================
    Route::get('/list-application-form', ['as' => 'list-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@index']);
    Route::post('/show-application-form', ['as' => 'show-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@show']);
    Route::post('/delete-application-form', ['as' => 'delete-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@destroy']);

    Route::get('/list-scolarship-form', ['as' => 'list-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@index']);
    Route::post('/show-scolarship-form', ['as' => 'show-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@show']);
    Route::post('/delete-scolarship-form', ['as' => 'delete-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@destroy']);

    Route::get('/list-fesspayment-form', ['as' => 'list-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@index']);
    Route::post('/show-fesspayment-form', ['as' => 'show-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@show']);
    Route::post('/delete-fesspayment-form', ['as' => 'delete-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@destroy']);

    // ===============Contact 
    Route::get('/list-contactus-form', ['as' => 'list-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@index']);
    Route::post('/show-contactus-form', ['as' => 'show-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@show']);
    Route::post('/delete-contactus-form', ['as' => 'delete-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@destroy']);



    Route::get('/list-main-menu', ['as' => 'list-main-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\MainMenuController@index']);
    Route::get('/add-main-menu', ['as' => 'add-main-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\MainMenuController@add']);
    Route::post('/add-main-menu', ['as' => 'add-main-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\MainMenuController@store']);
    Route::post('/show-main-menu', ['as' => 'show-main-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\MainMenuController@show']);
    Route::post('/delete-main-menu', ['as' => 'delete-main-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\MainMenuController@destroy']);
    Route::get('/edit-main-menu/{edit_id}', ['as' => 'edit-main-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\MainMenuController@edit']);
    Route::post('/update-main-menu', ['as' => 'update-main-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\MainMenuController@update']);

    Route::get('/list-sub-menu', ['as' => 'list-sub-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\SubMenuController@index']);
    Route::get('/add-sub-menu', ['as' => 'add-sub-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\SubMenuController@add']);
    Route::post('/add-sub-menu', ['as' => 'add-sub-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\SubMenuController@store']);
    Route::post('/show-sub-menu', ['as' => 'show-sub-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\SubMenuController@show']);
    Route::post('/delete-sub-menu', ['as' => 'delete-sub-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\SubMenuController@destroy']);
    Route::get('/edit-sub-menu/{edit_id}', ['as' => 'edit-sub-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\SubMenuController@edit']);
    Route::post('/update-sub-menu', ['as' => 'update-sub-menu', 'uses' => 'App\Http\Controllers\Admin\Menu\SubMenuController@update']);


    Route::get('/list-dynamic-page', ['as' => 'list-dynamic-page', 'uses' => 'App\Http\Controllers\Admin\DynamicPages\DynamicPagesController@index']);
    Route::get('/add-dynamic-page', ['as' => 'add-dynamic-page', 'uses' => 'App\Http\Controllers\Admin\DynamicPages\DynamicPagesController@add']);
    Route::post('/add-dynamic-page', ['as' => 'add-dynamic-page', 'uses' => 'App\Http\Controllers\Admin\DynamicPages\DynamicPagesController@store']);
    Route::post('/show-dynamic-page', ['as' => 'show-dynamic-page', 'uses' => 'App\Http\Controllers\Admin\DynamicPages\DynamicPagesController@show']);
    Route::post('/delete-dynamic-page', ['as' => 'delete-dynamic-page', 'uses' => 'App\Http\Controllers\Admin\DynamicPages\DynamicPagesController@destroy']);
    Route::get('/edit-dynamic-page/{edit_id}', ['as' => 'edit-dynamic-page', 'uses' => 'App\Http\Controllers\Admin\DynamicPages\DynamicPagesController@edit']);
    Route::post('/update-dynamic-page', ['as' => 'update-dynamic-page', 'uses' => 'App\Http\Controllers\Admin\DynamicPages\DynamicPagesController@update']);
    

    Route::get('/db-backup', ['as' => 'db-backup', 'uses' => 'App\Http\Controllers\DBBackup\DBBackupController@downloadBackup']);
    Route::get('/log-out', ['as' => 'log-out', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@logout']);

});
    Route::get('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@index']);
    Route::post('/submitLogin', ['as' => 'submitLogin', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@submitLogin']);

    



    // //Start Contact========
    Route::post('/add-contactus', ['as' => 'add-contactus', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactUsController@addContactUs']);
    Route::post('/add-about-us-contactus', ['as' => 'add-about-us-contactus', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@aboutusContact']);


 
