<?php

namespace App\Telegram\Design\Button;

class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->createKeyboardMarkup();
        $builder->addButton();

        return $builder->getVehicle();
    }
}