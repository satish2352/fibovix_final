<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/', ['as' => '/', 'uses' => 'App\Http\Controllers\Website\IndexController@index']);
Route::get('/aboutus', ['as' => 'aboutus', 'uses' => 'App\Http\Controllers\Website\IndexController@aboutus']);
Route::get('/contactus', ['as' => 'contact-us', 'uses' => 'App\Http\Controllers\Website\IndexController@contactus']);
Route::get('/resources-insights', ['as' => 'resources-insights', 'uses' => 'App\Http\Controllers\Website\IndexController@resources']);
Route::POST('/list-our-solutions-ajax', ['as' => 'list-our-solutions-ajax', 'uses' => 'App\Http\Controllers\Website\IndexController@listOurSolutionsAjax']);
Route::POST('/list-our-services-ajax', ['as' => 'list-our-services-ajax', 'uses' => 'App\Http\Controllers\Website\IndexController@listServicesAjax']);

Route::get('/services', ['as' => 'services', 'uses' => 'App\Http\Controllers\Website\IndexController@services']);
Route::get('/insight-details/{id}', ['as' => 'insight-details', 'uses' => 'App\Http\Controllers\Website\IndexController@resouceInsightsDetails']);
Route::get('/media', ['as' => 'media', 'uses' => 'App\Http\Controllers\Website\IndexController@media']);


Route::get('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@index']);
Route::post('/submitLogin', ['as' => 'submitLogin', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@submitLogin']);

Route::post('/add-contactus', ['as' => 'add-contactus', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactUsController@addContactUs']);
Route::post('/add-about-us-contactus', ['as' => 'add-about-us-contactus', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@aboutusContact']);
Route::post('/add-subscriber', ['as' => 'add-subscriber', 'uses' => 'App\Http\Controllers\Website\Subscriber\SubscriberController@addSubscriber']);





Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', ['as' => '/dashboard', 'uses' => 'App\Http\Controllers\Admin\Dashboard\DashboardController@index']);
    Route::get('/change-password', ['as' => '/change-password', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\ChangePassword@index']);
    Route::post('/update-password', ['as' => '/update-password', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\ChangePassword@updatePassword']);
    Route::get('/edit-user-profile', ['as' => 'edit-user-profile', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@editUsersProfile']);

    Route::post('/update-user-profile', ['as' => 'update-user-profile', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@updateProfile']);

    Route::post('/website-contact', ['as' => 'website-contact', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@updateProfile']);


    // Route::get('/list-resource', ['as' => 'list-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@index']);
    // Route::get('/add-resource', ['as' => 'add-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@add']);
    // Route::post('/add-resource', ['as' => 'add-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@store']);
    // Route::get('/edit-resource/{edit_id}', ['as' => 'edit-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@edit']);
    // Route::post('/update-resource', ['as' => 'update-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@update']);
    // Route::post('/show-resource', ['as' => 'show-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@show']);
    // Route::post('/delete-resource', ['as' => 'delete-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@destroy']);
    // Route::post('/update-one-resource', ['as' => 'update-one-resource', 'uses' => 'App\Http\Controllers\Admin\Master\ResourceController@updateOne']);

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


    // List of route contact details
    Route::get('/edit-website-contact-details', ['as' => 'edit-website-contact-details', 'uses' => 'App\Http\Controllers\Admin\WebsiteContactDetailsController@edit']);
    Route::post('/update-website-contact', ['as' => 'update-website-contact', 'uses' => 'App\Http\Controllers\Admin\WebsiteContactDetailsController@update']);



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


    Route::get('/list-resource-and-insights', ['as' => 'list-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@index']);
    Route::get('/add-resource-and-insights', ['as' => 'add-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@add']);
    Route::post('/add-resource-and-insights', ['as' => 'add-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@store']);
    Route::get('/edit-resource-and-insights/{edit_id}', ['as' => 'edit-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@edit']);
    Route::post('/update-resource-and-insights', ['as' => 'update-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@update']);
    Route::post('/show-resource-and-insights', ['as' => 'show-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@show']);
    Route::post('/delete-resource-and-insights', ['as' => 'delete-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@destroy']);
    Route::post('/update-active-resource-and-insights', ['as' => 'update-active-resource-and-insights', 'uses' => 'App\Http\Controllers\Admin\Home\ResourcesAndInsightsController@updateOne']);


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


    // ==============Gallery============
    Route::get('/list-gallery', ['as' => 'list-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@index']);
    Route::get('/add-gallery', ['as' => 'add-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@add']);
    Route::post('/add-gallery', ['as' => 'add-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@store']);
    Route::get('/edit-gallery/{edit_id}', ['as' => 'edit-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@edit']);
    Route::post('/update-gallery', ['as' => 'update-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@update']);
    Route::post('/show-gallery', ['as' => 'show-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@show']);
    Route::post('/delete-gallery', ['as' => 'delete-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@destroy']);
    Route::post('/update-active-gallery', ['as' => 'update-active-gallery', 'uses' => 'App\Http\Controllers\Admin\Gallery\GalleryController@updateOne']);
    


    // ===============Subscriber 
    Route::get('/list-subscriber', ['as' => 'list-subscriber', 'uses' => 'App\Http\Controllers\Admin\ContactUs\SubscriberController@index']);

    // ===============Contact 
    Route::get('/list-contactus-form', ['as' => 'list-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@index']);
    Route::post('/show-contactus-form', ['as' => 'show-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@show']);
    Route::post('/delete-contactus-form', ['as' => 'delete-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@destroy']);


    // Contact From About US
    Route::get('/list-about-us-contactus', ['as' => 'list-about-us-contactus', 'uses' => 'App\Http\Controllers\Admin\ContactUs\AboutUsContactUsListController@index']);
    Route::post('/show-about-us-contactus', ['as' => 'show-about-us-contactus', 'uses' => 'App\Http\Controllers\Admin\ContactUs\AboutUsContactUsListController@show']);
    Route::post('/delete-about-us-contactus', ['as' => 'delete-about-us-contactus', 'uses' => 'App\Http\Controllers\Admin\ContactUs\AboutUsContactUsListController@destroy']);

    Route::get('/db-backup', ['as' => 'db-backup', 'uses' => 'App\Http\Controllers\DBBackup\DBBackupController@downloadBackup']);
    Route::get('/log-out', ['as' => 'log-out', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@logout']);

});

 
