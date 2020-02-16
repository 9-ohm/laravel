<?php
Route::get('/',function(){
    return view('welcome');
});
Route::post('/sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_emai');