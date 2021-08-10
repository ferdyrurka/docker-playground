#!/usr/bin/env php
<?php

$path = '../public/ping.txt';

$data = '';

if (file_exists($path)) {
    $data = file_get_contents($path) . PHP_EOL;
}

file_put_contents(
    $path,
    $data .(new \DateTime())->format('Y-m-d H:i:s')
);
