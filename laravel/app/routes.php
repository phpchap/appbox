<?php

/*==============================================================================

Application:   Utiity Function
Author:        John Gardner
Date:          25th December 2004
Description:   Used to check the validity of a UK telephone number
Version:       V1.0

Version:       V1.1  4th August 2006
               Updated to include 03 numbers being added by Ofcom in early 2007.

Version:       V1.2  9th January 2007
               Isle of Man mobile numbers catered for

Version:       V1.3  6th November 2007
               Support for mobile numbers improved - thanks to Natham Lisgo

Version:       V1.4  14th April 2008
               Numbers allocated for drama excluded - thanks to David Legg

Version:       V1.5  8th February 2012
               Updated to use PCRE rather than POSIX regular expressions

Parameters:    $strTelephoneNumber - telephone number to be checked. This is
                                     returned reformatted if valid.
               $intError           - Error number
                                     0 - valid telephone number
                                     1 - no number provided
                                     2 - Country code invalidly provided
                                     3 - 10 or 11 digits not provided
                                     4 - 0 not provided as first digit
                                     5 - invalid or inappropriate number
                $strError           - Error string - empty if valid

This routine checks the value of the string variable specified by the parameter for a valid UK
telphone number. It returns true for a valid number and false for an invalid number.

The definition of a valid telephone number has been taken from:

http://stakeholders.ofcom.org.uk/binaries/telecoms/numbering/numplan201210.pdf

All inappropriate telephone numbers are disallowed (e.g. premium lines, sex lines, radio-paging
services etc.)

Example call:

    if (!checkUKTelephone ($telNo, $errorNo, $errorText) ) {
      echo $errorText & '<br>';
    }

------------------------------------------------------------------------------*/

