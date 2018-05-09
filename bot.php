<?php
require "vendor/autoload.php";
$access_token = 'rZC7OxAaKHIz4OS/72ty7JwBYqMJBprC+MsdWsVrG5ePZX2/dhiusE2hYb1vu0BQ4aMA0Ylw2mNnrtHP1OmNZEOJJWyxnfE2JkP0VAOSmZIp5wGDaBp3nC0FGd+qJ6jqaHe7BfN1m2UHBWtdzXEzMAdB04t89/1O/w1cDnyilFU=';
 $channelSecret = '9b9c85d174878dd562bbf3972c961c18';
$idPush = 'U1cefecdcaa49cdb7c36785307c86e68f'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage('U1cefecdcaa49cdb7c36785307c86e68f', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
 
