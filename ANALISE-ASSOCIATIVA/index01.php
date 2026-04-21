<?php

require_once __DIR__ . "/vendor/autoload.php";

use Phpml\Association\Apriori;

$associator = new Apriori();

$samples = [
    ['camiseta', 'camisa', 'calça'],
    ['tênis', 'sapato', 'bota'],
    ['relógio', 'pulseira', 'colar'],
    ['perfume', 'desodorante', 'creme'],
];

$associator->train($samples, []);

$data = ['perfume', 'creme'];

$result = $associator->predict($data);
echo $result[0][0] . " é associado à " . implode(', ', $data) . PHP_EOL;
// var_dump($result);