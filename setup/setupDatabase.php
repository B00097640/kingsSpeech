<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Itb\ProductRepository;

$productRepository = new ProductRepository();

$productRepository->dropTable();
$productRepository->createTable();

//$productRepository->deleteAll();

$productRepository->insertProduct('hammer', 9.99);
$productRepository->insertProduct('nail', 0.1);
$productRepository->insertProduct('socket', 0.99);
$productRepository->insertProduct('ladder', 17);
