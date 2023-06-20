<?php

namespace App\Telegram\Design\Button;

class InlineKeyboardBuilder
{
    private InlineKeyboard $inlineKeyboard;

    public function createKeyboardMarkup()
    {

    }

    public function addButton(): void
    {

    }

    public function createVehicle(): void
    {
        $this->inlineKeyboard = new InlineKeyboard();
    }

    public function getVehicle(): Vehicle
    {
        return $this->inlineKeyboard;
    }
}