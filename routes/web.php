<?php

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

use App\Category;
use App\Menu;
use App\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>['auth:web','checkAdmin']],function(){
    Route::get('/panel' , 'PanelController@index')->name('panel');
    Route::post('/panel/upload-image' , 'PanelController@uploadImageSubject');
    Route::post('/panel/editor-upload' , 'PanelController@uploadImageSubject');
    Route::post('/panel/upload-Drop' , 'AdminController@dropzoneImage')->name('dropzone.store');
    Route::post('/panel/upload-file' , 'AdminController@dropzoneFile')->name('file.store');
    Route::post('/panel/upload_product_image' , 'AdminController@upload_product_image')->name('product_image.store');
    Route::resource('/articles', 'ArticleController');
    Route::resource('/courses', 'CourseController');
    Route::resource('/episodes','EpisodeController');
    Route::resource('/permissions','PermissionController');
    Route::resource('/roles','RoleController');
    Route::resource('/categories','CategoryController');
    Route::resource('/categoryfiles','CategoryFileController');
    Route::resource('/files','FileController');
    Route::resource('/contents','ContentController');
    Route::resource('/comments','CommentController');
    Route::resource('/sliders','SliderController');
    Route::resource('/gallery','GalleryController');
    Route::resource('/categoriesGallery','CategoryGalleryController');
    Route::resource('/settings','SettingController');
    Route::resource('/socials','SocialController');
    Route::resource('/products','ProductController');
    Route::resource('/menus','MenuController');
    Route::resource('/imagesProduct','ImageProductController');
    Route::resource('/categoryProduct','CategoryProductController');
    Route::resource('/imagesPrtfolio','ImagePortfolioController');
    Route::resource('/portfolio','PortfolioController');
    Route::resource('/categoryPortfolio','CategoryPortfolioController');
    Route::resource('/page','PageController');
    Route::resource('/contacts','ContactController');
    Route::post('/products/ajaxAdd','ProductController@ajax_add');
    Route::post('/categories/ajax_category','CategoryController@ajax_category');
    Route::post('/categoryProduct/ajax_category','CategoryProductController@ajax_category');
    Route::post('/Products/ajax_single_product','ProductController@ajax_single_product');
    Route::post('/contents/ajax_single_content','ContentController@ajax_single_content');
    Route::post('/categoriesGallery/ajax_category','CategoryGalleryController@ajax_category');
    Route::post('/categoryfiles/ajax_category','CategoryFileController@ajax_category');
    Route::post('/products/ajaxUpdate','ProductController@ajax_update');
    Route::get('/galleries/add_video','GalleryController@add_video')->name('video.add');
    Route::post('/galleries/video_store','GalleryController@video_store')->name('video.store');


    Route::group(['prefix'=>'users'],function(){
        Route::get('/','UserController@index')->name('users.List');
        Route::get('/user/edit','UserController@index')->name('users.edit');
        Route::resource('/level','LevelManageController',['parameters'=>['level' => 'user']]);
        Route::delete('/{user}/destroy','UserController@destroy')->name('users.destroy');
    });
});



Route::group(['namespace'=>'Auth'] , function (){
    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');
    Route::resetPassword();
    Route::emailVerification();
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
    Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
    Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');
});

//Front Routes
Route::get('/{category}','HomeController@blog')->name('blog');
Route::get('/','HomeController@index');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/category_files/{category}','HomeController@category_files')->name('blog.files');
Route::get('/album/{categoryGallery}','HomeController@album')->name('single_gallery');
Route::get('/gallery','HomeController@gallery')->name('gallery');
Route::get('/{page}','Admin\PageController@pages')->name('webdesign');
Route::get('/category/{category}','HomeController@blog')->name('blog.content');

Route::get('/productcategory/{category}','HomeController@productCategory')->name('product.category');
Route::get('/{category}/{content}','HomeController@singleContent')->name('single');
Route::get('/tag/{tag}','HomeController@singleContent')->name('tag');
Route::post('/Add_comment','Admin\CommentController@store')->name('comment.add');


Route::post('/addlike','HomeController@ajaxAddLike');
Route::post('/setlike','HomeController@setLike');

Route::post('/addContact','HomeController@add_contact')->name('contact.add');


View::composer(['*'],function($view){
    $menus = menu(0,app()->getLocale(),0,1);
    $menus_mobile = mobile_menu(0,app()->getLocale(),0,1);
    //$video_category = display_category_video(0,app()->getLocale());
    $setting = Setting::whereLang(app()->getLocale())->latest()->first();
        if (Auth::check()) {
            // The user is logged in...
           $user_data_front = Auth::user()->all();
        }else{
            $user_data_front = false;
        }
    $view->with(compact('setting','menus','menus_mobile','user_data_front'));
});

