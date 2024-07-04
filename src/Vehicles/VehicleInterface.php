<?php

namespace Vehicles;

interface VehicleInterface {
    public function calculateCost(int $distance, int $passengers, int $cargoWeight): float;
    public function getName(): string;
    public function getMaxPassengers(): int;
    public function getMaxCargoWeight(): int;
    public function getMaxTripDistance(): int;
}
