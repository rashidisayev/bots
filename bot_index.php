<?php
/**
 * Created by PhpStorm.
 * User: rashidisayev
 * Date: 2019-01-08
 * Time: 16:47
 */

const TOKEN = '724544065:AAHZ_sy3gAauP-TNFiZvI1_CUawGo4lXDlY';

const BASE_URL = 'https://api.telegram.org/bot'. TOKEN . '/';



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
    $updates = sendRequest('getUpdates');


    foreach ($updates['result'] as $update) {
        $chat_id = $update['message']['chat']['id'];
        $update_id = $update['update_id'];
        // var_dump($message_id);
        if (!empty($update_id))
            sendRequest('sendMessage',['chat_id' => $chat_id, 'text'=>'test msg']);

    }



//var_dump(sendRequest('sendMessage',['chat_id' => 589954195, 'text'=>'it works!']));