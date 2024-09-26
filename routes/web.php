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

Route::get('/tp', function () {
    return view('admin_pages.staff');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/book-bank','PagesController@book_bank');
Route::get('/book-library','PagesController@book_library');
Route::get('/contact','PagesController@contact');
Route::get('/gallery','PagesController@gallery');
Route::get('/notice-single','PagesController@notice_single');
Route::get('/notice','PagesController@notice');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::resource('books','BooksController');
Route::resource('staff','StaffController');
Route::resource('donors','DonorsController');
Route::resource('issues','IssuesController');





//staff
Route::get('/staff','StaffController@index');
Route::get('/staff/{$id}','StaffController@show($id)');


Auth::routes();

Route::get('/admin', 'PagesController@admin');
Route::get('/donate', 'DonorsController@donate');
Route:: get('/book-issue', 'IssuesController@issue');





