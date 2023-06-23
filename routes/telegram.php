<?php

/** @var Nutgram $bot */

use App\Telegram\Commands\AddbotCommand;
use App\Telegram\Commands\AdsCommand;
use App\Telegram\Commands\BackCommand;
use App\Telegram\Commands\BotProCommand;
use App\Telegram\Commands\FeedbackCommand;
use App\Telegram\Commands\HelpCommand;
use App\Telegram\Commands\MybotsCommand;
use App\Telegram\Commands\StartCommand;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Command\BotCommandScopeAllPrivateChats;

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


// Callback Query Data

$bot->onCallbackQueryData('type:addBot', AddbotCommand::class);
$bot->onCallbackQueryData('type:myBots', MybotsCommand::class);
$bot->onCallbackQueryData('type:help', HelpCommand::class);
$bot->onCallbackQueryData('type:ads', AdsCommand::class);
$bot->onCallbackQueryData('type:botPro', BotProCommand::class);
$bot->onCallbackQueryData('type:back', BackCommand::class);

$bot->registerMyCommands();
$bot->run();