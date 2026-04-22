<?php

require_once __DIR__ . "/vendor/autoload.php";

use Phpml\Regression\LeastSquares;

$regression = new LeastSquares();

$samples = [[1], [2], [3], [4]];
$labels = [11, 22, 33, 44];

$regression->train($samples, $labels);

$result = $regression->predict([[5],[7]]);
echo 'Aplicado o padrão 5 teremos: ' . $result[0] . PHP_EOL;
echo 'Aplicado o padrão 7 teremos: ' . $result[1] . PHP_EOL;
// var_dump($result);