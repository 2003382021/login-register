<?php


$from ="Demo<Demo@gmail.com>";
$sendto = "Demo<githinjij825@gmail.com>";
$subject="New message from contact form";
$fields =array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');
$okMessage ="Contact submited";
$errorMessage ="There was an error.";


error_reporting(0);

try{
    if(count($_POST) == 0) throw new \Exception("Form is Empty.");

    $emilText = "Nem message from demo contact form.\n";

    foreach($_POST as $key => $value){
        if(isset($fields[$key])){
            $emailText .= "$fields[$key] : $value\n";
        }
    }

    $headers = array('Content-Type: text/plain; charset= "UTF-8";',
    'From:' . $from,
    'Reply-To:' .$from,
    'Return-Path:' .$from
);

mail($sendTo, $subject, $emailText, implode("\n", $headers));
$responseArray = array("type" => "success", "message" => $okMessage);


}catch(Exception $ex){
    $responseArray = array("type" => "danger", "message" => $errorMessage);
}

if(!empty($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == 'xmlhttprequest'){
    $encode = json_encode($responseArray);
    header('Content-Type: application/json');
    echo $encoded;
}else $responseArray['message'];







