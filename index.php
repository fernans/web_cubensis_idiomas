<?php  	
    $lang = explode(",",$_SERVER['HTTP_ACCEPT_LANGUAGE']);
    $lang = explode("-",$lang[0]);

    switch($lang[0]){
        case "es":
            $url = "http://www.cubensisproject.com/index.html";
            break;
        case "it":
            $url = "http://www.cubensisproject.com/it/index_it.html";
            break;
        case "en":
            $url = "http://www.cubensisproject.com/english/index_eng.html";
            break;
        case "fr":
            $url = "http://www.cubensisproject.com/fr/index_fr.html";
            break;
        case "de":
            $url = "http://www.cubensisproject.com/de/index_de.html";
            break;
        default:
            $url = "http://www.cubensisproject.com/banderitas.html";
            break;
    }   
    header( "HTTP/1.1 301 Moved Permanently" );
    header( "Location: ".$url );
?>

