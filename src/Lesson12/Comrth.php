<?php

require_once(__DIR__ . '/VerarbeitenUser.php');


foreach ($FileUserTxTChunk as $key => $Password) {
    if (strlen($Password[2]) >= 8) {
        var_dump($Password[2]);
    }
}

?>