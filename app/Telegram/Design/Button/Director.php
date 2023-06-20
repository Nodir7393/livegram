<?php

namespace App\Telegram\Design\Button;

class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addButton();

        return $builder->getVehicle();
    }
}