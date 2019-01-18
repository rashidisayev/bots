<?php
/**
 * Created by PhpStorm.
 * User: rashidisayev
 * Date: 2019-01-08
 * Time: 17:15
 */

const TOKEN = 'your token';

$method = 'setWebhook';

$url = 'https://api.telegram.org/bot'. TOKEN . '/' .$method;

$options = [
    'url' => 'https://hook'
];

$response = file_get_contents($url.'?'.http_build_query($options));

var_dump($response);
