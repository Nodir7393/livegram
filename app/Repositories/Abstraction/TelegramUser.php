<?php

namespace App\Repositories\Abstraction;

use Illuminate\Database\Eloquent\Model;

abstract class TelegramUser extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}