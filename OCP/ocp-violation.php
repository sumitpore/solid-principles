<?php

abstract class AutoMobile
{
}

abstract class Car extends AutoMobile
{
}

class PetrolCar extends Car
{
}

class DieselCar extends Car
{
}

class Motorcycle extends AutoMobile
{
}

class FuelPump
{
    public function putFuelInAutoMobile(AutoMobile $vehicle)
    {
        if (is_subclass_of($vehicle, PetrolCar::class))
            $this->fillPetrol();
        if (is_subclass_of($vehicle, DieselCar::class))
            $this->fillDiesel();
        elseif (is_subclass_of($vehicle, Motorcycle::class))
            $this->fillPetrol();
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
