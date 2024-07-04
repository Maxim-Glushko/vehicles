<?php

namespace Vehicles;

abstract class AbstractVehicle implements VehicleInterface {
    protected $name;
    protected $maxPassengers;
    protected $maxCargoWeight;
    protected $fuelConsumptionPer100km;
    protected $maxTripDistance;
    protected $depreciationCoefficient;
    protected $driverCategoryCoefficient;
    protected $driverRatePerKm;

    public function __construct($name, $maxPassengers, $maxCargoWeight, $fuelConsumptionPer100km, $maxTripDistance, $depreciationCoefficient, $driverCategoryCoefficient, $driverRatePerKm) {
        $this->name = $name;
        $this->maxPassengers = $maxPassengers;
        $this->maxCargoWeight = $maxCargoWeight;
        $this->fuelConsumptionPer100km = $fuelConsumptionPer100km;
        $this->maxTripDistance = $maxTripDistance;
        $this->depreciationCoefficient = $depreciationCoefficient;
        $this->driverCategoryCoefficient = $driverCategoryCoefficient;
        $this->driverRatePerKm = $driverRatePerKm;
    }

    public function calculateCost(int $distance, int $passengers, int $cargoWeight): float {
        $driverSalary = $distance * $this->driverRatePerKm * $this->driverCategoryCoefficient;
        $fuelCost = ($distance / 100) * $this->fuelConsumptionPer100km * $this->depreciationCoefficient;
        return $driverSalary + $fuelCost;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getMaxPassengers(): int {
        return $this->maxPassengers;
    }

    public function getMaxCargoWeight(): int {
        return $this->maxCargoWeight;
    }

    public function getMaxTripDistance(): int {
        return $this->maxTripDistance;
    }
}
