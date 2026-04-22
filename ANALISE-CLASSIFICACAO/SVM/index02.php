<?php

require_once __DIR__ . "/vendor/autoload.php";

use Phpml\Classification\SVC;

$classifier = new SVC();

$samples = [[36],[38],[40],[42],[44],[46],[48],[50],[52],[54]];
$labels = ['P', 'P', 'M', 'M', 'M', 'M', 'M', 'M', 'G', 'G'];

$classifier->train($samples, $labels);

$data = [[36],[54]];

$result = $classifier->predict($data);
echo "O tamanho 36 é " . $result[0][0][0] . PHP_EOL;
echo "O tamanho 54 é " . $result[1][0][0] . PHP_EOL;
// var_dump($result);