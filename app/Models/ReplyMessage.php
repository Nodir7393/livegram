<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReplyMessage extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'client_tel_user_id', 'bot_id', 'message_id'];

    public function bot(): BelongsTo
    {
        return $this->belongsTo(Bot::class);
    }

    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
