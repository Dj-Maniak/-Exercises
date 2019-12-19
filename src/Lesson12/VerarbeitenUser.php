<?php

//echo __DIR__;die;

$FileUserTxT = file_get_contents(__DIR__ . '/User1.txt');

$ExplodeUserTxT = explode('\n', $FileUserTxT);


foreach ($ExplodeUserTxT as $Item) {
    $Smash = str_replace(PHP_EOL, ' ', $Item);
}


$ExplodeSmash = explode(' ', $Smash);
$FileUserTxTChunk = array_chunk($ExplodeSmash, 5);

//var_dump($FileUserTxTChunk);

















