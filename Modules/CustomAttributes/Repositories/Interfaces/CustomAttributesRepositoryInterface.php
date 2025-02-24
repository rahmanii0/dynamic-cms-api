<?php 

namespace Modules\CustomAttributes\Repositories\Interfaces;

use App\Repositories\Interfaces\BaseRepositoryInterface;

interface CustomAttributesRepositoryInterface extends BaseRepositoryInterface
{
    public function assignCustomAttributeToEntity($entityId, $customAttributeId);
    
}