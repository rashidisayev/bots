<?php
/**
 * Created by PhpStorm.
 * User: rashidisayev
 * Date: 2019-01-09
 * Time: 14:00
 */


//file_put_contents(__DIR__.'/bot/log.txt',file_get_contents('php://input'));
session_start();

const TOKEN = 'your token';

const BASE_URL = 'https://api.telegram.org/bot'. TOKEN . '/';




$update = json_decode(file_get_contents('php://input'),JSON_OBJECT_AS_ARRAY);

function sendRequest($method,$params = [])
{
    if (!empty($params))
    {
        $url = BASE_URL .$method. '?' . http_build_query($params);
    }else{
        $url = BASE_URL .$method;
    }
    return json_decode(
        file_get_contents($url),
        JSON_OBJECT_AS_ARRAY
    );
}


            $a = ['Pider name', 'Pider name'];
            $name = $a[mt_rand(0, count($a) - 1)];







$keyboard = array(array("Who is Pidor"));
$resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true);
$reply = json_encode($resp);


$chat_id = $update['message']['chat']['id'];
sendRequest('sendMessage',['chat_id' => $chat_id, 'text'=> $name,'reply_markup' => $reply]);

