<?php

namespace App\Telegram\Design\Button;

interface Builder
{
    public function addButton(): void;

    public function getVehicle(): Vehicle;

    public function createVehicle(): void;
}
