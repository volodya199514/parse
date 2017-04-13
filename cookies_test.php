<?php
/**
 * Created by PhpStorm.
 * User: devds
 * Date: 13.04.17
 * Time: 13:36
 */

require_once 'vendor/autoload.php';

$cook = false;

if(isset($_COOKIE['curl_session_cookie'])){

    $cook = true;
    echo "Сесійна кука є\r\n";
}

if(isset($_COOKIE['curl_normal_cookie'])){

    $cook = true;
    echo "Нормальна кука є\r\n";
}

setcookie('curl_session_cookie', 1);
setcookie('curl_normal_cookie', 1, microtime(true)+10000);

if($cook)
{
    echo 'Я тебе знаю!';

}else{

    echo 'ВИ тут новий?';

}