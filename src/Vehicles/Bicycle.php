<?php

namespace Vehicles;

class Bicycle extends AbstractVehicle {
    public function __construct() {
        parent::__construct("Bicycle", 1, 20, 0, 50, 1, 1.0, 0);
    }

    public function calculateCost(int $distance, int $passengers, int $cargoWeight): float {
        return 0; // Вартість поїздки на велосипеді можна вважати безкоштовною
    }
}
