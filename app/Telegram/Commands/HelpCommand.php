<?php


namespace App\Telegram\Commands;

use App\Telegram\Design\Button\Director;
use App\Telegram\Design\Button\InlineKeyboardBuilder;
use SergiX44\Nutgram\Nutgram;

class HelpCommand
{
    public function __invoke(Nutgram $bot):void
    {
        $inKey = new InlineKeyboardBuilder();
        $newVehicle = (new Director())->build($inKey);
        $bot->sendMessage(text: $this->getMessage(), reply_markup: $newVehicle->getBaseType());
    }

    private function getMessage(): string
    {
        return "To connect a bot, you should follow these two steps:

1. Open @BotFather and create a new bot (http://telegra.ph/Create-Bot-Livegram-FAQ-03-29).
2. You'll get a token (e.g. 12345:6789ABCDEF) — just forward or copy-paste it to this chat.

    Warning! Don't connect bots already used by other services like Chatfuel, Manybot, ect.";
    }
}
