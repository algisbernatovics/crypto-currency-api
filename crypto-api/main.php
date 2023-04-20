<?php declare(strict_types=1);

use App\App;

require_once 'vendor/autoload.php';

$switchRange = range(1, 3);

do {
    echo 'Enter 1 For Guzzle Client Connection.' . PHP_EOL;
    echo 'Enter 2 For Curl Client Connection.' . PHP_EOL;
    echo 'Enter 3 For Exit:' . PHP_EOL;
    $switch = (int)readline('Your Choice:');
} while (!in_array($switch, $switchRange));

$limit = intval(readline('How much coins you want to see? (limit) :'));


$app = new App($limit, $switch);


foreach ($app->getRecords() as $key => $value) {
    echo 'Record:____' . $key . PHP_EOL
        . 'Name:______' . $value->getName() . PHP_EOL
        . 'Symbol:____' . $value->getSymbol() . PHP_EOL
        . 'USD Price:_' . number_format($value->getUsdPrice(), 2) . PHP_EOL;
    echo PHP_EOL;
}

