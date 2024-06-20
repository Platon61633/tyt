<?php

$method = $_SERVER['REQUEST_METHOD'];

echo 'jj';

switch ($_GET['showcase']) {
    case 'key':
        echo 'gg';
        break;
    
    default:
        echo 'dead';
        break;
}