<?php

namespace App\Telegram\Commands;

use SergiX44\Nutgram\Nutgram;

class SaveToken
{
    public function __invoke(Nutgram $bot): void
    {
        $token = $bot->message();
        $bot->sendMessage($token);
    }


}