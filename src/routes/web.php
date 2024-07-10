<?php

Route::get('contact', function(){
    return view('contact::contact');
});

Route::get('test', function(){
    return config('contact.send_email_to');
});