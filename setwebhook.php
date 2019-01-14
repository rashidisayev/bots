<?php
/**
 * Created by PhpStorm.
 * User: rashidisayev
 * Date: 2019-01-08
 * Time: 17:15
 */

const TOKEN = '724544065:AAHZ_sy3gAauP-TNFiZvI1_CUawGo4lXDlY';

$method = 'setWebhook';

$url = 'https://api.telegram.org/bot'. TOKEN . '/' .$method;

$options = [
    'url' => 'https://rashidisayev.com/bot/index.php'
];

$response = file_get_contents($url.'?'.http_build_query($options));

var_dump($response);