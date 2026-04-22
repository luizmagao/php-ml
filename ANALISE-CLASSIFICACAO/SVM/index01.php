<?php

require_once __DIR__ . "/vendor/autoload.php";

use Phpml\Classification\SVC;

$classifier = new SVC();

$samples = [[36,38],[40,42],[44,46],[48,50],[52,54]];
$labels = ['P', 'M', 'M', 'M', 'G'];

$classifier->train($samples, $labels);

$data = [[36]];

$result = $classifier->predict($data);
// echo "O seu tamanho é " . $result[0][0] . PHP_EOL;
var_dump($result);