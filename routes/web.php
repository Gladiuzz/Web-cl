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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', 'DashboardController@index')->name('home');
Route::get('/admin/news', 'NewsController@index')->name('news');
Route::get('/admin/tambah_news', 'NewsController@edit_index')->name('edit.news');
Route::get('/admin/clients', 'ClientController@index')->name('client');
Route::get('/admin/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/admin/testimoni', 'TestimoniController@index')->name('testimoni');
Route::get('/admin/company_visit', 'CompanyVisitController@index')->name('company_visit');
Route::get('/admin/internship', 'InternshipController@index')->name('internship');
Route::get('/admin/newsletter', 'NewsletterController@index')->name('newsletter');
Route::get('/admin/email', 'EmailController@index')->name('email_broadcast');
