<?php

require_once 'vendor/autoload.php';
// ---------------------------------------------------------------------
// --[ Main code ]------------------------------------------------------
// --------------

//$html = file_get_contents('http://allo.ua/ru/products/notebooks/lenovo-ideapad-100-15ibd-80qq0156ua-black.html');

//phpQuery::newDocument($html);

/*$temperature = pq('.current-weather__thermometer_type_now')->text();
xd($temperature);*/

/*$wind = pq('.current-weather__info-row > abbr.icon-abbr')->attr('title');
echo $wind;*/

//$forecast = pq('ul.forecast-brief')->children('li.forecast-brief__item:not(.forecast-brief__item_gap)');



/*foreach ($forecast as $li){
  //  xd(pq($li));


    $li = pq($li);

    $li->find('.icon')->remove();
    $li->append('ololo');

    xprint($li->html());

}*/

/*$title = pq('title')->html();
xd($title);
echo  $title;*/


/*$sum =pq('span meta[itemprop=price]')->attr('content');
xd($sum);*/

//phpQuery::unloadDocuments();

/*$ch = curl_init('http://ya.ru');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);//for https
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//for https


$html = curl_exec($ch);

curl_close($ch);

xprint($html);*/

$cookiefile = 'tmp/cookie.txt';

$ch = curl_init('http://parse/cookies_test.php');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);

//curl_setopt($ch, CURLOPT_COOKIE, 'curl_session_cookie=1');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookiefile);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookiefile);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);


$html = curl_exec($ch);

curl_close($ch);

xprint($html);