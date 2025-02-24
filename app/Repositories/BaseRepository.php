<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll(array $relations = [], int $perPage = 10)
    {
        return $this->model->with($relations)->paginate($perPage);
    }

    public function search(array $searchColumns, int $perPage = 10)
    {
        $query = $this->model->query();

        foreach ($searchColumns as $column) {
            if ($searchValue = request()->query($column)) {
                $query->where($column, 'LIKE', "%$searchValue%");
            }
        }

        return $query->paginate($perPage);
    }

    public function getById(int $id, array $relations = [])
    {
        return $this->model->with($relations)->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data)
    {
        $record = $this->model->findOrFail($id);
        $record->update($data);
        return $record;
    }

    public function delete(int $id)
    {
        return $this->model->destroy($id);
    }
}
