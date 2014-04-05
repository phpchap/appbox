<?php

// main website
Route::get('/', function(){
        $email = "";

    if(Session::has('email')) {
        $email = Session::get('email');
    }

    return View::make('index', array('email' => $email));
});

// presentation
Route::get('/presentation', array('as' => 'presentation', function(){
    return View::make('presentation');
}));

// presentation
Route::any('/landing', function(){

    Session::set('display_video', false);

    // grab the input
    $input = $_POST;

    if(!empty($input)) {
        Session::set('display_video', true);
    }

    $e = "";
    if(!empty($_GET['e']) && $_GET['e']) {
        Session::set('email', $_GET['e']);
        $e = $_GET['e'];
    }

    $n = "";
    if(!empty($_GET['n']) && $_GET['n']) {
        Session::set('number', $_GET['n']);
        $n = $_GET['n'];
    }

    $p = "";
    if(!empty($_GET['p']) && $_GET['p']) {
        Session::set('phone', $_GET['p']);
        $p = $_GET['p'];
    }

    $t = "";
    if(!empty($_GET['t']) && $_GET['t']) {
        Session::set('title', $_GET['t']);
        $t = $_GET['t'];
    }

    return View::make('landing', array('e' => $e, 'n' => $n, 'p' => $p, 't' => $t));
});


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
    $message = $input['message'];
    $title = $input['title'];

    // build the message
    $msg = "AppBox Media Contact Form Message: <br/>";

    $msg .= "Title: ".$title."<br/>";
    $msg .= "From: ".$name."<br/>";
    $msg .= "Email: ".$email ."<br/>";
    $msg .= "Message: ".$message."<br/>";
 
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

