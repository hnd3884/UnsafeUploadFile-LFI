<?php

if(isset($_GET["page"])){
    include("Page/".$_GET["page"].".php");
}
else {
    header("Location: /index.php?page=upload");
}
