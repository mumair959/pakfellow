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

Route::get('/reset_web_cache', function () {
        \Artisan::call('cache:clear');
        \Artisan::call('view:clear');
        \Artisan::call('route:clear');
        \Artisan::call('config:clear');
        \Artisan::call('config:cache');
        
        dd("Web cache has been reset");
});

Route::get('/', function()
{
    return Redirect::to( '/home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/single_events', 'HomeController@singleEvent')->name('single-event');
Route::get('/events', 'HomeController@events')->name('events');

Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/register_user', 'HomeController@register')->name('register-user');
Route::get('/directory', 'HomeController@directory')->name('directory');
Route::get('/contact_us', 'HomeController@contactUs')->name('contact-us');
Route::get('/centers', 'HomeController@centers')->name('centers');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');

Route::post('/send_message', 'HomeController@sendMessage')->name('send_message');
Route::post('/user_registration','AuthenticateController@register')->name('user-registration');
Route::post('/user_login','AuthenticateController@login')->name('user-login');


Auth::routes();

Route::get('/add_blog', 'BlogController@addBlog')->name('add-blog');
Route::get('/blog_list', 'BlogController@blogList')->name('blog-list');
Route::get('/blog_details/{id}', 'BlogController@blogDetails')->name('blog-details');
Route::get('/like_blog', 'BlogController@likeBlog')->name('like-blog');

Route::post('/create_blog', 'BlogController@createBlog')->name('create-blog');
Route::get('/send_comment','BlogController@sendComment')->name('send-comment');

Route::get('/approve_blogs', 'AdminController@approveBlogs')->name('approve-blogs');
Route::get('/approve_comments', 'AdminController@approveComments')->name('approve-comments');

Route::get('/approved', 'AdminController@approve')->name('admin-approve');
Route::get('/delete', 'AdminController@delete')->name('admin-delete');
