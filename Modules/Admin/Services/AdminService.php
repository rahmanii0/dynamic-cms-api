<?php

namespace Modules\Admin\Services;

use App\Services\BaseService;
use Modules\Entity\Services\EntityService;
use Modules\Operator\Services\OperatorService;
use Modules\CustomAttributes\Services\CustomAttributesService;
use Modules\Admin\Repositories\Interfaces\AdminRepositoryInterface;

class AdminService extends BaseService
{
    protected $entityService;
    protected $operatorService;
    protected $customAttributeService;


    public function __construct(
        AdminRepositoryInterface $adminRepository,
        EntityService $entityService,
        OperatorService $operatorService,
        CustomAttributesService $customAttributeService
        ) {
        parent::__construct($adminRepository);
        $this->entityService = $entityService;
        $this->operatorService = $operatorService;
        $this->customAttributeService = $customAttributeService;
    }


    //CRUD For Entities
    public function getAllEntities($perPage = 10)
    {
        return $this->entityService->getAll([], $perPage);
    }

    public function getEntityById($id)
    {
        return $this->entityService->getById($id);
    }

    public function createEntity($data)
    {
        $data['admin_id'] = auth()->user()->id;
        return $this->entityService->create($data);
    }

    public function updateEntity($id, $data)
    {
        return $this->entityService->update($id, $data);
    }

    public function deleteEntity($id)
    {
        return $this->entityService->delete($id);
    }

    //CRUD For Operators
    public function getAllOperators($perPage = 10)
    {
        return $this->operatorService->getAll([], $perPage);
    }

    public function getOperatorById($id)
    {
        return $this->operatorService->getById($id);
    }

    public function createOperator($data)
    {
        $data['admin_id'] = auth()->user()->id;
        return $this->operatorService->create($data);
    }

    public function updateOperator($id, $data)
    {
        return $this->operatorService->update($id, $data);
    }

    public function deleteOperator($id)
    {
        return $this->operatorService->delete($id);
    }

    //CRUD For CustomAttributes
    public function getAllCustomAttributes($perPage = 10)
    {
        return $this->customAttributeService->getAll([], $perPage);
    }

    public function getCustomAtrributeById($id)
    {
        return $this->customAttributeService->getById($id);
    }

    public function createCustomAttribute($data)
    {
        $data['admin_id'] = auth()->user()->id;
        return $this->customAttributeService->create($data);
    }

    public function updateCustomAttribute($id, $data)
    {
        return $this->customAttributeService->update($id, $data);
    }

    public function deleteCustomAttribute($id)
    {
        return $this->customAttributeService->delete($id);
    }

    public function assignCustomAttributeToEntity($entityId, $customAttributeId)
    {
        return $this->customAttributeService->assignCustomAttributeToEntity($entityId, $customAttributeId);
    }

}
