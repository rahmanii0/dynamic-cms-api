<?php

namespace App\Repositories\Interfaces;

interface BaseRepositoryInterface
{

    public function getAll(array $relations, int $perPage);
    public function search(array $searchColumns, int $perPage);
    public function getById(int $id);
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
}