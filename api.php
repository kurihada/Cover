<?php

$rand = rand(1,18);
$url = 'https://cdn.jsdelivr.net/gh/kurihada/images@V-1.0/images/'.$rand.'.jpg';
$img = file_get_contents($url,true);
header("Content-Type: image/jpeg;");
echo $img;
?>