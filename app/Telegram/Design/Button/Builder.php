<?php

namespace App\Telegram\Design\Button;

interface Builder
{
    public function createKeyboardMarkup();

    public function addButton();

    public function getKeyboards();

    public function getVehicle(): Vehicle;

    public function createVehicle();
}
