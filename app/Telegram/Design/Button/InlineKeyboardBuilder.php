<?php

namespace App\Telegram\Design\Button;

use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class InlineKeyboardBuilder implements Builder
{
    private InlineKeyboard $inlineKeyboard;

    public function addButton(): void
    {
        $button = new Buttons(new InlineKeyboardButton());
        $this->inlineKeyboard->setPart($button->addBot(), $button->myBots());
        $this->inlineKeyboard->setPart($button->ads(), $button->botPro());
        $this->inlineKeyboard->setPart($button->back());
    }

    public function createVehicle(): void
    {
        $this->inlineKeyboard = new InlineKeyboard(new InlineKeyboardMarkup());
    }

    public function getVehicle(): Vehicle
    {
        return $this->inlineKeyboard;
    }
}