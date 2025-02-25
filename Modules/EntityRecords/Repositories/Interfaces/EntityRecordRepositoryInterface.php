<?php

namespace Modules\EntityRecords\Repositories\Interfaces;

interface EntityRecordRepositoryInterface
{
    public function createEntityRecord(array $data);
    public function getAllRecordsByEntity(int $entityId);
    public function getAllRecords();
    public function getRecordById(int $recordId);
}
