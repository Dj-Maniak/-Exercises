<?php


$fileUserTxt = file_get_contents(__DIR__ . '/User1.txt');

$explodeUserTxT = explode("\n", $fileUserTxt);
$glue = implode(" ", $explodeUserTxT);
$explodeUser = explode(" ", $glue);
$FileUserTxTChunk = array_chunk($explodeUser, 5);


//var_dump($FileUserTxTChunk);

