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

Route::post('/contact', function(){

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
 
    // retrieve the ses client
    $client = App::make('aws')->get('Ses');

    // send the email
    $sent = $client->sendEmail(array('Source' => 'noreply@appboxmedia.com',
                                     'Destination' => array( 'ToAddresses' => array('phpchap@gmail.com', 'bryan@appboxmedia.com', 'dean@appboxmedia.com')),
                                     'Message' => array('Subject' => array('Data' => 'AppBox Media Website: '.$subject),
                                     'Body' => array('Html' => array('Data' => $message)))));    

    if($sent) {
        return 'OK';
    } else {
        return 'ERROR';
    }
    
});