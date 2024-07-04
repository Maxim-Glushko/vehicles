<?php

require_once __DIR__ . '/vendor/autoload.php';

use Vehicles\Bus;
use Vehicles\Truck;
use Vehicles\Bicycle;
use TripCalculator\TripCalculator;

// Отримання аргументів з командного рядка
if ($argc !== 4) {
    echo "Usage: php index.php <кількість пасажирів> <необхідна вага багажу> <довжина маршруту>" . PHP_EOL;
    exit(1);
}

$passengers = (int)$argv[1];
$cargoWeight = (int)$argv[2];
$distance = (int)$argv[3];

$calculator = new TripCalculator();
$calculator->addVehicle(new Bus());
$calculator->addVehicle(new Truck());
$calculator->addVehicle(new Bicycle());

$results = $calculator->calculate($passengers, $cargoWeight, $distance);

if (empty($results)) {
    echo "No suitable vehicles found for the trip." . PHP_EOL;
} else {
    foreach ($results as $result) {
        echo $result['mark'] . ' ' . $result['vehicle'] . ' '
            . ($result['suitable'] ? ($result['cost'] . ' uah') : $result['description'])
            . PHP_EOL;
    }
}
