<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){    
    return View::make('index');
});

Route::get('/contact', function(){

    // grab the input 
    $input = Input::all();
    
    // build the email details
    $name = $input['name']; 
    $email = $input['email']; 
    $subject = $input['subject']; 
    $message = $input['message'];
    
    // build the message
    $message = "AppBox Media Contact Form Message: \r\n";
    $message .= "From: ".$name;    
    $message .= "Message: ".$message."\r\n";

    // send the email
    $sent = mail($email, $subject, $message);
    
    if($sent) {
        return 'OK';
    } else {
        return 'ERROR';
    }   
});

