<?php

namespace App\Repositories\Interfaces;

interface Repository
{
    public function getAll();

    public function getById();

    public function delete();

    public function create();

    public function update();

    public function getFulfilled();
}