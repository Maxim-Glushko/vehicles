<?php

namespace Vehicles;

class Bus extends AbstractVehicle {
    public function __construct() {
        parent::__construct("Bus", 32, 300, 20, 200, 2, 1.5, 5);
    }
}
