<?php


namespace App\Services;


use App\Repositories\BaseRepository;


abstract class BaseService 
{
    protected $repository;

    public function __construct(BaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll(array $relations = [], int $perPage = 10)
    {
        return $this->repository->getAll($relations, $perPage);
    }

    public function search(array $searchColumns, int $perPage = 10)
    {
        return $this->repository->search($searchColumns, $perPage);
    }

    public function getById(int $id, array $relations = [])
    {
        return $this->repository->getById($id, $relations);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }
}
