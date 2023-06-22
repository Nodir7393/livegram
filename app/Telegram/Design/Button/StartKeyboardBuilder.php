<?php

namespace App\Telegram\Design\Button;

use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class StartKeyboardBuilder implements Builder
{
    private StartKeyboard $inlineKeyboard;

    public function addButton(): void
    {
        $button = new Buttons(new InlineKeyboardButton());
        $this->inlineKeyboard->setPart($button->addBot(), $button->myBots());
        $this->inlineKeyboard->setPart($button->ads(), $button->botPro());
        $this->inlineKeyboard->setPart($button->botPro(1));
    }

    public function createVehicle(): void
    {
        $this->inlineKeyboard = new StartKeyboard(new InlineKeyboardMarkup());
    }

    public function getVehicle(): Vehicle
    {
        return $this->inlineKeyboard;
    }
}