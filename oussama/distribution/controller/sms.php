<?php
/*if(isset($_POST['submit'])){
   /* $number=$_POST['number'];
    $text=$_POST['text'];

$url="https://d7sms.p.rapidapi.com/secure/send";
//$message = urlencode($text);// urlencode your message
$ch = curl_init($url);
$data=array('api_key'=>'aUqKoykU3O_R3Kvfl-L1WTnl97UQxVKy5rFooL27',
 'username'=>'yassine',
 'sender_id'=>'22136',
 'messsage'=>$_POST['text'],
 'phone'=>$_POST['number']);
 $payload=json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Accept:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result= json_encode(curl_exec($ch));
foreach($result as $value)
{
    echo"$value<br>";
}
curl_close($ch);


}*/
// Include the bundled autoload from the Twilio PHP Helper Library
/*require __DIR__ . './vendor/autoload.php';
use Twilio\Rest\Client;
use App\SmsSender;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC7caedd3a6b9c25ac6b692e7e107ad122';
$auth_token = '7a989ef72d562d2237be147f8c6a679b';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// A Twilio number you own with SMS capabilities
//$twilio_number = $_POST['number'];
$client = new Client($account_sid, $auth_token);
if(isset($_POST['submit']))
{
    $client->messages->create(
        // Where to send a text message (your cell phone?)
        '+21656788559',
        [
            'from' => '+12075604877',
            'body' => $_POST['text']
            ]
        );
}*/
require_once __DIR__ . '/vendor/autoload.php';

include_once "../controller/SmsSender.php";
use Twilio\Rest\Client;
use App\SmsSender;


$sid          = 'AC7caedd3a6b9c25ac6b692e7e107ad122';
$token        = '7a989ef72d562d2237be147f8c6a679b';
$twilioNumber = '+12075604877';

$twilioClient = new Client($sid, $token);
$sender       = new SmsSender($twilioClient);
/*if(isset($_POST['submit'])){*/
$to      = $_POST['number'];
$payload = [
    'from' => $twilioNumber,
    'body' => $_POST['text'],
];

$sender($to, $payload);


echo 'SMS sent successfully.';

header("Location: ".$_SERVER['HTTP_REFERER']);



?>