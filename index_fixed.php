<?php

$allowPages = array('upload', 'about');

if (isset($_GET["page"])) {
    $page = $_GET["page"];
    $isOke = 1;

    // check valid page
    if(!in_array($page, $allowPages)){
        $isOke = 0;
    }

    if($isOke == 1){
        include("Page/" . $page . ".php");
    }
    else {
        echo "Invalid page";
    }

} else {
    header("Location: /index.php?page=upload");
}

?>