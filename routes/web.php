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
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

//Route::get('sendbasicemail','MailController@basic_email');
//Route::get('sendhtmlemail','MailController@html_email');
//Route::get('sendattachmentemail','MailController@attachment_email');

//Route::get('ajax',function() {
    //return view('message');
 //});
 //Route::post('/getmsg','AjaxController@index');
 ?>