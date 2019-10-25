<?php

$string = 'Amazing, PHP is working in nginx ' . (new \DateTime())->format('Y-m-d H:i:s') . '</br>';

echo $string;

echo 'Read file... </br>';

echo '<strong>Content: </strong>' . file_get_contents('content.txt');

echo ' </br>Read file success </br>';