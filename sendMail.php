<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    
    $name = "Fitting Home";
    $from = "contact@fittinghome.com";
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = array(
    'From' => "$name <$from>",
    'Reply-To' => $from,
    'MIME-Version' => '1.0',
    'Content-type' => "text/html; charset=utf-8",
    'X-Priority' => '3',
    'X-Mailer' => 'PHP/' . phpversion()
	);
    mail($to,$subject,$message, $headers);
    header('Location: index.html');
?>