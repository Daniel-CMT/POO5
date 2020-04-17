<?php

require_once 'Vehicle.php';
require_once 'RechargeableInterface';

class ChargingStation
{
    public function fullCharge(RechargeableInterface $vehicle) 
{
    $vehicle->charge(100);
}

}



