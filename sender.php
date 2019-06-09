<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'twilio-php-master\Twilio\autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "your sid"; 
$token  = "your token"; 
$twilio = new Client($sid, $token); 
$num = "senders number";
 
$message = $twilio->messages 
                  ->create("whatsapp:".$num, // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => "your message"
                           ) 
                  ); 
 
print($message->sid);