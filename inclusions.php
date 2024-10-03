<?php
#$file = $_GET['file'];

$path = parse_url($url, PHP_URL_PATH);
print($path);

function setTemplate($file){
include('header.php');
include($file.'.php');
include('footer.php');
}

setTemplate($file);