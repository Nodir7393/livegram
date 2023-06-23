<?php

namespace App\Telegram\InlineMenu;

use Psr\SimpleCache\InvalidArgumentException;
use SergiX44\Nutgram\Conversations\InlineMenu;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;

class ChooseColorMenu extends InlineMenu
{
    /**
     * @throws InvalidArgumentException
     */
    public function start(Nutgram $bot): void
    {
        $this->menuText('Choose a color:')
            ->addButtonRow(InlineKeyboardButton::make('Red', callback_data: 'red@handleColor'))
            ->addButtonRow(InlineKeyboardButton::make('Green', callback_data: 'green@handleColor'))
            ->addButtonRow(InlineKeyboardButton::make('Yellow', callback_data: 'yellow@handleColor'))
            ->orNext('none')
            ->showMenu();
    }

    /**
     * @throws InvalidArgumentException
     */
    public function handleColor(Nutgram $bot): void
    {
        $color = $bot->callbackQuery()->data;
        $this->menuText("Choosen: $color!")
            ->showMenu();
    }

    /**
     * @throws InvalidArgumentException
     */
    public function none(Nutgram $bot): void
    {
        $bot->sendMessage('Bye!');
        $this->next('none');
    }
}