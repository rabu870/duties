<?php

require_once '../backend/connection.php';

if(!empty($_POST['pwd'])) {
    if(crypt($_POST['pwd'], 'P9') == $db->query('SELECT `password` FROM `login` WHERE true')->fetch_row()[0]) {
        setcookie('auth', crypt($_POST['pwd']), time() + (86400 * 3), '/');
        header('Location: ../');
    } else {
        header('Location: ./#wrong');
    }
}

?>