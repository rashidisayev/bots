<?php
/**
 * Created by PhpStorm.
 * User: rashidisayev
 * Date: 2019-01-08
 * Time: 15:53
 */
const TOKEN = '703181727:AAFejbBVfjol8Vnj6ypvf2V_Obxd2g3sNmE';

$url = 'https://api.telegram.org/bot'. TOKEN . '/sendMessage';


$params = [
    'chat_id' => 589954195,
    'text' => 'You are looser!'
];

$url = $url. '?' .http_build_query($params);

$response = json_decode(
    file_get_contents($url),JSON_OBJECT_AS_ARRAY
);

var_dump($response);
//var_dump(json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY));