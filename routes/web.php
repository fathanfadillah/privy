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
//pages
Route::get('/', 'PrivyController@index');
Route::get('/home', 'PrivyController@index')->name('home');

Route::get('/tentangkami',   'PrivyController@tentangKami')->name('tentangkami');

Route::get('/dokumentasiapi', 'PrivyController@dokumentasiAPI')->name('dokumentasiapi');

Route::post('/verifikasipdf/store', 'VerifikasiController@store')->name('verifikasipdf.store');
Route::get('/verifikasipdf', 'VerifikasiController@index')->name('verifikasipdf');

Route::post('/kontakbisnis/store', 'KontakController@store')->name('kontakbisnis.store');;
Route::get('/kontakbisnis', 'KontakController@index')->name('kontakbisnis');

Route::get('/faq/search', 'PrivyController@faqSearch')->name('faq.search');
Route::get('/faq/category/{category}', 'PrivyController@faqCategory');
Route::get('/faq', 'PrivyController@faq')->name('faq');

Route::get('/bantuan', 'PrivyController@bantuan')->name('bantuan');

//auth
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/register', 'AuthController@register')->name('register');
Route::get('/forgot', 'AuthController@forgot')->name('forgot');

//enterprise
Route::get('/enterprise', 'EnterpriseController@index')->name('enterprise');

//job
Route::get('/job', 'JobController@index')->name('job');

// blog
Route::get('/blog', 'PrivyController@blog')->name('blog');
Route::get('/blog/detail/{blog}', 'PrivyController@blogDetail')->name('blog.detail');
Route::get('/blog/kategori/{kategori}', 'PrivyController@blogKategori')->name('blog.kategori');

// repository
Route::get('/repository', function () {
    return view('pages.repository');
});

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
