<?php

namespace App\Telegram\Design\Button;

use SergiX44\Nutgram\Telegram\Types\BaseType;

class BackKeyboard extends Vehicle
{
    public function __construct(BaseType $keyboardButton)
    {
        parent::__construct($keyboardButton);
    }
}