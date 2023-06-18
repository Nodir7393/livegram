<?php

namespace App\Telegram\Conversations;

use Psr\SimpleCache\InvalidArgumentException;
use SergiX44\Nutgram\Conversations\Conversation;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Attributes\ParseMode;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class FeedbackConversation extends Conversation
{
    protected ?string $feedback;
    protected bool $success = true;
    protected int $chat_id;
    protected int $message_id;
    protected string $message;

    /**
     * Feedback commandasi shu funksiyada ishlaydi
     * @param Nutgram $bot
     * @throws InvalidArgumentException
     */
    public function start(Nutgram $bot): void
    {
//        Log::info($this->message);
//        Log::info($this->message_id);
        $message = $bot->sendMessage(message('feedback.ask'), [
            'reply_markup' => InlineKeyboardMarkup::make()
                ->addRow(InlineKeyboardButton::make(
                    text: trans('common.cancel'),
                    callback_data: 'feedback.cancel'
                )),
        ]);

        $this->chat_id = $message->chat->id;
        $this->message_id = $message->message_id;
        $this->message = $message->text;
//        dd($this->message);

        $this->next('getFeedback');

        stats('feedback', 'command');
    }

    /**
     * Feedback ni qabul qilish
     * @param Nutgram $bot
     * @throws InvalidArgumentException
     */
    public function getFeedback(Nutgram $bot): void
    {
//        Log::info($this->message_id);
        //bekor qillish
        $callBack = $bot->isCallbackQuery() && $bot->callbackQuery()->data;

        if ($callBack === 'feedback.cancel') {
            $bot->answerCallbackQuery();
            $this->end();
            stats('feedback.cancelled', 'feedback');

            return;
        }

        //check valid input
        if ($bot->message()?->text === null) {
            $bot->sendMessage(message('feedback.wrong'), [
                'parse_mode' => ParseMode::HTML,
            ]);
            $this->start($bot);

            return;
        }

        //get the input
        $this->feedback = $bot->message()?->text;

        //message ni guruhga yuborish
        $bot->sendMessage(message('feedback.received', [
            'from' => "{$bot->user()?->first_name} {$bot->user()?->last_name}",
            'username' => $bot->user()?->username,
            'user_id' => $bot->userId(),
            'message' => $this->feedback,
        ]), [
            'chat_id' => config('developer.id'),
        ]);

        $this->success = true;

        //feedback ni bekor qilish

        stats('feedback.sent', 'feedback');
        $this->next('test');
    }

    public function closing(Nutgram $bot): void
    {
        $bot->deleteMessage($this->chat_id, $this->message_id);

        if ($this->success) {
            $bot->sendMessage(message('feedback.thanks'));

            return;
        }

        $bot->sendMessage(message('feedback.cancelled'));

    }

    //Feedback ga javob qaytarish
    public function test(Nutgram $bot): void
    {
        $bot->onChannelPost(function (Nutgram $bot) {
            $bot->sendMessage('dfhdhdgh', [
                [
                    'chat_id' => config('developer.id'),
                ]
            ]);
        });
    }


    public function sentBot(Nutgram $bot): void
    {
        $bot->sendMessage('massage', [
            'text' => 'Hi!',
            'chat_id' => 111222333
        ]);
    }


}
