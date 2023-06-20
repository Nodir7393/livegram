<?php


namespace App\Telegram\Commands;

use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class BackCommand
{
    public function __invoke(Nutgram $bot):void
    {
        $bot->sendMessage(text: $this->getMessage(),
            reply_markup: InlineKeyboardMarkup::make()->addRow(
                InlineKeyboardButton::make('« Back', callback_data: 'type:back'),
            ));
    }

    private function getMessage(): string
    {
        return "To connect a bot, you should follow these two steps:

1. Open @BotFather and create a new bot (http://telegra.ph/Create-Bot-Livegram-FAQ-03-29).
2. You'll get a token (e.g. 12345:6789ABCDEF) — just forward or copy-paste it to this chat.

    Warning! Don't connect bots already used by other services like Chatfuel, Manybot, ect.";
    }
}
