<?php

namespace App\Telegram\Commands;

use App\Telegram\Design\Button\StartKeyboardBuilder;
use App\Telegram\Design\Button\Director;
use Illuminate\Support\Facades\Log;
use SergiX44\Nutgram\Nutgram;

class StartCommand
{
    public function __invoke(Nutgram $bot): void
    {
        $addBotKeyboard = (new Director())->build(new StartKeyboardBuilder());
//        print_r($addBotKeyboard->getBaseType());
        $bot->sendMessage(text: $this->getMessage(), reply_markup: $addBotKeyboard->getBaseType());
    }

    private function getMessage(): string
    {
        return 'Livegram Bot is a builder of feedback bots for Telegram. Read more about it.';
    }
}