<?php

// main website
Route::get('/', function(){    
    return View::make('index');
});

// presentation
Route::get('/presentation', array('as' => 'presentation', function(){
    return View::make('presentation');
}));

// simple presentation
Route::get('/reveal', function(){
    return View::make('reveal');
});

// advanced presentation
Route::get('/impress', function(){
    return View::make('impress');
});

// presentation page AJAX send to Amazon SES
Route::post('/send', function(){

        // grab the input
        $input = Input::all();

        // build the email details
        $name = $input['name'];
        $email = $input['email'];
        $number = $input['subject'];

        // build the message
        $msg = "AppBox Media Presentation Form Message: <br/>";
        $msg .= "From: ".$name."<br/>";
        $msg .= "Email: ".$email ."<br/>";
        $msg .= "Contact : ".$number."<br/>";

        // retrieve the ses client
        $client = App::make('aws')->get('Ses');

        // send the email
        $sent = $client->sendEmail(array('Source' => 'hello@appboxmedia.com',
                                         'Destination' => array( 'ToAddresses' => array('hello@appboxmedia.com')),
                                         'Message' => array('Subject' => array('Data' => 'From AppBox Media Website'),
                                                            'Body' => array('Html' => array('Data' => $msg)))));

        if($sent) {
            return 'OK';
        } else {
            return 'ERROR';
        }
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

