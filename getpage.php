<?php

function getpage( $url )
{

    $context = stream_context_create(
        array(
            "http" => array(
                "method" => "GET",
                "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Avast/115.0.21984.171 \r\n"
                . "Cookie: advanced_ads_page_impressions=%7B%22expires%22%3A2007280175%2C%22data%22%3A1%7D; __adblocker=true"
            )
        )
    );

    $page = file_get_contents ( $url , false, $context);

    if ($page) {
      
         
        
      // set error level

            # DOM logic here
           $domdoc = new DOMDocument();

           $domdoc->recover = true;
           $domdoc->strictErrorChecking = false;
           $domdoc->loadHTML('<?xml encoding="UTF-8">'.$page, LIBXML_NOERROR);

           $tags = $domdoc->getElementsByTagName("title");
           for ($i = 0; $i < $tags->length; $i++) {
                    echo $tags->item($i)->nodeValue . "\n";
                }

        
    }
}


 getpage("https://machinelearningmastery.com");