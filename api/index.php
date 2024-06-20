<?php

require_once __DIR__.'/configuration/connect.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($_GET['showcase']) {
    case 'key':
        echo 'gg';
        break;
    
    default:
        echo 'dead';
        break;
}

?>