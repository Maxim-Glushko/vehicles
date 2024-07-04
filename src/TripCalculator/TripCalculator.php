<?php

namespace TripCalculator;

use Vehicles\VehicleInterface;

class TripCalculator {
    private $vehicles = [];

    public function addVehicle(VehicleInterface $vehicle) {
        $this->vehicles[] = $vehicle;
    }

    public function calculate(int $passengers, int $cargoWeight, int $distance) {
        $results = [];

        foreach ($this->vehicles as $vehicle) {
            if ($vehicle->getMaxPassengers() >= $passengers && $vehicle->getMaxCargoWeight() >= $cargoWeight && $vehicle->getMaxTripDistance() >= $distance) {
                $cost = $vehicle->calculateCost($distance, $passengers, $cargoWeight);
                $results[] = [
                    'suitable' => 'true',
                    'mark' => '✔',
                    'vehicle' => $vehicle->getName(),
                    'cost' => $cost,
                    'description' => 'is suitable',
                ];
            } else {
                $results[] = [
                    'suitable' => false,
                    'mark' => '✘',
                    'vehicle' => $vehicle->getName(),
                    'cost' => '-',
                    'description' => 'is not suitable; '
                        . 'Max Passengers: ' . $vehicle->getMaxPassengers()
                        . ', Max Cargo Weight: ' . $vehicle->getMaxCargoWeight() . 'kg, '
                        . 'Max Trip Distance: ' . $vehicle->getMaxTripDistance() . 'km'
                ];
            }
        }

        return $results;
    }
}
