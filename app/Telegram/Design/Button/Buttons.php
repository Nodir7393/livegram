<?php

namespace App\Telegram\Design\Button;

use App\Telegram\Commands\AddbotCommand;
use App\Telegram\Commands\AdsCommand;
use App\Telegram\Commands\BackCommand;
use App\Telegram\Commands\BotProCommand;
use App\Telegram\Commands\HelpCommand;
use App\Telegram\Commands\MybotsCommand;
use SergiX44\Nutgram\Telegram\Types\BaseType;

readonly class Buttons
{
    public function __construct(private BaseType $keyboardButton) {}

    public function addBot(): BaseType
    {
        return $this->execute('Add Bot', AddbotCommand::class);
    }

    public function myBots(): BaseType
    {
        return $this->execute('My Bots', MybotsCommand::class);
    }

    public function help(): BaseType
    {
        return $this->execute('Help', HelpCommand::class);
    }

    public function ads(): BaseType
    {
        return $this->execute('Ads', AdsCommand::class);
    }

    public function botPro(): BaseType
    {
        return $this->execute('Bot Pro', BotProCommand::class);
    }

    public function back(): BaseType
    {
        return $this->execute('« Back', BackCommand::class);
    }

    private function execute($text, $obj): BaseType
    {
        return $this->keyboardButton::make($text, callback_data: $obj);
    }
}