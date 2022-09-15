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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('landing');

Route::match(array('GET','POST'),'/', [App\Http\Controllers\PagesController::class, 'index'])->name('landing');


Route::get('/home-old', [App\Http\Controllers\PagesController::class, 'index_old'])->name('landing');

Route::get('/about-us', [App\Http\Controllers\PagesController::class, 'aboutUs'])->name('about-us');
Route::get('/new-gurads-arrival', [App\Http\Controllers\PagesController::class, 'newArrival'])->name('new-gurads-arrival');
Route::get('/licenses-certificates', [App\Http\Controllers\PagesController::class, 'licenses'])->name('licenses-certificates');
Route::get('/management', [App\Http\Controllers\PagesController::class, 'management'])->name('management');
Route::get('/trademark', [App\Http\Controllers\PagesController::class, 'trademark'])->name('trademark');
Route::get('/our-customers', [App\Http\Controllers\PagesController::class, 'customers'])->name('our-customers');
Route::get('/services', [App\Http\Controllers\PagesController::class, 'services'])->name('services');

Route::get('/services/{link}', [App\Http\Controllers\PagesController::class, 'servicesLink'])->name('services');
Route::get('/news/view/{hash_id}', [App\Http\Controllers\PagesController::class, 'newsView'])->name('news-view');
Route::get('/gallery/{gal_cat}', [App\Http\Controllers\PagesController::class, 'galleryView'])->name('gallery');


