<?php

class PetrolPump
{
    public function putPetrolInAutoMobile(AutoMobile $vehicle)
    {
        if ($vehicle->getType() == 1)
            $this->putPetrolInCar($vehicle);
        elseif ($vehicle->getType() == 2)
            $this->putPetrolInMotorcycle($vehicle);
    }

    public function putPetrolInCar(Car $car)
    {
        $car->setTankCapacity(50);
    }
    public function putPetrolInMotorcycle(Motorcycle $motorcycle)
    {
        $motorcycle->setTankCapacity(20);
    }

}

class AutoMobile
{
    protected $automobileType;
    protected $tankCapacity;
    public function getType()
    {
        return $this->automobileType;
    }
    public function setTankCapacity($tankCapacity)
    {
        $this->tankCapacity = $tankCapacity;
    }
}

class Car extends AutoMobile
{
    protected $automobileType = 1;
}

class Motorcycle extends AutoMobile
{
    protected $automobileType = 2;
}
