<?php

/** @var Nutgram $bot */

use App\Telegram\Commands\AddbotCommand;
use App\Telegram\Commands\FeedbackCommand;
use App\Telegram\Commands\HelpCommand;
use App\Telegram\Commands\MybotsCommand;
use App\Telegram\Commands\StartCommand;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Command\BotCommandScopeAllPrivateChats;

//$bot->setRunningMode(Polling::class);

$bot->onCommand('start', StartCommand::class)
    ->description('The start command!');

$bot->onCommand('feedback', FeedbackCommand::class)
    ->description('The feedback command!');

$bot->onCommand('addbot', AddbotCommand::class)
    ->description('The addbot command!')
    ->scope(new BotCommandScopeAllPrivateChats);

$bot->onCommand('help', HelpCommand::class)
    ->description('The addbot command!')
    ->scope(new BotCommandScopeAllPrivateChats);

$bot->onCommand('mybots', MybotsCommand::class)
    ->description('The mybots command!')
    ->scope(new BotCommandScopeAllPrivateChats);

$bot->onCallbackQueryData('one|two', function (Nutgram $bot) {
    $bot->sendMessage('Nice!');
    $bot->answerCallbackQuery();
});

$bot->onCallbackQueryData('cancel', function (Nutgram $bot) {
    $bot->sendMessage('Canceled!');
    $bot->answerCallbackQuery();
});

$bot->registerMyCommands();
$bot->run();