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

// Route::get('/', function () {
//     return view('welcome');
// });
if(env('HTTPS')){
	URL::forceSchema('https');
}
Route::get('search', "PageController@search");

Route::get('login/{social}', 'SocialController@redirectToSocial');
Route::get('facebook', 'SocialController@handleSocialCallback');
Route::get('google', 'SocialController@handleSocialCallback');

Route::get('verify', 'PageController@verify');
Route::post('verify', 'PageController@sendToken');
Route::get('verify/{token}', 'PageController@verifyToken');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('dashboard',"DashboardController@index");

Route::get('dashboard/images','ImageController@index');
Route::post('dashboard/images','ImageController@store');

Route::get('dashboard/admins',"AdminController@admins");
Route::get('dashboard/editors',"AdminController@editors");
Route::get('dashboard/users',"AdminController@users");
Route::get('dashboard/{user}/delete',"AdminController@user_delete");
Route::get('dashboard/{user}/makeEditor',"AdminController@makeEditor");
Route::get('dashboard/{user}/makeUser',"AdminController@makeUser");

Route::get('dashboard/articles',"AdminController@articles");
Route::get('dashboard/discussions',"AdminController@discussions");

Route::get('dashboard/messages',"AdminController@messages");
Route::get('dashboard/message/{message}/delete',"AdminController@delete_message");

Route::get('dashboard/{user}/articles',"DashboardController@articles");
Route::get('dashboard/{user}/discussions',"DashboardController@discussions");

Route::post('dashboard/user',"ProfileController@store");
Route::patch('dashboard/{user}','ProfileController@update');
Route::patch('dashboard/{user}/password','ProfileController@password');
Route::get('dashboard/{user}/profile',"ProfileController@show");
Route::get('dashboard/user/create',"ProfileController@create");


Route::get('articles','ArticleController@index');
Route::get('article/create','ArticleController@create');
Route::get('article/{article}','ArticleController@show');
Route::post('article','ArticleController@store');
Route::get('article/{article}/edit','ArticleController@edit');
Route::patch('article/{article}','ArticleController@update');
Route::get('article/{article}/delete','ArticleController@delete');

Route::get('discussions','DiscussionController@index');
Route::get('discussion/{discussion}','DiscussionController@show');
Route::get('discussion/create','DiscussionController@create');
Route::post('discussion','DiscussionController@store');
Route::get('discussion/{discussion}/delete','DiscussionController@delete');

Route::post('message','PageController@sendMessage');

Route::post('article/{article}/comment','CommentController@article');
Route::get('article/{article}/comment/{articlecomment}/delete','CommentController@article_delete');
Route::post('discussion/{discussion}/comment','CommentController@discussion');
Route::get('discussion/{discussion}/comment/{discussioncomment}/delete','CommentController@discussion_delete');

Route::get('/', 'PageController@home');
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');
Route::get('bloggrid', 'PageController@bloggrid');
Route::get('bloglist', 'PageController@bloglist');
Route::get('blogsingle', 'PageController@blogsingle');
Route::get('booking', 'PageController@booking');
Route::get('carsingle', 'PageController@carsingle');
Route::get('confirmation', 'PageController@confirmation');
Route::get('gallerymasonry', 'PageController@gallerymasonry');
Route::get('gallerythree', 'PageController@gallerythree');
Route::get('index2', 'PageController@index2');
Route::get('index3', 'PageController@index3');
Route::get('ourcar', 'PageController@ourcar');
Route::get('adminourcar', 'PageController@adminourcar');
Route::get('deleteourcar', 'PageController@deleteourcar');
Route::get('updateourcar', 'PageController@updateourcar');
Route::get('sendmail', 'PageController@sendmail');
Route::get('services', 'PageController@services');
Route::get('addcar', 'PageController@addcar');
Route::get('registration', 'PageController@registration');
Route::post('sign_up','RegisterController@sign_up');

Route::get('home', 'HomeController@home2');
Route::get('logout', 'HomeController@logout');
Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index');
