<?php

namespace Modules\EntityRecords\Services;

use App\Services\BaseService;
use Modules\Entity\Repositories\Interfaces\EntityRepositoryInterface;
use Modules\EntityRecords\Repositories\Interfaces\EntityRecordRepositoryInterface;

class EntityRecordService extends BaseService implements EntityRepositoryInterface
{
    protected $entityRecordRepository;

    public function __construct(EntityRecordRepositoryInterface $entityRecordRepository)
    {
        $this->entityRecordRepository = $entityRecordRepository;
    }

    public function createEntityRecord($data)
    {
        return $this->entityRecordRepository->createEntityRecord($data);
    }

    public function getAllRecordsByEntity($entityId)
    {
        return $this->entityRecordRepository->getAllRecordsByEntity($entityId);
    }

    public function getAllRecords()
    {
        return $this->entityRecordRepository->getAllRecords();
    }

    public function getRecordById($recordId)
    {
        return $this->entityRecordRepository->getRecordById($recordId);
    }
}