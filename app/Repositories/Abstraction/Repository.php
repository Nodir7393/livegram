<?php

namespace App\Repositories\Abstraction;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class Repository
{
    public function __construct(private readonly Model $model){}

    public function all(): Collection
    {
        return $this->model::all();
    }

    public function find(int $id)
    {
        if (null == $model = $this->model::find($id)) {
            throw new ModelNotFoundException("User not found");
        }

        return $model;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->model->where('id', $id)->update($data);
    }
}