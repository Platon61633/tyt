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
        
        // $arr = [
        //     ['id' => 123,
        //     'name' => 'jora',
        //     'desc' => 'bespolezniy',
        //     'type' => 'trash',
        //     'brand' => 'epic',
        //     'country' => 'gacu',
        //     'price' => 613],
        //     ['id' => 123,
        //     'name' => 'jora',
        //     'desc' => 'bespolezniy',
        //     'type' => 'trash',
        //     'brand' => 'epic',
        //     'country' => 'gacu',
        //     'price' =>812],
        //     ['id' => 123,
        //     'name' => 'jora',
        //     'desc' => 'bespolezniy',
        //     'type' => 'trash',
        //     'brand' => 'epic',
        //     'country' => 'gacu',
        //     'price' => 613],
        //     ['id' => 123,
        //     'name' => 'jora',
        //     'desc' => 'bespolezniy',
        //     'type' => 'trash',
        //     'brand' => 'epic',
        //     'country' => 'gacu',
        //     'price' =>812],
        //     ['id' => 123,
        //     'name' => 'jora',
        //     'desc' => 'bespolezniy',
        //     'type' => 'trash',
        //     'brand' => 'epic',
        //     'country' => 'gacu',
        //     'price' => 613],
        //     ['id' => 123,
        //     'name' => 'jora',
        //     'desc' => 'bespolezniy',
        //     'type' => 'trash',
        //     'brand' => 'epic',
        //     'country' => 'gacu',
        //     'price' =>812],
        //     ['id' => 123,
        //     'name' => 'jora',
        //     'desc' => 'bespolezniy',
        //     'type' => 'trash',
        //     'brand' => 'epic',
        //     'country' => 'gacu',
        //     'price' =>54862],
        //     ['id' => 123,
        //     'name' => 'jora',
        //     'desc' => 'bespolezniy',
        //     'type' => 'trash',
        //     'brand' => 'epic',
        //     'country' => 'gacu',
        //     'price' =>30000]
        // ];

        $arr2 = [
                new Item(123, 'jora', 'bespolezniy', 'trash', 'epich', 'gacu', 613, 'dollar.jpg'),
                new Item(123, 'jora', 'bespolezniy', 'qwerty', 'epidc', 'gacu', 615, 'dollar.jpg'),
                new Item(123, 'jora', 'bespolezniy', 'qwert', 'epifc', 'gacu', 616, 'dollar.jpg'),
                new Item(123, 'jora', 'bespolezniy', 'qwer', 'epsic', 'gacu', 617, 'dollar.jpg'),
                new Item(123, 'jora', 'bespolezniy', 'qwe', 'epidc', 'gacu', 619, 'dollar.jpg'),
                new Item(123, 'jora', 'bespolezniy', 'qwery', 'epsic', 'gacu', 610, 'dollar.jpg'),
                new Item(123, 'jora', 'bespolezniy', 'qwerty', 'epigc', 'gacu', 612, 'dollar.jpg'),
                new Item(123, 'jora', 'bespolezniy', 'qerty', 'epeic', 'gacu', 611, 'dollar.jpg'),
                new Item(321, 'gg', 'horosh', 'gh', 'topchik', 'fartu', 31000, 'dollar.jpg'),
                new Item(321, 'gg', 'horosh', 'gh', 'topchik', 'fartu', 50100, 'dollar.jpg'),

            ];

        echo json_encode($arr2);
        break;
    
    default:
        echo 'dead';
        break;
}

?>