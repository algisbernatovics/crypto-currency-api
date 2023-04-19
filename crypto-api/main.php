<?php declare(strict_types=1);

use App\App;

require_once 'vendor/autoload.php';

$limit = intval(readline('How much coins you want to see? (limit) :'));
$app = new App($limit);

foreach ($app->getRecords() as $key => $value) {
    echo 'Record:____' . $key . PHP_EOL
        . 'Name:______' . $value->getName() . PHP_EOL
        . 'Symbol:____' . $value->getSymbol() . PHP_EOL
        . 'USD Price:_' . number_format($value->getUsdPrice(), 2) . PHP_EOL;
    echo PHP_EOL;
}

