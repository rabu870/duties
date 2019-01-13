<?php

    $db = new mysqli('localhost', 'root', 'root', 'duties');

    if($db->connect_errno > 0){
        echo 'fail';
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
?>