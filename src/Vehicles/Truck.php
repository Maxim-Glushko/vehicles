<?php

namespace Vehicles;

class Truck extends AbstractVehicle {
    public function __construct() {
        parent::__construct("Truck", 2, 5000, 30, 1000, 3, 2.0, 7);
    }
}
