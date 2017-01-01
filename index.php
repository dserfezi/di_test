<?php

define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', getcwd());
include 'framework/bootstrap.php';

$store = new \Test\Store\Store(1);
$product = new \Test\Product\Product($store);

echo $product->getStoreManager()->getStore();
