<?php

$path = 'ping.txt';

$data = '';

if (file_exists($path)) {
    $data = str_replace(PHP_EOL, '</br>', file_get_contents($path));
}

echo $data;
