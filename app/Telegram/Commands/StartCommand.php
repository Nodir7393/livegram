<?php

namespace App\Telegram\Commands;

use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;
use SergiX44\Nutgram\Telegram\Types\Keyboard\KeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\ReplyKeyboardMarkup;

class StartCommand
{
    public function __invoke(Nutgram $bot): void
    {
        $bot->sendMessage(
            text: 'Livegram Bot is a builder of feedback bots for Telegram. Read more about it.',
            reply_markup: InlineKeyboardMarkup::make()->addRow(
                    InlineKeyboardButton::make('Add Bot', callback_data: 'type:addBot'),
                    InlineKeyboardButton::make('My Bots', callback_data: 'type:myBots'),
                    InlineKeyboardButton::make('Help', callback_data: 'type:help'),
                    InlineKeyboardButton::make('Ads', callback_data: 'type:ads'),
                    InlineKeyboardButton::make('Bot Pro', callback_data: 'type:botPro'),
                )
        );
    }
}