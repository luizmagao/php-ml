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

$data = [['pulseira', 'colar'], ['desodorante', 'creme']];

$result = $associator->predict($data);
echo $result[0][0][0] . " está associado(a) à pulseira e colar." . PHP_EOL;
echo $result[1][0][0] . " está associado(a) à desodorante e creme." . PHP_EOL;
// var_dump($result);