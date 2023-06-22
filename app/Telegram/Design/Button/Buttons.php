<?php

namespace App\Telegram\Design\Button;

use SergiX44\Nutgram\Telegram\Types\BaseType;

readonly class Buttons
{
    public function __construct(private BaseType $keyboardButton) {}

    public function addBot(): BaseType
    {
        return $this->execute('Add Bot', 'type:addBot');
    }

    public function myBots(): BaseType
    {
        return $this->execute('My Bots', 'type:myBots');
    }

    public function help(): BaseType
    {
        return $this->execute('Help', 'type:help');
    }

    public function ads(): BaseType
    {
        return $this->execute('Ads', 'type:ads');
    }

    public function botPro(): BaseType
    {
        return $this->execute('Livegram Pro', 'type:botPro');
    }

    public function back(): BaseType
    {
        return $this->execute('« Back', 'type:back');
    }

    private function execute($text, $callback_data): BaseType
    {
        return $this->keyboardButton::make($text, callback_data: $callback_data);
    }
}