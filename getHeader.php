<?php

function getheaders ( $url )
{
    $message = " Could not connect to ". $url ." .Please check if it is a valid website";

    $headers = get_headers( $url , TRUE );

    if ( $headers[0] == "HTTP/1.1 200 OK") {
        
        echo  $url."  headers successfully collected ";
    }else{

        die( $message);
    }
    return  $headers;
}

print_r( getheaders("https://www.google.com") [0]) ;


?>