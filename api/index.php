<?php

require_once __DIR__.'/configuration/connect.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($_GET['showcase']) {
    case 'key':
        $arr = [
            'id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
            'price' => 613,
            'id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
            'id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
            'price' => 613,
            'id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
            'id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
            'price' => 613,
            'id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
        ];
        echo json_encode($arr);
        break;
    
    default:
        echo 'dead';
        break;
}

?>