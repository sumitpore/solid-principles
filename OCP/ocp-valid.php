<?php

class PetrolPump
{
    public function putPetrolInAutoMobile(AutoMobile $vehicle)
    {
        $this->putPetrol();
    }
}

abstract class AutoMobile
{
    protected $tankCapacity;

    public function setTankCapacity($tankCapacity)
    {
        $this->tankCapacity = $tankCapacity;
    }

    abstract public function putPetrol();
}

class Car extends AutoMobile
{
    public function putPetrol() {
        $this->setTankCapacity(50);
    }
}

class Motorcycle extends AutoMobile
{
    public function putPetrol() {
        $this->setTankCapacity(20);
    }
}
