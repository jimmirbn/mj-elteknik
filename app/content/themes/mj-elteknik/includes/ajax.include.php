<?php

add_action( 'wp_ajax_nopriv_email', 'email' );
add_action( 'wp_ajax_email', 'email' );

function email() {
if($_POST){

    $to_Email       = filter_var($_POST["reciever_email"], FILTER_SANITIZE_STRING); //Replace with recipient email address
    $subject        = 'Besked fra Mj-Elteknik.dk'; //Subject line for emails
    
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        //exit script outputting json data
        $output = json_encode(
            array(
                'type'=>'error', 
                'text' => 'Request must come from Ajax'
                ));
        
        die($output);
    } 
    
    //check $_POST vars are set, exit if any missing
    if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userPhone"]) || !isset($_POST["userMessage"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }

    //Sanitize input data using PHP filter_var().
    $user_Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    $user_Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
    $user_Phone       = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
    $user_Message     = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);
    
    //additional php validation
    if(strlen($user_Name)<4) // If length is less than 4 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Indtast venligst et navn'));
        die($output);
    }
    if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Indtast venligst en korrekt E-mail'));
        die($output);
    }
    if(!is_numeric($user_Phone)) //check entered data is numbers
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Kun tal er tilladt'));
        die($output);
    }
    if(strlen($user_Message)<5) //check emtpy message
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Beskeden er for kort'));
        die($output);
    }
    
    //proceed with PHP email.
    $headers = 'From: '.$user_Email.'' . "\r\n" .
    'Reply-To: '.$user_Email.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
        // send mail
    $sentMail = @mail($to_Email, $subject, $user_Message ."\n".' Hilsen '.$user_Name, $headers);
    
    if(!$sentMail)
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Hej '.$user_Name .'. Tak for din E-mail'));
        die($output);
    }
}
}
/* EOF - AJAX */