<?php

function getpage( $url )
{

$context = stream_context_create(
    array(
        "http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
);

    $page = @file_get_contents ( $url , false, $context);

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

        //    foreach ($tags as $title ) {
            
        //     $v = $title->hasChildNodes()?" hasChildNodes":" hasNoChildNodes";
        //     echo $tags->length;
        //     echo  $v. "<br/>";

        //    }

           // Restore error level


        
    }
}


 getpage("https://stackoverflow.com/");