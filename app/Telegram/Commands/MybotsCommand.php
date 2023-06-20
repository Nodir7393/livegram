<?php

namespace App\Telegram\Commands;

use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\ReplyKeyboardRemove;
use Throwable;

class MybotsCommand
{
    public function __invoke(Nutgram $bot)
    {
        $bot->sendMessage(
            text: $this->getMessage(),
            reply_markup: $newVehicle->getBaseType());

//        try {
//            $bot->endConversation();
//
//            $bot->sendMessage('Removing keyboard...', [
//                'reply_markup' => ReplyKeyboardRemove::make(true),
//            ])?->delete();
//
//        } catch (Throwable) {
//
//        }
//        stats('cancel', 'command');
    }


    private function getMessage(): string
    {
        return "To connect a bot, you should follow these two steps:

1. Open @BotFather and create a new bot (http://telegra.ph/Create-Bot-Livegram-FAQ-03-29).
2. You'll get a token (e.g. 12345:6789ABCDEF) — just forward or copy-paste it to this chat.

    Warning! Don't connect bots already used by other services like Chatfuel, Manybot, ect.";
    }
}
