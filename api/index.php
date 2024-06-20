<?php

require_once __DIR__.'/configuration/connect.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($_GET['showcase']) {
    case 'key':

        class Item {
            public $id;
            public $name;
            public $desc;
            public $type;
            public $brand;
            public $country;
            public $price;
            public $img;

            function __construct($id, $name, $desc, $type, $brand, $country, $price, $img) {
                $this ->id = $id;
                $this ->name = $name;
                $this ->desc = $desc;
                $this ->type = $type;
                $this ->brand = $brand;
                $this ->country = $country;
                $this ->price = $price;
                $this ->img = $img;
            }
        }
        
        $arr = [
            ['id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
            'price' => 613],
            ['id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
            'price' =>812],
            ['id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
            'price' => 613],
            ['id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
            'price' =>812],
            ['id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
            'price' => 613],
            ['id' => 123,
            'name' => 'jora',
            'desc' => 'bespolezniy',
            'type' => 'trash',
            'brand' => 'epic',
            'country' => 'gacu',
            'price' =>812],
        ];

        $arr2 = [
                new Item(123, 'jora', 'bespolezniy', 'trash', 'epic', 'gacu', 613),
                new Item(123, 'jora', 'bespolezniy', 'trash', 'epic', 'gacu', 613),
                new Item(123, 'jora', 'bespolezniy', 'trash', 'epic', 'gacu', 613),
                new Item(123, 'jora', 'bespolezniy', 'trash', 'epic', 'gacu', 613),
                new Item(123, 'jora', 'bespolezniy', 'trash', 'epic', 'gacu', 613),
                new Item(123, 'jora', 'bespolezniy', 'trash', 'epic', 'gacu', 613),
                new Item(123, 'jora', 'bespolezniy', 'trash', 'epic', 'gacu', 613),
                new Item(123, 'jora', 'bespolezniy', 'trash', 'epic', 'gacu', 613),
            ];

        echo json_encode($arr2);
        break;
    
    default:
        echo 'dead';
        break;
}

?>