function checkUKTelephone (&$strTelephoneNumber) {

    // Copy the parameter and strip out the spaces
    $strTelephoneNumberCopy = str_replace (' ', '', $strTelephoneNumber);

    // Convert into a string and check that we were provided with something
    if (empty($strTelephoneNumberCopy)) {
        $intError = 1;
        $strError = 'Telephone number not provided';
        return false;
    }

    // Don't allow country codes to be included (assumes a leading "+")
    if (preg_match('/^(\+)[\s]*(.*)$/',$strTelephoneNumberCopy)) {
        $intError = 2;
        $strError = 'UK telephone number without the country code, please';
        return false;
    }

    // Remove hyphens - they are not part of a telephone number
    $strTelephoneNumberCopy = str_replace ('-', '', $strTelephoneNumberCopy);

    // Now check that all the characters are digits
    if (!preg_match('/^[0-9]{10,11}$/',$strTelephoneNumberCopy)) {
        $intError = 3;
        $strError = 'UK telephone numbers should contain 10 or 11 digits';
        return false;
    }

    // Now check that the first digit is 0
    if (!preg_match('/^0[0-9]{9,10}$/',$strTelephoneNumberCopy)) {
        $intError = 4;
        $strError = 'The telephone number should start with a 0';
        return false;
    }

    // Check the string against the numbers allocated for dramas

    // Expression for numbers allocated to dramas

    $tnexp[0] =  '/^(0113|0114|0115|0116|0117|0118|0121|0131|0141|0151|0161)(4960)[0-9]{3}$/';
    $tnexp[1] =  '/^02079460[0-9]{3}$/';
    $tnexp[2] =  '/^01914980[0-9]{3}$/';
    $tnexp[3] =  '/^02890180[0-9]{3}$/';
    $tnexp[4] =  '/^02920180[0-9]{3}$/';
    $tnexp[5] =  '/^01632960[0-9]{3}$/';
    $tnexp[6] =  '/^07700900[0-9]{3}$/';
    $tnexp[7] =  '/^08081570[0-9]{3}$/';
    $tnexp[8] =  '/^09098790[0-9]{3}$/';
    $tnexp[9] =  '/^03069990[0-9]{3}$/';

    foreach ($tnexp as $regexp) {
        if (preg_match($regexp,$strTelephoneNumberCopy, $matches)) {
            $intError = 5;
            $strError = 'The telephone number is either invalid or inappropriate';
            return false;
        }
    }

    // Finally, check that the telephone number is appropriate.
    if (!preg_match('/^(01|02|03|05|070|071|072|073|074|075|07624|077|078|079)[0-9]+$/',$strTelephoneNumberCopy)) {
        $intError = 5;
        $strError = 'The telephone number is either invalid or inappropriate';
        return false;
    }

    // Seems to be valid - return the stripped telephone number
    $strTelephoneNumber = $strTelephoneNumberCopy;
    $intError = 0;
    $strError = '';
    return true;
}


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

    global $paths;

    // grab the input
    $input = $_POST;

    $err = array();
    $e = (!empty($_GET['e'])) ? $_GET['e'] : "";
    $n = (!empty($_GET['n'])) ? $_GET['n'] : "";
    $p = (!empty($_GET['p'])) ? $_GET['p'] : "";
    $t = (!empty($_GET['t'])) ? $_GET['t'] : "";
    $f = (!empty($_GET['f'])) ? $_GET['f'] : "";
    $s = (!empty($_GET['s'])) ? $_GET['s'] : "";

    if(!empty($input)) {

        if(!empty($_REQUEST['t']) && $_REQUEST['t']) {
            Session::set('title', $_REQUEST['t']);
            $t = $_REQUEST['t'];
        } else {
            $err[] = "title is empty";
        }

        if(!empty($_REQUEST['f']) && $_REQUEST['f']) {
            Session::set('firstname', $_REQUEST['f']);
            $f = $_REQUEST['f'];
        } else {
            $err[] = "first name is empty";
        }

        if(!empty($_REQUEST['s']) && $_REQUEST['s']) {
            Session::set('lastname', $_REQUEST['s']);
            $s = $_REQUEST['s'];
        } else {
            $err[] = "last name is empty";
        }

        if(!empty($_REQUEST['e']) && $_REQUEST['e']) {
            Session::set('email', $_REQUEST['e']);
            $e = $_REQUEST['e'];
            if(!is_int(stripos($e, "@"))) {
                $err[] = "email is invalid";
            }
        } else {
            $err[] = "email is empty";
        }

        if(!empty($_REQUEST['p']) && $_REQUEST['p']) {
            Session::set('phone', $_REQUEST['p']);
            $p = $_REQUEST['p'];
            if (!checkUKTelephone($p)) {
                $err[] = "phone number is invalid";
            }
        } else {
            $err[] = "phone is empty";
        }

        if(empty($err)) {


            Session::set('display_video', true);

            $t = $_REQUEST['t'];
            $f = $_REQUEST['f'];
            $s = $_REQUEST['s'];
            $e = $_REQUEST['e'];
            $p = $_REQUEST['p'];

            // build the message
            $msg = "AppBox Media Landing Page Message: <br/>";
            $msg .= "From: ".$t." ".$f." ".$s."<br/>";
            $msg .= "Email: ".$e ."<br/>";
            $msg .= "Phone Number : ".$p."<br/>";

            // retrieve the ses client
            $client = App::make('aws')->get('Ses');

            // send the email
            $sent = $client->sendEmail(array('Source' => 'phpchap@gmail.com',
                                             'Destination' => array( 'ToAddresses' => array('investorrelations@appboxmedia.com')),
                                             'Message' => array('Subject' => array('Data' => 'From AppBox Media Website'),
                                                                'Body' => array('Html' => array('Data' => $msg)))));

            $emailDir = __DIR__."/storage/emails/";

            if(!$emailDir) {
                mkdir($emailDir, 777);
            }

            $emailFile = $emailDir."emails.txt";
            $fp = fopen($emailFile, 'w+');
            fwrite($fp, $msg);
            fclose($fp);

        }
    }


    return View::make('landing', array('e' => $e,
                                       'n' => $n,
                                       'p' => $p,
                                       't' => $t,
                                       'f' => $f,
                                       's' => $s,
                                       'err' => $err));
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

