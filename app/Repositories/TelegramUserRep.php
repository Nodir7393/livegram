<?php

namespace App\Repositories;

use App\Models\TelegramUser;
use App\Repositories\Interfaces\TelegramUser as TelUser;
use Illuminate\Database\Eloquent\Collection;
use LaravelIdea\Helper\App\Models\_IH_TelegramUser_C;

class TelegramUserRep implements TelUser
{

    public function getAll(): Collection|_IH_TelegramUser_C|array
    {
        return TelegramUser::all();
    }

    public function getById()
    {
        // TODO: Implement getById() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function getFulfilled()
    {
        // TODO: Implement getFulfilled() method.
    }
}