Route::get('/objectives', [App\Http\Controllers\PagesController::class, 'objectives'])->name('objectives');
Route::get('/gallery', [App\Http\Controllers\PagesController::class, 'gallery'])->name('gallery');
Route::get('/training', [App\Http\Controllers\PagesController::class, 'training'])->name('training');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::match(array('GET','POST'),'/enquiry', [App\Http\Controllers\PagesController::class, 'enquiryStore'])->name('enquiry-store');
Route::match(array('GET','POST'),'/apply-job', [App\Http\Controllers\PagesController::class, 'applyJobsPage'])->name('apply-job');



Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin/dashboard', [App\Http\Controllers\DashboradController::class, 'index'])->name('admin-home');
    Route::get('/admin/enquiry', [App\Http\Controllers\AdminEnquiryController::class, 'enquiry'])->name('admin-enquiry');
    Route::get('/admin/job-application', [App\Http\Controllers\AdminEnquiryController::class, 'job'])->name('admin-jobs');
    Route::get('/admin/job-apply/view/{hash_id}', [App\Http\Controllers\AdminEnquiryController::class, 'jobView'])->name('admin-jobs-view');

    Route::get('/admin/gallery/search', [App\Http\Controllers\AdminGalleryController::class, 'search'])->name('admin-gallery-search');
    Route::match(array('GET','POST'),'/admin/gallery/create', [App\Http\Controllers\AdminGalleryController::class, 'create'])->name('admin-gallery-create');
    Route::post('/admin/gallery/category', [App\Http\Controllers\AdminGalleryController::class, 'galleryType'])->name('gallery-category');
    Route::get('/admin/gallery/delete/{hash_id}', [App\Http\Controllers\AdminGalleryController::class, 'deleteGalleryImage'])->name('delete-galley-image');

    Route::get('/admin/client/client-search', [App\Http\Controllers\AdminClientsController::class, 'search'])->name('admin-client-search');
   // Route::get('/admin/client/create-client', [App\Http\Controllers\AdminClientsController::class, 'create'])->name('admin-client-create');
    Route::match(array('GET','POST'),'/admin/client/create-client', [App\Http\Controllers\AdminClientsController::class, 'create'])->name('admin-client-create');
    Route::get('/admin/client/delete/{hash_id}', [App\Http\Controllers\AdminClientsController::class, 'deleteGalleryImage'])->name('delete-client-image');

    Route::get('/admin/news/search', [App\Http\Controllers\AdminNewsController::class, 'search'])->name('admin-news-search');
    Route::match(array('GET','POST'),'/admin/news/create-news', [App\Http\Controllers\AdminNewsController::class, 'create'])->name('admin-news-create');
    Route::get('/admin/news/delete/{hash_id}', [App\Http\Controllers\AdminNewsController::class, 'deleteNews'])->name('delete-news-post');
    Route::match(array('GET','POST'),'/admin/news/edit/{hash_id}', [App\Http\Controllers\AdminNewsController::class, 'edit'])->name('admin-news-edit');
    Route::match(array('GET','POST'),'/admin/news/image_upload/{hash_id}', [App\Http\Controllers\AdminNewsController::class, 'imageUpload'])->name('admin-news-image-upload');


    Route::get('/admin/setting/gallery-category', [App\Http\Controllers\AdminSettingsController::class, 'gallery'])->name('admin-setting-category');
    Route::match(array('GET','POST'),'admin/gallery/category/create', [App\Http\Controllers\AdminSettingsController::class, 'createGallery'])->name('admin-gallery-create');
    Route::get('/admin/setting/galley/delete/{hash_id}', [App\Http\Controllers\AdminSettingsController::class, 'deleteGallery'])->name('delete-news-post');


    Route::get('/admin/setting/client-category', [App\Http\Controllers\AdminSettingsController::class, 'client'])->name('admin-setting-category');
    Route::match(array('GET','POST'),'admin/client/category/create', [App\Http\Controllers\AdminSettingsController::class, 'createClient'])->name('admin-gallery-create');
    Route::get('/admin/setting/client/delete/{hash_id}', [App\Http\Controllers\AdminSettingsController::class, 'deleteClient'])->name('delete-news-post');




    /*
    Route::get('/admin/enquiry', [App\Http\Controllers\ResumeController::class, 'search'])->name('admin-resume-search');
    Route::get('/admin/resumes/recent', [App\Http\Controllers\ResumeController::class, 'recent'])->name('admin-resume-recent');
    Route::get('/admin/resumes/view/{hash_id}', [App\Http\Controllers\ResumeController::class, 'view'])->name('admin-resume-view');

    Route::match(array('GET','POST'),'/admin/jobs/create-job', [App\Http\Controllers\JobsController::class, 'store'])->name('create-jobs-post');
    Route::get('/admin/jobs/delete/{hash_id}', [App\Http\Controllers\JobsController::class, 'delete'])->name('delete-jobs-post');
    Route::match(array('GET','POST'),'/admin/jobs/edit/{hash_id}', [App\Http\Controllers\JobsController::class, 'edit'])->name('edit-jobs-post');
    Route::match(array('GET','POST'),'/admin/jobs-image-upload/{hash_id}', [App\Http\Controllers\JobsController::class, 'imageUpload'])->name('jobs-image-upload');

    Route::get('/admin/jobs/create-job', [App\Http\Controllers\JobsController::class, 'store'])->name('admin-create-job');
    Route::get('/admin/jobs/jobs-search', [App\Http\Controllers\JobsController::class, 'search'])->name('admin-jobs-search');
    Route::get('/admin/jobs/jobs-view/{hash_id}', [App\Http\Controllers\JobsController::class, 'view'])->name('admin-jobs-view');

    Route::match(array('GET','POST'),'/admin/jobs/jobs-description/{hash_id}', [App\Http\Controllers\JobsController::class, 'jobDescriptionStore'])->name('create-jobs-description');
    Route::get('/admin/jobs-description/delete/{hash_id}/{del_id}', [App\Http\Controllers\JobsController::class, 'deleteDescription'])->name('delete-jobs-delete-description');

    Route::match(array('GET','POST'),'/admin/jobs/jobs-specification/{hash_id}', [App\Http\Controllers\JobsController::class, 'jobSpecificationStore'])->name('create-jobs-specification');
    Route::get('/admin/jobs-specification/delete/{hash_id}/{del_id}', [App\Http\Controllers\JobsController::class, 'deleteSpecification'])->name('delete-jobs-delete-specification');


    Route::get('/admin/message/send', [App\Http\Controllers\MessageController::class, 'send'])->name('admin-message-send');
    Route::get('/admin/message/list', [App\Http\Controllers\MessageController::class, 'list'])->name('admin-message-list');
    Route::get('/admin/track-messages', [App\Http\Controllers\MessageController::class, 'track'])->name('admin-message-track');

    Route::match(array('GET','POST'),'/admin/create-user', [App\Http\Controllers\UserAdminController::class, 'store'])->name('admin-create-user');
    Route::match(array('GET','POST'),'/admin/user/edit/{hash_id}', [App\Http\Controllers\UserAdminController::class, 'edit'])->name('admin-edit-user');


    Route::get('/admin/users/search', [App\Http\Controllers\UserAdminController::class, 'search'])->name('admin-users-search');
    Route::get('/admin/setting/countries', [App\Http\Controllers\SettingController::class, 'countries'])->name('admin-countries');
    Route::get('/admin/setting/education-level', [App\Http\Controllers\SettingController::class, 'educationLevel'])->name('admin-education-level');
    Route::get('/admin/setting/experience-level', [App\Http\Controllers\SettingController::class, 'experienceLevel'])->name('admin-experience-level');
    Route::get('/admin/setting/skill-level', [App\Http\Controllers\SettingController::class, 'skillLevel'])->name('admin-skill-level');
    Route::get('/admin/setting/language', [App\Http\Controllers\SettingController::class, 'language'])->name('admin-language');
    Route::get('/admin/setting/language-level', [App\Http\Controllers\SettingController::class, 'languageLevel'])->name('admin-language-level');
*/


});