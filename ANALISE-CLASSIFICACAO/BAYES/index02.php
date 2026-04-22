<?php

function toDesc($p) {
    switch ($p) {
        case 'C': return 'criança'; break;
        case 'A': return 'adolescente'; break;
        case 'U': return 'adulto'; break;
        case 'I': return 'idoso'; break;
    }
}

require_once __DIR__ . "/vendor/autoload.php";

use Phpml\Classification\NaiveBayes;

$classifier = new NaiveBayes();

$samples = [[1], [8], [11], [12], [14], [17], [18], [40], [50], [65], [90], [85]];
$labels = ['C','C','C','A','A','A','U','U','U','I','I','I'];

$classifier->train($samples, $labels);

$data = [[10],[15],[35],[70]];

$result = $classifier->predict($data);
echo "Uma pessoa de 10 anos é " . toDesc($result[0][0][0]) . PHP_EOL;
echo "Uma pessoa de 15 anos é " . toDesc($result[1][0][0]) . PHP_EOL;
echo "Uma pessoa de 35 anos é " . toDesc($result[2][0][0]) . PHP_EOL;
echo "Uma pessoa de 70 anos é " . toDesc($result[3][0][0]) . PHP_EOL;
// var_dump($result);