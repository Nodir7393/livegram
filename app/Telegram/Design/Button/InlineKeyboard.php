<?php

namespace App\Telegram\Design\Button;

use SergiX44\Nutgram\Telegram\Types\BaseType;

class InlineKeyboard extends Vehicle
{
    public function __construct(BaseType $keyboardButton)
    {
        parent::__construct($keyboardButton);
    }
}