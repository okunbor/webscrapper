<?php

use Symfony\Component\Panther\Client;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

 require __DIR__.'/vendor/autoload.php'; // Composer's autoloader
 $browser = new HttpBrowser(HttpClient::create());


 $browser->request('GET', 'https://machinelearningmastery.com');
$response = $browser->getResponse();
$crawler = new Crawler($response);



print_r( $crawler->filterXpath('//title')->text() );


