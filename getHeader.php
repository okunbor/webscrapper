<?php

function getheaders ( $url )
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
    $message = " Could not connect to ". $url ." .Please check if it is a valid website";

    $headers = get_headers( $url , TRUE, $context );

    // if ( $headers[0] == "HTTP/1.1 200 OK") {
        
    //     echo  $url."  headers successfully collected ";
    // }else{

    //     die( $message);
    // }
    return  $headers;
}

print_r( getheaders("https://machinelearningmastery.com") ) ;


?>