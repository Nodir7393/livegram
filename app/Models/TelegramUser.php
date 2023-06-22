<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TelegramUser extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tel_user_id'];

    public function bots(): HasMany
    {
        return $this->hasMany(Bot::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
