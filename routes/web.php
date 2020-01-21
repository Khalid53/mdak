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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses'          =>  'LandingPageController@index',
    'as'            =>  '/',
]);

Route::get('/job-offer', [
    'uses'          =>  'LandingPageController@jobOffer',
    'as'            =>  'job-offer',
]);

Route::get('/services', [
    'uses'          =>  'LandingPageController@servicesInfo',
    'as'            =>  'services',
]);

Route::get('/about', [
    'uses'          =>  'LandingPageController@aboutInfo',
    'as'            =>  'about',
]);

Route::get('/contact', [
    'uses'          =>  'LandingPageController@contactInfo',
    'as'            =>  'contact',
]);
//=============================Job Applicant Control Admin panel=========================

Route::post('/add-job-offer', [
    'uses'          =>  'JobOfferController@addJobApplicantInfo',
    'as'            =>  'add-job-offer',
]);

Route::get('/ja-email-check/{email}', [
    'uses'          =>  'JobOfferController@jobApplicantEmailCheck',
    'as'            =>  'ja-email-checkr',
]);


Route::get('/jcu-login', [
    'uses'          =>  'LandingPageController@jcuLoginInfo',
    'as'            =>  'jcu-login',
]);

Route::get('/job-applicant-details', [
    'uses'          =>  'JobApplicantController@jobApplicantDetailsInfo',
    'as'            =>  'job-applicant-details',
    'middleware'    =>  'HrUserMiddleware'
]);

Route::get('/delete-job-applicant/{id}', [
    'uses'          =>  'JobApplicantController@deleteJobApplicantInfo',
    'as'            =>  'delete-job-applicant',
]);



Route::post('/jcu-login', [
    'uses'          =>  'JobApplicantController@jcuDashboardLogin',
    'as'            =>  'jcu-login',
]);

Route::post('/jacu-logout', [
    'uses'          =>  'JACUSignUpController@jcuDashboardLogout',
    'as'            =>  'jacu-logout',
]);



Route::get('/jacu-signup', [
    'uses'          =>  'JACUSignUpController@index',
    'as'            =>  'jacu-signup',
    'middleware'    =>  'AdminMiddleware'
]);

Route::get('/jacu-email-check/{email}', [
    'uses'          =>  'JACUSignUpController@jobApplicantControllerUserEmailCheck',
    'as'            =>  'jacu-email-check',
]);



Route::post('/add-jacu', [
    'uses'          =>  'JACUSignUpController@addJobApplicantControlUser',
    'as'            =>  'add-jacu',

]);














Route::post('/add-contact', [
    'uses'          =>  'ContactController@addContact',
    'as'            =>  'add-contact',
]);

Route::get('/manage-contact', [
    'uses'          =>  'ContactController@manageContactInfo',
    'as'            =>  'manage-contact',
]);

Route::get('/delete-contact/{id}', [
    'uses'          =>  'ContactController@deleteContactInfo',
    'as'            =>  'delete-contact',
]);










Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
