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

// main website
Route::get('/', function(){    
    return View::make('index');
});

// presentation
Route::get('/presentation', function(){
    return View::make('presentation');
});

// simple
Route::get('/simple', function(){
    return View::make('simple');
});


// contact page AJAX send to Amazon SES
Route::post('/contact', function(){

    // grab the input 
    $input = Input::all();
    
    // build the email details
    $name = $input['name']; 
    $email = $input['email']; 
    $subject = $input['subject']; 
    $message = $input['message'];
    
    // build the message
    $msg = "AppBox Media Contact Form Message: <br/>";
    $msg .= "From: ".$name."<br/>";    
    $msg .= "Email: ".$email ."<br/>";
    $msg .= "Subject : ".$subject."<br/>";    
    $msg .= "Message: ".$message."<br/>";
 
    // retrieve the ses client
    $client = App::make('aws')->get('Ses');

    // send the email
    $sent = $client->sendEmail(array('Source' => 'hello@appboxmedia.com',
                                     'Destination' => array( 'ToAddresses' => array('hello@appboxmedia.com')),
                                     'Message' => array('Subject' => array('Data' => 'From AppBox Media Website: '.$subject),
                                     'Body' => array('Html' => array('Data' => $msg)))));    

    if($sent) {
        return 'OK';
    } else {
        return 'ERROR';
    }    
});
