<?php 

namespace Modules\CustomAttributes\Repositories;

use App\Repositories\BaseRepository;
use Modules\CustomAttributes\Models\CustomAttributes;
use Modules\CustomAttributes\Repositories\Interfaces\CustomAttributesRepositoryInterface;


class CustomAttributesRepository extends BaseRepository implements CustomAttributesRepositoryInterface
{
    public function __construct(CustomAttributes $customAttributes)
    {
        parent::__construct($customAttributes);
    }

    public function assignCustomAttributeToEntity($entityId, $customAttributeId)
    {
        return $this->model->where('id', $customAttributeId)->update(['entity_id' => $entityId]);
    }
}