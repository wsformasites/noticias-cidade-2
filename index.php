<?php
    $url = isset($_GET["url"]) ? $_GET["url"] : "pages/home.php";
    $url = array_filter(explode("/", $url));
    $file = "pages/$url[0].php";
    if(file_exists($file)) {
        include_once($file);
    } else {
        include_once("pages/404.php");
    }
?>