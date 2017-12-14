<?php

require_once __DIR__ . '/../src/Database.php';

try {
    $db = new Database();
} catch (\PDOException $e) {
}

print("Shopping Cart");
require_once __DIR__ . '/../src/Database.php';

try{
    $db->createTableProducts();
    print '<p>';

    $db->insertProduct('book', 66);
    $db->insertProduct('film', 244);
    $db->insertProduct('netflix', 2);
    print '<p>';

} catch (\PDOException $e) {
    print 'error working with PDO database';
}

require_once __DIR__ . '/../src/Database.php';

try{
    $db = new Database();


    $db->createTableProducts();
    print '<p>';

    $products = $db->getAllProducts();

    foreach($products as $product) {
        $db->printProduct($product);
    }

    $db->dropTableProducts();
    print '<hr>';
    print '<p>';

} catch (\PDOException $e) {
    print 'error working with PDO database';
}

