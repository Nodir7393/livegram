<?php

namespace App\Telegram\Design\Button;

use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class BackKeyboardBuilder implements Builder
{
    private BackKeyboard $inlineKeyboard;

    public function addButton(): void
    {
        $button = new Buttons(new InlineKeyboardButton());
        $this->inlineKeyboard->setPart($button->back());
    }

    public function createVehicle(): void
    {
        $this->inlineKeyboard = new BackKeyboard(new InlineKeyboardMarkup());
    }

    public function getVehicle(): Vehicle
    {
        return $this->inlineKeyboard;
    }
}