<?php
require __DIR__ . '/../vendor/autoload.php';

use App\wcs\Hello;

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader, [
    'cache' => false,
]);

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

echo $twig->render('index.html.twig', [
    'products' => $products,
]);