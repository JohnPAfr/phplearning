<?php
$path = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'contact.php';
$ressources = fopen($path, 'r');
$search = 'Horaires';
$search = strtolower($search);
while($line = fgets($ressources)) {
    $line = strtolower($line);
    if(strpos($line, $search)) {
        echo 'Found';
        break;
    }
}