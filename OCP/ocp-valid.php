<?php

abstract class AutoMobile
{
    abstract public function getSupportedFuel();
}

abstract class Car extends AutoMobile
{
}

class PetrolCar extends Car
{
    public function getSupportedFuel()
    {
        return 'Petrol';
    }
}

class DieselCar extends Car
{
    public function getSupportedFuel()
    {
        return 'Diesel';
    }
}

class Motorcycle extends AutoMobile
{
    public function getSupportedFuel()
    {
        return 'Petrol';
    }
}

class FuelPump
{
    public function putFuelInAutoMobile(AutoMobile $vehicle)
    {
        $supportedFuel = $vehicle->getSupportedFuel();
        $this->fillFuel($supportedFuel);
    }

    public function fillFuel($fuel)
    {
        if($fuel === 'Petrol') {
            $this->fillPetrol();
        }
        
        if($fuel === 'Diesel') {
            $this->fillDiesel();
        }
    }

    public function fillPetrol()
    {
        //
    }

    public function fillDiesel()
    {
        //
    }

}
